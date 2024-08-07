<?php get_header();?>

<!-- 下層ページのmv -->
<main>
    <section class="layout-page-about-mv sub-mv">
        <div class="sub-mv__page-header">
            <h1 class="sub-mv__title"><span>about&nbsp;</span>us</h1>
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
      <!-- page-about 開始 -->
      <section class="layout-page-about about-area01 page-about">
        <div class="page-about__inner inner">
          <div class="page-about__container about-content">
            <div class="about-content__images">
              <figure class="about-content__image01 u-desktop">
                <picture>
                  <source
                    srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/aboutus-01.webp"
                    type="images/webp"
                  />
                  <img
                    src="<?php echo get_theme_file_uri() ?>/assets/images/common/aboutus-01.jpg"
                    alt="屋根の上にシーサーが乗っている様子"
                  />
                </picture>
              </figure>
              <figure class="about-content__image02 about-content__image02--subpage">
                <picture>
                  <source
                    srcset="<?php echo get_theme_file_uri() ?>/assets/images/common/aboutus-02.webp"
                    type="images/webp"
                  />
                  <img
                    src="<?php echo get_theme_file_uri() ?>/assets/images/common/aboutus-02.jpg"
                    alt="2匹の黄色熱帯魚が海で泳いでいる様子"
                  />
                </picture>
              </figure>
            </div>
            <div class="about-content__text-wrap">
              <h3 class="about-content__text-title about-content__text-title--subpage">
                <span>dive</span>&nbsp;into<br>the&nbsp;<span>ocean</span>
              </h3>
              <div class="about-content__text-body">
                <p class="about-content__text">
                  ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br>ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="layout-about-gallery about-area02 page-gallery">
        <div class="page-gallery__inner inner">
          <div class="page-gallery__section-title section-title">
            <p class="section-title__primary">gallery</p>
            <h2 class="section-title__sub">フォト</h2>
          </div>
          <!-- ここからギャラリー -->
          <div class="page-gallery__gallery gallery">
                <div class="gallery__inner">
                    <ul class="gallery__list gallery-list">
                        <?php
                        // SCFから画像を取得
                        $gallery_images = SCF::get('about-us_gallery');
                        if ($gallery_images) {
                            //foreachループで画像を処理
                            foreach ($gallery_images as $image) {
                                // wp_get_attachment_image_urlで画像のURLを取得で
                                //$image['gallery_image']: 各画像のIDです。これにより、画像のURLを取得
                                $image_url = wp_get_attachment_image_url($image['gallery_image'], 'full');
                                if ($image_url) {
                                    echo '<li class="gallery-list__item js-modal-open">';
                                    echo '<img src="' . esc_url($image_url) . '" alt="' . esc_attr(get_post_meta($image['gallery_image'], '_wp_attachment_image_alt', true)) . '">';
                                    echo '</li>';
                                }
                            }
                        }
                        ?>
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
      </section>
    </main>

<?php get_footer();?>

