<?php get_header(); ?>
    <!-- 下層ページのmv -->
    <main>
      <section class="layout-sub-mv sub-mv page-sitemap">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title page-sitemap__title"><span>site</span>&nbsp;<span>map</span></h2>
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
  <!-- サイトマップ -->
  <?php 
  $campaign = esc_url( home_url('/campaign/'));
  $aboutus = esc_url( home_url('/aboutus/'));
  $information = esc_url( home_url('/information/'));
  $blog = esc_url( home_url('/blog/'));
  $voice = esc_url( home_url('/voice/'));
  $price = esc_url( home_url('/price/'));
  $faq = esc_url( home_url('/faq/'));
  $contact = esc_url( home_url('/contact/'));
  $terms_of_service = esc_url( home_url('/terms-of-service/'));
  $privacy_policy = esc_url( home_url('/privacypolicy/'));
  $campaign_category_license = esc_url(home_url("/campaign_category/license"));
  $campaign_category_experience = esc_url(home_url("/campaign_category/experience"));
  $campaign_category_fundiving = esc_url(home_url("/campaign_category/fundiving"));
  ?>
  <div class="layout-site-map sitemap">
    <div class="sitemap__inner inner">
      <div class="sitemap__nav sitemap-nav footer-nav">
        <div class="sitemap-nav__content footer-nav__content">
          <div class="footer-nav__items item01">
            <div class="footer-nav__item">
              <a href="<?php echo $campaign; ?>" class="sitemap-nav__heading footer-nav__heading"><span>キャンペーン</span></a>
              <ul class="sitemap-nav__list footer-nav__list">
                <li><a href="<?php echo $campaign_category_license; ?>">ライセンス取得</a></li>
                <li><a href="<?php echo $campaign_category_experience; ?>">貸切体験ダイビング</a></li>
                <li><a href="<?php echo $campaign_category_fundiving; ?>">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $aboutus; ?>">私たちについて</a></p>
            </div>
          </div>

          <div class="footer-nav__items item02">
            <div class="footer-nav__item">
              <a href="<?php echo $information; ?>" class="sitemap-nav__heading footer-nav__heading">ダイビング情報</a>
              <ul class="sitemap-nav__list footer-nav__list">
              <li><a href="<?php echo $information; ?>?id=tab1">ライセンス講習</a></li>
              <li><a href="<?php echo $information; ?>?id=tab3">体験ダイビング</a></li>
              <li><a href="<?php echo $information; ?>?id=tab2">ファンダイビング</a></li>
              </ul>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $blog; ?>">ブログ</a></p>
            </div>
          </div>

          <div class="footer-nav__items item03">
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $voice; ?>">お客様の声</a></p>
            </div>
            <div class="footer-nav__item">
              <a href="<?php echo $price; ?>" class="sitemap-nav__heading footer-nav__heading">料金一覧</a>
              <ul class="sitemap-nav__list footer-nav__list">
                <li><a href="<?php echo $price; ?>">ライセンス講習</a></li>
                <li><a href="<?php echo $price; ?>#">体験ダイビング</a></li>
                <li><a href="<?php echo $price; ?>">ファンダイビング</a></li>
              </ul>
            </div>
          </div>
          <div class="footer-nav__items item04">
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $faq; ?>">よくある質問</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $privacy_policy; ?>">プライバシー<br class="u-mobile">ポリシー</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $terms_of_service; ?>">利用規約</a></p>
            </div>
            <div class="footer-nav__item">
              <p class="sitemap-nav__heading footer-nav__heading"><a href="<?php echo $contact; ?>">お問い合わせ</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>