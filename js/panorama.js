// jQuery for panorama
$(function () {

// declaring variables, $panorama = class panorama
  var $panorama = $('.panorama');

  var left = $panorama.offset().left;
  var width = $panorama.width();

// executing the function to move the background
  $('.panorama').mousemove(function (e) {
    var offset = e.pageX - left;
    var percentage = offset / width * 100;

    $panorama.css('background-position', percentage + '% 0');

  });

});