jQuery(document).ready(function ($) {
  const itemSidebar = $(".header .side-bar");
  const toggleBar1 = $(".toggle__bar--1");
  const toggleBar2 = $(".toggle__bar--2");
  const toggleBar3 = $(".toggle__bar--3");

  $(window).resize(function () {
    const widthScreen = $(window).width();

    if (widthScreen >= 993 && !itemSidebar.attr("class").includes("d-none")) {
        itemSidebar.addClass("d-none");
        toggleBar2.removeClass("d-none");
        toggleBar1.removeAttr("style");
        toggleBar3.removeAttr("style");
    }
  });

  $("button.toggle").on("click", function () {
    itemToggleSidebar();
  });

  $(".map__btn").on("click", function () {
    const itemMiniMap = $(".mini-map");
    if (itemMiniMap.attr("class").includes("d-none")) {
      itemMiniMap.removeClass("d-none");
    } else {
      itemMiniMap.addClass("d-none");
    }
  });

  // FUNCTION
  function itemToggleSidebar() {
    if (itemSidebar.attr("class").includes("d-none")) {
      $(".header .side-bar").removeClass("d-none");
      toggleBar2.addClass("d-none");
      toggleBar1.css({
        rotate: "45deg",
        top: "25px",
      });
      toggleBar3.css({
        rotate: "-45deg",
        top: "25px",
      });
    } else {
      $(".header .side-bar").addClass("d-none");
      toggleBar2.removeClass("d-none");
      toggleBar1.removeAttr("style");
      toggleBar3.removeAttr("style");
    }
  }
});
