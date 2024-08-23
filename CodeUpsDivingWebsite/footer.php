<!-- footer -->
<!-- Contact -->
<?php 
  $campaign = esc_url( home_url('/campaign/'));
  $aboutus = esc_url( home_url('/aboutus/'));
  $information = esc_url( home_url('/information/'));
  $blog = esc_url( home_url('/blog/'));
  $voice = esc_url( home_url('/voice/'));
  $price = esc_url( home_url('/price/'));
  $faq = esc_url( home_url('/faq/'));
  $contact = esc_url( home_url('/contact/'));
  $privacy_policy = esc_url( home_url('/privacy-policy/'));
  $terms_of_service = esc_url( home_url('/terms-of-service/'));
  $sitemap = esc_url( home_url('/sitemap/'));
  ?>
<?php
$footer_class = 'layout-footer footer';
if (is_404()) {
    $footer_class .= ' layout-footer--no-margin';
}
?>
<footer class="<?php echo $footer_class; ?>">
    <div class="footer__inner inner">
        <div class="footer__top">
            <div class="footer__logo">
                <a class="footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/footer-logo.png"
                        alt="codeupsのロゴ画像" />
                </a>
            </div>
            <ul class="footer__sns">
                <li>
                    <a href="https://www.facebook.com/login/?locale=ja_JP" target="_blank"
                        rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/FacebookLogo.png"
                            alt="facebookのアイコン" /></a>
                </li>
                <li>
                    <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/InstagramLogo.png"
                            alt="instagramのアイコン" /></a>
                </li>
            </ul>
        </div>
        <div class="footer__nav footer-nav">
            <div class="footer-nav__content">
                <div class="footer-nav__items item01">
                    <div class="footer-nav__item">
                        <a href="<?php echo $campaign; ?>" class="footer-nav__heading"><span>キャンペーン</span></a>
                        <ul class="footer-nav__list">
                            <li><a href="<?php echo $campaign_category_license; ?>">ライセンス取得</a></li>
                            <li><a href="<?php echo $campaign_category_experience; ?>">貸切体験ダイビング</a></li>
                            <li><a href="<?php echo $campaign_category_fundiving; ?>">ファンダイビング</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $aboutus; ?>">私たちについて</a></p>
                    </div>
                </div>

                <div class="footer-nav__items item02">
                    <div class="footer-nav__item">
                        <a href="<?php echo $information; ?>" class="footer-nav__heading">ダイビング情報</a>
                        <ul class="footer-nav__list">
                            <li><a href="<?php echo $information; ?>?id=tab1">ライセンス講習</a></li>
                            <li><a href="<?php echo $information; ?>?id=tab3">体験ダイビング</a></li>
                            <li><a href="<?php echo $information; ?>?id=tab2">ファンダイビング</a></li>
                        </ul>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $blog; ?>">ブログ</a></p>
                    </div>
                </div>

                <div class="footer-nav__items item03">
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $voice; ?>">お客様の声</a></p>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $price; ?>">料金一覧</a></p>
                        <ul class="footer-nav__list">
                            <li><a href="<?php echo $price; ?>">ライセンス講習</a></li>
                            <li><a href="<?php echo $price; ?>">体験ダイビング</a></li>
                            <li><a href="<?php echo $price; ?>">ファンダイビング</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer-nav__items item04">
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $faq; ?>">よくある質問</a></p>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $privacy_policy; ?>">プライバシー<br
                                    class="u-mobile">ポリシー</a></p>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $terms_of_service; ?>">利用規約</a></p>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $contact; ?>">お問い合わせ</a></p>
                    </div>
                    <div class="footer-nav__item">
                        <p class="footer-nav__heading"><a href="<?php echo $sitemap; ?>">サイトマップ</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__copyright">
            <small>copyright © 2021 - 2023 codeUps LLC. all rights reserved.</small>
        </div>
    </div>
</footer>
<!-- 追従バナー(フローティングバナー) -->
<div class="floating" id="js-floating">
    <a href="#contact" class="floating__link"><span>お問い合わせ</span></a>
</div>
<!-- TOPへ戻るボタン -->
<a class="pagetop" id="js-pagetop" href="#">
    <div class="pagetop__button">
        <span class="pagetop__arrow"></span>
    </div>
</a>
<?php wp_footer(); ?>
</body>
</html>






