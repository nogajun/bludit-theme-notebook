<nav class="navbar navbar-expand-md navbar-light sticky-top bg-white border-bottom">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo Theme::siteUrl() ?>">
      <?php
      if ($site->logo()) :
        echo '<img src="' . $site->logo() . '" alt="' . $site->title() . '" width="30">';
      else :
        echo $site->title();
      endif;
      ?>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvas" aria-controls="offcanvas">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title">Menu</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <ul class="navbar-nav me-md-auto">
          <li class="nav-item"><a class="nav-link" href="<?php echo $site->url(); ?>"><?php $language->p('Home') ?></a></li>
          <?php
          if ($staticContent) :
            foreach ($staticContent as $menu) :
              if (!$menu->isChild()) :
                echo '<li class="nav-item"><a class="nav-link" href="' . $menu->permalink() . '">' . $menu->title() . '</a></li>';
              endif;
            endforeach;
          endif;
          ?>
        </ul>

        <!-- Custom search form if the plugin "search" is enabled -->
        <?php if (pluginActivated('pluginSearch')) : ?>
          <form class="d-flex">
            <input id="search-input" class="form-control me-2" type="search" placeholder="<?php $language->p('Search') ?>" aria-label="Search">
            <script>
              function searchNow() {
                var searchURL = "<?php echo Theme::siteUrl(); ?>search/";
                window.open(searchURL + document.getElementById("search-input").value, "_self");
              }
              document.getElementById("search-input").onkeypress = function(e) {
                if (!e) e = window.event;
                var keyCode = e.keyCode || e.which;
                if (keyCode == '13') {
                  searchNow();
                  return false;
                }
              }
            </script>
          </form>
        <?php endif ?>
      </div>
    </div>
  </div>
</nav>