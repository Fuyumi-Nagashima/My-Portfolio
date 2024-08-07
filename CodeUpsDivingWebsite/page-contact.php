<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
      <section class="layout-page-contact-mv sub-mv">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title">
            <span>contact</span>
          </h2>
        </div>
      </section>
    <!-- パンくず -->
     <div class="breadcrumb">
      <div class="breadcrumb__inner inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
  <!-- コンタクトページ -->
  <div class="layout-page-contact page-contact">
    <div class="page-contact__inner inner">
            <div class="page-contact__form form">
                <?php echo do_shortcode('[contact-form-7 id="99d9962" title="お問い合わせ"]') ?>
            </div>
        </div>
    </div>
  </main>
  <?php get_footer(); ?>
