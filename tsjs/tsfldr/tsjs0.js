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
      const exitIcon = $(".exit-icon");
      const togglerMnubtn = $(".togglerMnubtn");
      const nav_cntnr = $(".nav_cntnr");
      const notCollps_menu = $(".notCollps-menu");
      const navbarCollapse = $("#TopMenuModal");
      const topMenu = $("#topMenu");

      // when click on exit icon
      exitIcon.on("click", function () {
        // Hide the menu
        const collapse = bootstrap.Collapse.getInstance(navbarCollapse[0]); // Convert jQuery object to DOM element
        if (collapse) {
          collapse.hide();
          topMenu.removeClass("tsbg-bg2 pt-4").removeAttr("style");
          nav_cntnr.addClass("tsNav_cntnr_css");
          nav_cntnr.removeClass("pt-4 tsbg-F");
          notCollps_menu.addClass("mt-4");
        }
      });

      // when click on hamburger icon
      togglerMnubtn.on("click", function () {
        // when show the menu
        topMenu.addClass("tsbg-bg2 pt-4" , "tsTopMenu-css");
        nav_cntnr.addClass("tsnav_cntr_opened");
        nav_cntnr.addClass("tsbg-F pt-4");
        notCollps_menu.removeClass("mt-4");
      });
      const normalizeUrl = (url) => {
        // Strip protocol, domain, and trailing slashes
        const a = document.createElement("a");
        a.href = url;
        return a.pathname.replace(/\/$/, ""); // Ensure no trailing slash
      };
      const _SetActive = function (SrcEle) {
        const currentlocate = normalizeUrl(location.href); // Normalized current URL
        $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").each((index, element) => {
          element.parentElement.classList.remove("active");
          if (
            element === SrcEle ||
            (SrcEle == null && normalizeUrl(element.href) === currentlocate) // Normalize element.href
          ) {
            element.parentElement.classList.add("active");
          }
        });
      };
      
      $("#TopMenuModal .tsc-mnu-blk .tsc-mnu-lnk").click(function () {
        _SetActive(this);
      });
      
      // One Time at Begin
      _SetActive();
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
