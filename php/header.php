<header>
  <!-- hero -->
  <div class="py-2 py-md-3 py-xxl-5 text-center shadow header__hero">
    <h1 class="py-2 py-md-3 py-xxl-5 text-white fw-bold"><?php echo $site->title() ?></h1>
  </div>
  <!-- menu -->
  <aside class="container-lg">
    <div class="row pt-3 py-xxl-3 my-xxl-3 main__nav">
      <div class="col-12 col-xl-10 col-xxl-9 mx-auto">
        <nav class="nav nav-justified">
          <?php
          foreach ($categories->db as $key => $fields) {
            if ($fields['list']) {
              echo '<a href="' . DOMAIN_CATEGORIES . $key . '" class="nav-item fw-bold text-nowrap p-2">' . $fields['name'] . '</a>';
            }
          }
          ?>
        </nav>
      </div>
    </div>
  </aside>
</header>
