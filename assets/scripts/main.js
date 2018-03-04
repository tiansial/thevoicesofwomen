/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {
  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    common: {
      init: function() {
        // Hide .mobile-nav on on scroll down
        var _body = document.querySelector('body'),
            mobileMenuToggle = document.querySelector('.mobile-nav__toggle'),
            mobileMenu = document.querySelector('.mobile-navigation'),
            globalWrapper = document.querySelector('.global-wrapper');

        function OnTransitionEnd() {
          mobileMenu.classList.remove("menu--animatable");
        }

        function toggleClassMenu() {
          mobileMenu.classList.add("menu--animatable");
          if(!mobileMenu.classList.contains("menu--visible")) {
            mobileMenu.classList.add("menu--visible");
          } else {
            mobileMenu.classList.remove('menu--visible');
          }

          if(!mobileMenuToggle.classList.contains("menu--visible")) {
            mobileMenuToggle.classList.add("menu--visible");
          } else {
            mobileMenuToggle.classList.remove('menu--visible');
          }

          if(!_body.classList.contains("menu--visible")) {
            _body.classList.add("menu--visible");
          } else {
            _body.classList.remove('menu--visible');
          }

          if(!_body.classList.contains("of-hidden")) {
            _body.classList.add("of-hidden");
          } else {
            _body.classList.remove('of-hidden');
          }
        }

        

        mobileMenu.addEventListener("transitionend", OnTransitionEnd, false);
        mobileMenuToggle.addEventListener("click", toggleClassMenu, false);
        mobileMenu.addEventListener("click", toggleClassMenu, false);
        mobileMenu.addEventListener('touchmove', function(e) {

                e.preventDefault();

        }, false);

        var didScroll;
        var lastScrollTop = 0;
        var delta = 5;
        var navbarHeight = $(".mobile-nav").outerHeight();

        function hasScrolled() {
          var st = $(this).scrollTop();

          // Make sure they scroll more than delta
          if (Math.abs(lastScrollTop - st) <= delta) {
            return;
          }

          // If they scrolled down and are past the navbar, add class .nav-up.
          // This is necessary so you never see what is "behind" the navbar.
          if (st > lastScrollTop && st > navbarHeight) {
            // Scroll Down
            $(".mobile-nav")
              .removeClass("nav-down")
              .addClass("nav-up");
          } else {
            // Scroll Up
            if (st + $(window).height() < $(document).height()) {
              $(".mobile-nav")
                .removeClass("nav-up")
                .addClass("nav-down");
            }
          }

          lastScrollTop = st;
        }

        $(window).scroll(function(event) {
          didScroll = true;
        });

        setInterval(function() {
          if (didScroll) {
            hasScrolled();
            didScroll = false;
          }
        }, 250);
      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    home: {
      init: function() {
        var homeHero = new Swiper("#homeHero", {
          loop: true,
          effect: "fade",
          autoplay: 7000,
          centeredSlides: true,
          slidesPerView: "auto",
          pagination: ".swiper-pagination"
        });

        $(".homepage--stories__each").hover(function() {
            $(this).addClass("hover");
            $(".homepage--stories__each").not(this).each(function(){
              $(this).addClass("fadeOut");
            });
        }, function() {
            $(this).removeClass("hover");
            $(".homepage--stories__each").not(this).each(function(){
              $(this).removeClass("fadeOut");
            });
        });
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    single_stories: {
      init: function() {
        var relatedSwiper = new Swiper("#relatedStories", {
          loop: true,
          effect: "coverflow",
          preventClicks: false,
          preventClicksPropagation: false,
          speed: 800,
          grabCursor: true,
          centeredSlides: true,
          slidesPerView: "auto",
          prevButton: ".button-prev",
          nextButton: ".button-next",
          coverflow: {
            rotate: 0,
            stretch: 0,
            depth: 200,
            modifier: 1,
            slideShadows: true
          },
          keyboard: {
            enabled: true
          }
        });
      }
    },
    post_type_archive_stories: {
      init: function() {
        $(".post-type-archive-stories figure").hover(function() {
            $(".post-type-archive-stories figure").not(this).parent('.card').each(function(){
              $(this).addClass("fadeOut");
            });
        }, function() {
            $(".post-type-archive-stories figure").not(this).parent('.card').each(function(){
              $(this).removeClass("fadeOut");
            });
        });
      }
    },
    events: {
      init: function() {
        $(document).on("click", ".event-click", function() {
            event.preventDefault();
            event.stopPropagation();
            event.stopImmediatePropagation();
            var eventUrl = $(this).parent().attr("data-url");
            document.location = eventUrl;
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = funcname === undefined ? "init" : funcname;
      fire = func !== "";
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === "function";

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire("common");

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, "_").split(/\s+/), function(
        i,
        classnm
      ) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, "finalize");
      });

      // Fire common finalize JS
      UTIL.fire("common", "finalize");
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);
})(jQuery); // Fully reference jQuery after this point.
