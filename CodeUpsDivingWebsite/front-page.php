<?php get_header(); ?>
<?php 
  $campaign = esc_url( home_url('/campaign/'));
  $aboutus = esc_url( home_url('/aboutus/'));
  $information = esc_url( home_url('/information/'));
  $blog = esc_url( home_url('/blog/'));
  $voice = esc_url( home_url('/voice/'));
  $price = esc_url( home_url('/price/'));
  $faq = esc_url( home_url('/faq/'));
  $contact = esc_url( home_url('/contact/'));
  ?>
<main>
    <div class="fv" id="js-fv">
        <div class="fv__inner">
            <div class="swiper fv__swiper js-fv__swiper">
                <div class="swiper-wrapper fv__swiper-wrapper">
                    <?php 
                // ACFからPC用画像とSP用画像を取得
                $pc_images = get_field('mv_img_pc');
                $sp_images = get_field('mv_img_sp');

                // 画像が存在する場合、ループで表示
                if ($pc_images && $sp_images) :
                  for ($i = 1; $i <= 4; $i++) : 
                    $pc_image = $pc_images["mv_pc_0$i"];
                    $sp_image = $sp_images["mv_sp_0$i"];
                    if ($pc_image && $sp_image) :
                ?>
                    <div class="swiper-slide">
                        <picture class="fv__swiper-slide">
                            <source srcset="<?php echo esc_url($sp_image['sizes']['medium_large']); ?>"
                                media="(max-width:767px)" />
                            <img src="<?php echo esc_url($pc_image['sizes']['large']); ?>"
                                alt="<?php echo esc_attr($pc_image['alt']); ?>" decoding="async" loading="lazy" />
                        </picture>
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
    <section class="layout-introduction introduction">
        <div class="introduction__inner inner">
            <div class="introduction__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.png"
                    alt="海外留学のDream Quest" />
            </div>
            <h2 class="introduction__lead">海外留学のDream Quest</h2>
            <div class="introduction__text-wrap">
                <p class="introduction__text">Dream Questは、あなたの夢探しの旅、<br>夢を追い求める旅をサポートします。</p>
                <p class="introduction__text">独自プログラムと豊富なネットワークを活用し、<br>一度きりの人生で最高の挑戦となる<br class="u-mobile">海外留学を実現します。
                </p>
                <p class="introduction__text">あなたの成長に繋がる貴重な経験を提供し、<br>安心のサポート体制で留学を全力で応援します。<br>Dream
                    Questで、夢を現実にする第一歩を<br class="u-mobile">踏み出しましょう。</p>
            </div>
            <div class="introduction__image-wrap">
                <figure class="introduction__image">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/introduction-image.jpg"
                        alt="オペラハウスとハーバーブリッジ" />
                </figure>
                <div class="introduction__marquee-area">
                    <p class="introduction__marquee-text">dream&nbsp;quest&nbsp;for&nbsp;challengers</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Blogセクション -->
    <section class="layout-blog blog">
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
                            <time class="card__date"
                                datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
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

    <!-- 留学する目的(visaタイプ)から選ぶセクション -->
    <section class="layout-visa visa">
        <div class="visa__inner inner">
            <div class="visa__section-title section-title">
                <p class="section-title__primary">what&nbsp;purpose?</p>
                <h2 class="section-title__sub">留学する目的で選ぶ</h2>
            </div>
            <div class="visa__cards visa-cards">
                <div class="visa-cards__card visa-card">
                    <figure class="visa-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/studying-abroad.jpg"
                            alt="外国人と2人の日本人女性がディスカッションをしている" />
                        <p class="visa-card__image-title">studying&nbsp;abroad</p>
                    </figure>
                    <div class="visa-card__text-area">
                        <h3 class="visa-card__title">語学留学</h3>
                        <p class="visa-card__text">語学学校で語学を総合的に学びながら、生活の中で実践。ビジネス英語コース、各種試験対策コース、進学準備コースなど目的別コースも。</p>
                    </div>
                </div>
                <div class="visa__card visa-card">
                    <figure class="visa-card__image">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/working-holiday.jpg"
                            alt="カフェで女性が働いている" />
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
                <a href="<?php echo $blog; ?>" class="btn">view&nbsp;more </a>
            </div>
        </div>
    </section>

    <!-- 留学する国から選ぶセクション -->
    <section class="layout-country country">
        <div class="country__inner inner">
            <div class="country__section-title section-title">
                <p class="section-title__primary">which&nbsp;country?</p>
                <h2 class="section-title__sub">留学する国から選ぶ</h2>
            </div>
            <!-- ここからギャラリー -->
            <div class="country__gallery gallery">
                <div class="gallery__inner">
                    <ul class="gallery__list gallery-list">
                        <li class="gallery-list__item js-modal-open" data-target="1">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_aus.jpg" alt="船からシドニーのオペラハウスの全体像を見た景色"  >
                            <p class="gallery-list__country-name">オーストラリア<span>australia</span></p>
                        </li>
                        <li class="gallery-list__item js-modal-open">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_can.jpg" alt="カナダバンクーバーにあるエメラルドグリーンの湖が美しいバンフ国立公園の様子" target="2" class="js-modal-open">
                            <p class="gallery-list__country-name">カナダ<span>canada</span></p>
                        </li>
                        <li class="gallery-list__item js-modal-open">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_nz.jpg" alt="遠めから眺めたオークランドの街並み" target="3" class="js-modal-open" >
                            <p class="gallery-list__country-name">ニュージーランド<span>new zealand</span></p>
                        </li>
                        <li class="gallery-list__item js-modal-open">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_usa.jpg" alt="高層ビルが多数立ち並ぶアメリカの街並み" target="4" class="js-modal-open" >
                            <p class="gallery-list__country-name">アメリカ<span>america</span></p>

                        </li>
                        <li class="gallery-list__item js-modal-open">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_ire.jpg" alt="赤色の建物のテンプルバー" target="5" class="js-modal-open" >
                        <p class="gallery-list__country-name">アイルランド<span>ireland</span></p>
                        </li>
                        <li class="gallery-list__item js-modal-open">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery_uk.jpg" alt="車やバスが走るレンガの建物に囲まれたイギリスの街並み" target="6" class="js-modal-open" >
                        <p class="gallery-list__country-name">イギリス<span>england</span></p>
                        </li>
                    </ul>
                </div><!-- gallery__inner -->
            </div><!-- gallery -->
        </div>
        <!-- モーダル -->
        <div class="gallery-list__modal modal js-modal" id="1">
            <div class="modal__img">
                <img src="" alt="省略">
            </div>
        </div>
        <div class="country__btn">
            <a href="<?php echo $blog; ?>" class="btn">view&nbsp;more </a>
        </div>
    </section>
    <!-- office セクション -->
    <section class="layout-office office">
        <div class="office__inner inner">
            <div class="office__section-title section-title">
                <p class="section-title__primary">office</p>
                <h2 class="section-title__sub">オフィス紹介</h2>
            </div>
            <div class="office__wrap">
                <figure class="office__image-area">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/office.jpg" alt="テーブルとイスが置かれたオフィス" >
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
    <div class="layout-contact contact">
        <div class="contact__image">
            <div class="contact__text-area">
                <h2 class="contact__title">無料カウンセリング</h2>
                <p class="contact__text">Dream Questでは<br class="u-mobile">【無料相談、無料サポート】を行っています！<br>まずはカウンセリングのご予約を<br class="u-mobile">メールフォームよりお願いします。<br>どんなこともお気軽にご相談ください！</p>
                <div class="contact__btn">
                    <a href="<?php echo $contact; ?>" class="contact-button"><span>お申込みはこちら</span></a>
                </div>
            </div>
        </div>
        <p class="contact__lead">dream&nbsp;quest&nbsp;for&nbsp;you</p>
    </div>















    <!-- 留学体験レポートセクション(voice) -->
    <section class="layout-report report">
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
                            'post_type' => 'voice', // カスタム投稿タイプ「voice」
                            'orderby' => 'date', // 日付でソート
                            'order' => 'DESC',  // 降順（新しい順）
                            'posts_per_page' => -1 // すべての投稿を取得する場合は「-1」
                        );
                        $the_query = new WP_Query($args); // WP_Queryオブジェクトの生成
                        ?>
                        <?php if ($the_query->have_posts()): //投稿が存在する場合 ?>
                        <?php while ($the_query->have_posts()): $the_query->the_post();  // 投稿ループ ?>
                        <li class="swiper-slide report-swiper__slide page-campaign__card report-list">
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
                                        <?php $personalInfo = get_field('voice_profile'); if ($personalInfo) :?>
                                            <?php echo esc_html($personalInfo['profile_name']); ?>・<?php echo esc_html($personalInfo['profile_age']); ?>

                                        <?php endif; ?>
                                    </span>
                                    <h3 class="report-list__title "><?php the_title(); ?></h3>
                                    <p class="report-list__text report-list__text--subpage">
                                    <?php 
                                    $text = get_field('voice_text');
                                    $text = strip_tags($text);
                                    if(mb_strlen($text) > 50 ) {
                                        $content= mb_substr($text,0,50) ;
                                        echo $content. '...';
                                    } else {
                                        echo $text;
                                    }
                                    ?>
                                    </p>
                                </div>
                            </div>
                        </li>
                        <?php endwhile; ?>
                    </ul>
                    <!-- view more ボタン -->
                    <div class="report__btn">
                        <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="btn">
                            <span>view&nbsp;more</span>
                            <div class="btn__arrow"></div>
                        </a>
                    </div>
                    <?php else: ?>
                    <div class="report__no-posts no-posts">
                        <p class="no-posts__text">投稿がありません。</p>
                    </div>
                    <?php endif; wp_reset_postdata();?>
                </div>
            </div>
        </div>
    </section>

    </section>
    <!-- About us -->
    <section class="layout-about about">
        <div class="about__inner inner">
            <div class="about__section-title section-title">
                <p class="section-title__primary">about&nbsp;<span>us</span></p>
                <h2 class="section-title__sub">私たちについて</h2>
            </div>
            <div class="about__container about-content">
                <div class="about-content__images">
                    <figure class="about-content__image01">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.webp"
                                type="images/webp" />
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-01.jpg"
                                alt="屋根の上にシーサーが乗っている様子" />
                        </picture>
                    </figure>
                    <figure class="about-content__image02">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.webp"
                                type="images/webp" />
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-02.jpg"
                                alt="2匹の黄色熱帯魚が海で泳いでいる様子" />
                        </picture>
                    </figure>
                </div>
                <div class="about-content__text-wrap">
                    <h3 class="about-content__text-title">
                        <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
                    </h3>
                    <div class="about-content__text-body">
                        <p class="about-content__text">
                            ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                        </p>
                        <div class="about-content__btn">
                            <a href="<?php echo $aboutus; ?>" class="btn">
                                <span>view&nbsp;more</span>
                                <div class="btn__arrow"></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Information -->
    <section class="layout-information information">
        <div class="information__inner inner">
            <div class="information__section-title section-title">
                <p class="section-title__primary">information</p>
                <h2 class="section-title__sub">ダイビング情報</h2>
            </div>
            <div class="information__container">
                <figure class="information__image color">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-information.webp"
                            type="images/webp" />
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/top-information.jpg"
                            alt="黄色や水色の複数の熱帯魚が泳いでいる様子" />
                    </picture>
                </figure>
                <div class="information__body">
                    <div class="information__text-body">
                        <h3 class="information__text-title">ライセンス講習</h3>
                        <p class="information__text">
                            当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br>正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。
                        </p>
                    </div>
                    <div class="information__btn">
                        <a href="<?php echo $information; ?>" class="btn">
                            <span>view&nbsp;more </span>
                            <div class="btn__arrow"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Voice -->
    <section class="layout-voice voice">
        <div class="voice__inner inner">
            <div class="voice__section-title section-title">
                <p class="section-title__primary">voice</p>
                <h2 class="section-title__sub">お客様の声</h2>
            </div>
            <div class="voice__cards voice-cards">
                <?php
            $args = array(
                'post_type'      => 'voice',
                'posts_per_page' => 2,
                'orderby'        => 'rand' // ランダムな順序で並べ替え
            );
            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
              while ($the_query->have_posts()) : $the_query->the_post();
            ?>
                <article class="voice-cards__item voice-card">
                    <div class="voice-card__wrap">
                        <div class="voice-card__head voice-card__head--subpage">
                            <p class="voice-card__profile">
                                <?php $personalInfo = get_field('profile'); if ($personalInfo) :?>
                                <?php echo esc_html($personalInfo['profile_age']); ?>代(<?php echo esc_html($personalInfo['profile_gender']); ?>)
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
                      $trimmed_text = wp_trim_words($text, 120, '... <a href="' . get_permalink() . '">[...続きを読む]</a>'); echo $trimmed_text;
                    }
                    ?>
                        </p>
                    </div>
                </article>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
            <div class="voice__btn">
                <a href="<?php echo $voice; ?>" class="btn">
                    <span>view&nbsp;more </span>
                    <div class="btn__arrow"></div>
                </a>
            </div>
        </div>
    </section>
</main>
<!-- 新しいローディング画面 -->
<div id="loading-screen">
    <div class="plane-icon" id="js-plane-icon">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-airplane-img.png"
            alt="ローディング画面で下から上に動く飛行機" decoding="async" loading="eager" />
    </div>
    <div class="opening__logo" id="js-opening__logo">
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-blue.png" alt="海外留学のDream Quest"
            decoding="async" loading="eager" />
    </div>
</div>
<?php get_footer(); ?>