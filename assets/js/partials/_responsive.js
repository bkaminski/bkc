//jQuery no-conflict mode
(function( $ ) {

    $( document ).ready(function() {
    
        // RESPONSIVE CONTROLS
        var $window = $(window);
        function checkWidth() {
    
            if ($window.width() < 976) {
                $(".bkc--info").addClass('text-center pb-5');
                
            };
            if ($window.width() >= 976) {
                $(".bkc--info").removeClass('text-center pb-5');
                
            }
        }
        
        checkWidth();
        $(window).resize(checkWidth);
        
        // END RESPONSIVE CONTROL
        });	
    
    
    })( jQuery );