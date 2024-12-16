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
      "data-aos-duration": "650",
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
  // $.TSAddFunc("_AOSInject", $._AOSInject);