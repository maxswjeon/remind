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

		<script type="text/javascript" src="/assets/js/lib/jquery.min.js"></script>
		<script type="text/javascript" src="/assets/js/reset.js" defer></script>
		<script type="text/javascript" src="/assets/js/lib/jquery.fullpage.min.js"></script>

		<link rel="stylesheet" type="text/css" href="/assets/css/global/reset.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/global/header/header.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/global/header/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/global/header/desktop.css"/>

		<link rel="stylesheet" type="text/css" href="/assets/css/lib/button.css"/>
		<link rel="stylesheet" type="text/css" href="/assets/css/index/index.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (max-width: 500px)" href="/assets/css/index/mobile.css"/>
		<link rel="stylesheet" type="text/css" media="screen and (min-width: 501px)" href="/assets/css/index/desktop.css"/>

		<style>
			#fullpage.focus-out {
				animation-name: focus-out;
				animation-duration: 0.4s;
				animation-fill-mode: forwards;
				animation-timing-function: cubic-bezier(0.1, 0.56, 0.8, 0.93);
			}
			@keyframes focus-out {
				0% {
					right: 0%;
					opacity: 1;
					filter: blur(0);
				}
				100% {
					right: 15vw;
					opacity: 0;
					filter: blur(2px);
				}
			}
		</style>

		<script type="text/javascript">
			var colors = ['#282c37', '#9baec8', '#d9e1e8', '#6693B2'];

			$(document).ready(function() {
				$('#fullpage').fullpage({
					sectionsColor: [colors[0], colors[1], colors[2], colors[3]],
					lockAnchors:true,
            		css3: true,
            		scrollingSpeed: 800,
					loopHorizontal: false,
					controlArrows: false,
					afterRender: function() { $('.slide').css('padding-top', '25px'); $('.slide').closest('.section').css('padding-top','0'); },
				});
			});

			function link(str, colors_num) {
				$('#fullpage').addClass("focus-out");
				$('body').css('background', colors[colors_num]);
				setTimeout(function(){
					location.href = str;
				}, 450);
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
		<noscript>

		</noscript>
		<div id="fullpage" class="content">
			<div class="section" style="color:white">
				<h1 class="section_content subtitle">
					<span class="font_logo">REMIND</span><br>
					웹 게임의 발전 가능성을 제시하다
				</h1>
				<br>
				<h4 class="section_details">
					저는 어릴 적 즐겼던 플래시 게임을 떠올리며 웹 게임을 만들기 시작했습니다.
					웹에서의 게임 개발은 방해물이 아닌 도전과제임을 기억해야 합니다.
					시작은 간단한 퍼즐게임에 불과하지만, 계속해서 발전해나가는 모습을 보일 것입니다.
				</h4>
			</div>
			<div class="section">
				<h1 class="section_content subtitle">제작된 게임들을 둘러보세요</h1>
				<br>
				<h4 class="section_details">
					Project REMIND의 팀원들이 만들어낸 멋진 게임들을 구경해보세요
				</h4>
				<br>
				<div onclick='link("/board/games", 1)' class="button">자세히 보기</div>
			</div>
			<div class="section">
				<h1 class="section_content subtitle">배워서 남주자</h1>
				<br>
				<h4 class="section_details">
					무언가를 개발하고 싶은 마음은 컸지만 어디서부터 시작해야 할지 몰라 참 난감하였던 경험이 있을겁니다.
					그래서 저희 개발자들은 이 페이지에 작은 노력을 추가했습니다.
					이 페이지에 사용되는 모든 소스코드는 오픈소스로 공유됩니다.
				</h4>
				<br>
				<div onclick='link("/board/developers", 2)' class="button">자세히 보기</div>
			</div>
			<div class="section">
				<h1 class="section_content subtitle">당신도 함께 할 수 있습니다</h1>
				<br>
				<h4 class="section_details">
					아이디어가 있는 사람, 코딩 실력이 있는 사람, 디자인 감각이 있는 사람들이 모여 팀을 꾸려 보세요.
					간단한 퍼즐게임이라도 협업으로 친구들과, 아니면 해커톤같은 게임 개발, 시작해 보는 건 어떨까요?
				</h4>
				<br>
				<div onclick='link("/board/project", 3)' class="button">자세히 보기</div>
			</div>
		</div>
	</body>
</html>
