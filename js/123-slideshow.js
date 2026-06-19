'use strict';
$(function() {
  var width = 500;
  var animationSpeed = 1250;
  var pause = 3500;
  var currentSlide = 1;
  var $slider = $('#slider');
  var $slideContainer = $('.slides', $slider);
  var $slides = $('.slide', $slider);
  var interval;

  function startSlider() {
    interval = setInterval(function() {
      $slideContainer.animate({
        'margin-left': '-=' + width
      }, animationSpeed, function() {
        if (++currentSlide === $slides.length) {
          currentSlide = 1;
          $slideContainer.css('margin-left', 0);
        }
      });
    }, pause);
  }

  function pauseSlider() {
    clearInterval(interval);
  }
  $slideContainer.on('mouseenter', pauseSlider).on('mouseleave', startSlider);
  startSlider();
});
