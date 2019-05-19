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
		$('.relevant-hidden').show().css('display', 'block');
		$(this).hide();
	});

	$('.relevant-blogs .item').slice(-3).addClass('relevant-hidden');

		$('.toggle-mobile').click(function() {
			if(!$('.toggle-mobile').hasClass('close')) {
				$(this).addClass('close');
				$('.mobile-menu').animate({
					'right': '0'
				});
				$('body').animate({
					'right': '80%'
				});
			}
			else {
				$(this).removeClass('close');
				$('.mobile-menu').animate({
					'right': '-100%'
				});
				$('body').animate({
					'right': '0'
				});
			}
		});

});