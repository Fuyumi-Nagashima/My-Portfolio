<?php get_header(); ?>
<main>
  <?php
    $cat = get_queried_object();// 現在のタームを取得
    $title = 'Report'; // デフォルトタイトル

    // タームが存在する場合
    if ($cat && !is_wp_error($cat)) {
      // タイトルをターム名に設定
      $title = $cat->name;
    } else {
      // デバッグ用: タームが存在しない場合
      error_log('タームが存在しません');
    }
  ?>
  <section class="layout-page-report-mv sub-mv" id="js-sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title">
        <span><?php echo esc_html($title); ?></span>
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
  <!-- お客様の声 -->
  <div class="layout-page-report page-report">
    <div class="page-report__inner inner">
      <!-- タブ -->
      <div class="page-report__category-wrap category">
        <a href="<?php echo esc_url(get_post_type_archive_link('report')); ?>" class="category__item <?php echo is_post_type_archive('report') ? 'is-active' : ''; ?>" data-filter="all">all</a>
        <?php
        // report_categoryタクソノミーのタームを動的に取得
        $categories = get_terms(array( 
          'taxonomy' => 'report_category', //タクソノミーのすべてのターム（カテゴリー）を取得し、リンクとして表示
          'hide_empty' => false,
        ));

        // 現在のタームを取得
        $current_term = get_queried_object();

        // タームをループしてリンクを生成
        if (!empty($categories) && !is_wp_error($categories)) {
          foreach ($categories as $category) {
            $term_link = get_term_link($category);
            if (!is_wp_error($term_link)) {
              $is_active = ($current_term && $current_term->slug === $category->slug) ? 'is-active' : '';
              echo '<a href="' . esc_url($term_link) . '" class="category__item ' . esc_attr($is_active) . '" data-filter="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
            }
          }
        }
        ?>
      </div>
      <!-- cardの内容 -->
      <ul class="page-report__lists"> 
      <?php 
        if (have_posts()) : 
        while (have_posts()) : the_post(); 
      ?>
      <li class="page-report__list report-list">
        <a href="<?php the_permalink(); ?>" class="report-list__link">
              <div class="report-list__link">
                  <figure class="report-list__image report-list__image--sub-page">
                      <picture>
                          <?php if (has_post_thumbnail()) : ?>
                              <?php the_post_thumbnail('full'); ?>
                          <?php else : ?>
                              <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>"
                                  alt="NoImage画像" loading="lazy">
                          <?php endif; ?>
                      </picture>
                  </figure>
                  <div class="report-list__body report-list__body--subpage">
                      <span class="report-category">
                          <?php $personalInfo = get_field('voice_profile'); if ($personalInfo) : ?>
                              <?php echo esc_html($personalInfo['profile_name']); ?>・<?php echo esc_html($personalInfo['profile_age']); ?>
                          <?php endif; ?>
                      </span>
                      <h3 class="report-list__title "><?php the_title(); ?></h3>
                      <p class="report-list__text report-list__text--subpage">
                          <?php 
                          $text = get_field('voice_text');
                          $text = strip_tags($text);
                          if(mb_strlen($text) > 50) {
                              $content = mb_substr($text, 0, 50);
                              echo $content . '...';
                          } else {
                              echo $text;
                          }
                          ?>
                      </p>
                  </div>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
        </ul> <!-- ULタグの閉じ位置をここに移動 -->
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      
      <!--ページネーション-->
      <div class="page-report__wp-pagenavi" >
        <?php wp_pagenavi(); ?>
      </div>
    </div><!--inner-->
  </div><!--layout-page-voice-->
</main>
<?php get_footer(); ?>
