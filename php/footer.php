<div class="container">
  <footer class="py-1 my-2 py-lg-3 my-lg-4">
    <ul class="nav justify-content-center pb-3 mb-3">
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
  </footer>
</div>