$(function() {
	$('.start').click(function(e) {
		e.preventDefault();
		$('#start-modal').fadeIn();
	});
	$('.close-modal').click(function(e) {
		e.preventDefault();
		$('#start-modal').fadeOut();
	});

	$('.loadmore').click(function(e) {
		e.preventDefault();
		$('.relevant-hidden').show();
		$(this).hide();
	});	
});