$(function () {
  //TOPへ戻るボタン
  const pagetop = $(".page-top");
  pagetop.hide();
  $(window).scroll(function () {
    if ($(this).scrollTop() > 500) {
      pagetop.fadeIn();
    } else {
      pagetop.fadeOut();
    }
  });

  pagetop.on("click", (event) => {
    $("body, html").animate(
      {
        scrollTop: 0,
      },
      500
    );
    return false;
  });
});
