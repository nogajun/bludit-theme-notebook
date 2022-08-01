<!-- hero -->
<div class="py-1 py-md-3 py-xxl-5 text-center shadow header__hero">
  <h1 class="py-1 py-md-3 py-xxl-5 text-white fw-bold"><?php echo $site->title() ?></h1>
</div>

<div class="container-lg">
  <div class="row">
    <div class="col-12 col-xl-10 col-xxl-9 mx-auto">

      <!-- menu -->
      <aside class="pt-3 py-xxl-3 my-xxl-3 main__nav">
        <nav class="nav nav-justified">
          <?php
          foreach ($categories->db as $key => $fields) {
            if ($fields['list']) {
              echo '<a href="' . DOMAIN_CATEGORIES . $key . '" class="nav-item fw-bold text-nowrap p-2">' . $fields['name'] . '</a>';
            }
          }
          ?>
        </nav>
      </aside>

      <!-- card -->
      <main class="row row-cols-1 row-cols-md-2 row-cols-xl-3 my-3">
        <?php if (empty($content)) {
          $language->p('Page not found');
        } ?>
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>

        <?php foreach ($content as $page) : ?>
          <!-- card -->
          <div class="col mb-4 mb-xl-5">
            <article class="card h-100 border-0">
              <img class="card-img-top" src="<?php echo ($page->coverImage() ? $page->coverImage() : Theme::src('img/noimg.webp')) ?>" alt="" width="306px" height="160px">
              <section class="card-body p-0 pt-3">
                <h3 class="card-title h5 fw-bold"><a href="<?php echo $page->permalink(); ?>" class="stretched-link"><?php echo $page->title(); ?></a></h3>
                <p class="card-text text-muted">
                  <?php
                  if (mb_strlen(strip_tags($page->contentBreak())) > 46) {
                    echo mb_substr(strip_tags($page->contentBreak()), 0, 47) . '...';
                  } else {
                    echo mb_substr(strip_tags($page->contentBreak()), 0, 50);
                  }
                  ?>
                </p>
              </section>
              <footer class="card-footer border-0 d-inline-flex mt-2 p-0 bg-white">
                <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/author.webp')) ?>" alt="Author" width="24px" height="24px" class="rounded-circle m-1 me-2">
                <small class="align-text-bottom">
                  <span class="card-author"><?php echo $page->user('nickname'); ?></span><br>
                  <time datetime="<?php echo $page->dateRaw('c') ?>" class="card-date text-muted"><?php echo $page->date(); ?></time>
                </small>
              </footer>
            </article>
          </div>
        <?php endforeach; ?>

        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>
      </main>

      <!-- pagenation -->
      <?php include(THEME_DIR_PHP . 'pagenation.php'); ?>

    </div>
  </div>
</div>