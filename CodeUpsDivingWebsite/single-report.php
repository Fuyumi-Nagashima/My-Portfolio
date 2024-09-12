<?php get_header();  ?>
<?php
    // 記事のビュー数を更新(ログイン中・クローラーは除外)
    if (!is_user_logged_in() && !is_robots()) {
      setPostViews(get_the_ID());
    }
  ?>
<!-- 下層ページのmv -->
<main>
    <section class="layout-page-report-mv sub-mv"  id="js-sub-mv">
        <div class="sub-mv__page-header">
            <div class="sub-mv__title">
                <span>blog</span>
            </div>
        </div>
    </section>
    <!-- パンくず -->
    <div class="breadcrumb">
        <div class="breadcrumb__inner inner">
            <?php if ( function_exists('bcn_display') ) {
            bcn_display();
            } ?>
        </div>
    </div>
    <!-- 体験レポート詳細ページ -->
    <section class="two-column layout-two-column">
        <div class="two-column__inner inner">
            <div class="two-column__flex">
                <div class="two-column__main">
                    <div class="two-column__article single-body">
                        <?php 
                        if ( have_posts() ) : 
                        while ( have_posts() ) : the_post(); 
                        ?>
                        <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d') ?></time>
                        <h1 class="single-body__title"><?php the_title(); ?></h1>
                        <figure class="single-body__thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail('full'); ?>
                            <?php else : ?>
                                <img src="<?php echo esc_url(get_theme_file_uri('/assets/images/common/noimage.jpg')); ?>"
                                    alt="NoImage画像" loading="lazy">
                                    <?php endif; ?>
                        </figure>
                        <div class="single-body__content">
                        <?php 
                            // voice_textカスタムフィールドを表示
                            $text = get_field('voice_text');
                            echo $text; // 文字数制限なく全文を表示
                            ?>
                        </div>
                        <?php 
                  endwhile; 
                endif; ?>
                    </div><!-- two-column__article single-body -->
                    <?php 
                    $prev = get_previous_post(); // 直前の投稿の情報を取得
                    $prev_url = $prev ? get_permalink($prev->ID) : null; // 直前の投稿のパーマリンク（URL）を取得
                    $next = get_next_post(); // 次の投稿の情報を取得
                    $next_url = $next ? get_permalink($next->ID) : null; // 次の投稿のパーマリンク（URL）を取得
                ?>
                    <div class="two-column__wp-pagenavi wp-pagenavi" role="navigation">
                        <?php if($prev): ?>
                        <a class="previouspostslink" rel="prev" href="<?php echo $prev_url; ?>">前へ</a>
                        <?php endif; ?>

                        <a class="homepostslink" href="<?php echo get_post_type_archive_link('report'); ?>">一覧へ戻る</a>

                        <?php if($next): ?>
                        <a class="nextpostslink" rel="next" href="<?php echo $next_url; ?>">次へ</a>
                        <?php endif; ?>
                    </div>
                </div> <!-- two-column__main -->
                <aside class="two-column__side aside-wrapper">
              <?php get_sidebar(); ?>
              </aside>
            </div>
            <!--flex-->
        </div>
        <!--inner-->
    </section>
</main>
<?php get_footer();  ?>
