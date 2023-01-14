<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title><?php wp_title(); ?></title>
    <meta name="description" content="ページの説明" />
    <meta name="format-detection" content="telephone=no" />

    <link rel="icon" href="" />
    <link rel="icon" href="" type="image/svg+xml" />
    <link rel="apple-touch-icon" href="" />
    
    <meta property="og:site_name" content="サイト名" />
    <meta property="og:url" content="URL" />
    <meta property="og:type" content="website or article" />
    <meta property="og:title" content="ページのタイトル" />
    <meta property="og:description" content="ページの説明" />
    <meta property="og:image" content="URL" />
    <meta property="og:locale" content="ja_JP" />
    <meta name="twitter:card" content="summary_large_image or summary" />
    <meta name="twitter:description" content="ページの説明" />
    <meta name="twitter:image:src" content="URL" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css" />
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.min.js" defer></script>
    <?php wp_head(); ?>
  </head>