$(function () {
    $('.header__btn').on('click', function (){
        $('.rightside-menu').removeClass('rightside-menu--close');
    });
    $('.rightside-menu__close').on('click', function (){
        $('.rightside-menu').addClass('rightside-menu--close');
    });
    $('.top__slider').slick({
        dots: true,
        arrows: false,
        fade: true,
        autoplay: true,
    });

    var mixer = mixitup('.gallery__inner', {
        load: {
            filter: '.living'
        }
    });
})



// $((function(){
//     $(".header__btn").on("click",(function(){
//         $(".rightside-menu").removeClass("rightside-menu--close"),
//         $(".rightside").removeClass("rightside--visible")})),

//         $(".rightside-menu__close").on("click",(function(){
//             $(".rightside-menu").addClass("rightside-menu--close"),
//             $(".rightside").addClass("rightside--visible")})),




//             $(".header__btn-menu").on("click",(function(){
//                 $(".menu").toggleClass("menu--visible"),
//                 $(this).toggleClass("active")})),
//                 $(window).width()<=655&&$(".works__item--measurements").appendTo($(".works__items-block"))}));





//                 const swiper=new Swiper(".swiper-container",{slidesPerView:1,loop:!0,spaceBetween:200,pagination:{el:".swiper-pagination",clickable:!0},navigation:{nextEl:".swiper-button-next",prevEl:".swiper-button-prev"},autoplay:{delay:5e3}});var mixer=mixitup(".gallery__inner",{load:{filter:".category-livingroom"}});