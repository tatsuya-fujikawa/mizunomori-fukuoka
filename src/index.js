import { tabSwitch } from "./js/tabmenu";
import { humbergerButton } from "./js/humberger";
import "./sass/style.scss";

tabSwitch();
humbergerButton();

$(function () {
  if($('.js-accordion').length){
    $('.js-accordion').click(function() {
      $(this).toggleClass('on');
      $(this).nextAll('.js-content').slideToggle('500');
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