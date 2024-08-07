<?php get_header(); ?>

<main>
  <!-- 下層ページのmv -->
  <section class="layout-page-price-mv sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title">
        <span>price</span>
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

  <!-- 料金一覧ページ -->
  <div class="layout-page-price page-price">
    <div class="page-price__inner inner">
      <div class="page-price__sub-price-list sub-price-list">
        <?php
          // カスタムフィールドからプラン情報を取得
          $plans = [
            1 => [
              'title' => SCF::get('plan_1'),
              'courses' => SCF::get('course-1')
            ],
            2 => [
              'title' => SCF::get('plan_2'),
              'courses' => SCF::get('course-2')
            ],
            3 => [
              'title' => SCF::get('plan_3'),
              'courses' => SCF::get('course-3')
            ],
            4 => [
              'title' => SCF::get('plan_4'),
              'courses' => SCF::get('course-4')
            ],
          ];

          foreach ($plans as $plan_id => $plan) :
            if  (!empty($plan['title']) && !empty($plan['courses'])):
        ?>
        <div class="sub-price-list__container">
          <div class="sub-price-list__title-wrap">
            <h2 class="sub-price-list__title"><span><?php echo esc_html($plan['title']); ?></span></h2>
          </div>
          <div class="sub-price-list__items">
            <?php foreach ($plan['courses'] as $course) : ?>
            <div class="sub-price-list__item">
              <p class="sub-price-list__course"><?php echo esc_html($course['course_' . $plan_id]); ?></p>
              <p class="sub-price-list__price">&yen;<?php echo esc_html($course['price_' . $plan_id]); ?></p>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <?php endif; endforeach; ?>
      </div><!-- sub-price-list -->
    </div><!-- inner -->
  </div><!-- layout-page-price -->
</main>

<?php get_footer(); ?>
