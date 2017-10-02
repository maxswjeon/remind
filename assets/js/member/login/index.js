function submit(){
	if(form_login.userid.value || form_login.userpw.value){
		alert("아이디와 패스워드를 확인해 주세요");
		return false;
	}
	form_login.submit();
}
form_login.userid.onkeydown = function(e){
	if(e.keyCode == 13){
		submit();
	}
};
form_login.userpw.onkeydown = function(e){
	if(e.keyCode == 13){
		submit();
	}
};
