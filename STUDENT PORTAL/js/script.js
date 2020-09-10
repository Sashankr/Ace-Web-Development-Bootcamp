$(document).ready(function()
{
  $("#abt-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section2").offset().top
    }, 0);
  });

  $("#fac-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section3").offset().top
    }, 0);
  });

  $("#courses-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section4").offset().top
    }, 0);
  });

  $("#tes-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section5").offset().top
    }, 0);
  });

  $("#contact-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section6").offset().top
    }, 0);
  });

  $("#gallery-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section7").offset().top
    }, 0);
  });



  $("#sup-nav").click(function() {
    $('html, body').animate({
        scrollTop: $("#section8").offset().top
    }, 0);
  });

  $(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
      $('#back-to-top').fadeIn();
    } else {
      $('#back-to-top').fadeOut();
    }
  });
  // scroll body to 0px on click
  $('#back-to-top').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 400);
    return false;
  });


});