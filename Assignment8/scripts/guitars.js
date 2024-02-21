/* guitars js*/

"use strict";

$(document).ready(() => {
  $(".bxslider").bxSlider({
    pager: true,
    slideWidth: 400,
    auto: true,
    autoStart: true,
    randomStart: true,
    pause: 3000,
    mode: 'horizontal',
    captions: true,
    controls: false,
    pagerType: 'short',
    adaptiveHeight: true
  });
});
