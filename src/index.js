import "./sass/style.scss";

import { tabSwitch } from "./js/tabmenu";

tabSwitch();

$(function () {
  if($('.js-accordion').length){
    $('.js-accordion').click(function() {
      $(this).toggleClass('on');
      $(this).nextAll('.js-content').slideToggle('500');
    });
  }

});