//mobile navigation
$(function() {
  $(".mobile-button").click(function() {
    $(".menu").toggleClass("menu--show");
  });
});
//add background-color to navbar link
$(".menu__link").click(function(e) {
  $(".menu__link").removeClass("menu__link--active");
  $(this).addClass("menu__link--active");
  e.preventDefault();
});
//scroll to section click menu-link
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
