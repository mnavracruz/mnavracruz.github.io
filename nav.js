$('#js-navbar-toggle').click(function() {
  $('#js-menu').toggleClass('active');
});

$('.nav-links').hover(function() {
  $(this).find('ul').toggleClass('activedrop');
  $(this).toggleClass('hover-active');
});
