<?php get_header(); ?>
<?php
$visa = esc_url(home_url('/visa/'));
$blog = esc_url(home_url('/blog/'));
$report = esc_url(home_url('/report/'));
$faq = esc_url(home_url('/faq/'));
$contact = esc_url(home_url('/contact/'));
$terms_of_service = esc_url(home_url('/terms-of-service/'));
$privacy_policy = esc_url(home_url('/privacypolicy/'));
$country = esc_url(home_url("/country"));
?>
<main>
  <div class="fv" id="js-fv">
    <div class=" fv__inner">
      <div class="swiper fv__swiper js-fv__swiper">
        <div class="swiper-wrapper fv__swiper-wrapper">
          <?php
          // ACFからPC用画像とSP用画像を取得
          $pc_images = get_field('mv_img_pc');
          $sp_images = get_field('mv_img_sp');
          // 画像が存在する場合、ループで表示
          if ($pc_images && $sp_images) :
            for ($i = 1; $i <= 5; $i++) :
              $pc_image = $pc_images["mv_pc_0$i"];
              $sp_image = $sp_images["mv_sp_0$i"];
              if ($pc_image && $sp_image) :
          ?>
          <div class="swiper-slide">
            <div class="fv__swiper-slide">
              <picture>
                <source srcset="<?php echo esc_url($sp_image['sizes']['medium_large']); ?>" media="(max-width:767px)" />
                <img src="<?php echo esc_url($pc_image['sizes']['large']); ?>"
                  alt="<?php echo esc_attr($pc_image['alt']); ?>" />
              </picture>
            </div>

          </div>
          <?php
              endif;
            endfor;
          endif;
          ?>
        </div>
        <div class="fv__title-wrap">
          <p class="fv__title-small">その挑戦が<br>夢へ繋がる。</p>
        </div>
        <div class="fv__title-bottom">
          <p class="fv__title-big">dream&nbsp;quest&nbsp;for&nbsp;challengers</p>
        </div>
      </div>
    </div>
  </div>
  <!-- introduction -->
  <section class="layout-introduction introduction ">
    <div class="introduction__inner inner">
      <div class="introduction__logo js-fade">
        <picture>
          <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.webp" type="image/webp">
          <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.png" alt="海外留学のDream Quest">
        </picture>
      </div>
      <h2 class="introduction__lead js-fade">海外留学のDream Quest</h2>
      <div class=" introduction__text-wrap js-fade">
        <p class=" introduction__text">Dream Questは、あなたの夢探しの旅、<br>夢を追い求める旅をサポートします。</p>
        <p class="introduction__text">独自プログラムと豊富なネットワークを活用し、<br>一度きりの人生で最高の挑戦となる<br class="u-mobile">海外留学を実現します。
        </p>
        <p class="introduction__text">あなたの成長に繋がる貴重な経験を提供し、<br>安心のサポート体制で留学を全力で応援します。<br>Dream
          Questで、夢を現実にする第一歩を<br class="u-mobile">踏み出しましょう。</p>
      </div>
      <div class="introduction__image-wrap js-fade">
        <figure class="introduction__image">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/introduction-image.webp"
              type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/introduction-image.jpg"
              alt="オペラハウスとハーバーブリッジ">
          </picture>
        </figure>
        <div class="introduction__marquee-area">
          <p class="introduction__marquee-text">dream&nbsp;quest&nbsp;for&nbsp;challengers</p>
        </div>
      </div>
    </div>
  </section>
  <!-- 留学する国から選ぶセクション -->
  <section class="layout-country country js-fade">
    <div class="country__inner inner">
      <div class="country__section-title section-title">
        <p class="section-title__primary">which&nbsp;country?</p>
        <h2 class="section-title__sub">留学する国から選ぶ</h2>
      </div>
      <!-- ここからギャラリー -->
      <div class="country__gallery gallery">
        <div class="gallery__inner">
          <ul class="gallery__list gallery-list">
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#australia">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_aus.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_aus.jpg"
                    alt="船からシドニーのオペラハウスの全体像を見た景色">
                </picture>
                <p class="gallery-list__country-name">オーストラリア<span>australia</span></p>
              </a>
            </li>
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#canada">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_can.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_can.jpg"
                    alt="カナダバンクーバーにあるエメラルドグリーンの湖が美しいバンフ国立公園の様子">
                </picture>
                <p class="gallery-list__country-name">カナダ<span>canada</span></p>
              </a>
            </li>
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#new-zealand">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_nz.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_nz.jpg"
                    alt="遠めから眺めたオークランドの街並み">
                </picture>
                <p class="gallery-list__country-name">ニュージーランド<span>new&nbsp;zealand</span></p>
              </a>
            </li>
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#usa">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_usa.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_usa.jpg"
                    alt="高層ビルが多数立ち並ぶアメリカの街並み">
                </picture>
                <p class="gallery-list__country-name">アメリカ<span>america</span></p>
              </a>
            </li>
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#ireland">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_ire.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_ire.jpg"
                    alt="高層ビルが多数立ち並ぶアメリカの街並み">
                </picture>
                <p class="gallery-list__country-name">アイルランド<span>ireland</span></p>
              </a>
            </li>
            <li class="gallery-list__item">
              <a href="<?php echo get_permalink(get_page_by_path('country')); ?>#uk">
                <picture>
                  <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_uk.webp"
                    type="image/webp">
                  <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_uk.jpg"
                    alt="車やバスが走るレンガの建物に囲まれたイギリスの街並み">
                </picture>
                <p class="gallery-list__country-name">イギリス<span>United&nbsp;Kingdom</span></p>
              </a>
            </li>
          </ul>
        </div><!-- gallery__inner -->
      </div><!-- gallery -->
    </div>
    <div class="country__btn">
      <a href="<?php echo $country; ?>" class="btn">view&nbsp;more </a>
    </div>
  </section>
  <!-- 留学する目的(visaタイプ)から選ぶセクション -->
  <section class="layout-visa visa js-fade">
    <div class="visa__inner inner">
      <div class="visa__section-title section-title">
        <p class="section-title__primary">what&nbsp;purpose?</p>
        <h2 class="section-title__sub">留学する目的で選ぶ</h2>
      </div>
      <div class="visa__cards visa-cards">
        <div class="visa-cards__card visa-card">
          <figure class="visa-card__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/studying-abroad.webp"
                type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/studying-abroad.jpg"
                alt="外国人と2人の日本人女性がディスカッションをしている">
            </picture>
            <p class="visa-card__image-title">studying&nbsp;abroad</p>
          </figure>

          <div class="visa-card__text-area">
            <h3 class="visa-card__title">語学留学</h3>
            <p class="visa-card__text">語学学校で語学を総合的に学びながら、生活の中で実践。ビジネス英語コース、各種試験対策コース、進学準備コースなど目的別コースも。</p>
          </div>
        </div>
        <div class="visa__card visa-card">
          <figure class="visa-card__image">
            <picture>
              <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/working-holiday.webp"
                type="image/webp">
              <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/working-holiday.jpg"
                alt="カフェで女性が働いている">
            </picture>
            <p class="visa-card__image-title">working&nbsp;holiday</p>
          </figure>

          <div class="visa-card__text-area">
            <h3 class="visa-card__title">ワーキングホリデー</h3>
            <p class="visa-card__text">
              海外で1～2年間、「暮らす」「学ぶ」「働く」を同時に楽しめるワーキングホリデー。学校に通いながらアルバイトしたり、ボランティアやスポーツや旅行を堪能したりと、留学とは違う自由でアクティブな海外生活を楽しめます。
            </p>
          </div>
        </div>
      </div>
      <div class="visa__btn">
        <a href="<?php echo $visa; ?>" class="btn">view&nbsp;more </a>
      </div>
    </div>
  </section>
  <!-- Blogセクション -->
  <section class="layout-blog blog js-fade">
    <div class="blog__inner inner">
      <div class="blog__section-title section-title">
        <p class="section-title__primary">blog</p>
        <h2 class="section-title__sub">留学ブログ</h2>
      </div>
      <div class="blog__cards cards">
        <?php
        $args = array(
          'post_type'      => 'post', // 通常の投稿タイプを指定
          'orderby'        => 'date', // 日付で並べ替え
          'order'          => 'DESC', // 降順で並べ替え（最新の投稿が最初）
          'posts_per_page' => 3       // 最新の投稿3件を取得
        );
        $the_query = new WP_Query($args);
        ?>
        <?php if ($the_query->have_posts()): while ($the_query->have_posts()): $the_query->the_post(); ?>
        <a href="<?php the_permalink(); ?>" class="cards__item card">
          <figure class="card__image">
            <?php
                if (has_post_thumbnail()) {
                  the_post_thumbnail('full');
                } else {
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
          <?php
              $cat = get_the_category();
              $cat = $cat[0];
              ?>
          <div class="card__body">
            <div class="card__meta">
              <span class="card__category"><?php echo $cat->name; ?></span>
              <time class="card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
            </div>
            <div class="card__text-body">
              <h3 class="card__title"><?php the_title(); ?></h3>
              <p class="card__text">
                <?php echo wp_trim_words(get_the_content(), 60, '…'); ?>
              </p>
            </div>
          </div>
        </a>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="blog__btn">
        <a href="<?php echo $blog; ?>" class="btn">view&nbsp;more </a>
      </div>
    </div>
  </section>
  <!-- 留学体験レポートセクション(voice/report) -->
  <section class="layout-report report js-fade">
    <div class="report__inner">
      <div class="report__section-title section-title">
        <p class="section-title__primary">voice</p>
        <h2 class="section-title__sub">留学体験レポート</h2>
      </div>
      <!-- ボタン -->
      <div class="report__btn-wrap">
        <div class="swiper-button-prev report__prev js-report-arrow"></div>
        <div class="swiper-button-next report__next js-report-arrow"></div>
      </div>
      <!-- スライド-->
      <div class="report__swiper report-swiper">
        <div class="swiper js-report-swiper report-swiper__contents">
          <ul class="swiper-wrapper report-swiper__wrapper">
            <?php
            // クエリの設定
            $args = array(
              'post_type' => 'report', // カスタム投稿タイプ「report」
              'orderby' => 'date', // 日付でソート
              'order' => 'DESC',  // 降順（新しい順）
              'posts_per_page' => -1 // すべての投稿を取得する場合は「-1」
            );
            $the_query = new WP_Query($args); // WP_Queryオブジェクトの生成
            ?>
            <?php if ($the_query->have_posts()): //投稿が存在する場合
            ?>
            <?php while ($the_query->have_posts()): $the_query->the_post();  // 投稿ループ
              ?>
            <li class="swiper-slide report-swiper__slide page-campaign__card report-list">
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
                      <?php $personalInfo = get_field('voice_profile');
                          if ($personalInfo) : ?>
                      <?php echo esc_html($personalInfo['profile_name']); ?>・<?php echo esc_html($personalInfo['profile_age']); ?>

                      <?php endif; ?>
                    </span>
                    <h3 class="report-list__title "><?php the_title(); ?></h3>
                    <p class="report-list__text report-list__text--subpage">
                      <?php
                          $text = get_field('voice_text');
                          $text = strip_tags($text);
                          if (mb_strlen($text) > 50) {
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
          </ul>
          <!-- view more ボタン -->
          <div class="report__btn">
            <a href="<?php echo get_post_type_archive_link('report'); ?>" class="btn">
              <span>view&nbsp;more</span>
              <div class="btn__arrow"></div>
            </a>
          </div>
          <?php else: ?>
          <div class="report__no-posts no-posts">
            <p class="no-posts__text">投稿がありません。</p>
          </div>
          <?php endif;
            wp_reset_postdata(); ?>
        </div>
      </div>
    </div>
  </section>
  <!-- office セクション -->
  <section class="layout-office office js-fade">
    <div class="office__inner inner">
      <div class="office__section-title section-title">
        <p class="section-title__primary">office</p>
        <h2 class="section-title__sub">オフィス紹介</h2>
      </div>
      <div class="office__wrap">
        <figure class="office__image-area">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/office.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/office.jpg" alt="テーブルとイスが置かれたオフィス">
          </picture>
        </figure>
        <div class="office__table office-table">
          <div class="office-table__content">
            <h3 class="office-table__head">東京（本社）</h3>
            <dl class="office-table__item-wrap">
              <div class="office-table__item">
                <dt class="office-table__course">〒151-0051 東京都渋谷区千駄ヶ谷</dt>
                <dd class="office-table__price"><a href="tel:065-652-1234">065-652-1234</a></dd>
              </div>
            </dl>
          </div>
          <div class="office-table__content">
            <h3 class="office-table__head">大阪</h3>
            <dl class="office-table__item-wrap">
              <div class="office-table__item">
                <dt class="office-table__course">〒530-0001 大阪府大阪市北区梅田2-5-8</dt>
                <dd class="office-table__price"><a href="tel:065-652-5678">065-652-5678</a></dd>
              </div>
            </dl>
          </div>
          <div class="office-table__content">
            <h3 class="office-table__head">名古屋</h3>
            <dl class="office-table__item-wrap">
              <div class="office-table__item">
                <dt class="office-table__course">〒530-0001 愛知県名古屋市中村区平池町5</dt>
                <dd class="office-table__price"><a href="tel:065-652-4567">065-652-4567</a></dd>
              </div>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- 無料カウンセリング誘導セクション -->
  <div class="layout-contact contact js-fade">
    <div class="contact__image">
      <div class="contact__text-area">
        <h2 class="contact__title">無料カウンセリング</h2>
        <p class="contact__text">Dream Questでは<br class="u-mobile">【無料相談】を行っています！<br>まずはお問い合わせフォームより<br
            class="u-mobile">どんなこともお気軽にご相談ください！</p>
        <div class="contact__btn">
          <a href="<?php echo $contact; ?>" class="contact-button"><span>お問い合わせ</span></a>
        </div>
      </div>
    </div>
    <p class="contact__lead">dream&nbsp;quest&nbsp;for&nbsp;you</p>
  </div>
</main>
<!-- 新しいローディング画面 -->
<div id="loading-screen">
  <div class="plane-icon" id="js-plane-icon">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-airplane-image.webp"
        type="image/webp">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-airplane-image.png"
        alt="ローディング画面で下から上に動く飛行機" decoding="async" loading="eager">
    </picture>
  </div>
  <div class="opening__logo" id="js-opening__logo">
    <picture>
      <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.webp" type="image/webp">
      <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.png" alt="海外留学のDream Quest"
        decoding="async" loading="eager">
    </picture>
  </div>
</div>
<?php get_footer(); ?>