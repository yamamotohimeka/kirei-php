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

  // #page-topをクリックした際の設定
  $(".footer-top").click(function () {
    $("body,html").animate(
      {
        scrollTop: 0, //ページトップまでスクロール
      },
      500
    ); //ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false; //リンク自体の無効化
  });

  // $(window).resize(function () {
  //   if ($(window).width() > 768) {
  //     pagetop.addClass("none");
  //   } else {
  //     pagetop.removeClass("none");
  //   }
  // });

  //一週間の曜日(英・日),日付,今日の日付取得
  moment.locale("en");
  const month = [];
  const date = [];
  const weeksEn = [];
  const weeksJa = new Array(7);
  const todayWeek = moment().format("ddd");
  const isSmallScreen = window.innerWidth <= 768;

  [...Array(7)].map((_, id) => {
    if (isSmallScreen) {
      month.push(moment().add(id, "days").format("M月"));
    } else {
      month.push(moment().add(id, "days").format("M/"));
    }
    date.push(moment().add(id, "days").format("D"));
    weeksEn.push(moment().add(id, "days").format("ddd"));
  });
  weeksJa.splice(weeksEn.indexOf("Sun"), 1, "(日)");
  weeksJa.splice(weeksEn.indexOf("Mon"), 1, "(月)");
  weeksJa.splice(weeksEn.indexOf("Tue"), 1, "(火)");
  weeksJa.splice(weeksEn.indexOf("Wed"), 1, "(水)");
  weeksJa.splice(weeksEn.indexOf("Thu"), 1, "(木)");
  weeksJa.splice(weeksEn.indexOf("Fri"), 1, "(金)");
  weeksJa.splice(weeksEn.indexOf("Sat"), 1, "(土)");
  //今日のスタッフを表示
  $(`.${todayWeek}`).addClass("block");

  // 出勤情報のdate切り替え処理
  $(".schedule__btn__list-link").eq(0).addClass("dateactive");

  weeksEn.map((_, id) => {
    $(".schedule__btn__list-link_date").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_month").eq(id).text(month[id]);
    $(".schedule__btn__list-link_day").eq(id).text(date[id]);
    $(`.schedule__btn__list-link.${weeksEn[id]}`).on("click", (event) => {
      $(".schedule__btn__list-link").removeClass("dateactive");
      $(event.currentTarget).addClass("dateactive");
      $(".girlCard").removeClass("block");
      $(`.girlCard.${weeksEn[id]}`).addClass("block");
    });

    $(".schedule__btn__list-link_week").eq(id).addClass(weeksEn[id]);
    $(".schedule__btn__list-link_week").eq(id).text(weeksJa[id]);
  });

  var headerHeight = $(".header__nav__list").outerHeight();
  $('a[href^="#"]').click(function () {
    var href = $(this).attr("href");
    var target = $(href);
    var position = target.offset().top - (headerHeight + 30);
    $("body,html").stop().animate({ scrollTop: position }, 500);
    return false;
  });

  $(".schedule__btn__list-link").eq(0).addClass("first");
  $(".schedule__btn__list-link").eq(1).addClass("second");
  $(".schedule__btn__list-link").eq(2).addClass("third");
  $(".schedule__btn__list-link").eq(3).addClass("fourth");
  $(".schedule__btn__list-link").eq(4).addClass("fifth");
  $(".schedule__btn__list-link").eq(5).addClass("sixth");
  $(".schedule__btn__list-link").eq(6).addClass("seventh");
});

// -------------------------------------------------------------ここまで

let swiper1 = new Swiper(".swiper1", {
  loop: true,
  centeredSlides: true,
  slidesPerView: "2",
  allowTouchMove: true,
  grabCursor: true,
  speed: 900,
  followFinger: true,
  slideToClickedSlide: false,

  navigation: {
    nextEl: ".swiper-button-next1",
    prevEl: ".swiper-button-prev1",
    clickable: true, //クリックに反応させる
  },
  autoplay: {
    //自動再生
    delay: 5000,
    disableOnInteraction: false,
  },
  pagination: {
    el: ".swiper-pagination1",
    clickable: true,
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
    },
    769: {
      slidesPerView: 2,
    },
    1080: {
      slidesPerView: 3,
    },
    1280: {
      slidesPerView: 3,
    },
  },
});
// $(window).resize(function () {
//   if ($(window).width() > 768) {
//     pagetop.addClass("none");
//   } else {
//     pagetop.removeClass("none");
//   }
// });
$(function ($) {
  var nav = $(".header__nav"),
    tab_nav = $(".header__tab-flex"),
    main = $("main"),
    offset = nav.offset();

  $(window).scroll(function () {
    if ($(window).scrollTop() > offset.top) {
      nav.addClass("fixed");
      tab_nav.addClass("fixed");
      main.addClass("main-top");
    } else {
      nav.removeClass("fixed");
      tab_nav.removeClass("fixed");
      main.removeClass("main-top");
    }
  });
});
window.addEventListener("scroll", function () {
  var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
  var hamburgerMenu = document.querySelector(".hamburger-menu");
  var footerIcon = document.querySelector(".footer__icon");
  var headerTabNavList = document.querySelector(".header__tabNav__list");

  if (scrollTop > 1) {
    hamburgerMenu.classList.add("hide");
    footerIcon.classList.add("show");
    footerIcon.classList.add("change");
    headerTabNavList.style.top = "-4%";
  } else {
    hamburgerMenu.classList.remove("hide");
    footerIcon.classList.remove("show");
    footerIcon.classList.remove("change");
    headerTabNavList.style.top = "";
  }
});
$(function () {
  $(".header__tabButton").click(function () {
    $(this).toggleClass("no-scroll");
    $(".header__tabButton").toggleClass("no-scroll");
    $("body").toggleClass("no-scroll");
  });
});
document.addEventListener("DOMContentLoaded", function () {
  const swiper = new Swiper(".swiper", {
    centeredSlides: true,
    loop: true,
    speed: 800,
    slidesPerView: 1,
    spaceBetween: 0,
    autoplay: {
      delay: 4000,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 1,
      },
      1280: {
        slidesPerView: 1.9,
      },
      1600: {
        slidesPerView: 2,
      },
      2000: {
        slidesPerView: 2.4,
      },
      2400: {
        slidesPerView: 3,
      },
    },
  });

  function adjustButtonSize() {
    const firstSlide = document.querySelector(".swiper-slide");
    const swiperButtonOuter = document.querySelector(".swiper-button-outer");

    if (firstSlide && swiperButtonOuter) {
      const slideWidth = firstSlide.clientWidth;
      const slideHeight = firstSlide.clientHeight;

      swiperButtonOuter.style.width = `${slideWidth}px`;
      swiperButtonOuter.style.height = `${slideHeight}px`;
    }
  }

  // 初期化時にボタンのサイズを調整 (500ミリ秒待機)
  setTimeout(adjustButtonSize, 800);

  // 800ミリ秒ごとにボタンのサイズを調整
  setInterval(adjustButtonSize, 500);

  // ウィンドウサイズ変更時にもボタンのサイズを調整
  window.addEventListener("resize", adjustButtonSize);
});
let swiper2 = new Swiper(".swiper-container", {
  loop: true,
  centeredSlides: true,
  slidesPerView: "1",
  spaceBetween: 100,
  allowTouchMove: true,
  grabCursor: true,
  speed: 900,
  followFinger: true,
  slideToClickedSlide: false,

  navigation: {
    nextEl: ".swiper-button-next3",
    prevEl: ".swiper-button-prev3",
    clickable: true, //クリックに反応させる
  },
  breakpoints: {
    769: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
  },
});
