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
<?php if (!is_404()) : ?>
<section class="layout-contact contact">
    <div class="contact__inner inner">
        <div class="contact__container">
            <div class="contact__information">
                <div class="contact__logo">
                    <a class="contact__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/contact-logo.svg"
                            alt="codeupsのロゴ画像" />
                    </a>
                </div>
                <div class="contact__address-wrap">
                    <address>
                        <ul class="contact__shop-information">
                            <li class="contact__address">沖縄県那覇市1-1</li>
                            <li class="contact__tel">TEL:0120-000-0000</li>
                            <li class="contact__business-hour">営業時間:8:30-19:00</li>
                            <li class="contact__holiday">定休日:毎週火曜日</li>
                        </ul>
                    </address>
                    <div class="contact__map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14158.645744855052!2d153.01206371956383!3d-27.47979778424914!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b915a0c3a9a0799%3A0xabd7ca3589cf6825!2z44Kq44O844K544OI44Op44Oq44KiIOOCr-OCpOODvOODs-OCuuODqeODs-ODiSDjgrXjgqbjgrnjg7vjg5bjg6rjgrnjg5njg7Mg44K144Km44K544O744OQ44Oz44Kv!5e0!3m2!1sja!2sjp!4v1710529102997!5m2!1sja!2sjp"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
            <div class="contact__form-area">
                <div class="contact__section-title section-title">
                    <h2 class="section-title__primary section-title__primary--contact">contact</h2>
                    <p class="section-title__sub section-title__sub--contact">お問い合わせ</p>
                </div>
                <a class="contact__text">ご予約・お問い合わせはコチラ</a>
                <div class="contact__btn">
                    <a href="<?php echo $contact; ?>" class="btn">
                        <span>contact&nbsp;us</span>
                        <div class="btn__arrow"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
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
<!-- TOPへ戻るボタン -->
<a class="pagetop" id="js-pagetop" href="#">
    <div class="pagetop__button">
        <span class="pagetop__arrow"></span>
    </div>
</a>
<?php wp_footer(); ?>
</body>
</html>






