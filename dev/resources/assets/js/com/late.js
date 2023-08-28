/**
 * Add custom handlers for when dropdowns lose/gain mouse hover.
 *
 * [1] If a nav dropdown is hovered over, and it is not already expanded, expand it
 * [2] If another nav item is hovered over (not a dropdown), unexpand all expanded dropdowns
 */
function customNavHoverStates() {
  // [1]
  $(".dropdown-toggle").hover(
    function() {
      if ($(this).attr("aria-expanded") == "false") {
        $(this).dropdown("toggle");
      }
    },
    function() {}
  );
  // [2]
  $(".nav-item:not(.dropdown)").hover(
    function() {
      var dropdownToggle = $(".navbar-nav").find('[aria-expanded="true"]');
      if (dropdownToggle != "undefined") {
        dropdownToggle.dropdown("toggle");
      }
    },
    function() {}
  );
}

/**
 * Adds the copyright year and text to the footer of the page.
 */
function addCopyrightDate() {
  var mydate = new Date();
  var year = mydate.getYear();
  if (year < 2000) year += year < 1900 ? 1900 : 0;
  $("#copyrightDate").html("&copy; " + year + " Pragmatic Consulting, Inc All Rights Reserved");
}

/**
 * [1] AOS only initializes if the user has no preference on reduced motion.
 * [2] Initialize the AOS library with some defaults:
 *     - Only play the animation once (just fade-in, no fade-out)
 *     - Animation duration of 800ms
 */
function initAOS() {
  // [1]
  const pref = window.matchMedia("(prefers-reduced-motion: no-preference)");
  if (pref.matches) {
    AOS.init({ once: true, duration: 800 }); // [2]
  } else {
    AOS.init({ disable: true });
  }
}

/**
 * Opts-in to bootstrap tooltips.
 */
function initTooltips() {
  $('[data-toggle="tooltip"]').tooltip();
}

/**
 * Monitors the scroll state of the page to see if the social bar should be displayed.
 *
 * [1] Get a reference to the social bar and the footer so we can check their positions
 * [2] Only show the social bar if the page is wide enough (> 500px)
 * [3] Calculate the position of the center of the footer
 * [4] Calculate the position of the bottom of the screen
 * [5] If the position of the bottom of the screen is past the center of the footer, hide the social_bar. Otherwise, show the social_bar.
 */
function handleSocialBarStates() {
  // [1]
  var social_bar = $("#social-bar");
  var footer_wrapper = $("#footer-wrapper");
  $(window).on("scroll", function() {
    // [2]
    if ($(this).width() > 500) {
      // [3]
      var footer_wrapper_top = footer_wrapper.offset().top;
      var footer_wrapper_height = footer_wrapper.height();
      var footer_wrapper_center = footer_wrapper_top + footer_wrapper_height / 2;
      // [4]
      var scroll_top = $(this).scrollTop();
      var viewport_height = $(this).height();
      var scroll_top_bottom = scroll_top + viewport_height;
      // [5]
      if (scroll_top_bottom >= footer_wrapper_center) social_bar.fadeOut();
      if (scroll_top_bottom < footer_wrapper_center) social_bar.fadeIn();
    } else {
      social_bar.css("display", "none");
    }
  });
}

// carousel.js
function customCarouselEvents() {
  $(".carousel").on("slide.bs.carousel", function(event) {
    if (event.direction == "left") {
      var $nextNextImage = $(".carousel-item.active", this)
        .next(".carousel-item")
        .next(".carousel-item")
        .find("img");
      $nextNextImage.attr("src", $nextNextImage.data("src"));
    } else {
      var $prevImage = $(".carousel-item.active", this)
        .prev(".carousel-item")
        .find("img");
      var $prevPrevImage = $(".carousel-item.active", this)
        .prev(".carousel-item")
        .prev(".carousel-item")
        .find("img");
      $prevImage.attr("src", $prevImage.data("src"));
      $prevPrevImage.attr("src", $prevPrevImage.data("src"));
    }
  });
}

$(function() {
  customNavHoverStates();
  addCopyrightDate();
  initAOS();
  initTooltips();
  handleSocialBarStates();
  customCarouselEvents();
});
