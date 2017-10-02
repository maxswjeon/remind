<!DOCTYPE html>
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

		<title>REMIND</title>

		<link rel="shortcut icon" href="/assets/image/favicon.jpg">

		<link rel="stylesheet" type="text/css" href="/assets/fonts/NanumGothic.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/fonts/Stalinist_One.css"/>

		<link rel="stylesheet" type="text/css" href="/assets/css/lib/jquery.fullpage.min.css" />
		<link rel="stylesheet" type="text/css" href="/assets/css/lib/iframe.css" />

		<script type="text/javascript" src="/assets/js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/reset.js" defer></script>
		<script type="text/javascript" src="/assets/js/lib/jquery.fullpage.min.js"></script>

		<script type="text/javascript" src="/assets/js/board/back.js" defer></script>

		<link rel="stylesheet" type="text/css" href="/assets/css/global/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/global/header/header.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/global/header/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/global/header/desktop.css"/>

		<link rel="stylesheet" type="text/css" href="/assets/css/lib/button.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/index/index.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/index/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/index/desktop.css"/>

		<link rel="stylesheet" href="/assets/css/board/board_m.css">

		<style>
			body {
				background: #9baec8;
			}
		</style>

		<script>
			function bwtiles() {
				$('#contents').addClass('focus-out');
				$('#back-button').addClass('focus-out');
				$('body').addClass('focus-out-black');
				setTimeout(function() {
					location.href='bwtiles';
				}, 350);
			}
		</script>
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
					<li class="item item_member"><a href="/member/signup" class="link_member">회원가입</a></li>
					<li class="item item_member"><a href="/member/login" class="link_member">로그인</a></li>
				</ul>
			</div>
		</header>

		<div id="contents">
			<nav>
				<span>
					<h1 class="StalinistOne">BW tiles</h1>
					<div class="videowrapper">
						<iframe width="560" height="315" src="https://www.youtube.com/embed/dTk_rNxfwtc" frameborder="0" allowfullscreen></iframe>
					</div>
					<div class="post" style="text-align:left;margin-top:0.5rem;">
						BWtiles는 흑백의 타일들을 조작하여 화면을 까맣게, 하얗게 만드는 게임입니다.
						타일들은 특정한 규칙으로 클릭에 반응하며 이를 이용하여 목표를 달성해냅니다.
						간단한 규칙이지만, 많은 응용력이 요구되는 게임입니다.
						<div style="text-align:center;margin-top:1rem">
							<div onclick="bwtiles()" class="button" style="width:75%">게임 시작 ></div>
						</div>
					</div>
					<hr>
				</span>
				<span>
					<h1 class="StalinistOne">New game</h1>
					<div class="post" style="text-align:left;margin-top:0.5rem;">
						구상단계입니다...
						<div style="text-align:center;margin-top:1rem">
							<div onclick="back(4)" class="button" style="width:75%;">프로젝트 참여</div>
						</div>
					</div>
					<hr>
				</span>
			</nav>
		</div>

		<div id=back-button onclick="back(2)">< 뒤로가기</div>
	</body>
</html>
