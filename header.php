<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php if(is_front_page()){ echo 'Home'; } else { wp_title(''); } ?> | <?php bloginfo('name'); ?></title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css?v=<?php echo add_version_string(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hamburger.css?v=<?php echo add_version_string(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/home.css?v=<?php echo add_version_string(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menu.css?v=<?php echo add_version_string(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/activity.css?v=<?php echo add_version_string(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/error.css?v=<?php echo add_version_string(); ?>">
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
        <li><a href="/" class="font-aspal">home</a></li>
        <li><a href="/menu" class="font-aspal">drinkmenu</a></li>
        <li><a href="/activity" class="font-aspal">activity</a></li>
        <li><h3>sns</h3></li>
        <li class="menu-sns">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_icon.svg" alt="Instagram icon">
            <!-- <a href="https://instagram.com/user" class="allura-regular">Owner Yasumoto</a> -->
          </div>
        </li>
        <li class="menu-sns">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_icon.svg" alt="Instagram icon">
            <!-- <a href="https://instagram.com/user" class="allura-regular">Manager Yui</a> -->
          </div>
        </li>
        <li class="menu-sns">
          <div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/Instagram_icon.svg" alt="Instagram icon">
            <!-- <a href="https://instagram.com/user" class="allura-regular">Staff Misaki</a> -->
          </div>
        </li>
        <li class="cash-list">
          <h3 class="zen-antique-soft-regular">ご利用可能クレジットカード一覧</h3>
          <div class="card-list">
            <img src="<?php echo get_template_directory_uri(); ?>/img/MasterCard.svg" alt="MasterCard">
            <img src="<?php echo get_template_directory_uri(); ?>/img/JcbCard.svg" alt="JcbCard">
            <img src="<?php echo get_template_directory_uri(); ?>/img/AmericanExpressCard.svg" alt="AmericanExpressCard">
            <img src="<?php echo get_template_directory_uri(); ?>/img/VisaCard.svg" alt="VisaCard">
          </div>
          <p class="zen-antique-soft-regular">※︎キャッシュレス決済は対応しておりません。</p>
        </li>
      </ul>
    </nav>
  </header>
</body>
</html>