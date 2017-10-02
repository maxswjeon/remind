function back(num) {
	var page;
	if (!num) {
		page = 0;
	} else{
		page = num;
	}
	$('#contents').addClass('focus-out');
	$('#back-button').addClass('focus-out');
	$('body').addClass('focus-out');
	setTimeout(function() {
		location.href='/'+'?page='+page;
	}, 350);
}
