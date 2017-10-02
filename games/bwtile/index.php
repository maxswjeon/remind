<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $include = 1; include_once('../../lib/functions.php');?>
    <!--for iOS-->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="REMIND">
      <link rel="apple-touch-icon" href="http://remind.zz.am/ios/icon.jpg">
    <!---->
    <?php if (checkMobile()) { $m = true;?>
    <link rel="stylesheet" type="text/css" href="../../lib/mobile_main.css">
    <?php } else { $m = false;?>
    <link rel="stylesheet" type="text/css" href="../../lib/pc_main.css">
    <?php } ?>
    <title>REMIND</title>
    <script src="/lib/functions.js"></script>
  </head>
  <body>
    <header onclick="link('/');">
      <h1 class="title">REMIND<br><div class="second_tile">Black & White tiles</div></h1>
    </header>
    <nav class="center">
      <?php if (checkMobile()){ ?>
      <!--mobile nav-->
      <div class="menu" onclick="link('20_10.php');">
        <img class="menu" src="../../img/game/bwtile/Play_develop_Mobile.jpg">
        <div class="text">
          <b class="title">게임 시작</b>
          흑백의 타일들을 조작하여 화면을 모두 하얗게, 까맣게 만들어 버리세요!
        </div>
      </div>
      <div class="menu" onclick="link('howtoplay.php');">
        <img class="menu" src="../../img/game/bwtile/iconmonstr-puzzle-16-240.png">
        <div class="text">
          <b class="title">게임 방법</b>
          이 게임의 규칙을 확인합니다.
        </div>
      </div>
      <div class="menu" onclick="link('../../dev/dev_bwtile.php');">
        <img class="menu" src="../../img/game/bwtile/iconmonstr-code-2-240.png">
        <div class="text">
          <b class="title">소스 코드</b>
          이 게임의 개발 정보를 얻습니다.
        </div>
      </div>
      <?php }else{ ?>
      <!--pc nav-->
        <div class="polaroid" onclick="link('10_20.php');">
        <img src="../../img/bw_main.jpg">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">게임 시작</h2><br></p>
        </div>
        </div>

        <div class="polaroid" onclick="link('howtoplay.php');">
        <img src="../../img/bw_main.jpg">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">게임 방법</h2><br></p>
        </div>
        </div>

        <div class="polaroid" onclick="link('../../dev/dev_bwtile.php');">
        <img src="../../img/bw_main.jpg">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">소스 코드</h2><br></p>
        </div>
        </div>
        <br><br>
      <?php } ?>
      </nav>
      <article class="center">
        <div class="ui container" style="border-top: 2px solid #3F3F3F;">
          <div class="text_post">
            <h1 class="Stalinist One">Black & white tiles</h1>
            <div class="text" style="text-align: left">
              <h1 class="center">게임 소개</h1>
              <p>
              이 게임은 간단한 조작으로 즐기는 퍼즐 게임입니다.
              타일을 클릭하게 되면 그 타일은 주변 타일의 색을 반전시킵니다.
              이러한 규칙을 이용하여 모든 타일의 색을 바꾸는 것이 이 게임의 목적입니다.
              더 자세한 게임 방법은 위의 게임 방법 메뉴를 클릭해주십시오.
              </p>
              <iframe width="100%" height="450px" src="https://www.youtube.com/embed/dTk_rNxfwtc" frameborder="0" allowfullscreen></iframe>
              <p class="center" style="margin-top:0;font-size:70%;color:gray;"><i>음악 'Cha Cappella'에 맞춰 완성되어 가는 퍼즐이 표현되었습니다.</i></p>
              <h5 class="center Stalinist One"><i>REMIND: Developer, Hwang Seunghyeon</i></h5>
            </div>
          </div>
        </div>
      <div id="back" onclick="link('/');" >&lt; back</div>
      </article>
    <?php include_once('../../lib/footer.html'); ?>
  </body>
</html>
