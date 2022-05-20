import { tabSwitch } from "./js/tabmenu";
import { humbergerButton } from "./js/humberger";

import "./sass/style.scss";

tabSwitch();
humbergerButton();

$(function () {
  if($('.js-accordion').length){
    $('.js-accordion').click(function() {
      $(this).toggleClass('on');
      $(this).parents('.c-case__card').toggleClass('on');
      $(this).nextAll('.js-content').toggleClass('on');
    });
    $('.js-closeaccordion').click(function() {
      $(this).parent().hide();
      $(this).parent().prev().removeClass('on');
    });
  }
});


//モーダル
MicroModal.init({
  openClass: 'is-open',
  disableScroll: true,
  awaitOpenAnimation: true,
  awaitCloseAnimation: true,
});

const swiperSlides = document.getElementsByClassName('swiper-slide');
const breakPoint = 768;
let mySwiper;
let mySwiperBool;

window.addEventListener('load', () => {
  if( breakPoint < window.innerWidth) {
    mySwiperBool = false;
  } else {
    createSwiper();
    mySwiperBool = true;
  }
}, false);

window.addEventListener('resize', () => {
  if(breakPoint < window.innerWidth && mySwiperBool) {
    mySwiper.destroy(false,true);
    mySwiperBool = false;
  } else if (breakPoint >= window.innerWidth && !(mySwiperBool)) {
    createSwiper();
    mySwiperBool = true;
  }
},false);

const createSwiper = () => {
  mySwiper = new Swiper('.swiper', {
    // Optional parameters
    effect: 'fade',
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
  
  });
}

swiperCases = new Swiper('.swiper__cases', {
  effect: 'fade',
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});