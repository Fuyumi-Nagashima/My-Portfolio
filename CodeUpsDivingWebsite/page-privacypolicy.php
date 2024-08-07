<?php get_header(); ?>
<main>
  <section class="layout-sub-mv sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title">
        <span>privacy</span>&nbsp;<span>policy</span>
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
  <!-- プライバシーポリシー -->
  <section class="layout-privacy-policy privacy-policy sub-page">
  <?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
    <div class="privacy-policy__inner inner">
    <?php the_content(); ?>
    </div>
  </section>
  <?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>