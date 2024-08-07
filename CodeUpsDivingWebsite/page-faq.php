<?php get_header(); ?>

<main>
  <!-- 下層ページのmv -->
  <section class="layout-page-faq-mv sub-mv">
    <div class="sub-mv__page-header">
      <h2 class="sub-mv__title sub-mv__title--faq">
        <span>faq</span>
      </h2>
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

  <div class="layout-page-faq page-faq">
    <div class="page-faq__inner inner">
      <div class="page-faq__container accordion">
        <ul class="accordion__list">
          <?php
          // SCFでオプションページからFAQデータを取得
          $faq_group = SCF::get_option_meta('faq-option', 'faq');
          if ($faq_group) :
            foreach ($faq_group as $item) :
          ?>
          <li class="accordion__item">
            <dt class="accordion__question js-accordion-title"><?php echo esc_html($item['faq_question']); ?></dt>
            <dd class="accordion__answer">
              <p><?php echo esc_html($item['faq_answer']); ?></p>
            </dd>
          </li>
          <?php
            endforeach;
          else :
          ?>
          <li>No FAQs found.</li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </div>
</main>

<?php get_footer(); ?>
