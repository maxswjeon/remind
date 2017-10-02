$("a").click(function(event) {
	event.preventDefault();
	window.location = $(this).attr("href");
});

$('#back-button').click(function(){
	$('#contents').addClass('focus-out');
	setTimeout(function() {
		location.href='/';
	}, 550);
})
