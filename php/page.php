<div class="container">
  <div class="row my-0 my-md-5">

    <main class="col col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto p-0">
      <article class="entry">
        <!-- Load Bludit Plugins: Page Begin -->
        <?php Theme::plugins('pageBegin'); ?>
        <header class="entry__header">
          <?php if ($page->coverImage()) : ?>
            <figure>
              <picture>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid entry__cover mb-md-5">
              </picture>
            </figure>
          <?php endif ?>
          <h1 class="mt-4 mt-md-5 mx-3 mx-md-0 h2 fw-bold"><?php echo $page->title(); ?></h1>
          <div class="mt-4 mt-md-3 mx-3 mx-md-0 d-inline-flex entry__header_info">
            <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/noimg.png')) ?>" height="32px" width="32px" alt="" class="m-1 rounded-circle">
            <small class="">
              <span><?php echo $page->user('nickname'); ?></span><br>
              <time datetime="<?php echo $page->dateRaw('c') ?>" class="text-muted"><?php echo $page->date(); ?></time>
            </small>
          </div>
        </header>

        <section class="mt-5 mx-3 mx-md-0 entry__content">
          <!-- Full content -->
          <?php echo $page->content(); ?>
        </section>

        <footer class="mt-4 mx-3 mx-md-0 entry__footer">
          <ul class="d-inline-flex list-unstyled">
            <!-- category -->
            <?php if ($page->category()) : ?>
              <li class="border rounded p-1 me-2 entry__categories">
                <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey() ?>" class="text-body text-decoration-none"><?php echo $page->category() ?></a>
              </li>
            <?php endif ?>
            <!-- tags -->
            <?php if (!empty($page->tags(true))) : ?>
              <?php foreach ($page->tags(true) as $tagKey => $tagName) : ?>
                <li class="border rounded p-1 me-2 entry__tags">
                  <a href="<? echo DOMAIN_TAGS . $tagKey; ?>" class="text-body text-decoration-none"><?php echo $tagName; ?></a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>
        </footer>

        <!-- Load Bludit Plugins: Page End -->
        <?php Theme::plugins('pageEnd'); ?>

      </article>
    </main>

  </div>
</div>