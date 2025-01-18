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
      <div class="ReasonableDrink">
        <h1 class="menu-subtitle allura-regular">Reasonable Drink</h1>
        <p class="zen-antique-soft-regular">◆ハイボール</p>
        <ul>
          <li>・焼酎【(芋)三岳 / (麦)二階堂 / (米)白岳しろ】</li>
          <li>・梅酒【ロック / 水割り / ソーダ】</li>
          <li><span>・レモンサワー<p>・JJ</p></span></li>
          <li><span>・スタイルフリー<p>・すらっと(白桃)</p></span></li>
          <li>・カシス【ソーダ / オレンジ / ウーロン】</li>
          <li>・ジン【ライム / パック / トニック】</li>
        </ul>
        <p class="ReasonableDrink-price">ALL ¥ 900</p>
        
        <p class="zen-antique-soft-regular">◆ソフトドリンク</p>
        <div class="ReasonableDrink-list">
          <ul>
            <li>
              <p>・オレンジジュース</p>
              <p>・グレープフルーツジュース</p>
              <p>・パイナップルジュース</p>
              <p>・トマトジュース</p>
              <p>・コカコーラ</p>
            </li>
          </ul>
          <ul>
            <li>
              <p>・ジンジャーエール</p>
              <p>・グレープジュース</p>
              <p>・ウーロン茶</p>
              <p>・緑茶</p>
              <p>・アイスティー</p>
              <p>・自家挽きコーヒー　(アイス or ホット)</p>
            </li>
          </ul>
        </div>
        <p class="ReasonableDrink-price">ALL ¥ 600</p>
      </div>

      <div class="beer">
        <h1 class="menu-subtitle allura-regular">Draft beer</h1>
        <ul>
          <li>・瓶ビール ドライ<span>¥ 900</span></li>
          <li>・瓶ビール ラガー<span>¥ 900</span></li>
          <li>・プレミアム生ビール 熟撰<span>¥ 1,400</span></li>
        </ul>
      </div>

      <div class="wiskey">
        <h1 class="menu-subtitle allura-regular">Wiskey</h1>
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
          <p class="wiskey-price">ALL ¥ 2,000</p>
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
          <p class="wiskey-price">ALL ¥ 3,000</p>
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
          <p class="wiskey-price">ALL ¥ 4,000</p>
        </div>

        <div class="wiskey-list">
          <ul>
            <li>
              <p>・バランタイン　21年</p>
              <p>・I.W.ハーパー　12年</p>
              <p>・白州　12年</p>
              <p>・白州　18年</p>
              <p>・山崎　18年</p>
            </li>
            <li>
              <p>・季(トキ)</p>
              <p>・竹鶴　17年</p>
              <p>・響　21年</p>
              <p>・ザ マッカラン エニグマ</p>
            </li>
          </ul>
          <p class="wiskey-price">ASK</p>
        </div>
      </div>

      <div class="brandy">
        <h1 class="menu-subtitle allura-regular">Brandy</h1>
        <ul>
          <li>・ヘネシーV.S.O.P<span>¥ 3,000</span></li>
          <li>・マーチル コルドン ブルー<span>¥ 3,500</span></li>
          <li>・ヘネシー X.O<span>¥ 4,500</span></li>
        </ul>
      </div>

      <div class="shot">
        <h1 class="menu-subtitle allura-regular">Shot</h1>
        <ul>
          <li>・アグワ<span>¥ 1,200</span></li>
          <li>・イエガーマイスター<span>¥ 1,200</span></li>
          <li>・クエルボ 1800<span>¥ 1,800</span></li>
          <li>・コカボム<span>¥ 2,000</span></li>
        </ul>
      </div>

      <div class="wine">
        <h1 class="menu-subtitle allura-regular">Wine</h1>
        <ul>
          <li>・グラスワイン 赤or白　各種<span>¥ 2,500</span></li>
          <li>・ボトルワイン 赤or白　各種</li>
        </ul>
        <p>※詳細はスタッフまでお問い合わせください</p>
      </div>
    </div>
  </div>
    
  <?php get_footer(); ?>
</main>
