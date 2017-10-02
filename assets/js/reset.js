$("a").click(function(event) {
	event.preventDefault();
	window.location = $(this).attr("href");
});

$('.gotoMain').click(function(){
	$('#contents').addClass('focus-out');
	$('#back-button').addClass('focus-out');
	$('body').addClass('focus-out');
	setTimeout(function() {
		location.href='/';
	}, 350);
});
