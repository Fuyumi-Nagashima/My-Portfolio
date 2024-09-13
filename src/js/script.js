"use strict";
jQuery(function ($) {
    $(".js-header-header__hamburger").on("click", function () {
        $(".js-header-header__hamburger,.header").toggleClass("is-active");
        $(".js-drawer").fadeToggle();
        $("body").toggleClass("active");
    });
    $(".js-drawer a[href]").on("click", function () {
        $(".js-header-header__hamburger").trigger("click");
    });
    //768px以上でドロワーを非表示にする
    $(window).on('resize', function() {
      if (window.matchMedia("(min-width: 768px)").matches) {
        $(".js-header-header__hamburger").removeClass("is-active");
        $(".js-drawer").fadeOut();
      }
    });

      //ハンバーガーメニューを開いている時のスクロールを禁止する(背景固定)
    var state = false;
    var pos;
    $(".js-header-header__hamburger").on("click", function () {
        if (state == false) {
        pos = $(window).scrollTop();
        $("body").addClass("js-fixed").css({
            top: -pos,
        });
        state = true;
        } else {
        $("body").removeClass("js-fixed").css({
            top: 0,
        });
          window.scrollTo(0, pos);
          state = false;
        }
      });
      //headerの背景色変更
      $(window).on('scroll', function () {
        var fvHeight = $('#js-fv').length ? $('#js-fv').height() : 0;
        var subMvHeight = $('#js-sub-mv').length ? $('#js-sub-mv').height() : 0;
        var triggerHeight = fvHeight || subMvHeight;
    
        if (triggerHeight < $(window).scrollTop()) {
            $('.header').addClass('change-color');
            $('#js-header__logo-link').addClass('change-logo');
            $('.js-pc-nav').addClass('change-nav');
            $('.js-header-header__hamburger').addClass('change-hamburger');
        } else {
            $('.header').removeClass('change-color');
            $('#js-header__logo-link').removeClass('change-logo');
            $('.js-pc-nav').removeClass('change-nav');
            $('.js-header-header__hamburger').removeClass('change-hamburger');
        }
    });
    
      //ローディングアニメーション
  $(function () {
    // ローダー終了
    function end_loader() {
      $("#loading-screen").fadeOut(400, function () {
        show_logo();
      });
    }
    // 画像表示
    function show_img() {
      $("#js-plane-icon img").fadeIn(800).css("animation-delay", "1s");
    }

    // タイマー処理
    $(window).on("load", function () {
      // 画像表示
      setTimeout(function () {
        show_img();
      }, 3000);
      // ローディング画面
      setTimeout(function () {
        $("#js-opening__logo").fadeIn(3000);
      }, 1000);
      setTimeout(function () {
        $("#js-opening").fadeOut(4000);
      }, 3000);
      // ローダー終了
      setTimeout(function () {
        end_loader();
      }, 5000); // アニメーションが完了するのを待つ
    });
  });
      //fvスライダー
      const swiper = new Swiper(".js-fv__swiper", {
        loop: true,
        effect: "fade", // フェード切り替え
        // 自動再生
        autoplay: {
          delay: 4000, // 4秒後に次のスライドへ
          disableOnInteraction: false, // ユーザーが操作しても自動再生を継続
          },
          speed: 2000, // 2秒かけてフェード
        });

      //campaignスライダー
      var service_swiper = new Swiper(".js-report-swiper", {
        centeredSlides: true,
        loop: true,
        speed:3000,
        slidesPerView: 1.5,
        spaceBetween: 30,
        autoplay: {
            delay:3000,
            disableOnInteraction: false,// 矢印をクリックしても自動再生を止めない
        },
        breakpoints: {
            768: {
              spaceBetween: 25,
              slidesPerView: 2.75,
            },
            1080: {
              spaceBetween: 25,
              slidesPerView: 3.25,
            },
            1280: {
              spaceBetween: 25,
              slidesPerView: 3.75,
            },
            1920:{
              spaceBetween: 25,
              slidesPerView:5,
            }
          },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });

//追従バナー(フローティングバナー)
      const floating = $("#js-floating, #js-pagetop");
      floating.hide();
    
      $(window).on("scroll", function () {
        if ($(this).scrollTop() > 70) {
          floating.fadeIn(300);
        } else {
          floating.fadeOut(300);
        }
      });

//ページトップへ戻るボタン
  const pageTop = $("#js-pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function () {
    $("body,html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
  // フッター手前でストップ
  $("#js-pagetop").hide();
  $(window).on("scroll", function () {
    var scrollHeight = $(document).height();
    var scrollPosition = $(window).height() + $(window).scrollTop();
    var footHeight = $(".layout-footer").innerHeight();
    if (scrollHeight - scrollPosition <= footHeight) {
// ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
      $("#js-pagetop").css({
        position: "absolute",
        bottom: footHeight + 18,
      });
    } else {
      $("#js-pagetop").css({
        position: "fixed",
        bottom: "20px",
      });
    }
  });

  //下層アコーディオンメニュー
  $(".js-accordion-title").on("click", function() {
    $(this).next().slideToggle(300);
    $(this).toggleClass("is-open",300);
  });

  //ブログ詳細ぺージのアコーディオン 
  //親要素のクリックイベント
$('.asideblog-list__year').click(function() {
	$(this).next('ul').slideToggle();
});
//子要素のクリックイベント
$('.menu-subtitle').click(function() {
	$(this).children('ul').slideToggle();
});
$('.asideblog-list__month').click(function() {
	$(this).children('ul').slideToggle();
}); 
//年代をクリックしたら中身が出たり隠れたりする
$('.js-asideblog-list__year,.js-asideblog-list__month').on('click',function (){
  $(this).toggleClass('open');
});

//下層ページpage-informationタブ切り替え
$('.js-tab').on('click',function(){
  $('.js-tab,.js-panel').removeClass('is-active');
  $(this).addClass('is-active');
  const index = $('.js-tab').index(this);
  $('.js-panel').eq(index).addClass('is-active');
});

//Aboutページのモーダルウィンドウ
const open = $(".js-modal-open");
const close = $(".modal");
const modal = $(".js-modal");

// 開くボタンをクリックしたらモーダルを表示する
open.on("click", function () {
  var imgSrc = $(this).children().attr('src');
  $('.modal__img,modal__img--long').children().attr('src', imgSrc);
  $('.modal').fadeIn();
    $("html, body").css("overflow", "hidden"); // スクロールを禁止する
});

// 閉じるボタンをクリックしたらモーダルを閉じる
close.on("click", function () {
  $('.modal').fadeOut();
    $("html, body").css("overflow", "initial"); // スクロールを有効にする
});


//別ページからアクティブなタブへのリンク
$(document).ready(function() {
  // URLからクエリパラメータを取得
  const urlParams = new URLSearchParams(window.location.search);
  const tabParam = urlParams.get('id');
  
  // 初期タブを決める変数を宣言
  let initialTab = "tab1"; // デフォルトのタブ
  if (tabParam && $('#' + tabParam).length) {
    initialTab = tabParam;
  }
  
  // リロードしたときにスクロールを止める
  $(window).on('load', function () {
    if (tabParam) {
      $('body,html').stop().scrollTop(0);
    }
  });
  
  // コンテンツ非表示 & タブを非アクティブ
  $('.tab__content-item').removeClass("is-active");
  $('.tab__menu li').removeClass('is-active');
  
  // 何番目のタブかを格納
  const tabno = $('.tab__menu li#' + initialTab).index();
  
  // コンテンツ表示
  $('.tab__content-item').eq(tabno).addClass('is-active');
  
  // タブのアクティブ化
  $('.tab__menu li').eq(tabno).addClass('is-active');
  
  // タブクリック時の処理
  $('.js-tab').on('click', function() {
    $('.js-tab,.js-panel').removeClass('is-active');
    $(this).addClass('is-active');
    const index = $('.js-tab').index(this);
    $('.js-panel').eq(index).addClass('is-active');
  });
});

//スクロールアニメーション
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll('.js-fade');
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add('fade-in');
      }
    }
  };

  var scrollCardItems = document.querySelectorAll('.cards__item');
  var scrollCardFunc = function () {
    for (var i = 0; i < scrollCardItems.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollCardItems[i].getBoundingClientRect().top + triggerMargin) {
        scrollCardItems[i].classList.add('fade-in-left');
      }
    }
  };

  window.addEventListener('load', function() {
    scrollAnimationFunc();
    scrollCardFunc();
  });
  window.addEventListener('scroll', function() {
    scrollAnimationFunc();
    scrollCardFunc();
  });
});
});
