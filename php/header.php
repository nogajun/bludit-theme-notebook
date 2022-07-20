<header>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-light sticky-top bg-white border-bottom">
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
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="<?php echo $site->url(); ?>">Home</a></li>
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
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
</header>