(function ($) {
  $(document).ready(function () {
    $.IsRtl = true;
    $.DirectionFn = function () {
      const Dir = document.querySelector("html").getAttribute("dir");
      if (Dir == "rtl") {
        $.IsRtl = true;
      } else if (Dir == "ltr") {
        $.IsRtl = false;
      } else {
        $.IsRtl = false;
      }
    };
    $.DirectionFn();
    //
    $.TSInitMenu = function () {
      
      //-------Menu---------
      const exitIcon = document.querySelector(".exit-icon");
      const togglerMnubtn = document.querySelector(".togglerMnubtn");
      const nav_cntnr = document.querySelector(".nav_cntnr");
      const notCollps_menu = document.querySelector(".notCollps-menu");
      const navbarCollapse = document.getElementById("TopMenuModal");
      const topMenu = document.getElementById("topMenu");
      // when click on exit icon    
      exitIcon.addEventListener("click", function () {
        // Hide the menu
        const collapse = bootstrap.Collapse.getInstance(navbarCollapse);
        if (collapse) {
          collapse.hide();
        //   
          topMenu.classList.remove('tsbg-bg2','pt-4');
          topMenu.removeAttribute('style');
          nav_cntnr.style.borderRadius = "0px";
          nav_cntnr.style.borderRadius = "40px";
        
          nav_cntnr.classList.remove('pt-4');
          nav_cntnr.classList.remove("tsbg-F");
          notCollps_menu.classList.add('mt-4')
        }
      });
      // when click on humborger icon
      togglerMnubtn.addEventListener("click", function () {
        // when show the menu

          topMenu.classList.add('tsbg-bg2','pt-4');
          topMenu.style.height = "100vh";
          nav_cntnr.style.borderRadius = "40px";
          nav_cntnr.style.height = "100vh";
          nav_cntnr.classList.add("tsbg-F",'pt-4');
          notCollps_menu.classList.remove('mt-4');
        
      });


      const _SetActive = function (SrcEle) {
        const currentlocate = location.href; // Return the Current page..
        $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").each((index, element) => {
          element.parentElement.classList.remove("active");
          if (
            element === SrcEle ||
            (SrcEle == null && element.href === currentlocate)
          ) {
            element.parentElement.classList.add("active");
          }
        });
      };
      $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").click(function () {
        _SetActive(this);
      });
      _SetActive(); //One Time at Begin
    };
    //---------------------------
    // List of Sliders
    $.TSFuncsList = {};
    $.TSAddFunc = function (funcName, funcRef) {
      if (!$.TSFuncsList[funcName]) {
        $.TSFuncsList[funcName] = funcRef;
      }
    };
    //
    $.TSCallFuncs = function () {
      $.each($.TSFuncsList, function (key, func) {
        if (typeof func === "function") {
          func(); // Call the function
        }
      });
      //
    };
    //----
    $.InitCF7TSFix = function () {
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
    };
    //----
    $.initOther = function () {
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
    };
    //
    //To be called at OwlCaousels Initialization
    $.EnhanceOwlItemsCss = function (event) {
      var items = $(event.target).find(".owl-item");
      // Clear previous classes
      items.removeClass("prev-item next-item");
      // Find the index of the center item
      var centerItem = items.filter(".center");
      var centerIndex = items.index(centerItem);
      // Identify previous and next items
      var prevItem = centerItem.prev(".owl-item").length
        ? centerItem.prev(".owl-item")
        : items.last();
      var nextItem = centerItem.next(".owl-item").length
        ? centerItem.next(".owl-item")
        : items.first();
      // Add classes to previous and next items
      prevItem.addClass("prev-item");
      nextItem.addClass("next-item");
    };
    //------
    $.TSInitMenu();
    $.InitCF7TSFix();
    $.initOther();
    //$.TSCallFuncs();  //Moved to tsjsz.js
  });
})(jQuery);
