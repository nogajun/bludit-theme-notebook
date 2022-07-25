<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="generator" content="Bludit">
<link rel="preconnect dns-prefetch" href="//www.googletagmanager.com">
<link rel="preconnect dns-prefetch" href="//www.google-analytics.com">
<link rel="preconnect dns-prefetch" href="//ajax.googleapis.com">
<link rel="preconnect dns-prefetch" href="//cdnjs.cloudflare.com">
<link rel="preconnect dns-prefetch" href="//pagead2.googlesyndication.com">
<link rel="preconnect dns-prefetch" href="//googleads.g.doubleclick.net">
<link rel="preconnect dns-prefetch" href="//tpc.googlesyndication.com">
<link rel="preconnect dns-prefetch" href="//www.gstatic.com">
<link rel="preconnect dns-prefetch" href="//cse.google.com">
<link rel="preconnect dns-prefetch" href="//fonts.gstatic.com">
<link rel="preconnect dns-prefetch" href="//fonts.googleapis.com">
<link rel="preconnect dns-prefetch" href="//cdn.syndication.twimg.com">
<link rel="preconnect dns-prefetch" href="//cdn.jsdelivr.net">
<link rel="preconnect dns-prefetch" href="//images-fe.ssl-images-amazon.com">
<link rel="preconnect dns-prefetch" href="//completion.amazon.com">
<link rel="preconnect dns-prefetch" href="//m.media-amazon.com">
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//ajax.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
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
<!--
<link rel="preload" as="style" href="//cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" onload="this.rel='stylesheet'">
<link rel="preload" as="style" href="//cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" onload="this.rel='stylesheet'">
-->
<link rel="preload" as="style" href="<?php echo DOMAIN_THEME_CSS . 'bootstrap.min.css'; ?>" onload="this.rel='stylesheet'">
<link rel="preload" as="style" href="<?php echo DOMAIN_THEME_CSS . 'bootstrap-icons.css'; ?>" onload="this.rel='stylesheet'">
<link rel="preload" as="style" href="<?php echo DOMAIN_THEME_CSS . 'style.css'; ?>" onload="this.rel='stylesheet'">
<?php echo Theme::favicon('img/favicon.ico'); ?>
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo HTML_PATH_THEME_IMG . 'apple-touch-icon.webp'; ?>">
<!-- Load Bludit Plugins: Site head -->
<?php echo Theme::metaTags('title'); ?>
<?php echo Theme::metaTags('description'); ?>
<?php Theme::plugins('siteHead'); ?>
