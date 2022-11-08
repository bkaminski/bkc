//jQuery no-conflict mode
(function ($) {
  // Preloader
  $(window).on("load", function () {
    setTimeout(function () {
      $("#preLoader").fadeOut("slow", function () {});
    }, 600);
  });

  // Typed.js
  $(function () {
    $(".p2").typed({
      strings: ["DEVELOPER", "CONSULTANT", "PARTNER"],
      typeSpeed: 50,
      backSpeed: 10,
      backDelay: 2000,
      showCursor: true,
      loop: false,
      cursorChar: "|",
    });
  });

  $(".hero-down").mousedown(function () {
    TweenMax.fromTo(
      ".hero-down",
      0.25,
      {
        opacity: 0,
        scale: 0,
      },
      {
        opacity: 0.25,
        scale: 1,
        onComplete: function () {
          TweenMax.to(".bkc-main-content", 0.25, {
            opacity: 0,
            scale: 0,
          });
        },
      }
    );
  });

  // smooth scroll to div
  $("a[href*=#]:not([href=#])").click(function () {
    if (
      location.pathname.replace(/^\//, "") ==
        this.pathname.replace(/^\//, "") &&
      location.hostname == this.hostname
    ) {
      var target = $(this.hash);
      target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
      if (target.length) {
        $("html,body")
          .animate(
            {
              scrollTop: target.offset().top,
            },
            100
          )
          .fadeIn("show");
        return false;
      }
    }
  });

  //Delay logo text load
  $(".p3").slideUp(0).delay(8000).slideDown(1000);

  //SCROLL TO TOP
  $(window).scroll(function () {
    if ($(this).scrollTop() >= 250) {
      $("#back-up").fadeIn(200); // Fade in the arrow
    } else {
      $("#back-up").fadeOut(200); // Else fade out the arrow
    }
  });
  $("#back-up").click(function () {
    // When arrow is clicked
    $("body,html").animate(
      {
        scrollTop: 0, // Scroll to top of body
      },
      0
    );
  });

  //change navbar on scroll
  $(function () {
    //caches a jQuery object containing the header element
    var header = $(".clearHeader");
    $(window).scroll(function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 200) {
        header.removeClass("clearHeader").fadeIn("5000").addClass("bg-dark");
      } else {
        header.removeClass("bg-dark").addClass("clearHeader");
      }
    });
  });

  //REMOVE TITLE TAG FROM LINK HOVER
  $(".nav-link").removeAttr("title");

  //end no conflict mode
})(jQuery);
