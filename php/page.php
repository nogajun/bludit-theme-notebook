<div class="container">
  <div class="row my-0 my-md-5">

    <main class="col col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto p-0">
      <article class="entry">
        <header class="entry__header">
          <!-- Load Bludit Plugins: Page Begin -->
          <?php Theme::plugins('pageBegin'); ?>
          <?php if ($page->coverImage()) : ?>
            <figure>
              <picture>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid entry__cover mb-md-5">
              </picture>
            </figure>
          <?php endif ?>
          <h1 class="mt-4 mt-md-5 mx-3 mx-md-0 h2 fw-bold"><?php echo $page->title(); ?></h1>
          <div class="row mt-4 mt-md-3 mx-3 mx-md-0 d-flex align-items-end entry__header_info">
            <div class="col-1 me-3 me-md-0">
              <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/noimg.png')) ?>" height="32px" width="32px" alt="<?php echo $page->user('nickname'); ?>" class="rounded-circle">
            </div>
            <div class="col-3 col-md-4">
              <span><?php echo $page->user('nickname'); ?></span><br>
              <time datetime="<?php echo $page->dateRaw('c') ?>" class="text-muted"><?php echo $page->date(); ?></time>
            </div>
            <div class="col">
              <p class="h5 text-muted text-end">
                <i class="bi bi-twitter"></i>
                <i class="bi bi-facebook"></i>
                <i class="bi bi-instagram"></i>
                <i class="bi bi-linkedin"></i>
                <i class="bi bi-mastodon"></i>
                <i class="bi bi-git"></i>
                <i class="bi bi-github"></i>
              </p>
            </div>
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

          <div class="entry__authorbox mt-4">
            <div class="row d-flex align-items-start">
              <div class="col-3 col-md-2">
                <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/noimg.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" width="80px" height="80px" class="rounded-circle">
              </div>
              <div class="col">
                <h5 class="h5 mb-0 fw-bold">Author</h5>
                <p class="h6 mb-3"><?php echo $page->user('firstName') . '  ' . $page->user('lastName'); ?></p>
                <p class="h5">
                  <?php
                  $socialnetwork = [ "twitter", "mastodon", "facebook", "instagram", "linkedin", "github"];
                  foreach ($socialnetwork as $sns){
                    if ($page->user($sns) != ""){
                      echo '<a href="' . $page->user($sns) . '" class="text-muted"><i class="me-2 bi bi-' . $sns . '"></i></a>';
                    }
                  }
                  ?>
                </p>
              </div>
            </div>
          </div>

          <!-- Load Bludit Plugins: Page End -->
          <?php Theme::plugins('pageEnd'); ?>
        </footer>
      </article>
    </main>

  </div>
</div>