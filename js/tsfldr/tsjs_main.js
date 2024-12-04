(function ($) {
  $(document).ready(function () {
    $._slider_autoplay = false;
    // animation for hamburger and exit menu icon and search panel
    if ($("body").hasClass("TSMView")) {
    }
    //------------------------------------AOS ---------------------------------------//
    // Define the AOS attributes and inject its attrs to elements
    $._AOSInject = function add_aos() {
      const aosAttributesFadeup = {
        "data-aos": "fade-up",
        "data-aos-duration": "800",
        "data-aos-easing": "ease-in-out",
      };

      const aosAttributesFadedown = {
        "data-aos": "fade-down",
        "data-aos-duration": "800",
        "data-aos-easing": "ease-in-out",
      };

      const aosAttributesFaderight = {
        "data-aos": "fade-right",
        "data-aos-duration": "900",
        "data-aos-easing": "ease-in-out",
      };
      const aosAttributesFadeleft = {
        "data-aos": "fade-left",
        "data-aos-duration": "700",
        "data-aos-easing": "ease-in-out",
      };
      const aosAttributesFade = {
        "data-aos": "fade",
        "data-aos-duration": "1000",
        "data-aos-easing": "ease-in-out",
      };
      //
      const SearchTagsForAos = [
        "a",
        "span",
        "p",
        "h1",
        "h2",
        "h3",
        "h4",
        "h5",
        "h6",
        "img",
      ];

      SearchTagsForAos.forEach((tag) => {
        const elements = document.querySelectorAll(tag);
        elements.forEach((element) => {
          if (element.tagName == "A") {
            if ($.IsRtl == true) {
              for (const [attr, value] of Object.entries(
                aosAttributesFaderight
              )) {
                element.setAttribute(attr, value);
              }
            }
          } else if (element.tagName == "SPAN") {
            if ($.IsRtl == true) {
              for (const [attr, value] of Object.entries(
                aosAttributesFaderight
              )) {
                element.setAttribute(attr, value);
              }
            }
          } else if (element.tagName == "P") {
            for (const [attr, value] of Object.entries(aosAttributesFadedown)) {
              element.setAttribute(attr, value);
            }
          } else if (
            element.tagName == "H1" ||
            element.tagName == "H2" ||
            element.tagName == "H3" ||
            element.tagName == "H4" ||
            element.tagName == "H5" ||
            element.tagName == "H6"
          ) {
            for (const [attr, value] of Object.entries(aosAttributesFadedown)) {
              element.setAttribute(attr, value);
            }
          } else if (element.tagName == "IMG") {
            for (const [attr, value] of Object.entries(aosAttributesFade)) {
              element.setAttribute(attr, value);
            }
          } else if (element.tagName == "DIV") {
            for (const [attr, value] of Object.entries(
              aosAttributesFaderight
            )) {
              element.setAttribute(attr, value);
            }
          }
        });
      });
    };
    $.TSAddFunc("_AOSInject", $._AOSInject);
    //-------------------------------- End AOS ---------------------------------//



    
    //************************** */ tshome page js **********************
    $._tsCanvase_Cats = () => {
      const pagination = $(".categories-list");

      // Add event listener to child elements of `.pagination`
      pagination.on("click", ".category-item", function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor
        // Remove the class from previously active element
        $(".active_bg_black").removeClass("active_bg_black");

        // Add the class to the clicked element
        $(this).addClass("active_bg_black");
      });
    };
    $.TSAddFunc("_tsCanvase_Cats", $._tsCanvase_Cats);

   
    //************************** */ tsstores page js **********************
    const pagination = $(".pagination");  
    // Add event listener to child elements of `.pagination`
    pagination.on("click", ".pg_num", function (e) {
      e.preventDefault(); // Prevent default link behavior if it's an anchor
      // Remove the class from previously active element
      $(".active_bg_black").removeClass("active_bg_black");

      // Add the class to the clicked element
      $(this).addClass("active_bg_black");
    });
 

  $.TSAddFunc("_tsstoresPagination", $._tsstoresPagination);
    $._tsstoresCategoriesTags = () => {
      const tagContainer = $(".catBtn");

      // On mouseenter: Apply hover styles
      tagContainer.on("mouseenter", (e) => {
        const visitedElement = $(e.currentTarget);
        console.log('clocked in eneter');
        visitedElement.find('span').css("color", "var(--tscl-F)");
        visitedElement.css("background-color", "var(--tscl-0)");
      });

      // On mouseleave: Revert styles if not selected
      tagContainer.on("mouseleave", (e) => {
        const visitedElement = $(e.currentTarget);

        // If the element has the 'selected' class, keep its styles
        if (visitedElement.hasClass("selected")) {
          visitedElement.find('span').css("color", "var(--tscl-F)");
          visitedElement.css("background-color", "var(--tscl-0)");
        }
        // Otherwise, reset to base styles
        else {
      
          visitedElement.find('span').css("color", "var(--tscl-0)");
          visitedElement.css("background-color", "var(--tscl-F)");
        }
      });
      tagContainer.on("click", (e) => {
        // Reset all buttons
        $(".catBtn").removeClass("selected");
        $(".catBtn").css("background-color", "white");
        $(".catBtn").find("span").css("color", "black");
        // Apply styles to the clicked button
        
        const clickedElement = $(e.currentTarget);
        clickedElement.addClass("selected");
        clickedElement.css("background-color", "black");
        clickedElement.find("span").css("color", "white");
      });
    };
    $.TSAddFunc("_tsstoresCategoriesTags", $._tsstoresCategoriesTags);

    $._tsstoresTemoCard = () => {
      const temoCard = $(".temoCard");
      temoCard.on("mouseenter", (e) => {
        const vistedElement = $(e.currentTarget);
        vistedElement.find(".fa-chevron-left").css("right", "5px");
      });
      temoCard.on("mouseleave", (e) => {
        const vistedElement = $(e.currentTarget);
        vistedElement.find(".fa-chevron-left").css("right", "-5px");
      });
    };
    $.TSAddFunc("_tsstoresTemoCard", $._tsstoresTemoCard);
    $._tsstoresPagination = () => {
      const pagination = $(".pagination");

      // Add event listener to child elements of `.pagination`
      pagination.on("click", ".pg_num", function (e) {
        e.preventDefault(); // Prevent default link behavior if it's an anchor
        // Remove the class from previously active element
        $(".active_bg_black").removeClass("active_bg_black");

        // Add the class to the clicked element
        $(this).addClass("active_bg_black");
      });
    };
   
    //************************** */ End tsstores page js **********************



     $._reinitAos= $('.accordion-button').click(function() {
     setTimeout(()=>{
      AOS.init();
     },1000)
       // This will refresh AOS animations
  });
  $.TSAddFunc("_reinitAos", $._reinitAos);
    //

    // ****************************** Sliders Begain********************************
    $._owlTopSlider = $(".tsc-sec-tstopslider .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1000,
      autoplaySpeed: 3000,
      autoplayTimeout: 8000,
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
    $.TSAddFunc("_owlTopSlider", $._owlTopSlider);

    //

    //---------

    $._tsnewqbns = $(".tsc-sec-tsnewqbns .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1000,
      autoplayTimeout: 3000,

      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
        },
        425: {
          items: 1,
          stagePadding: 50,
        },
        550: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 0,
        },
      },
    });
    $.TSAddFunc("_tsnewqbns", $._tsnewqbns);
    $._tsrelqbns = $(".tsc-sec-tsrelqbns .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1000,
      autoplayTimeout: 3000,

      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
        },
        425: {
          items: 1,
          stagePadding: 50,
        },
        550: {
          items: 2,
        },
        768: {
          items: 3,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 0,
        },
      },
    });
    $.TSAddFunc("_tsrelqbns", $._tsrelqbns);

    $._tsnewoffers = $(".tsc-sec-tsnewoffers .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1000,
      autoplayTimeout: 3000,

      responsive: {
        0: {
          items: 2,
          margin: 20,
          stagePadding: 25,
        },
        375: {
          items: 2,
          margin: 20,
          stagePadding: 25,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 20,
        },
        768: {
          items: 3,
          margin: 20,
        },
        1000: {
          items: 4,
          stagePadding: 0,
          margin: 50,
        },
      },
    });
    $.TSAddFunc("_tsnewoffers", $._tsnewoffers);

    //
    $._tsbststores = $(".tsc-sec-tsbststores .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 4000,

      responsive: {
        0: {
          items: 3,
          margin: 10,
          stagePadding: 10,
        },
        375: {
          items: 3,
          margin: 10,
          stagePadding: 10,
        },
        425: {
          items: 4,

          stagePadding: 0,
        },
        550: {
          items: 4,
        },
        768: {
          items: 4,
        },
        1000: {
          items: 5,
          stagePadding: 0,
          
        },
        
        1500: {
          items: 6,
          stagePadding: 0,
          
        },
      },
    });
    $.TSAddFunc("_tsbststores", $._tsbststores);

    $._tsblogslider = $(".tsc-sec-tsblogslider .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 4000,

      responsive: {
        0: {
          items: 1,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 1,
          margin: 20,
          stagePadding: 50,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 25,
        },
        768: {
          items: 2,
          margin: 25,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 25,
        },
      },
    });

    $.TSAddFunc("_tsblogslider", $._tsblogslider);
    $._tsrelpsts = $(".tsc-sec-tsrelpsts .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 4000,

      responsive: {
        0: {
          items: 1,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 1,
          margin: 20,
          stagePadding: 50,
        },
        425: {
          items: 2,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 2,
          margin: 25,
        },
        768: {
          items: 2,
          margin: 25,
        },
        1000: {
          items: 3,
          stagePadding: 0,
          margin: 25,
        },
      },
    });

    $.TSAddFunc("_tsrelpsts", $._tsrelpsts);
    //
    $._tsprtnrs = $(".tsc-sec-tsprtnrs .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 4000,

      responsive: {
        0: {
          items: 3,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        425: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 4,
          margin: 25,
        },
        768: {
          items: 5,
          margin: 25,
        },
        1000: {
          items: 7,
          stagePadding: 0,
          margin: 0,
        },
      },
    });
    $.TSAddFunc("_tsprtnrs", $._tsprtnrs);

    $._tspstslist = $(".tsc-sec-tspstslist .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._slider_autoplay,
      margin:30,
      smartSpeed: 1500,
      autoplaySpeed: 1500,
      autoplayTimeout: 4000,

      responsive: {
        0: {
          items: 3,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        425: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        550: {
          items: 4,
          margin: 25,
        },
        768: {
          items: 4,
          margin: 25,
        },
        1000: {
          items: 5,
          stagePadding: 0,
          margin: 0,
          stagePadding:50
        },
        },
        1500: {
          items: 7,
          stagePadding: 0,
          margin: 20,
          stagePadding:50
        },
      
    });
    $.TSAddFunc("_tspstslist", $._tspstslist);
    // 
     // Handle active state of _tspstslist
     $._actvStateHandlerOfTspstslist= $('.tsc-sec-tspstslist .nav-item').click(function(e) {
      e.preventDefault();
      $('.tsc-sec-tspstslist .nav-item').removeClass('active');
      $(this).addClass('active');
  });
  $.TSAddFunc("_actvStateHandlerOfTspstslist", $._actvStateHandlerOfTspstslist);
    //
    $._SlidersNav = function () {
      $(".tsc-sec-tsnewqbns .navbtn_left").click(function () {
        $._tsnewqbns.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsnewqbns .navbtn_right").click(function () {
        $._tsnewqbns.trigger("prev.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_left").click(function () {
        $._tsnewoffers.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_right").click(function () {
        $._tsnewoffers.trigger("prev.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsbststores .navbtn_left").click(function () {
        $._tsbststores.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsbststores .navbtn_right").click(function () {
        $._tsbststores.trigger("prev.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsblogslider .navbtn_left").click(function () {
        $._tsblogslider.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsblogslider .navbtn_right").click(function () {
        $._tsblogslider.trigger("prev.owl.carousel", [1000]);
      });
      $(".tsc-sec-tsprtnrs .navbtn_left").click(function () {
        $._tsprtnrs.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tspstslist .navbtn_left").click(function () {
        $._tspstslist.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tstopslider .navbtn_left").click(function () {
        $._owlTopSlider.trigger("next.owl.carousel", [1000]);
      });
      $(".tsc-sec-tstopslider .navbtn_right").click(function () {
        $._owlTopSlider.trigger("prev.owl.carousel", [1000]);
      });
    };

    $.TSAddFunc("_SlidersNav", $._SlidersNav);

    //
  });
})(jQuery);
