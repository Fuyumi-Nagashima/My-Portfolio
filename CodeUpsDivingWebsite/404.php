<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
  <!-- <div class="page-404"> -->
  <!-- パンくず -->
    <div class="breadcrumb breadcrumb--404">
      <div class="breadcrumb__inner inner">
        <?php if (function_exists('bcn_display')) {
          bcn_display();
        } ?>
      </div>
    </div>
  <!-- page-404 -->
    <section class="layout-page-404">
      <div class="page-404__inner inner">
        <h1 class="page-404__title">404</h1>
        <p class="page-404__text">申し訳ありません。<br>お探しのページが見つかりません。</p>
        <div class="page-404__btn">
          <a href="<?php echo esc_url(home_url("/")) ?>" class="btn btn--white">
            <span>page&nbsp;<span class="page-404__btn-text">top</span></span>
            <div class="btn__arrow btn__arrow--green"></div>
          </a>
        </div>
      </div>
    </section>
    <!-- </div> -->
    </main>
  <?php get_footer(); ?>