//jQuery no-conflict mode
(function( $ ) {

    $( document ).ready(function() {
    
        // RESPONSIVE CONTROLS
        var $window = $(window);
        function checkWidth() {
    
            if ($window.width() < 976) {
                $(".bkc--info").find('h3, p').removeClass('text-end');
                $(".nav-link").addClass('btn btn-dark btn-block rounded-0 mb-2 text-uppercase').css('margin-left', '0px').css('color', '#fff');
                $(".nav-link:contains(Search)").addClass('d-none');
                
            };
            if ($window.width() >= 976) {
                $(".bkc--info").find('h3, p').addClass('text-end');
                $(".nav-link").removeClass('btn btn-dark btn-block rounded-0').css('margin-left', '15px');
                $(".nav-link:contains(Search)").removeClass('d-none');
            }
        }
        
        checkWidth();
        $(window).resize(checkWidth);
        
        // END RESPONSIVE CONTROL
        });	
    
    
})( jQuery );