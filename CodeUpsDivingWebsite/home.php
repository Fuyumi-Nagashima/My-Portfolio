<?php get_header(); ?>
<main>
      <section class="layout-home-mv sub-mv" id="js-sub-mv">
        <div class="sub-mv__page-header">
          <h1 class="sub-mv__title">
            <span>blog</span>
          </h1>
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
      <!-- ブログ一覧ページ -->
      <div class="layout-two-column two-column">
        <div class="two-column__inner inner">
            <div class="two-column__flex">
              <div class="two-column__main">
              <h2 class="aside-wrapper__title"><span>最新記事一覧</span></h2>
                <div class="two-column__cards cards cards--2column">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <a href="<?php the_permalink(); ?>" class="cards__item card">
                    <figure class="card__image">
                    <?php 
                    if(has_post_thumbnail()){
                      the_post_thumbnail('full');
                    }else{
                      // 投稿の本文を取得
                      $content = get_the_content();
                      // 本文から最初の画像を抽出
                      preg_match('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $content, $matches);
                      // 画像があれば表示
                      if (!empty($matches)) {
                        echo $matches[0];
                      }
                    }
                    ?>
                    </figure>
                    <div class="card__body">
                      <div class="card__meta">
                        <!-- カテゴリーと投稿日時の表示の追加 -->
                        <?php
                        $cat = get_the_category();
                        if (!empty($cat)) {
                        $cat = $cat[0];
                        echo '<span class="card__category">' . esc_html($cat->name) . '</span>';
                        }
                        ?>
                        <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d') ?></time>
                        <h3 class="card__title"><?php the_title(); ?></h3>
                      </div>
                      <div class="card__text-body">
                        <p class="card__text">
                          <?php echo wp_trim_words(get_the_content(), 50, '…'); ?>
                        </p>
                      </div>
                    </div>
                  </a>
                <?php endwhile; endif; ?>
                </div><!-- two-column__cards cards cards--2column -->
                <div class="two-column__wp-pagenavi" >
                  <?php wp_pagenavi(); ?>
                </div>
              </div><!-- two-column__main -->
              <aside class="two-column__side aside-wrapper">
              <?php get_sidebar(); ?>
              </aside>
        </div><!--two-column__flex-->
      </div>
    </main>
<?php get_footer(); ?>