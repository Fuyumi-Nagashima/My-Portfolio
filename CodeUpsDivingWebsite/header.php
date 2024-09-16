<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0" />
  <meta name="format-detection" content="telephone=no" />
  <?php wp_head(); ?>
</head>
<?php 
  $visa = esc_url( home_url('/visa/'));
  $blog = esc_url( home_url('/blog/'));
  $report = esc_url( home_url('/report/'));
  $faq = esc_url( home_url('/faq/'));
  $contact = esc_url( home_url('/contact/'));
  $terms_of_service = esc_url( home_url('/terms-of-service/'));
  $privacy_policy = esc_url( home_url('/privacypolicy/'));
  $country = esc_url(home_url("/country"));  
  ?>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="layout-header header js-header">
    <div class="header__inner">
      <h1 class="header__logo">
        <a class="header__logo-link" id="js-header__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
          <picture>
            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.webp" type="image/webp">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.png" alt="海外留学のDream Quest">
          </picture>
        </a>
      </h1>
      <button class="header__hamburger hamburger u-mobile js-header-header__hamburger" type="button">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <nav class="header__pc-nav pc-nav u-desktop">
        <ul class="pc-nav__items">
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $blog; ?>">留学ブログ</a>
          </li>
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $visa; ?>">目的から選ぶ</a>
          </li>
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $country; ?>">国から選ぶ</a>
          </li>
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $report; ?>">体験レポート</a>
          </li>
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $faq; ?>">よくある質問</a>
          </li>
          <li class="pc-nav__item">
            <a class="pc-nav__link js-pc-nav" href="<?php echo $contact; ?>">お問い合わせ</a>
          </li>
        </ul>
      </nav>
      <div class="header__drawer-menu drawer-menu u-mobile js-drawer">
        <div class="drawer-menu__inner">
          <div class="drawer-menu__content">
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo $blog; ?>">Blog<span>（留学ブログ）</span></a>
            </div>
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo $visa; ?>">Visa<span>（目的から選ぶ）</span></a>
              <ul class="drawer-menu__navi">
                <li><a href="<?php echo $visa; ?>?id=tab1">短期留学</a></li>
                <li><a href="<?php echo $visa; ?>?id=tab2">長期留学</a></li>
                <li><a href="<?php echo $visa; ?>?id=tab3">ワーキングホリデー</a></li>
              </ul>
            </div>
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo $country; ?>">Country<span>（国から選ぶ）</span></a>
            </div>
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo $report; ?>">Report<span>（体験レポート）</span></a></a>
            </div>
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo $faq; ?>">Faq<span>（よくある質問）</span></a>
            </div>
            <div class="drawer-menu__item">
              <a class="drawer-menu__heading" href="<?php echo  $contact; ?>">Contact<span>（お問い合わせ）</span></a>
            </div>
            <div class="drawer-menu__item drawer-menu__item--sub-heading">
              <a href="<?php echo  $privacy_policy; ?>">プライバシーポリシー</a>
              <a href="<?php echo  $terms_of_service; ?>">利用規約</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>