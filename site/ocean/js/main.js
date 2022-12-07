$(function () {
  $('.header-slider').slick({
    dots: true,
    vertical: true,
    prevArrow: '<button type="button" class="slick-prev"><img src="images/next.svg" alt=""></button>',
    nextArrow: '<button type="button" class="slick-next"><img src="images/prev.svg" alt=""></button>',
    responsive: [
      {
        breakpoint: 361,
        settings: {
          dots: false,
          arrows: false,
          autoplay: true,
          autoplaySpeed: 2000,
        }
      }
    ]
  });
  $('.product__name').slick({
    slidesToShow: 6,
    vertical: true,
    slidesToScroll: 1,
    focusOnSelect: true,
    prevArrow: '<button type="button" class="product-prev"><img src="images/arr-top.svg" alt=""></button>',
    nextArrow: '<button type="button" class="product-next"><img src="images/arr-bottom.svg" alt=""></button>',
    asNavFor: '.product__content',
    centerMode: true,
    responsive: [
      {
        breakpoint: 891,
        settings: {
          slidesToShow: 2,
          vertical: false,
          arrows: false,
          dots: true,
        }
      }
    ]
  });
  $('.product__content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    vertical: true,
    asNavFor: '.product__name',
    arrows: false,
  });
  $('.menu__btn').on('click', function () {
    $('.menu__list').toggleClass('menu__list--active')
  });
});


