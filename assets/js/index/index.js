function getParameterByName(name, url) {
	if (!url) url = window.location.href;
	name = name.replace(/[\[\]]/g, "\\$&");
	var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
		results = regex.exec(url);
	if (!results) return null;
	if (!results[2]) return '';
	return decodeURIComponent(results[2].replace(/\+/g, " "));
}

function link(str, colors_num) {
	$('#fullpage').addClass("focus-out");
	$('body').css('background', colors[colors_num]);
	setTimeout(function(){
		location.href = str;
	}, 450);
}
