!function(s){"use strict";Berserk.behaviors.footer_init={attach:function(e,r){if(s(".brk-footer__wrapper:not(.rendered)",e).each(function(){if(s(this).hasClass("brk-footer__wrapper_animated")){var e=s(this),r=s(this).parent(),t=r.prev(),i=Math.max(document.documentElement.clientHeight,window.innerHeight||0),o=function(){r.css("height",e.outerHeight(!0)).addClass("brk-footer_animated"),t.css("margin-bottom",e.outerHeight(!0)).css("background-color","#fff").css("position","relative").css("z-index","2")};i>=e.outerHeight(!0)&&o(),s(this).on("DOMSubtreeModified",function(){e.outerHeight(!0)!==r.outerHeight(!0)&&i>=e.outerHeight(!0)&&o()}),s(document).on("scroll",function(){e.outerHeight(!0)!==r.outerHeight(!0)&&i>=e.outerHeight(!0)&&o()})}s(this).addClass("rendered")}),s(".brk-slider_shop-footer:not(.rendered)").length){if(void 0===s.fn.slick)return console.log("Waiting for the slick library"),void setTimeout(Berserk.behaviors.footer_init.attach,r.timeout_delay,e,r);var i="rtl"===s("html").attr("dir");s(".brk-slider_shop-footer:not(.rendered)",e).each(function(){var e=s(this).find(".brk-slider__nav-prev"),r=s(this).find(".brk-slider__nav-next"),t=s(this).find(".brk-slider__items");e.on("click",function(){t.slick("slickPrev")}),r.on("click",function(){t.slick("slickNext")}),t.slick({accessibility:!1,arrows:!1,dots:!1,slidesToShow:2,slidesToScroll:2,rtl:i,responsive:[{breakpoint:850,settings:{slidesToShow:1,slidesToScroll:1}}]}),s(this).addClass("rendered")})}}},Berserk.behaviors.footer_scrollr_init={attach:function(e,r){if(s("[data-skrollr]:not(.skrollr-rendered)").length){if("undefined"==typeof skrollr)return console.log("Waiting for the skrollr library"),void setTimeout(Berserk.behaviors.footer_scrollr_init.attach,r.timeout_delay,e,r);992<=(window.innerWidth||s(window).width())&&(s("[data-skrollr]:not(.skrollr-rendered)").addClass("skrollr-rendered"),setTimeout(function(){skrollr.init({forceHeight:!1})},1500))}}}}(jQuery);