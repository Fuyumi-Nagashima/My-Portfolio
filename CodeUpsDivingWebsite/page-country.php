<?php get_header();?>

<!-- 下層ページのmv -->
<main>
    <section class="layout-page-country-mv sub-mv">
        <div class="sub-mv__page-header">
            <h1 class="sub-mv__title"><span>country</span></h1>
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
    <!-- page-country 開始 -->
    <section class="layout-country page-country">
    <div class="page-country__inner inner">
        <div class="service__items services">
            <?php 
            // 6つの国情報をループで表示する
            for ($i = 1; $i <= 6; $i++):
                // 各フィールドのデータを取得
                $country_name = get_field('country_name');
                $country_description = get_field('country_description');
                $country_image = get_field('country_image');
                
                // サブフィールドのデータを取得
                $name = $country_name['country_name0'.$i];
                $description = $country_description['country_description0'.$i];
                $image = $country_image['country_image0'.$i];
            ?>
            <div class="service__item services__item">
                <div class="services__content">
                    <h3 class="services__heading">
                        <?php echo esc_html($name); // 国名 ?>
                    </h3>
                    <p class="services__text">
                        <?php echo esc_html($description); // 国の説明 ?>
                    </p>
                </div>
                <figure class="services__image">
                    <?php if (!empty($image)): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="335" height="251" decoding="async" loading="lazy">
                    <?php endif; ?>
                </figure>
            </div>
            <?php endfor; ?>
        </div>
    </div>
</section>


</main>
<?php get_footer();?>

