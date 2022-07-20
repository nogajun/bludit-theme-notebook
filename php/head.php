<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preload" as="font" href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;700&display=swap" rel="stylesheet">
<?php echo Theme::css('css/bootstrap.min.css'); ?>
<?php echo Theme::css('css/style.css'); ?>
<?php echo Theme::favicon('img/favicon.ico'); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo THEME_DIR . 'img/apple-touch-icon.png'; ?>">
<link rel="mask-icon" href="<?php echo THEME_DIR . 'img//safari-pinned-tab.svg'; ?>" color="#5bbad5">
<meta name="theme-color" content="#ffffff">
<!-- Load Bludit Plugins: Site head -->
<?php Theme::plugins('siteHead'); ?>
