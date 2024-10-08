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
  $(window).on("resize", function () {
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
        top: -pos
      });
      state = true;
    } else {
      $("body").removeClass("js-fixed").css({
        top: 0
      });
      window.scrollTo(0, pos);
      state = false;
    }
  });
  //headerの背景色変更
  $(window).on("scroll", function () {
    var fvHeight = $("#js-fv").length ? $("#js-fv").height() : 0;
    var subMvHeight = $("#js-sub-mv").length ? $("#js-sub-mv").height() : 0;
    var triggerHeight = fvHeight || subMvHeight;
    if (triggerHeight < $(window).scrollTop()) {
      $(".header").addClass("change-color");
      $("#js-header__logo-link").addClass("change-logo");
      $(".js-pc-nav").addClass("change-nav");
      $(".js-header-header__hamburger").addClass("change-hamburger");
    } else {
      $(".header").removeClass("change-color");
      $("#js-header__logo-link").removeClass("change-logo");
      $(".js-pc-nav").removeClass("change-nav");
      $(".js-header-header__hamburger").removeClass("change-hamburger");
    }
  });
  $(document).ready(function () {
    var hasVisited = sessionStorage.getItem("hasVisited");
    if (!hasVisited) {
      sessionStorage.setItem("hasVisited", "true");
    } else {
      $("#loading-screen").remove();
      $("body").fadeIn(1200);
      return;
    }
    function end_loader() {
      $("#loading-screen").fadeOut(1000, function () {
        $("body").fadeIn(1200);
      });
    }
    function show_img() {
      $("#js-plane-icon img").fadeIn(800).css("animation-delay", "1s");
    }
    function show_logo() {
      $("#js-opening__logo").fadeIn(800).delay(600).fadeOut(800);
    }
    show_img();
    setTimeout(function () {
      show_logo();
    }, 3000);
    setTimeout(function () {
      end_loader();
    }, 4800);
  });

  //fvスライダー
  var swiper = new Swiper(".js-fv__swiper", {
    loop: true,
    effect: "fade",
    // フェード切り替え
    fadeEffect: {
      crossFade: true
    },
    // 自動再生
    autoplay: {
      waitForTransition: false,
      delay: 4000,
      // 4秒後に次のスライドへ
      disableOnInteraction: false // ユーザーが操作しても自動再生を継続
    },

    speed: 2000 // 2秒かけてフェード
  });

  //Voice(report)のスライダー
  var service_swiper = new Swiper(".js-report-swiper", {
    centeredSlides: true,
    loop: true,
    speed: 2000,
    slidesPerView: 1.5,
    spaceBetween: 30,
    autoplay: {
      delay: 2000,
      disableOnInteraction: false // 矢印をクリックしても自動再生を止めない
    },

    breakpoints: {
      768: {
        spaceBetween: 25,
        slidesPerView: 2.75
      },
      1080: {
        spaceBetween: 25,
        slidesPerView: 3.25
      },
      1280: {
        spaceBetween: 25,
        slidesPerView: 3.75
      },
      1920: {
        spaceBetween: 25,
        slidesPerView: 5
      }
    },
    navigation: {
      nextEl: ".swiper-button-next",
      // 次へボタンのクラス名を指定
      prevEl: ".swiper-button-prev" // 前へボタンのクラス名を指定
    }
  });

  //追従バナー(フローティングバナー)
  var floating = $("#js-floating, #js-pagetop");
  floating.hide();
  $(window).on("scroll", function () {
    if ($(this).scrollTop() > 70) {
      floating.fadeIn(300);
    } else {
      floating.fadeOut(300);
    }
  });

  //ページトップへ戻るボタン
  var pageTop = $("#js-pagetop");
  pageTop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
      pageTop.fadeIn();
    } else {
      pageTop.fadeOut();
    }
  });
  pageTop.click(function () {
    $("body,html").animate({
      scrollTop: 0
    }, 500);
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
        bottom: footHeight + 18
      });
    } else {
      $("#js-pagetop").css({
        position: "fixed",
        bottom: "20px"
      });
    }
  });

  //下層アコーディオンメニュー
  $(".js-accordion-title").on("click", function () {
    $(this).next().slideToggle(300);
    $(this).toggleClass("is-open", 300);
  });

  //ブログ詳細ぺージのアコーディオン
  //親要素のクリックイベント
  $(".asideblog-list__year").click(function () {
    $(this).next("ul").slideToggle();
  });
  //子要素のクリックイベント
  $(".menu-subtitle").click(function () {
    $(this).children("ul").slideToggle();
  });
  $(".asideblog-list__month").click(function () {
    $(this).children("ul").slideToggle();
  });
  //年代をクリックしたら中身が出たり隠れたりする
  $(".js-asideblog-list__year,.js-asideblog-list__month").on("click", function () {
    $(this).toggleClass("open");
  });

  //下層ページpage-informationタブ切り替え
  $(".js-tab").on("click", function () {
    $(".js-tab,.js-panel").removeClass("is-active");
    $(this).addClass("is-active");
    var index = $(".js-tab").index(this);
    $(".js-panel").eq(index).addClass("is-active");
  });

  //別ページからアクティブなタブへのリンク
  $(document).ready(function () {
    // URLからクエリパラメータを取得
    var urlParams = new URLSearchParams(window.location.search);
    var tabParam = urlParams.get("id");

    // 初期タブを決める変数を宣言
    var initialTab = "tab1"; // デフォルトのタブ
    if (tabParam && $("#" + tabParam).length) {
      initialTab = tabParam;
    }

    // リロードしたときにスクロールを止める
    $(window).on("load", function () {
      if (tabParam) {
        $("body,html").stop().scrollTop(0);
      }
    });

    // コンテンツ非表示 & タブを非アクティブ
    $(".tab__content-item").removeClass("is-active");
    $(".tab__menu li").removeClass("is-active");

    // 何番目のタブかを格納
    var tabno = $(".tab__menu li#" + initialTab).index();

    // コンテンツ表示
    $(".tab__content-item").eq(tabno).addClass("is-active");

    // タブのアクティブ化
    $(".tab__menu li").eq(tabno).addClass("is-active");

    // タブクリック時の処理
    $(".js-tab").on("click", function () {
      $(".js-tab,.js-panel").removeClass("is-active");
      $(this).addClass("is-active");
      var index = $(".js-tab").index(this);
      $(".js-panel").eq(index).addClass("is-active");
    });
  });
  $(window).scroll(function () {
    var scrollAnimationElm = document.querySelectorAll(".js-fade");
    var scrollAnimationFunc = function scrollAnimationFunc() {
      for (var i = 0; i < scrollAnimationElm.length; i++) {
        var triggerMargin = 100;
        if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
          scrollAnimationElm[i].classList.add("fade-in");
        }
      }
    };
    var scrollCardItems = document.querySelectorAll(".cards__item");
    var scrollCardFunc = function scrollCardFunc() {
      for (var i = 0; i < scrollCardItems.length; i++) {
        var triggerMargin = 100;
        if (window.innerHeight > scrollCardItems[i].getBoundingClientRect().top + triggerMargin) {
          scrollCardItems[i].classList.add("fade-in");
        }
      }
    };
    window.addEventListener("load", function () {
      scrollAnimationFunc();
      scrollCardFunc();
    });
    window.addEventListener("scroll", function () {
      scrollAnimationFunc();
      scrollCardFunc();
    });
  });
  $(window).on("load", function () {
    // ページのURLを取得
    var url = $(location).attr("href"),
      // headerの高さを取得してそれに30px追加した値をheaderHeightに代入
      headerHeight = $("header").outerHeight() + 30;

    // urlに「#」が含まれていれば
    if (url.indexOf("#") != -1) {
      // urlを#で分割して配列に格納
      var anchor = url.split("#"),
        // 分割した最後の文字列（#◯◯の部分）をtargetに代入
        target = $("#" + anchor[anchor.length - 1]),
        // リンク先の位置からheaderHeightの高さを引いた値をpositionに代入
        position = Math.floor(target.offset().top) - headerHeight;
      // positionの位置に移動
      $("html, body").animate({
        scrollTop: position
      }, 500);
    }
  });

  //ページ遷移時に全体をふわっと表示させる
  $(window).on('load', function () {
    $("#page-fade").css('opacity', 1); // ページがロードされたら2秒でフェードイン
  });
});