  (function ($) {
    $(document).ready(function () {

   
    //------------------------------------AOS ---------------------------------------//
    // Define the AOS attributes and inject its attrs to elements
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

  

    $._updateFilterBtnCats = () => {
      // Get elements
      const $sortText1 = $(".sort-text1");
      const $CatsButtons = $(".category_value");
      const $CatItem = $(".category-item");
      const $applyButton = $("#applySort1");
      const $clearButton = $("#clearSort1");
      const $offcanvas = $("#offcanvasRight");

      // Store the default/initial value


      // Function to update the sort button text
      function updateSortButtonText(value) {
       
        $sortText1.text(value);
        // Add selected class to button
      }

      $CatItem.on("click", (e) => {
        $(".category-item").removeClass("selectedCat");
        $(e.target).closest(".category-item").addClass("selectedCat");
      });
      // Handle clear button click
      $clearButton.on("click", function () {

        updateSortButtonText($($(".category-item")[0]).attr("categories"));

      });
      // Handle apply button click
      $applyButton.on("click", function () {
        const $selectedCat = $(".category-item.selectedCat");
        if ($selectedCat.length) {
          currentValue = $selectedCat.find(".category_value").text();
      

          updateSortButtonText(currentValue);

          // Close the offcanvas
          const bsOffcanvas = bootstrap.Offcanvas.getInstance($offcanvas[0]);
          bsOffcanvas.hide();
        }
      });
    };
    $.TSAddFunc("_updateFilterBtnCats", $._updateFilterBtnCats);

    //************************** */ tsstores page js **********************
    const pagination = $(".pagination");
    // Add event listener to child elements of `.pagination`
    pagination.on("click", ".pg_num", function (e) {
      e.preventDefault(); 
      // Remove the class from previously active element
      $(".active_bg_black").removeClass("active_bg_black");

      // Add the class to the clicked element
      $(this).addClass("active_bg_black");
    });

    $.TSAddFunc("_tsstoresPagination", $._tsstoresPagination);
   
    $.TSAddFunc("_tsstoresCategoriesTags", $._tsstoresCategoriesTags);


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

   

    // ****************************** Sliders Begain********************************
    $._owlTopSlider = $(".tsc-sec-tstopslider .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay:  $._tsslof_tstopslider,
      smartSpeed: 500,
      autoplaySpeed: 500,
      autoplayTimeout: $._tsslsp_tstopslider,
      responsive: {
        0: {
          items: 1,
          stagePadding: 0,
        },
        375: {
          items: 1,
          stagePadding: 50,
          margin:15
        },
        425: {
          items: 1,
          stagePadding: 50,
          margin:15
        },
        550: {
          items: 1,
          stagePadding: 150,
          margin:25
        },
        768: {
          items: 1,
          stagePadding: 150,
          margin:25
        },
        1000: {
          items: 1,
          stagePadding: 200,
          margin:25
        },
        1350: {
          items: 1,
          stagePadding: 300,
          margin:25
        },
        1600: {
          items: 1,
          stagePadding: 400,
          margin:25
        },
        1800: {
          items: 1,
          stagePadding: 500,
          margin:25
        },
      },
    });
    $.TSAddFunc("_owlTopSlider", $._owlTopSlider);

    $._tsnewqbns = $(".tsc-sec-tsnewqbns .SliderX").owlCarousel({
      rtl: $.IsRtl,
      //items:1,
      //margin:20,
      //stagePadding:0,
      loop: true,
      nav: false,
      dots: false,
      autoplay: $._tsslof_tsnewqbns,
      smartSpeed: 200,
      autoplaySpeed: 500,
      autoplayTimeout: $._tsslsp_tsnewqbns,

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
      autoplay: $._tsslof_tsrelqbns,
      smartSpeed: 900,
      autoplaySpeed: 700,
      autoplayTimeout: $._tsslsp_tsrelqbns,

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
      autoplay: $._tsslof_tsnewoffers,
      smartSpeed: 800,
      autoplaySpeed: 600,
      autoplayTimeout: $._tsslsp_tsnewoffers,

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
      autoplay: $._tsslof_tsbststores,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout:  $._tsslsp_tsbststores,

      responsive: {
        0: {
          items: 3,
          margin: 10,
          stagePadding: 10,
        },
        375: {
          items: 4,
          margin: 0,
          stagePadding: 10,
        },
        425: {
          items: 4,
          stagePadding: 15,
         
        },
        550: {
          items: 4, 
          stagePadding: 20,
        },
        768: {
          items: 5,
        },
        
        1000: {
          items: 6,
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
      autoplay: $._tsslof_tsblogslider,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout:  $._tsslsp_tsblogslider,

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
      autoplay: $._tsslof_tsrelpsts,
      smartSpeed: 900,
      autoplaySpeed: 800,
      autoplayTimeout:  $._tsslsp_tsrelpsts,

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
      autoplay: $._tsslof_tsprtnrs,
      smartSpeed: 900,
      autoplaySpeed: 600,
      autoplayTimeout:  $._tsslsp_tsprtnrs,

      responsive: {
        0: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 4,
          margin: 5,
          stagePadding: 0,
        },
        425: {
          items: 4,
          margin: 5,
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
          items: 6,
          stagePadding: 0,
          margin: 25,

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
      autoWidth: true,
      dots: false,
      autoplay: $._tsslof_tspstslist,
      margin: 30,
      smartSpeed: 800,
      autoplaySpeed: 500,
      autoplayTimeout:$._tsslsp_tspstslist,

      responsive: {
        0: {
          items: 4,
          margin: 20,
          stagePadding: 0,
        },
        375: {
          items: 6,
          margin: 10,
          stagePadding: 0,
        },
        425: {
          items: 6,
          margin: 10,
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
          items: 7,
          stagePadding: 0,
          margin: 20,

        },
      }}
  );
    $.TSAddFunc("_tspstslist", $._tspstslist);
    //
    // Handle active state of _tspstslist
    $._actvStateHandlerOfTspstslist = $(".tsc-sec-tspstslist .nav-item").click(function (e) {
      e.preventDefault();
  
      if ($(e.target).hasClass("active")) {
          $(e.target).removeClass("active");
      } else {
          $(".tsc-sec-tspstslist .nav-item").removeClass("active");
          $(this).addClass("active");
      }
  });
  
    $.TSAddFunc(
      "_actvStateHandlerOfTspstslist",
      $._actvStateHandlerOfTspstslist
    );
    //
    $._SlidersNav = function () {
      $(".tsc-sec-tsnewqbns .navbtn_left").click(function () {
        $._tsnewqbns.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewqbns .navbtn_right").click(function () {
        $._tsnewqbns.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_left").click(function () {
        $._tsnewoffers.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsnewoffers .navbtn_right").click(function () {
        $._tsnewoffers.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsbststores .navbtn_left").click(function () {
        $._tsbststores.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsbststores .navbtn_right").click(function () {
        $._tsbststores.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsblogslider .navbtn_left").click(function () {
        $._tsblogslider.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsblogslider .navbtn_right").click(function () {
        $._tsblogslider.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tsprtnrs .navbtn_left").click(function () {
        $._tsprtnrs.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tsprtnrs .navbtn_right").click(function () {
        $._tsprtnrs.trigger("prev.owl.carousel", [500]);
      });
      $(".tsc-sec-tspstslist .navbtn_left").click(function () {
        $._tspstslist.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tstopslider .navbtn_left").click(function () {
        $._owlTopSlider.trigger("next.owl.carousel", [500]);
      });
      $(".tsc-sec-tstopslider .navbtn_right").click(function () {
        $._owlTopSlider.trigger("prev.owl.carousel", [500]);
      });
    };

    $.TSAddFunc("_SlidersNav", $._SlidersNav);

    //
  });
})(jQuery);
