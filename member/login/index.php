<html lang="ko">
	<head>
		<meta name="theme-color" content="#FFF">
		<meta id="viewport" name="viewport" content="width=device-width, initial-scale=1">
		<meta charset="utf-8">

		<!--for iOS-->
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-title" content="REMIND">
		<link rel="apple-touch-icon" href="/assets/image/favicon.jpg">
		<!---->

		<title>REMIND::LOGIN</title>

		<link rel="shortcut icon" href="/assets/image/favicon.jpg">

		<link rel="stylesheet" type="text/css" href="/assets/fonts/NanumGothic.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/fonts/Stalinist_One.css"/>

		<link rel="stylesheet" type="text/css" href="/assets/css/global/reset.css"/>
		<script type="text/javascript" src="/assets/js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/reset.js" defer></script>

		<script type="text/javascript" src="/assets/js/member/login/index.js" defer></script>

		<link rel="stylesheet" type="text/css" href="/assets/css/global/header/header.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/global/header/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/global/header/desktop.css"/>

		<link rel="stylesheet" type="text/css" href="/assets/css/lib/button.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/member/login/index.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/member/login/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/member/login/desktop.css"/>


	</head>
	<body>
		<header>
			<div id="box_left">
				<a href="/">
					<h1 id="title">REMIND</h1>
				</a>
			</div>
			<div id="box_right">
				<ul id="menu_member">
					<li class="item_member"><a href="/member/signup" class="link_member">회원가입</a></li>
					<li class="item_member"><a href="/member/login" class="link_member">로그인</a></li>
				</ul>
			</div>
		</header>
		<div id="wrap">
			<div id="main">
				<div id="login_form">
					<h2 id="login_title">로그인</h2>
					<form name="form_login" action="/api/login.php" method="post">
						<span class="label">아이디</span><br>
						<input class="input" type="text" placeholder="아이디" name="userid"/>
						<span class="label">비밀번호</span><br>
						<input class="input" type="password" placeholder="비밀번호" name="userpw"/>
						<a class="button submit" href="javascript:submit();" name="submit" value="Login">로그인</a>
					</form>
					<a href="/member/signup" class="link_login">회원가입</a>
					<a href="/member/recover?account=id" class="link_login">아이디 찾기</a>
					<a href="/member/recover?account=pw" class="link_login">비밀번호 찾기</a>
				</div>
			</div>
		</div>
	</body>

</html>
