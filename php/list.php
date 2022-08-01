<?php include(THEME_DIR_PHP . 'header.php'); ?>

<div class="container-lg">
  <div class="row">
    <div class="col-12 col-xl-10 col-xxl-9 mx-auto">

      <!-- main -->
      <main class="row row-cols-1 my-3">
        <?php if (empty($content)) {
          $language->p('Page not found');
        } ?>
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>

        <?php foreach ($content as $page) : ?>
          <!-- card -->
          <div class="col mb-3 mb-xl-4">
            <article class="card h-100 border-0">
              <div class="row d-flex align-items-stretch g-0">
                <div class="col-md-3">
                  <img class="card-img-list" src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.webp')) ?>" alt="">
                </div>
                <div class="col-md-9">
                  <section class="card-body p-0 p-md-3 pt-3">
                    <h3 class="card-title h5 fw-bold"><a href="<?php echo $page->permalink(); ?>" class="stretched-link"><?php echo $page->title(); ?></a></h3>
                    <p class="card-text">
                      <?php
                      if (mb_strlen(strip_tags($page->contentBreak())) > 116) {
                        echo mb_substr(strip_tags($page->contentBreak()), 0, 117) . '...';
                      } else {
                        echo mb_substr(strip_tags($page->contentBreak()), 0, 120);
                      }
                      ?>
                    </p>
                  </section>
                  <footer class="card-footer border-0  d-inline-flex mt-2 mt-md-0 p-0 px-md-3  bg-white">
                    <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/author.webp')) ?>" alt="Author" width="32px" height="32px" class="rounded-circle me-2">
                    <small class="align-text-bottom">
                      <span class="card-author"><?php echo $page->user('nickname'); ?></span><br>
                      <time datetime="<?php echo $page->dateRaw('c') ?>" class="card-date text-muted"><?php echo $page->date(); ?></time>
                    </small>
                  </footer>
                </div>
              </div>
            </article>
          </div>
        <?php endforeach; ?>
        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
      </main>

      <?php include(THEME_DIR_PHP . 'pagenation.php'); ?>

    </div>
  </div>
</div>