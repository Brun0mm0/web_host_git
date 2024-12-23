(function($) { // Begin jQuery
  $(function() { // DOM ready
      console.log(location.pathname)
    // If a link has a dropdown, add sub menu toggle.
    $('nav ul li a:not(:only-child)').click(function(e) {
      e.preventDefault();
      $(this).siblings('.nav-dropdown').toggle();
      // Close one dropdown when selecting another
      $('.nav-dropdown').not($(this).siblings()).hide();
      e.stopPropagation();
    });
    // Clicking away from dropdown will remove the dropdown class
    $('html').click(function() {
      $('.nav-dropdown').hide();
    });
    // Toggle open and close nav styles on click
    $('#nav-toggle').click(function() {
      // e.stopPropagation();
      $('.nav-background').toggleClass('expand', 'fast')
      $('nav ul').slideToggle('easy');
    });
    // Hamburger to X toggle
    $('#nav-toggle').on('click', function(e) {
      this.classList.toggle('active');
    });
    $('#contacto').on('click', function(e) {
      var wscreen = $(window).width();
        console.log(wscreen);
      if(wscreen < 900) {
        $('.nav-background').toggleClass('expand', 'fast')
        $('nav ul').slideToggle('easy');
        $('#nav-toggle').toggleClass('active')
      }
    });
    var lastScrollTop = 0;
    $(window).on('scroll', function(e) {
      var st = $(this).scrollTop();
      var haeder = $('header');
      if (st > lastScrollTop) {
        haeder.css({"transform": "translate3d(0px, -20rem, 0px)"})
        e.stopPropagation();
      } else {
        $('header').style
        haeder.css({"transform": "translate3d(0px, 0rem, 0px)"})
      }
      
      lastScrollTop = st

    })    
  }); // end DOM ready
})(jQuery);