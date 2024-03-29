// DOCUMENT LOAD

$(() => {
  console.log("detail.js is loaded")
  handleStickyNav();
})

// NAV - STICKY

handleStickyNav = () => {
  var stickyNavTop = $('#nav').offset().top;
  var stickyNav = function(){
    var scrollTop = $(window).scrollTop();
    if (scrollTop > stickyNavTop) {
      $('#nav').addClass('sticky');
    } else {
      $('#nav').removeClass('sticky');
    }
  };
  stickyNav();
  $(window).scroll(function() {
    stickyNav();
  });
}

