<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>5010FUKUOKA</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamburger.css">
  <script src="<?php echo get_template_directory_uri(); ?>/js/hamburger.js"></script>
  <?php wp_head(); ?>
</head>

<body>
  <header>
    <div>
      <a href="/">
        <img src="<?php echo get_template_directory_uri(); ?>/img/5010FUKUOKA_logo.svg" alt="">
      </a>
      <button id="hamburger-btn" class="hamburger-btn" type="button">
        <img class="menu-open" src="<?php echo get_template_directory_uri(); ?>/img/hamburger_open.svg" alt="メニューを開く">
        <img class="menu-close" src="<?php echo get_template_directory_uri(); ?>/img/hamburger_close.svg" alt="メニューを閉じる">
      </button>
    </div>
    <nav id="hamburger-menu" class="hamburger-menu">
      <ul>
        <li><a href="/">HOME</a></li>
        <li><a href="/about">ABOUT</a></li>
        <li><a href="/news">NEWS</a></li>
        <li><a href="/contact">CONTACT</a></li>
      </ul>
    </nav>
  </header>
</body>
</html>