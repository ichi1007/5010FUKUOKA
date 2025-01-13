<?php
/*
Template Name: Menu Page
*/

get_header(); ?>

<main>
  <div class="menu-page">
    <div class="menu-page-top-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/MenuPageTop.png" alt="">
    </div>
    <ul class="page-list">
      <li><a href="/">ホーム</a></li>
      <li><?php echo get_the_title(); ?></li>
    </ul>
    <h1 class="menu-page-title font-aspal">
      drinkmenu
    </h1>
    <p class="menu-page-subtitle ">表示価格は全て税込価格です。</p>

    <div class="menu">
      <div class="beer">
        <h1 class="menu-subtitle allura-regular">Draft beer</h1>
        <ul>
          <li>・瓶ビール ドライ<span>¥ 800</span></li>
          <li>・瓶ビール ラガー<span>¥ 800</span></li>
          <li>・プレミアム生ビール 熟撰<span>¥ 1,200</span></li>
        </ul>
      </div>

      <div class="wiskey">
        <h1 class="menu-subtitle allura-regular">wiskey</h1>
        <div class="wiskey-list">
          <p>◆シングルモルトウイスキー</p>
          <ul>
            <li>
              <p>・ボウモア　12年</p>
              <p>・ラフロイグ　10年</p>
              <p>・アードベック　10年</p>
              <p>・響ブレンダーチョイス</p>
            </li>
            <li>
              <p>・グレンモーレンジィ</p>
              <p>・白州</p>
              <p>・知多</p>
              <p>・宮城峡</p>
            </li>
          </ul>
          <p class="wiskey-price">¥ 1,800</p>
        </div>

        <div class="wiskey-list">
          <p>◆プレミアムウイスキー</p>
          <ul>
            <li>
              <p>・シーバスリーガル　18年</p>
              <p>・シーバスリーガル　18年</p>
            </li>
            <li>
              <p>・バランタイン　17年</p>
            </li>
          </ul>
          <p class="wiskey-price">¥ 2,500</p>
        </div>

        <div class="wiskey-list">
          <ul>
            <li>
              <p>・山崎　12年</p>
              <p>・響　17年</p>
            </li>
            <li>
              <p>・季(トキ)</p>
            </li>
          </ul>
          <p class="wiskey-price">¥ 3,300</p>
        </div>

        <div class="wiskey-list">
          <ul>
            <li>
              <p>・バランタイン　21年</p>
              <p>・I.W.ハーパー　12年</p>
            </li>
            <li>
              <p>・季(トキ)</p>
            </li>
          </ul>
          <p class="wiskey-price">¥ 4,000</p>
        </div>

        <div class="wiskey-list">
          <ul>
            <li>
              <p>・白州　12年</p>
              <p>・白州　18年</p>
              <p>・山崎　18年</p>
            </li>
            <li>
              <p>・竹鶴　17年</p>
              <p>・響　21年</p>
              <p>・ザ マッカラン エニグマ</p>
            </li>
          </ul>
          <p class="wiskey-price">ASK</p>
        </div>
      </div>

      <div class="shot">
        <h1 class="menu-subtitle allura-regular">shot</h1>
        <ul>
          <li>・アグワ<span>¥ 1,100</span></li>
          <li>・イエガーマイスター<span>¥ 1,100</span></li>
          <li>・クエルボ 1800<span>¥ 1,600</span></li>
          <li>・コカボム<span>¥ 2,000</span></li>
        </ul>
      </div>

      <div class="wine">
        <h1 class="menu-subtitle allura-regular">wine</h1>
        <ul>
          <li>・グラスワイン 赤or白　各種<span>¥ 2,000</span></li>
          <li>・ボトルワイン 赤or白　各種</li>
        </ul>
        <p>※詳細はスタッフまでお問い合わせください</p>
      </div>
    </div>
  </div>
    
  <?php get_footer(); ?>
</main>
