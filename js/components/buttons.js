!function(o){"use strict";Berserk.behaviors.buttons_js={attach:function(t,e){o(window).on("load",function(){var e;o(t).parent().find(".btn__dropdown_wrap:not(.rendered)").addClass("rendered").each(function(){o(this).hasClass("open")?(e=0,o(this).children().each(function(){e+=o(this).outerHeight()}),o(this).css({height:e})):o(this).css({height:o(this).children("li:first-child").innerHeight()}),o(this).on("click",function(t){t.target===this&&(e=0,o(this).children().each(function(){e+=o(this).outerHeight()}),o(this).toggleClass("open"),o(this).hasClass("open")?o(this).css({height:e}):o(this).css({height:o(this).children("li:first-child").innerHeight()}))})}),o(t).parent().find(".btn-inside-out:not(.rendered)").addClass("rendered").each(function(){var t=o(this).find(".text"),e=t.text(),n=o(this).find(".before").text(),s=o(this).hasClass(".btn-icon-right");n.length>e.length&&t.text(n).css("min-width",function(){return s?t.outerWidth()+30:t.outerWidth()}).text(e)})}),o(t).parent().find(".btn-pos:not(.rendered)").addClass("rendered").each(function(){o(this).on("mouseenter",function(t){var e=o(this).offset(),n=t.pageX-e.left,s=t.pageY-e.top;o(this).find("span").css({top:s,left:n})}).on("mouseout",function(t){var e=o(this).offset(),n=t.pageX-e.left,s=t.pageY-e.top;o(this).find("span").css({top:s,left:n})})}),o(t).parent().find(".slide-bg-wrap:not(.rendered)").addClass("rendered").each(function(){o(this).on("mouseenter",function(t){var e=o(this).offset(),n=t.pageX-e.left,s=t.pageY-e.top;o(this).find(".slide-bg").css({top:s,left:n})}).on("mouseout",function(t){var e=o(this).offset(),n=t.pageX-e.left,s=t.pageY-e.top;o(this).find(".slide-bg").css({top:s,left:n})})}),o(t).parent().find(".btn-gradient:not(.rendered)").addClass("rendered").each(function(){var t=o(this),e=t.attr("style")||"",i="";e&&(t.data("brk-btn-style",e),i=t.data("brk-btn-style")),t.on("mousemove",function(t){var e=o(this).offset(),n=t.pageX-e.left,s=t.pageY-e.top;o(this).attr("style","--x:"+n+"px;--y:"+s+"px;"+i)})})}}}(jQuery);