//jQuery no-conflict mode
(function( $ ) {
  $(document).ready(function(){
    $(".p3").delay("8000").fadeIn();    
  });    
    
    $(function() {
        $(".p2").typed({
          strings: ["DEVELOPER", "CONSULTANT", "PARTNER"],
          typeSpeed: 50,
          backSpeed: 10,
          backDelay: 2000,
          showCursor: false,
          loop: false
        });
      });
      
      $('.hero-down').mousedown(function() {
        TweenMax.fromTo('.bkc-main-content', 0.25, {
          opacity: 0,
          scale: 0
        }, {
          opacity: 0.25,
          scale: 1,
          onComplete: function() {
            TweenMax.to('.bkc-main-content', 0.25, {
              opacity: 0,
              scale: 0
            });
          }
        });
      });
      
      // smooth scroll to div
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 100).fadeIn('show');
            return false;
          }
        }
      });

//Delay logo text load
$(".p3").slideUp(1).delay(8000).slideDown('slow');

//Scroll to top button
$(document).ready(function(){ 
  $(window).scroll(function(){ 
      if ($(this).scrollTop() > 100) { 
          $('#scroll').fadeIn(); 
      } else { 
          $('#scroll').fadeOut(); 
      } 
  }); 
  $('#scroll').click(function(){ 
      $("html, body").animate({ scrollTop: 0 }, 600); 
      return false; 
  }); 
});

$(function() {
  //caches a jQuery object containing the header element
  var header = $(".clearHeader");
  $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if (scroll >= 200) {
          header.removeClass('clearHeader').fadeIn('5000').addClass("bg-dark");
      } else {
          header.removeClass("bg-dark").addClass('clearHeader');
      }
  });
});

})( jQuery );
