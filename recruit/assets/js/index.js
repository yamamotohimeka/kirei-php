$(function () {
  //inview
  $(".fadeUp").on("inview", function () {
    $(this).addClass("show-fadeUp");
  });

  $(".fadeUp2").on("inview", function () {
    $(this).addClass("show-fadeUp2");
  });

  $(".fadeIn1").on("inview", function () {
    $(this).addClass("show-fadeIn1");
  });

  $(".fadeIn2").on("inview", function () {
    $(this).addClass("show-fadeIn2");
  });

  $(".fadeIn3").on("inview", function () {
    $(this).addClass("show-fadeIn3");
  });

  $(".fadeIn4").on("inview", function () {
    $(this).addClass("show-fadeIn4");
  });

  $(".fadeIn5").on("inview", function () {
    $(this).addClass("show-fadeIn5");
  });

  $(".bound1").on("inview", function () {
    $(this).addClass("show-bound1");
  });

  $(".bound2").on("inview", function () {
    $(this).addClass("show-bound2");
  });

  $(".bound3").on("inview", function () {
    $(this).addClass("show-bound3");
  });

  $(".party").on("inview", function () {
    $(this).addClass("show-party");
  });
  //ハンバーガーメニュー
  $(`.header__tabButton`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header__tabNav__list-link a`).on("click", (event) => {
    $(".header__tabNav").toggleClass("header__tabNav-active");
    $(".header__tabButton span").toggleClass("header__tabButton-active");
  });
  $(`.header-logo a`).on("click", (event) => {
    $(".header__tabNav").removeClass("header__tabNav-active");
    $(".header__tabButton span").removeClass("header__tabButton-active");
  });
});

$(function ($) {
  $(document).ready(function () {
    var nav = $(".header"),
      main = $("main"),
      offset = nav.offset();
    var isNavFixed = false;

    $(window).scroll(function () {
      var scrollTop = $(window).scrollTop();
      if (scrollTop > offset.top) {
        if (!isNavFixed) {
          nav.addClass("fixed");
          main.addClass("main-top");
          isNavFixed = true;
        }
      } else {
        if (isNavFixed) {
          nav.removeClass("fixed");
          main.removeClass("main-top");
          isNavFixed = false;
        }
      }
    });

    // ページ内リンクがクリックされたときの処理
    $('a[href^="#"]').on("click", function (event) {
      var target = $($(this).attr("href"));
      if (target.length) {
        event.preventDefault();
        $("html, body").animate(
          {
            scrollTop: target.offset().top - nav.outerHeight() - 50, // ヘッダーの高さ分上で停止する
          },
          600
        );
      }
    });
  });
});

//qrの表示非表示

function knob(id, display) {
  const target = $("#" + id);
  target.attr("data-display", display);
}
$(".openbtn1").click(function () {
  //ボタンがクリックされたら
  $(this).toggleClass("active"); //ボタン自身に activeクラスを付与し
  $("#g-nav").toggleClass("panelactive"); //ナビゲーションにpanelactiveクラスを付与
  $(".circle-bg").toggleClass("circleactive"); //丸背景にcircleactiveクラスを付与
});

$("#g-nav a").click(function () {
  //ナビゲーションのリンクがクリックされたら
  $(".openbtn1").removeClass("active"); //ボタンの activeクラスを除去し
  $("#g-nav").removeClass("panelactive"); //ナビゲーションのpanelactiveクラスを除去
  $(".circle-bg").removeClass("circleactive"); //丸背景のcircleactiveクラスを除去
});
// #page-topをクリックした際の設定
$(".header__logo-sub").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});
// #page-topをクリックした際の設定
$(".header__logo").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});
// #page-topをクリックした際の設定
$(".logo-sp").click(function () {
  $("body,html").animate(
    {
      scrollTop: 0, //ページトップまでスクロール
    },
    500
  ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
  return false; //リンク自体の無効化
});
