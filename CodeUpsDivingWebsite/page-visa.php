<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
      <section class="layout-page-visa-mv sub-mv"  id="js-sub-mv">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title">
            <span>visa</span>
          </h2>
        </div>
      </section>
      <!-- パンくず -->
      <div class="breadcrumb">
        <div class="breadcrumb__inner inner">
        <?php 
        if (function_exists('bcn_display')) {
        bcn_display();
        } 
        ?>
        </div>
      </div>
      <!-- Visaタイプの紹介 -->
      <div class="layout-page-visa page-visa">
        <div class="page-visa__inner inner">
          <!-- タブ -->
          <div class="page-visa__container tab">
            <ul class="tab__menu">
              <li id="tab1" class="tab__menu-item js-tab is-active"><span>短期留学</span></li>
              <li id="tab2" class="tab__menu-item js-tab"><span>長期留学</span></li>
              <li id="tab3" class="tab__menu-item js-tab"><span>ワーキング<br class="u-mobile">ホリデー</span></li>
            </ul>
            <!-- タブの内容 -->
            <div class="tab__content">
              <div class="tab__content-item js-panel is-active" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">短期留学</h3>
                    <p class="tab__content-text">「自分の英語力を試してみたい」「集中して語学力を高めたい」「グローバルな視野を広げたい」。そんな希望を叶える第一歩が短期留学です。学生は春休みや夏休みを利用し、社会人は有給休暇を活用して、1週間から参加できます。ベーシックな語学コースに加えて、英語＋αのコースも充実しています。初めての留学でも、Dream Questなら安心して取り組むことができます。</p>
                  </div>
                  <figure class="tab__content-image">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/classroom02.webp" type="image/webp">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/classroom02.jpeg" alt="教室で留学生が授業を受けている" decoding="async" loading="lazy">
                    </picture>
                  </figure>

                </div>                
              </div>
              <div class="tab__content-item js-panel" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">長期留学</h3>
                    <p class="tab__content-text">9週間から1年以上の長期までの語学留学！
                    語学留学は、海外留学の定番です。学校で語学を学びながら、日常生活で実際に使うことで、実践的な語学力を身につけます。ベーシックな語学コースに加えて、ビジネス英語や試験対策、進学準備など、目的に応じたコースも豊富に揃っています。語学力を本格的に伸ばしたい方にとって、最適な環境が整っています。</p>
                  </div>
                  <figure class="tab__content-image">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/woman-presentation.webp" type="image/webp">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/woman-presentation.jpeg" alt="女性の学生が2人の友人に向けてプレゼンテーションをしているところ" decoding="async" loading="lazy">
                    </picture>
                  </figure>
                </div>                
              </div>
              <div class="tab__content-item js-panel" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">ワーキングホリデー</h3>
                    <p class="tab__content-text">ワーキングホリデーでは、1〜2年間の間に「暮らす」「学ぶ」「働く」を同時に楽しむことができます。現地で働いて得た収入を生活費や旅行費用に充てることができるため、自由度の高い海外生活を満喫できます。異文化の環境で学校に通いながらアルバイトやボランティアに参加したり、スポーツや旅行を楽しんだりと、留学とは一味違うアクティブな経験を得られます。<br class="u-desktop">(※滞在期間は国により異なります)</p>
                  </div>
                  <figure class="tab__content-image">
                    <picture>
                        <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/japanese-restaurant.webp" type="image/webp">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/japanese-restaurant.jpeg" alt="海外の日本食レストランで笑顔の女性店員がお寿司を盛り付けている" decoding="async" loading="lazy">
                    </picture>
                  </figure>
                </div>                
              </div>
            </div><!--tab__content-->
          </div><!--page-information__container-->
        </div><!--inner-->
      </div><!--layout-page-information-->
    </main>
    <?php get_footer(); ?>