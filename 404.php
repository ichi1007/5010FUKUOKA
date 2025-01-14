  <?php
  get_header();
  ?>
<main>
  
  <div id="primary" class="content-area">
      <main id="main" class="site-main">
          <section class="error-404 not-found">
              <div class="error-container">
                  <div class="error-content">
                      <h1 class="error-title">404</h1>
                      <p class="error-message"><?php esc_html_e('ページが見つかりません', 'your-theme'); ?></p>
                      <p class="error-description"><?php esc_html_e('申し訳ありませんが、お探しのページは見つかりませんでした。', 'your-theme'); ?></p>
                      
                      <a href="<?php echo esc_url(home_url('/')); ?>" class="error-home-link">
                          トップページへ戻る
                      </a>
                  </div>
              </div>
          </section><!-- .error-404 -->
      </main><!-- #main -->
  </div><!-- #primary -->
  
  <?php get_footer(); ?>
</main>