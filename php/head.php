<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<style type="text/css">
  @font-face {
    font-family: 'Noto Sans JP Regular';
    font-display: fallback;
    font-style: normal;
    font-weight: 400;
    src: local("Noto Sans CJK JP"),
    url(<?php echo HTML_PATH_THEME . 'font/NotoSansCJKjp-Regular.woff2'; ?>) format('woff2');
  }
  @font-face {
    font-family: 'Noto Sans JP Bold';
    font-display: fallback;
    font-style: normal;
    font-weight: 700;
    src: local("Noto Sans CJK JP"),
    url(<?php echo HTML_PATH_THEME . 'font/NotoSansCJKjp-Bold.woff2'; ?>) format('woff2');
  }
  @font-face {
    font-family: 'Lato Regular';
    font-display: fallback;
    font-style: normal;
    font-weight: 400;
    src: local("Lato"),
    url(<?php echo HTML_PATH_THEME . 'font/Lato-Regular.woff2'; ?>) format('woff2');
  }
  @font-face {
    font-family: 'Lato Bold';
    font-display: fallback;
    font-style: normal;
    font-weight: 700;
    src: local("Lato"),
    url(<?php echo HTML_PATH_THEME . 'font/Lato-Bold.woff2'; ?>) format('woff2');
  }
</style>
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<?php echo Theme::css('css/style.css'); ?>
<?php echo Theme::favicon('img/favicon.ico'); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTML_PATH_THEME_IMG . 'apple-touch-icon.webp'; ?>">
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>

