<?php get_header(); ?>
<main>
  <section class="layout-page-voice-mv sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title">
        <span>Voice</span>
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
  <div class="layout-page-voice page-voice">
    <div class="page-voice__inner inner">
      <!-- タブ -->
      <div class="page-voice__category-wrap category">
        <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="category__item is-active" data-filter="all">all</a>
        <?php
        // voice_categoryタクソノミーのタームを動的に取得
        $categories = get_terms(array(
          'taxonomy' => 'voice_category',
          'hide_empty' => false,
        ));

        // タームをループしてリンクを生成
        if (!empty($categories) && !is_wp_error($categories)) {
          foreach ($categories as $category) {
            $term_link = get_term_link($category);
            if (!is_wp_error($term_link)) {
              echo '<a href="' . esc_url($term_link) . '" class="category__item" data-filter="' . esc_attr($category->slug) . '">' . esc_html($category->name) . '</a>';
            }
          }
        }
        ?>
      </div>
      <!-- cardの内容 -->
      <div class="page-voice__cards voice-cards">
        <?php 
        if (have_posts()) : 
          while (have_posts()) : the_post(); 
        ?>
            <article class="voice-cards__item voice-card">
              <div class="voice-card__wrap">
                <div class="voice-card__head voice-card__head--subpage">
                  <p class="voice-card__profile">
                    <?php
                      $personalInfo = get_field('profile');
                      if ($personalInfo) :
                    ?>
                    <?php echo $personalInfo['profile_age']; ?>代(<?php echo $personalInfo['profile_gender']; ?>)
                    <?php endif; ?>
                  </p>
                  <span class="voice-card__category">
                  <?php
                    $taxonomy_terms = get_the_terms(get_the_ID(), 'voice_category');
                    if (!empty($taxonomy_terms)) {
                    foreach ($taxonomy_terms as $taxonomy_term) {
                    echo '<span>' . esc_html($taxonomy_term->name) . '</span>';
                    }
                    }
                  ?>
                  </span>
                  <h2 class="voice-card__title"><?php the_field('title'); ?></h2>
                </div>
                <figure class="voice-card__image color">
                  <?php the_post_thumbnail('full'); ?>
                </figure>
              </div>
              <div class="voice-card__text-body">
                <p class="voice-card__text">
                  <?php
                  $text = get_field('text');
                    if ($text) {
                      $trimmed_text = wp_trim_words($text, 120, '... <a href="' . get_permalink() . '">[...続きを読む]</a>');
                      echo $trimmed_text;
                    }
                  ?>
                </p>
              </div>
            </article>
        <?php 
          endwhile; 
        endif; ?>
      </div>
      <!--ページネーション-->
      <div class="two-column__wp-pagenavi" >
        <?php wp_pagenavi(); ?>
      </div>
    </div><!--inner-->
  </div><!--layout-page-voice-->
</main>
<?php get_footer(); ?>
