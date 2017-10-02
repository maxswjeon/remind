<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!--for iOS-->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="REMIND">
      <link rel="apple-touch-icon" href="/assets/image/favicon.jpg">
    <!---->
    <title>REMIND</title>
    <link rel="stylesheet" type="text/css" href="lib/bwtiles.css">
    <script type="text/javascript">
      window.onload = function() {
        click_sound = document.getElementsByTagName('audio');
        menus = document.getElementsByClassName('menu');
      }

      function random_() {
        return (Math.round(Math.random()) === 1);
      }
      //Randomly ture or false return

      function link_to_main() {
        var q = confirm("정말로 메인 페이지로 이동하시겠습니까?");
        if (q) {location.href = '/';}
      }

      function revers_color(color) {
        if (color == "white_tile") {return "black_tile";}
        else if (color == "black_tile") {return "white_tile";}
        else {return false;}
      }
      //반전된 색상을 리턴해준다.

      var click_time = is_game_end = 0;
      function tile_click_event(tile_num) {
        if (is_game_end) {return false;}
        click_time++;

        if (tile_num==20||tile_num==40||tile_num==60||tile_num==80||tile_num==100||tile_num==120||tile_num==140||tile_num==160||tile_num==180||tile_num==200)
        {p1 = 0;}
        else {p1 = tile_num + 1;}

        if (tile_num==21||tile_num==41||tile_num==61||tile_num==81||tile_num==101||tile_num==121||tile_num==141||tile_num==161||tile_num==181)
        {m1 = 0;}
        else {m1 = tile_num - 1;}

        if (tile_num > 180) {p20 = 0;}
        else {p20 = tile_num + 20;}

        if (tile_num < 20) {m20 = 0;}
        else {m20 = tile_num - 20;}
        //변수 선언

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

        black_tiles = document.getElementsByClassName('black_tile');
        white_tiles = document.getElementsByClassName('white_tile');
        if (black_tiles.length === 0 || white_tiles.length === 0) {
          is_game_end = true;
          alert("당신의 승리입니다!");
        }
        //게임 승리 확인 코드
      }

      is_allowed_sound = true;
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

      is_menu_open = 0;
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
    div.button {
      width: 6rem;
    }
    div.display {
      display: block;
      line-height: 0;
      width: 90%;
      margin: auto;
      margin-top: 0.7rem;
    }
    div.black_tile {background: black;}
    div.white_tile {background: white;}

    @media only screen and (max-height: 300px) {
      div.display {
        height: 200px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 20px;
      }
    }
    @media only screen and (min-height: 301px) and (max-height: 400px) {
      div.display {
        height: 250px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 25px;
      }
    }
    @media only screen and (min-height: 401px) and (max-height: 500px) {
      div.display {
        height: 350px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 35px;
      }
    }
    @media only screen and (min-height: 501px) and (max-height: 600px) {
      div.display {
        height: 450px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 45px;
      }
    }
    @media only screen and (min-height: 601px) and (max-height: 700px) {
      div.display {
        height: 550px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 55px;
      }
    }
    @media only screen and (min-height: 701px) and (max-height: 800px) {
      div.display {
        height: 650px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 65px;
      }
    }
    @media only screen and (min-height: 801px) and (max-height: 900px) {
      div.display {
        height: 750px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 75px;
      }
    }
    @media only screen and (min-height: 901px) and (max-height: 1000px) {
      div.display {
        height: 850px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 85px;
      }
    }
    @media only screen and (min-height: 1001px) and (max-height: 1100px) {
      div.display {
        height: 950px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 95px;
      }
    }
    @media only screen and (min-height: 1101px) and (max-height: 1200px) {
      div.display {
        height: 1050px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 105px;
      }
    }
    @media only screen and (min-height: 1201px) {
      div.display {
        height: 1100px;
      }
      div.black_tile, div.white_tile{
        width: 5%;
        height: 110px;
      }
    }
    .open.menu {
      width: 10rem;
      display: inline-block;
      animation-name: open_menu;
      animation-duration: 1s;
      animation-fill-mode: forwards;
    }
    .close.menu {
      width: 10rem;
      display: inline-block;
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
        height: 2rem;
        padding-top: 0.5rem;
        margin: 0.8rem auto;
        font-size: 1.3rem;
        border-radius: 1rem;
      }
    }
    @keyframes close_menu {
      0% {
        opacity: 1;
        filter: blur(0);
        height: 2rem;
        padding-top: 0.5rem;
        margin: 0.8rem auto;
        font-size: 1.3rem;
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
              if (random_()) {class_ = "white_tile";}
              else {class_ = "black_tile";}
              document.write('<div class='+class_+' id=tile_'+i+' onclick=tile_click_event('+i+');></div>');
            }
            //타일들을 표시한다.
        </script>
      </div>
      <div class="center menus">
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
