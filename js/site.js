$(document).ready(function() {

  $(".rslides").responsiveSlides({
    auto: true,
    speed: 450,
  	timeout: 7000,
    nav: true,
    prevText: "Previous",
  	nextText: "Next"
  });

  $("header nav ul li.menu-item > ul.sub-menu").removeClass("sub-menu");

  $('header nav ul li.menu-item').hover(function() {
    $(this).children('ul').show();
  }, function() {
    $(this).children('ul').hide();
  });

  $('#menu-main-nav').Touchdown();

  $('.pageBody').fitVids();

  $('#twitter-widget-0').css('width', '100%');

  $('.headerSearch input.field').focus(function(){
    $('.headerSearch input.submit').css('background-color', '#333');
    $('.headerSearch input.submit').off('hover');
  });

  $('.headerSearch input.field').blur(function() {
    $('.headerSearch input.submit').css('background-color', '#888');
    $('.headerSearch input.submit').hover(function() {
      $(this).css('background-color', '#333');
    }, function(){
      $(this).css('background-color', '#888');
    });
  });

  $('img[class^="wp-image-"], img[class*=" wp-image-"]').css('width', '100%');

});