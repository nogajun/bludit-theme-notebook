<!doctype html>
<html lang="<?php echo Theme::lang() ?>">

<head>
  <?php include(THEME_DIR_PHP . 'head.php'); ?>
</head>

<body>
  <!-- Load Bludit Plugins: Site Body Begin -->
  <?php Theme::plugins('siteBodyBegin'); ?>

  <!-- header -->
  <?php include(THEME_DIR_PHP . 'header.php'); ?>

  <?php
  switch ($WHERE_AM_I) {
    case 'page':
      include(THEME_DIR_PHP . 'page.php');
      break;
    case 'tag':
      include(THEME_DIR_PHP . 'list.php');
      break;
    case 'category':
      include(THEME_DIR_PHP . 'list.php');
      break;
    default:
      include(THEME_DIR_PHP . 'home.php');
  }
  ?>

  <!-- footer -->
  <?php include(THEME_DIR_PHP . 'footer.php'); ?>

  <script defer src="<?php echo HTML_PATH_THEME_JS . 'bootstrap.bundle.min.js'; ?>

  <!-- Load Bludit Plugins: Site Body End -->
  <?php Theme::plugins('siteBodyEnd'); ?>
</body>

</html>