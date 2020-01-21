$(function() {
  $(".mobile-button").click(function() {
    $(".menu").toggleClass("menu--show");
  });
});

var linkScroll = $(".scroll");

linkScroll.click(function(e) {
  e.preventDefault();
  $("body, html").animate(
    {
      scrollTop: $(this.hash).offset().top
    },
    500
  );
});
