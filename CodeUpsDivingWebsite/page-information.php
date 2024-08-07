<?php get_header(); ?>
<!-- 下層ページのmv -->
<main>
      <section class="layout-page-information-mv sub-mv">
        <div class="sub-mv__page-header">
          <h2 class="sub-mv__title">
            <span>information</span>
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
      <!-- ダイビング情報 -->
      <div class="layout-page-information page-information">
        <div class="page-information__inner inner">
          <!-- タブ -->
          <div class="page-information__container tab">
            <ul class="tab__menu">
              <li id="tab1" class="tab__menu-item js-tab is-active"><span>ライセンス<br class="u-mobile">講習</span></li>
              <li id="tab2" class="tab__menu-item js-tab"><span>ファン<br class="u-mobile">ダイビング</span></li>
              <li id="tab3" class="tab__menu-item js-tab"><span>体験<br class="u-mobile">ダイビング</span></li>
            </ul>
            <!-- タブの内容 -->
            <div class="tab__content">
              <div class="tab__content-item js-panel is-active" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">ライセンス講習</h3>
                    <p class="tab__content-text">泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！</p>
                  </div>
                  <figure class="tab__content-image" >
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-license.webp" alt="5人のダイバーが海で浮いている様子" decoding="async" loading="lazy">
                  </figure>
                </div>                
              </div>
              <div class="tab__content-item js-panel" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">ファンダイビング</h3>
                    <p class="tab__content-text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <figure class="tab__content-image" >
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-fundiving.webp" alt="たくさんの魚が海の中を泳いでいる様子" decoding="async" loading="lazy">
                  </figure>
                </div>                
              </div>
              <div class="tab__content-item js-panel" >
                <div class="tab__content-inner">
                  <div class="tab__content-body">
                    <h3 class="tab__content-heading">体験ダイビング</h3>
                    <p class="tab__content-text">ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！</p>
                  </div>
                  <figure class="tab__content-image" >
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information-diving.webp" alt="2匹のトゲチョウチョウウオが海の中を泳いでいる様子" decoding="async" loading="lazy">
                  </figure>
                </div>                
              </div>
            </div><!--tab__content-->
          </div><!--page-information__container-->
        </div><!--inner-->
      </div><!--layout-page-information-->
    </main>
    <?php get_footer(); ?>