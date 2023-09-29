(function( $ ) {
	$( document ).ready(function() {
		$('.hero--title').waypoint(function() {
			$('.hero--title').addClass('animated fadeInDown');
		}, {
			offset: '100%'
		});
        $('.hero--img').waypoint(function() {
			$('.hero--img').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
        $('.hero--text').waypoint(function() {
			$('.hero--text').addClass('animated fadeInLeft');
		}, {
			offset: '100%'
		});
        $('.hero--btn').waypoint(function() {
			$('.hero--btn').addClass('animated fadeInUp');
		}, {
			offset: '100%'
		});
	});

})( jQuery );