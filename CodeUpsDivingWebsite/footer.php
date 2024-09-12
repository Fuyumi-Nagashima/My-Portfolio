<!-- footer -->
<!-- Contact -->
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
<?php
$footer_class = 'layout-footer footer';
if (is_404() || is_page('contact')) {
    $footer_class .= ' layout-footer--no-margin';
}
?>
<footer class="<?php echo $footer_class; ?>">
    <div class="footer__inner inner">
        <div class="footer__wrap">
            <div class="footer__content">
                <div class="footer__information">
                    <div class="footer__logo">
                        <a class="footer__logo-link" href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.png" alt="海外留学のDream Quest" />
                        </a>
                    </div>
                    <ul class="footer__sns">
                        <li>
                            <a href="https://www.facebook.com/login/?locale=ja_JP" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/facebook-icon.png"
                            alt="facebook" /></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/instagram-icon.png"
                            alt="instagram" /></a>
                        </li>
                        <li>
                            <a href="https://x.com/home?lang=ja" target="_blank" rel="noopener noreferrer"><img
                            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/x-logo.png"
                            alt="x" /></a>
                        </li>
                    </ul>
                </div>
                <div class="footer__nav footer-nav ">
                    <ul class="footer-nav__items">
                        <li class="footer-nav__item">
                            <a href="<?php echo $blog; ?>" class="footer-nav__heading"><span>留学ブログ</span></a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $visa; ?>">目的から選ぶ</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $country; ?>">国から選ぶ</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $report; ?>">体験レポート</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $faq; ?>">よくある質問</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $contact; ?>">お問い合わせ</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $privacy_policy; ?>">プライバシーポリシー</a>
                        </li>
                        <li class="footer-nav__item">
                            <a class="footer-nav__heading" href="<?php echo $terms_of_service; ?>">利用規約</a>
                        </li>
                    </ul>
                </div><!--footer__nav footer-nav-->
            </div><!--footer__content-->
            <div class="footer__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12963.333809015348!2d139.69696296798497!3d35.68110269102823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188cc0a43ae8a3%3A0xfd90ae6c3a216ecd!2z44CSMTUxLTAwNTEg5p2x5Lqs6YO95riL6LC35Yy65Y2D6aeE44Kx6LC3!5e0!3m2!1sja!2sjp!4v1726036307117!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div><!--footer__warp-->
        <div class="footer__copyright">
            <small>copyright © 2024 dream quest. all rights reserved.</small>
        </div>
    </div>
</footer>
<!-- 追従バナー(フローティングバナー) -->
<div class="floating" id="js-floating">
    <a href="<?php echo $contact; ?>" class="floating__link"><span>お問い合わせ</span></a>
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






