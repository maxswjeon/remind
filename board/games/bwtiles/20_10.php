<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--for iOS-->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="REMIND">
      <link rel="apple-touch-icon" href="http://remind.zz.am/ios/icon.jpg">
    <!---->
    <title>REMIND</title>
    <link rel="stylesheet" type="text/css" href="lib/bwtiles.css">
    <script type="text/javascript">
    var click_sound, display, tiles, body;
    window.onload = function() {
      click_sound = document.getElementsByTagName('audio');
      display = document.getElementsByClassName('display');
      tiles = document.getElementsByClassName('tile');
      body = document.getElementsByTagName('body');
    }
    //객체 선언

    function random_() {
      return (Math.round(Math.random()) === 1);
    }
    //Randomly ture or false return

    function link_to_main() {
      var q = confirm("정말로 메인 페이지로 이동하시겠습니까?");
      if (q) {location.href = '/';}
    }

    function revers_color(color) {
      if (color == "white tile") {return "black tile";}
      else if (color == "black tile") {return "white tile";}
      else {return false;}
    }
    //반전된 색상을 리턴해준다.

    var click_time = 0, target;
    function tile_click_event(tile_num) {
      click_time++;
      if (tile_num==10||tile_num==20||tile_num==30||tile_num==40||tile_num==50||tile_num==60||tile_num==70||tile_num==80||tile_num==90||tile_num==100||tile_num==110||tile_num==120||tile_num==130||tile_num==140||tile_num==150||tile_num==160||tile_num==170||tile_num==180||tile_num==190||tile_num==200)
      {p1 = 0;}
      else {p1 = tile_num + 1;}

      if (tile_num==11||tile_num==21||tile_num==31||tile_num==41||tile_num==51||tile_num==61||tile_num==71||tile_num==81||tile_num==91||tile_num==101||tile_num==111||tile_num==121||tile_num==131||tile_num==141||tile_num==151||tile_num==161||tile_num==171||tile_num==181||tile_num==191)
      {m1 = 0;}
      else {m1 = tile_num - 1;}

      if (tile_num > 190) {p20 = 0;}
      else {p20 = tile_num + 10;}

      if (tile_num < 10) {m20 = 0;}
      else {m20 = tile_num - 10;}
      //변수 선언
      //0으로 지정되는 경우는 해당 타일을 반전시키지 않기 위함이다.

      if (p1) {
        target = document.getElementById('tile_'+p1);
        target.className = revers_color(target.className);
      }
      //오른쪽 타일 반전코드

      if (m1) {
        target = document.getElementById('tile_'+m1);
        target.className  = revers_color(target.className);
      }
      //왼쪽 타일 반전코드

      if (p20) {
        target = document.getElementById('tile_'+p20);
        target.className = revers_color(target.className);
      }
      //아래쪽 타일 반전코드

      if (m20) {
        target = document.getElementById('tile_'+m20);
        target.className = revers_color(target.className);
      }
      //위쪽 타일 반전코드

      if (is_allowed_sound) {
        click_sound[3].currentTime = 0;
        click_sound[3].play();
      }
      //클릭 사운드 재생코드

      black_tiles = document.getElementsByClassName('black');
      white_tiles = document.getElementsByClassName('white');
      if (black_tiles.length === 0 || white_tiles.length === 0) {
        alert("당신의 승리입니다!\n"+click_time+"번 클릭으로 클리어하셨습니다.");
      }
      //게임 승리 확인 코드
    }

    var is_allowed_sound = true;
    function sound_cotrol() {
      if (is_allowed_sound) {
        is_allowed_sound = false;
        alert('음소거 설정되었습니다.');
      } else {
        is_allowed_sound = true;
        alert('음소거 해제되었습니다.');
      }
    }
    //음소거 설정 및 해제 함수

    var is_menu_open = 0;
    var menus = document.getElementsByClassName('menu');
    function open_menu() {
      if (is_menu_open) {
        for (var i = 0; i < menus.length; i++) {
          menus[i].className = 'close menu';
          is_menu_open = 0;
        }
      } else {
        for (var i = 0; i < menus.length; i++) {
          menus[i].className = 'open menu';
          is_menu_open = 1;
        }
      }
    }

    function link(str) {location.href = str;}
    </script>
    <style media="screen">
      div.display {
        width: 85vw;
        display: block;
        line-height: 0;
        margin: auto;
        background: gray;
      }
      div.tile {
        width: 8.5vw;
        height: 4vh;
      }
      div.black.tile {
        background: black;
      }
      div.white.tile {
        background: white;
      }
      .open.menu {
        animation-name: open_menu;
        animation-duration: 1s;
        animation-fill-mode: forwards;
      }
      .close.menu {
        animation-name: close_menu;
        animation-duration: 1s;
        animation-fill-mode: forwards;
      }
      @keyframes open_menu {
        0% {
          opacity: 0;
          filter: blur(5px);
          padding: 0;
        }
        100% {
          opacity: 1;
          filter: blur(0);
          height: 5rem;
          padding-top: 1.5rem;
          margin: 0.8rem auto;
          font-size: 3.5rem;
          border-radius: 1rem;
        }
      }
      @keyframes close_menu {
        0% {
          opacity: 1;
          filter: blur(0);
          height: 5rem;
          padding-top: 1.5rem;
          margin: 0.8rem auto;
          font-size: 3.5rem;
          border-radius: 1rem;
        }
        60% {
          opacity: 0;
          font-size: 0.5rem;
          filter: blur(5px);
          height: 1rem;
        }
        100% {
          opacity: 0;
          font-size: 0.5rem;
          filter: blur(5px);
          height: 0;
          font-size: 0;
        }
      }
      #menu_button {
        font-size: 2.5rem;
      }
    </style>
  </head>
  <body>
    <div class="audios">
      <audio src="audio/click_1.mp3" class="click_sound" id="click_sound_1" preload="auto"></audio>
      <audio src="audio/click_2.mp3" class="click_sound" id="click_sound_2" preload="auto"></audio>
      <audio src="audio/click_3.mp3" class="click_sound" id="click_sound_3" preload="auto"></audio>
      <audio src="audio/click_4.mp3" class="click_sound" id="click_sound_4" preload="auto"></audio>
    </div>
    <article>
      <div class="display" id="display">
        <script>
            for (var i = 1; i <= 200; i++) {
              if (random_()) {class_ = 'white tile';}
              else {class_ = "black tile";}
              document.write('<div class=\''+class_+'\' id=\"tile_'+i+'\"onclick=tile_click_event('+i+');></div>');
            }
            //타일들을 표시한다.
        </script>
      </div>
      <div class="menus">
        <div class="menu" style="background:#C90000;" onclick="open_menu();">
          닫기
        </div>
        <div class="menu" onclick="link('./');">
          홈
        </div>
        <div class="menu" onclick="sound_cotrol();">
          효과음 on/off
        </div>
        <div class="menu" onclick="link('./howtoplay.php');">
          게임 방법
        </div>
        <div class="menu" onclick="link('');">
          다시 하기
        </div>
      </div>
      <div onclick="link_to_main();" class="header">
        <h1 class="title">REMIND<br><div style="font-size:70%;">Black&White tiles</div></h1>
      </div>
      <div id="menu_button" onclick="open_menu();">
        Menu
      </div>
    </article>
  </body>
</html>
