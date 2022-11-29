<div class="container">
  <footer class="py-1 my-2 py-lg-3 my-lg-4">
    <ul class="nav justify-content-center mb-2">
      <?php
      if ($staticContent) :
        foreach ($staticContent as $menu) :
          if (!$menu->isChild()) :
            echo '<li class="nav-item"><a class="nav-link px-2 text-muted" href="' . $menu->permalink() . '">' . $menu->title() . '</a></li>';
          endif;
        endforeach;
      endif;
      ?>
    </ul>
    <p class="h6 text-center share-button pb-3 mb-3">
      <?php
      $socialnetwork = ["twitter", "mastodon", "facebook", "instagram", "linkedin", "github"];
      foreach ($socialnetwork as $sns) {
        if ($page->user($sns) != "") {
          echo '<a href="' . $page->user($sns) . '" class="share-button-' . $sns . '" rel="me"><i class="me-2 bi bi-' . $sns . '"></i></a>';
        }
      }
      ?>
    </p>
  </footer>
</div>