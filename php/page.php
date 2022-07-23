<div class="container">
  <div class="row my-0 my-md-5">

    <main class="col col-md-10 col-lg-8 col-xl-7 col-xxl-6 mx-auto p-0">
      <article class="entry">
        <header class="entry__header">
          <!-- Load Bludit Plugins: Page Begin -->
          <?php Theme::plugins('pageBegin'); ?>
          <!-- cover image -->
          <?php if ($page->coverImage()) : ?>
            <figure>
              <picture>
                <img src="<?php echo $page->coverImage(); ?>" class="img-fluid entry__cover mb-md-5">
              </picture>
            </figure>
          <?php endif ?>
          <!-- page title -->
          <h1 class="mt-4 mt-md-5 mx-3 mx-md-0 h2 fw-bold"><?php echo $page->title(); ?></h1>
          <div class="row mt-4 mt-md-3 mx-3 mx-md-0 d-flex align-items-end entry__header_info">
            <!-- author icon -->
            <div class="col-1 me-3 me-md-0">
              <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/author.png')) ?>" height="32px" width="32px" alt="<?php echo $page->user('nickname'); ?>" class="rounded-circle">
            </div>
            <!-- author data -->
            <div class="col-4">
              <span><?php echo $page->user('nickname'); ?></span><br>
              <time datetime="<?php echo $page->dateRaw('c') ?>" class="text-muted"><?php echo $page->date(); ?></time>
            </div>
            <!-- share button -->
            <div class="col share-button">
              <p class="h5 text-end m-0 p-0 align-bottom">
                <a href="https://twitter.com/share?url=<?php echo $page->permalink(); ?>&text=<?php echo $page->title(); ?>+%7C+<?php echo $site->title(); ?>%3A+" rel="nofollow" target="_blank" class="share-button-twitter"><i class="bi bi-twitter"></i></a>
                <a href="//www.facebook.com/share.php?u=<?php echo $page->permalink(); ?>" rel="nofollow" target="_blank" class="ms-1 ms-md-2 share-button-facebook"><i class="bi bi-facebook"></i></a>
                <a href="web+mastodon://share?text=<?php echo $page->title(); ?>+%7C+<?php echo $site->title(); ?>%3A+<?php echo $page->permalink(); ?>" rel="nofollow" target="_blank" class="ms-1 ms-md-2 share-button-mastodon"><i class="bi bi-mastodon"></i></a>
                <a href="//timeline.line.me/social-plugin/share?url=&text=" target="_blank" rel="nofollow" class="ms-1 ms-md-2 share-button-line"><i class="bi bi-chat-fill"></i></a>
                <a href="//b.hatena.ne.jp/add?mode=confirm&url=<?php echo $page->permalink(); ?>&title=<?php echo $page->title(); ?>+%7C+<?php echo $site->title(); ?>" rel="nofollow" class="ms-1 ms-md-2 share-button-hatena"><i class="bi bi-journal-bookmark-fill"></i></a>
                <a href="//getpocket.com/edit?url=<?php echo $page->permalink(); ?>&title=<?php echo $page->title(); ?>+%7C+<?php echo $site->title(); ?>" rel="nofollow" target="_blank" class="ms-1 ms-md-2 share-button-pocket"><i class="bi bi-bookmark-plus-fill"></i></a>
              </p>
            </div>
          </div>
        </header>

        <!-- full content -->
        <section class="mt-5 mx-3 mx-md-0 entry__content">
          <?php echo $page->content(); ?>
        </section>

        <!-- category and tags -->
        <footer class="mt-4 mx-3 mx-md-0 entry__footer">
          <ul class="d-inline-flex list-unstyled">
            <!-- category -->
            <?php if ($page->category()) : ?>
              <li class="border rounded p-1 me-2 entry__categories">
                <a href="<?php echo DOMAIN_CATEGORIES . $page->categoryKey(); ?>" class="text-body text-decoration-none"><?php echo $page->category(); ?></a>
              </li>
            <?php endif ?>
            <!-- tags -->
            <?php if ($page->tags()) : ?>
              <?php foreach ($page->tags(true) as $tagKey => $tagName) : ?>
                <li class="border rounded p-1 me-2 entry__tags">
                  <a href="<?php echo DOMAIN_TAGS . $tagKey; ?>" class="text-body text-decoration-none"><?php echo $tagName; ?></a>
                </li>
              <?php endforeach; ?>
            <?php endif; ?>
          </ul>

          <div class="entry__authorbox mt-4">
            <div class="row d-flex align-items-start">
              <div class="col-3 col-md-2">
                <img src="<?php echo ($page->user('profilePicture') ? $page->user('profilePicture') : Theme::src('img/author.png')) ?>" alt="<?php echo $page->user('nickname'); ?>" width="80px" height="80px" class="rounded-circle">
              </div>
              <div class="col">
                <h5 class="h5 mb-0 fw-bold"><?php $language->p('Author') ?></h5>
                <p class="h6 mb-3"><?php echo $page->user('firstName') . '  ' . $page->user('lastName'); ?></p>
                <p class="h5 share-button">
                  <?php
                  $socialnetwork = ["twitter", "mastodon", "facebook", "instagram", "linkedin", "github"];
                  foreach ($socialnetwork as $sns) {
                    if ($page->user($sns) != "") {
                      echo '<a href="' . $page->user($sns) . '" class="share-button-' . $sns . '"><i class="me-2 bi bi-' . $sns . '"></i></a>';
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