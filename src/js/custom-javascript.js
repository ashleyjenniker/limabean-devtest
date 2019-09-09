/* 
 * Custom JavaScript
**/
(function($) { 
"use strict"; 

  var dreamShare = function() {

    var stickyHeader = function() {

      var wind = $(window);

      // check if scrolled pass header outer height
      wind.on("scroll", function() {
        var bodyScroll = wind.scrollTop(),
            header = $("#header"),
            headerHeight = header.outerHeight();

        if (bodyScroll > headerHeight) {
          header.addClass("scrolled");;
        } else {
          header.removeClass("scrolled");
        }

      });

    };


    var anchorLinks = function() {

      // ANCHOR LINKS
      $('a[href*="#"]')

      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function(event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
          && 
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 1000, function() {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();
              if ($target.is(":focus")) { // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                $target.focus(); // Set focus again
              };
            });
          }
        }
      });

    };

    return {

      //main function to initiate the module
      init: function() {
        stickyHeader();
        anchorLinks();
      }

    };

  }();

  jQuery(document).ready(function() {
    dreamShare.init();
    $(window).scrollTop(0);
  });
  
})(jQuery);
