!function($){if(AOS.init(),!function(e){var o=("; "+document.cookie).split("; "+e+"=");if(2===o.length)return o.pop().split(";").shift()}("acceptedPrivacyPolicy")){var e=new bootstrap.Modal(document.getElementById("privacyPolicy"));e.show()}$('a[href="#cookiePolicy"]').on("click",(function(e){e.preventDefault(),new bootstrap.Modal(document.getElementById("privacyPolicy")).show()})),document.getElementById("acceptButton").addEventListener("click",(function(){var o,i,s,t;o="acceptedPrivacyPolicy",i="true",s=30,(t=new Date).setTime(t.getTime()+24*s*60*60*1e3),document.cookie=o+"="+i+";expires="+t.toUTCString(),e.hide()})),document.getElementById("rejectButton").addEventListener("click",(function(){window.location.href="https://google.com"})),$(document).on("input",".gfield input, .gfield select",(function(){$(this).closest(".gfield").removeClass("gfield_error"),$(this).siblings(".gfield_error").remove()})),$(document).on("change",".gfield input",(function(){$(this).is(":checked")&&($(this).closest(".gfield").removeClass("gfield_error"),$(this).siblings(".gfield_error").remove())}));var o=window.pageYOffset,i=$(".hamburger"),s=$(".scrollNav");$(window).on("scroll",(function(){var e=$("#fullDisclosure"),t=$(".disclosureSection__intro"),n=t.outerHeight(),a=e.offset().top,d=a+e.outerHeight(),c=$(window).scrollTop()+$(window).height();c>=a+n?t.hide():c<=d&&t.show();var l=window.pageYOffset;o>l?(i.removeClass("hidden"),s.removeClass("hidden"),l<32&&s.addClass("hidden")):l>32&&(i.addClass("hidden"),s.addClass("hidden")),o=l}));const t=document.getElementById("menuToggle"),n=document.body;if(t.addEventListener("change",(function(){this.checked?(n.classList.add("menuOpen"),$(".navigationMenu").addClass("showMenu")):(n.classList.remove("menuOpen"),$(".navigationMenu").removeclass("showMenu"))})),$("body").hasClass("page-demodex-blepharitis")){var a=$(".demodexBlepharitis__whatIsDB--eyes--eye"),d=0;!function e(){var o=(d+1)%a.length;a.eq(o).fadeIn(1e3,(function(){a.eq(d).fadeOut(500,(function(){d=o,setTimeout(e,4500)}))}))}(),$(".demodexBlepharitis__lidsLibrary--slider").slick({infinite:!0,slidesToShow:4,slidesToScroll:4,dots:!0,responsive:[{breakpoint:990,settings:{arrows:!0,slidesToShow:3,slidesToScroll:3,infinite:!0}},{breakpoint:768,settings:{arrows:!0,slidesToShow:2,slidesToScroll:2,infinite:!0}},{breakpoint:540,settings:{arrows:!1,centerMode:!0,centerPadding:"35px",slidesToShow:1,slidesToScroll:1,infinite:!1}}]}),$(".demodexBlepharitis__keepEyeOut--slider").slick({dots:!0,centerMode:!1,centerPadding:0,responsive:[{breakpoint:540,settings:{arrows:!1,centerMode:!0,centerPadding:"35px",slidesToShow:1,infinite:!1}}]})}Fancybox.bind('[data-fancybox="gallery"]',{Thumbs:!1,Toolbar:!1,Image:{zoom:!1,click:!1,wheel:"slide"}});const c=new URLSearchParams(window.location.search).get("section");function l(e){$(e).addClass("animate").addClass("active").siblings().removeClass("active")}if(c&&$(window).on("load",(function(){if($("#"+c)){$(".aboutXdemvy__studySection").length>0?($(".nav-link").removeClass("active"),$(".tab-pane").removeClass("active").removeClass("show"),$("#"+c).addClass("active").addClass("show"),$("#nav-"+c).addClass("active"),$(".accordion-button").addClass("collapsed"),$("#heading-"+c+" button").removeClass("collapsed"),$(".accordion-collapse").removeClass("show"),$("#collapse-"+c).addClass("show"),$("html, body").animate({scrollTop:$(".aboutXdemvy__studySection--tabs").offset().top},500)):console.error("Element not found")}})),$(".aboutXdemvy__studySection--studyDesign .accordion").on("show.bs.collapse",(function(e){$(".aboutXdemvy__studySection--studyDesign").addClass("accordionOpen")})),$(".aboutXdemvy__studySection--studyDesign .accordion").on("hide.bs.collapse",(function(e){$(".aboutXdemvy__studySection--studyDesign").removeClass("accordionOpen")})),$(".aboutXdemvy__seeImpact--slider").slick({infinite:!0,slidesToShow:1,slidesToScroll:1,dots:!0}),$(".aboutXdemvy__studySection--tab--chart").draggable({axis:"x",containment:[-400,0,0,0]}),$(".aboutXdemvy__studySection--tab--mobileScroll").on("mousedown",(function(){$(this).removeClass("hint")})),window.location.pathname.endsWith("/dosing/")){var r=window.location.hash;"#abby"!==r&&"#jared"!==r||setTimeout((function(){var e=$("#patients").offset().top;$("html, body").animate({scrollTop:e},250,(function(){l(r)}))}),500)}$(".dosing__faces--face--info--close").on("click",(function(){$(this).parent(".dosing__faces--face--info").removeClass("active")})),$(".dosing__faces--face").on("click",(function(){l($(this).attr("href"))})),$(".dosing__faces__mobile--slider").slick({dots:!0,arrows:!0,centerMode:!1,centerPadding:0,adaptiveHeight:!0})}(jQuery);