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
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo $campaign; ?>">Blog<span>（留学ブログ）</span></a>
                </div>
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo $information; ?>">Visa<span>（目的から選ぶ）</span></a>
                  <ul class="drawer-menu__navi">
                    <li><a href="<?php echo $information; ?>?id=tab1">短期留学</a></li>
                    <li><a href="<?php echo $information; ?>?id=tab3">長期留学</a></li>
                    <li><a href="<?php echo $information; ?>?id=tab2">ワーキングホリデー</a></li>
                  </ul>
                </div>
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo $blog; ?>">Country<span>（国から選ぶ）</span></a>
                </div>
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo $voice; ?>">Voice<span>（体験レポート）</span></a></a>
                </div>
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo $faq; ?>">Faq<span>（よくある質問）</span></a>
                </div>
                <div class="drawer-menu__item">
                  <a class="drawer-menu__heading" href="<?php echo  $contact; ?>">Contact<span>（留学相談予約）</span></a>
                </div>
                <div class="drawer-menu__item drawer-menu__item--sub-heading">
                  <a href="<?php echo  $privacy_policy; ?>">プライバシーポリシー</a>
                  <a href="<?php echo  $terms_of_service; ?>">利用規約</a>
                  <a href="<?php echo  $site_map; ?>">サイトマップ</a>
                </div>
            </div>
          </div>
        </div>
      </div>
    </header>