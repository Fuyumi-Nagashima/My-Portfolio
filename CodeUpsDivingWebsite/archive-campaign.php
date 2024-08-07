<?php get_header(); ?>
<main>
    <section class="layout-page-campaign-mv sub-mv">
        <div class="sub-mv__page-header">
            <h2 class="sub-mv__title">
                <span>campaign</span>
            </h2>
        </div>
    </section>
    <!-- パンくず -->
    <div class="breadcrumb breadcrumb-404">
        <div class="breadcrumb__inner inner">
            <?php if (function_exists('bcn_display')) {
                bcn_display();
            } ?>
        </div>
    </div>
    <div class="layout-page-campaign page-campaign">
        <div class="page-campaign__inner inner">
            <div class="page-campaign__category-wrap category">
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="category__item is-active" data-filter="all">all</a>
                <?php
                $categories = get_terms(array(
                    'taxonomy' => 'campaign_category',
                    'hide_empty' => false,
                ));

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
            <ul class="page-campaign__cards page-campaign-cards">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <li class="page-campaign__card campaign-list">
                    <div class="campaign-list__link">
                        <figure class="campaign-list__image campaign-list__image--sub-page">
                            <picture>
                                <?php if (has_post_thumbnail()) : ?>
                                    <?php the_post_thumbnail('full'); ?>
                                <?php else : ?>
                                    <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>" alt="NoImage画像">
                                <?php endif; ?>
                            </picture>
                        </figure>
                        <div class="campaign-list__body campaign-list__body--subpage">
                            <span class="campaign-list__category">
                                <?php
                                $categories = get_the_terms(get_the_ID(), 'campaign_category');
                                if ($categories && !is_wp_error($categories)) {
                                    $category_list = [];
                                    foreach ($categories as $category) {
                                        $category_list[] = $category->name;
                                    }
                                    echo implode(', ', $category_list);
                                }
                                ?>
                            </span>
                            <h3 class="campaign-list__title campaign-list__title--big"><?php the_title(); ?></h3>
                            <p class="campaign-list__text campaign-list__text--subpage">全部コミコミ(お一人様)</p>
                            <div class="campaign-list__price">
                                <?php
                                // 1. カスタムフィールドから価格情報を取得
                                $price_group = get_field('campaign_price-group');
                                if ($price_group) {
                                    // 2. 価格情報の各要素を取得し、存在するかどうかをチェック
                                    $price_before = !empty($price_group['price_before']) ? $price_group['price_before'] : '';
                                    $price_after = !empty($price_group['price_after']) ? $price_group['price_after'] : '';
                                     // 3. 'price_before'の値が存在する場合、表示
                                    if ($price_before) {
                                        //$price_beforeの値を<p>タグ内に表示
                                        echo '<p class="campaign-list__number">¥' . number_format((float)$price_before) . '</p>';
                                    }
                                     // 4. 'price_after'の値が存在する場合、表示
                                    if ($price_after) {
                                        //$price_afterの値を<p>タグ内に表示
                                        echo '<p class="campaign-list__discount-number">¥' . number_format((float)$price_after) . '</p>';
                                    }
                                }
                                ?>
                            </div>
                            <div class="campaign-list__information-wrap">
                                <?php
                                $text_group = get_field('campaign_text');
                                if ($text_group) {
                                    $campaign_period = $text_group['campaign-period'];
                                    $start_date = !empty($campaign_period['start_date']) ? $campaign_period['start_date'] : '';
                                    $end_date = !empty($campaign_period['end_date']) ? $campaign_period['end_date'] : '';
                                    $description = !empty($text_group['campaign-description']) ? $text_group['campaign-description'] : '';

                                    if ($description) {
                                        echo '<p class="campaign-list__information-text">' . nl2br(esc_html($description)) . '</p>';
                                    }
                                    if ($start_date && $end_date) {
                                        echo '<p class="campaign-list__deadline">' . esc_html($start_date) . '〜' . esc_html($end_date) . '</p>';
                                    }
                                }
                                ?>
                                <p class="campaign-list__apply-link">ご予約・お問い合わせはコチラ</p>
                                <div class="campaign-list__btn">
                                    <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="btn">
                                        <span>view&nbsp;more</span>
                                        <div class="btn__arrow"></div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <?php endwhile; endif; ?>
            </ul>
            <div class="two-column__wp-pagenavi">
                <?php wp_pagenavi(); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
