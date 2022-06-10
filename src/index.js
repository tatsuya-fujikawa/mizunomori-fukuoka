import { tabSwitch } from "./js/tabmenu";
import { tabSwitchDiet02 } from "./js/tabmenuDiet";
import { tabSwitchDiet03 } from "./js/tabmenuDiet";
import { humbergerButton } from "./js/humberger";

import "./sass/style.scss";

tabSwitch();
tabSwitchDiet02();
tabSwitchDiet03();
humbergerButton();

$(function () {
  if($('.js-accordion').length){
    $('.js-accordion').click(function() {
      $(this).toggleClass('on');
      $(this).parents('.c-case__card').toggleClass('on');
      $(this).nextAll('.js-content').slideToggle(300);
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
    // createSwiper02();
    mySwiperBool = true;
  }
}, false);

window.addEventListener('resize', () => {
  if(breakPoint < window.innerWidth && mySwiperBool) {
    mySwiper.destroy(false,true);
    // mySwiper02.destroy(false,true);
    mySwiperBool = false;
  } else if (breakPoint >= window.innerWidth && !(mySwiperBool)) {
    createSwiper();
    // createSwiper02();
    mySwiperBool = true;
  }
},false);

const createSwiper = () => {
  mySwiper = new Swiper('.swiper', {
    // Optional parameters
    effect: 'fade',
    fadeEffect: {
      crossFade: true
    },
    loop: true,
    slidesPerView: 1,
    autoplay: {
      delay: 3000,
    },
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  
  });
}

gsap.set('.js-anim', {autoAlpha: 0});
gsap.set('.js-anim02', {autoAlpha: 0});

gsap.to('.js-anim', {
  autoAlpha: 1,
  scrollTrigger: {
    trigger: '.js-trigger',
    start: 'top center',
  },
  stagger: {
    from: "start",
    amount: 0.5
  }
});

gsap.to('.js-anim02', {
  autoAlpha: 1,
  scrollTrigger: {
    trigger: '.js-trigger02',
    start: 'top center',
  },
  stagger: {
    from: "start",
    amount: 0.5
  }
});



swiperCases = new Swiper('.swiper__cases', {
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  loop: true,
  slidesPerView: 1,
  spaceBetween: 30,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
