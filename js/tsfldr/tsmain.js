(function ($) {
  $(document).ready(function () {
    //!!!!!!!!!!! Need Enhancement to globalize for all in one place in Lib!!!!!!!!!!
    $.IsRtl = true;
    const DirectionFn = function () {
      const Dir = document.querySelector("html").getAttribute("dir");
      if (Dir == "rtl") {
        $.IsRtl = true;
      } else if (Dir == "ltr") {
        $.IsRtl = false;
      } else {
        $.IsRtl = false;
      }
    };
    DirectionFn();
    //
    function initMenu() {
      // document.getElementsByClassName('tsc-mnu-close')[0].addEventListener('click', function () {
      //     var navbarCollapse = document.getElementById('TopMenuModal');
      //     if (navbarCollapse.classList.contains('show')) {
      //     // If the menu is open, close it
      //     new bootstrap.Collapse(navbarCollapse, {toggle: false}).hide();
      //     } else {
      //     // If the menu is closed, open it
      //     new bootstrap.Collapse(navbarCollapse, {toggle: false}).show();
      //     }
      // });
      //TiknoSoft ----------------------->>
      const currentlocate = location.href; // Return the Current page..
      console.log(currentlocate);
      const menuItem = document.querySelectorAll(
        "#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk"
      );
      const menulength = menuItem.length;
      for (let i = 0; i < menulength; i++) {
        if (menuItem[i].href === currentlocate) {
          console.log("yes");
          menuItem[i].classList.add("active");
        }
      }

      //-------Menu---------
      const _SetActive = function (SrcEle) {
        const currentlocate = location.href; // Return the Current page..
        $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").each((index, element) => {
          element.classList.remove("active");
          if (
            element === SrcEle ||
            (SrcEle == null && element.href === currentlocate)
          ) {
            element.classList.add("active");
          }
        });
      };
      $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").click(function () {
        _SetActive(this);
      });
      _SetActive(); //One Time at Begin
    }
    //!!!! ********************** */ Added by TiknoSoft Front Team************************************************/
    // animation for hamburger and exit menu icon and search panel
   

    let clicked = false;
let translated = false;

$(".search-iconn").on("click", function(event) {
    if (!translated) {
        translated = true;
        $(".tsc-top-mnu").css("transform", "translateX(1000px)");
    }
    $(".search-panel").removeClass("hidden");

    $(".search-btn").on("click", function(e) {
        $(".tsc-top-mnu").css("transform", "none");
        translated = false;
        $(".search-panel").addClass("hidden");
    });

    event.stopPropagation();
});

$(".navbar-toggler").on("click", function(e) {
    if (!clicked) {
        clicked = true;
        $(".tsc-playbtn img").css("display", "none");
        $(".hamborger-exite-toggler").addClass("rotate-element");
        $(".Search").css("display", "flex");
        $(".black-bg-collapse").css("opacity", "1");

        setTimeout(function() {
            $(".hamborger-exite-toggler").removeClass("rotate-element");
            $(".hamborger-exite-toggler").attr("src", "./tsimg/falat-header-exite-icon.svg");
        }, 500);

    } else {
        clicked = false;
        
        if (translated) {
            $(".tsc-top-mnu").css("transform", "none");
            if (!$(".search-panel").hasClass("hidden")) {
                $(".search-panel").addClass("hidden");
            }
            translated = false;
        }

        $(".hamborger-exite-toggler").addClass("rotate-element");
        $(".black-bg-collapse").css("opacity", "0");
        $(".Search").css("display", "none");
        $(".tsc-playbtn img").css("display", "block");

        setTimeout(function() {
            $(".hamborger-exite-toggler").attr("src", "./tsimg/falat-menu-hamborger.svg");
            $(".hamborger-exite-toggler").removeClass("rotate-element");
        }, 500);
    }

    e.stopPropagation();
});

    // Define the AOS attributes and inject its attrs to elements
   function add_aos () {
    const aosAttributesFadeup = {
        "data-aos": "fade-up", 
        "data-aos-duration": "1000", 
        "data-aos-easing": "ease-in-out", 
      };
  
    const aosAttributesFadedown = {
        "data-aos": "fade-down", 
        "data-aos-duration": "1500", 
        "data-aos-easing": "ease-in-out", 
      };
  
    const aosAttributesFaderight = {
        "data-aos": "fade-right", 
        "data-aos-duration": "800", 
        "data-aos-easing": "ease-in-out", 
      };
    const aosAttributesFadeleft = {
        "data-aos": "fade-left", 
        "data-aos-duration": "800", 
        "data-aos-easing": "ease-in-out", 
      };
    const aosAttributesFade = {
        "data-aos": "fade", 
        "data-aos-duration": "1500", 
        "data-aos-easing": "ease-in-out", 
      };
  

      const SearchTagsForAos = ["span", "p", "h1", "h2", "h3", "h4", "h5", "h6","img" ];
  

      SearchTagsForAos.forEach((tag) => {
        const elements = document.querySelectorAll(tag);
        elements.forEach((element) => {
            if(element.tagName == "A")
            { 
                if($.IsRtl == true)
                {
                    for (const [attr, value] of Object.entries(aosAttributesFaderight)) {
                        element.setAttribute(attr, value);
                      }
                }
                else
                {
                    for (const [attr, value] of Object.entries(aosAttributesFadeleft)) {
                        element.setAttribute(attr, value);
                      }
                }
             
            }
            else if(element.tagName =='SPAN')
            {
                if($.IsRtl == true)
                {
                    for (const [attr, value] of Object.entries(aosAttributesFaderight)) {
                        element.setAttribute(attr, value);
                      }
                }
                else
                {
                    for (const [attr, value] of Object.entries(aosAttributesFadeleft)) {
                        element.setAttribute(attr, value);
                      }
                }
            
            }
            else if(element.tagName =='P')
            {
                for (const [attr, value] of Object.entries(aosAttributesFadedown)) {
                    element.setAttribute(attr, value);
                    element.classList.add('tracking-in-expand')
                   
                  }
            }
            else if(element.tagName =='IMG')
            {
                for (const [attr, value] of Object.entries(aosAttributesFade)) {
                    element.setAttribute(attr, value);
                  }
            }
            else
            {
                
                for (const [attr, value] of Object.entries(aosAttributesFadeup)) {
                    element.setAttribute(attr, value);
                  }
            }
          
        });
      });
     }

    //!!!! ***************************End TiknoSoft Front Team********************************************** */

    //
    function initSliders() {
      const _owlprojectdetails = $(
        ".tsc-sec-tsproject .SliderX"
      ).owlCarousel({
        rtl: $.IsRtl,
        //items:1,
        //margin:20,
        //stagePadding:0,
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 1500,          
        autoplaySpeed: 1200,       
        autoplayTimeout: 6000,
        responsive: {
          0: {
            items: 1,
            stagePadding: 0,
          },
          375: {
            items: 1,
            stagePadding: 0,
          },
          425: {
            items: 1,
            stagePadding: 0,
          },
          550: {
            items: 1,
          },
          768: {
            items: 1,
          },
          1000: {
            items: 1,
            stagePadding: 0,
          },
        },
      });
     
     
     
     
     
      var _owlBlogs = $(".tsc-sec-tsblogs .SliderX").owlCarousel({
        rtl: $.IsRtl,
        //items:1,
        //margin:20,
        //stagePadding:0,
        loop: true,
        nav: false,
        dots: false,
        autoplay: true,
        smartSpeed: 1500,          
        autoplaySpeed: 1000,       
        autoplayTimeout: 5000,
        margin: 0,
        center:true,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1,
            stagePadding: 0,
          },
          375: {
            items: 1,
            stagePadding: 0,
          },
          425: {
            items: 1,
            stagePadding: 0,
          },
          550: {
            items: 1,
          },
          768: {
            items: 1,

            margin: 10,
          },
          1000: {
            items: 1,
            stagePadding: 280,
            margin: 10,
          },
        },
      });

      const _owlParteners = $(".tsc-sec-parteners .SliderX").owlCarousel({
        rtl: $.IsRtl,
        //items:1,
        //margin:20,
        //stagePadding:0,
        loop: true,
        nav: false,
        dots: true,
        autoplay: true,
        smartSpeed: 1500,          
        autoplaySpeed: 1000,       
        autoplayTimeout: 3000,

        responsive: {
          0: {
            items: 2,
            stagePadding: 0,
          },
          375: {
            items: 2,
            stagePadding: 0,
          },
          425: {
            items: 2,
            stagePadding: 0,
          },
          550: {
            items: 2,
          },
          768: {
            items: 2,
          },
          1000: {
            items: 2,
            stagePadding: 0,
            margin: 60,
          },
        },
      });
 
   
      var _owlfeatures= $(".tsc-sec-features .SliderX").owlCarousel({
            rtl: $.IsRtl,
            //items:1,
            //margin:20,
            //stagePadding:0,
            loop: true,
            nav: false,
            dots: false,
            autoplay: true,
            smartSpeed: 1500,          
            autoplaySpeed: 1000,       
            autoplayTimeout: 4000,
    
            responsive: {
              0: {
                items: 1,
                stagePadding: 0,
              },
              375: {
                items: 1,
                stagePadding: 0,
              },
              425: {
                items: 1,
                stagePadding: 0,
              },
              550: {
                items: 1,
                margin:0
              },
              768: {
                items: 2,
                
               
              },
              1000: {
                items: 2,
                stagePadding:50,
         
              },
            },
          });




      $(".tsc-sec-tsproject .owl-next-custom").click(function () {
        console.log("hey");
        _owlprojectdetails.trigger("next.owl.carousel", [1000]);
      });
      $('.tsc-sec-features .owl-prev-custom').click(function() {
        _owlfeatures.trigger('next.owl.carousel', [1000]);
      });

 
    }
    //----
    function InitCF7TSFix() {
      var form = $(".wpcf7-form");
      var spinner = $(".form7-spinner");

      form.on("submit", function () {
        spinner.show();
      });

      $(document).on(
        "wpcf7mailsent wpcf7invalid wpcf7spam wpcf7mailfailed",
        function () {
          spinner.hide();
        }
      );
    }
    //----
    function initOther() {
      //scroll top
      var scrollButton = $("#ts-gototop");
      $(window).on("scroll", function () {
        if ($(this).scrollTop() >= 700) {
          scrollButton.fadeIn(1000);
        } else {
          scrollButton.fadeOut(1000);
        }
      });
      //click to scroll top
      scrollButton.on("click", function () {
        $("html,body").animate(
          {
            scrollTop: 0,
          },
          600
        );
        return false;
      });
      //scroll top

      //---- Form7
    }
    //
    initMenu();
    console.log("here");
    initSliders();
    InitCF7TSFix();
    initOther();
    add_aos();
  });
})(jQuery);
