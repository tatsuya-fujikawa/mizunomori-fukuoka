(()=>{"use strict";let e,t;!function(){const e=document.querySelectorAll(".c-tabMenu__tab-menu li a"),t=document.querySelectorAll(".c-tabMenu__content");e.forEach((n=>{n.addEventListener("click",(i=>{i.preventDefault(),e.forEach((e=>{e.classList.remove("active")})),n.classList.add("active"),t.forEach((e=>{e.classList.remove("active")})),document.getElementById(n.dataset.id).classList.add("active")}))}))}(),function(){const e=document.querySelector(".js-humberger"),t=document.getElementById("js-nav");e.addEventListener("click",(()=>{e.classList.toggle("is-open"),t.classList.toggle("is-open")}))}(),$((function(){$(".js-accordion").length&&($(".js-accordion").click((function(){$(this).toggleClass("on"),$(this).nextAll(".js-content").slideToggle("500")})),$(".js-closeaccordion").click((function(){$(this).parent().hide(),$(this).parent().prev().removeClass("on")})))})),MicroModal.init({openClass:"is-open",disableScroll:!0,awaitOpenAnimation:!0,awaitCloseAnimation:!0}),document.getElementsByClassName("swiper-slide"),window.addEventListener("load",(()=>{768<window.innerWidth?t=!1:(n(),t=!0)}),!1),window.addEventListener("resize",(()=>{768<window.innerWidth&&t?(e.destroy(!1,!0),t=!1):768>=window.innerWidth&&!t&&(n(),t=!0)}),!1);const n=()=>{e=new Swiper(".swiper",{effect:"fade",loop:!0,slidesPerView:1,autoplay:{delay:3e3},pagination:{el:".swiper-pagination"}})}})();