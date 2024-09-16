<?php get_header(); ?>

<main>
  <section class="layout-page-country-mv sub-mv" id="js-sub-mv">
    <div class="sub-mv__page-header">
      <h1 class="sub-mv__title"><span>country</span></h1>
    </div>
  </section>
  <div class="breadcrumb">
    <div class="breadcrumb__inner inner">
      <?php if (function_exists('bcn_display')) {
        bcn_display();
      } ?>
    </div>
  </div>
  <section class="layout-page-country page-country">
    <div class="page-country__inner inner">
      <div class="page-country__items countries">
        <?php
        // SCFでオプションページから国のデータを取得
        $country_group = SCF::get_option_meta('country-option', 'country');
        if ($country_group):
          foreach ($country_group as $country_item):
            // 画像URLとaltテキストを取得
            $img_data = wp_get_attachment_image_src($country_item['country_image'], 'large');
            $image_url = $img_data[0];
            $alt = get_post_meta($country_item['country_image'], '_wp_attachment_image_alt', true) ?: get_post($country_item['country_image'])->post_title;
        ?>
        <div class="page-country__item countries__item" id="<?php echo sanitize_title($country_item['country_id']); ?>">
          <div class="countries__content">
            <h3 class="countries__heading"><?php echo esc_html($country_item['country_name']); ?></h3>
            <p class="countries__text"><?php echo esc_html($country_item['country_description']); ?></p>
          </div>
          <?php if ($image_url): ?>
          <figure class="countries__image">
            <img src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($alt); ?>" width="335" height="251"
              decoding="async" loading="lazy">
          </figure>
          <?php endif; ?>
        </div>
        <?php
          endforeach;
        else:
          ?>
        <p>No country information found.</p>
        <?php endif; ?>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>