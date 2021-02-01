$(() =>{
  $(".slider_inner, .news_slider_inner").slick({
    nextArrow: '<button type="button" class="slick_btn slick-next"></button>',
    prevArrow: '<button type="button" class="slick_btn slick-prev"></button>',
    infinite: false,
    dots: true,
  });

  $("select").styler();

  $(".header_btn_menu").on("click", function () {
    $(".menu ul").slideToggle();
  });

  $(".services_item").click(function () {
    $(this).toggleClass("active");
  });

  // $(".services_item .services_item_link").on("click", function () {
  //   $(".services_item").toggleClass("active");
  // });

  // $(".services_item .services_item_link").on("click", function () { 
  //   $(".services_item").addClass("active");
  //   $(this).removeClass("active");
  // });
})

