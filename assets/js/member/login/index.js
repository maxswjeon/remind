function submit(){
	if(form_login.userid || form_login.userpw){
		alert("아이디와 패스워드를 확인해 주세요");
		return;
	}
	form_login.submit();
}
