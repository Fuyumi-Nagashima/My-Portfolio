<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <?php wp_head(); ?>
  </head>
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
  $site_map = esc_url(home_url("/sitemap"));
  ?>
  <body>
    <header class="layout-header header js-header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a class="header__logo-link" id="js-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.png" alt="海外留学のDream Quest"/>
          </a>
        </h1>
        <div class="header__hamburger hamburger u-mobile js-header-header__hamburger">
          <span></span>
          <span></span>
          <span></span>
        </div>
        <nav class="header__pc-nav pc-nav u-desktop">
          <ul class="pc-nav__items">
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $campaign; ?>">campaign</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $aboutus; ?>">about&nbsp;us</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $information; ?>">information</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $blog; ?>">blog</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $voice; ?>">voice</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $price; ?>">price</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $faq; ?>">faq</a>
            </li>
            <li class="pc-nav__item">
              <a class="pc-nav__link js-pc-nav"  href="<?php echo $contact; ?>">contact</a>
            </li>
          </ul>
        </nav>
        <div class="header__drawer-menu drawer-menu u-mobile js-drawer">
          <div class="drawer-menu__inner">
            <div class="drawer-menu__content">
              <div class="drawer-menu__items">
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $campaign; ?>">キャンペーン</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="<?php echo $campaign_category_license; ?>">ライセンス取得</a></li>
                    <li><a href="<?php echo $campaign_category_experience; ?>">貸切体験ダイビング</a></li>
                    <li><a href="<?php echo $campaign_category_fundiving; ?>">ファンダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $aboutus; ?>">私たちについて</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $information; ?>">ダイビング情報</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="<?php echo $information; ?>?id=tab1">ライセンス講習</a></li>
                    <li><a href="<?php echo $information; ?>?id=tab3">体験ダイビング</a></li>
                    <li><a href="<?php echo $information; ?>?id=tab2">ファンダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $blog; ?>">ブログ</a></p>
                </div>
              </div>
              <div class="drawer-menu__items">
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $voice; ?>">お客様の声</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $price; ?>">料金一覧</a></p>
                  <ul class="drawer-menu__navi">
                    <li><a href="<?php echo $price; ?>">ライセンス講習</a></li>
                    <li><a href="<?php echo $price; ?>">体験ダイビング</a></li>
                    <li><a href="<?php echo $price; ?>">ファンダイビング</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo $faq; ?>">よくある質問</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo  $privacy_policy; ?>">プライバシー<br>ポリシー</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo  $terms_of_service; ?>">利用規約</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo  $contact; ?>">お問い合わせ</a></p>
                </div>
                <div class="drawer-menu__item">
                  <p class="drawer-menu__heading"><a href="<?php echo  $site_map; ?>">サイトマップ</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>