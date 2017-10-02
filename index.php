<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php $include = 1; include_once('lib/functions.php');?>
  <!--for iOS-->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-title" content="REMIND">
    <link rel="apple-touch-icon" href="http://remind.zz.am/ios/icon.jpg">
  <!---->
  <?php if(checkMobile()){ ?>
    <link rel="stylesheet" type="text/css" href="/lib/mobile_main.css">
  <?php }else{ ?>
    <link rel="stylesheet" type="text/css" href="/lib/pc_main.css">
  <?php } ?>
  <title>REMIND</title>
  <script src="/lib/functions.js"></script>
</head>

<body>
  <header onclick="link('/');">
    <h1 class="title">REMIND<br><div class="second_tile">Web Games</div></h1>
  </header>

  <nav>
    <?php if (checkMobile()){ ?>
    <!--mobile nav-->
    <div class="menu" onclick="link('games/bwtile?m=1');">
      <img class="menu" src="img/main/m_bw_main.jpg">
      <div class="text">
        <b class="title">Game: BW tiles</b>
        흑백의 타일들을 조작하여 화면을 모두 하얗게, 까맣게 만들어 버리세요!
      </div>
    </div>
    <div class="menu" onclick="link('games/new_game?m=1');">
      <img class="menu" src="img/main/iconmonstr-light-bulb-18-240.png">
      <div class="text">
        <b class="title">New Game!</b>
        새로운 게임이 개발중입니다. 기대해주십시오!
      </div>
    </div>
    <div class="menu" onclick="now_dev_alert();">
      <img class="menu" src="img/main/m_user.jpg">
      <div class="text">
        <b class="title">사용자 지원</b>
        사용자의 편의를 위한 몇 가지 기능들을 소개합니다.
      </div>
    </div>
    <div class="menu" onclick="link('dev?m=1');">
      <img class="menu" src="img/main/Gear_develop_Mobile.jpg">
      <div class="text">
        <b class="title">개발자 지원</b>
        이 페이지의 개발 정보를 얻습니다. 게임의 소스 코드 등을 얻을 수 있습니다.
      </div>
    </div>
    <?php }else{ ?>
    <!--pc nav-->
      <div class="polaroid" onclick="link('games/bwtile?pc=1');">
        <img src="img/main/bw_main.jpg">
        <div class="container">
          <p><h2>Game: BW tiles</h2><br>
            흑백의 타일들을 조작하여 화면을 모두 하얗게, 까맣게 만들어 버리세요!
          </p>
        </div>
      </div>
      <div class="polaroid" onclick="now_dev_alert();">
        <img src="img/main/user.png">
        <div class="container">
          <p><h2>사용자 지원</h2><br>
            사용자의 편의를 위한 몇 가지 기능들을 소개합니다.
          </p>
        </div>
      </div>
      <div class="polaroid" onclick="link('dev?pc=1');">
        <img src="img/main/gear.png">
        <div class="container">
          <p><h2>개발자 지원</h2><br>
            이 페이지의 개발 정보를 얻습니다. 게임의 소스 코드 등을 얻을 수 있습니다.
          </p>
        </div>
      </div>
    <?php } ?>
  </nav>

    <article>
      <div class="no_supprot">
      사용자의 해상도는 지원되지 않는 해상도입니다. <a href="?m=1">여기를 눌러</a> 모바일 버전으로 접속해주시기 바랍니다.
      </div>
      <div class="ui container" style="border-top: 2px solid #3F3F3F;margin-top:1rem;">
        <div class="text_post" style="margin-top:1rem;">
          <div class="left text">
            <h1 class="center">여러분들께 웹 게임의 발전 가능성을 제시합니다.</h1>
            우리는 어릴 적 웹에 있는 플래시 게임들을 즐겨 했습니다. 저 또한 그런 플래시 게임들을 즐겨 했습니다.
            친구들과 집에 모이면 하나의 컴퓨터로 2인용 게임을 하기도 하였고 혼자서도 재미있게 게임을 즐길 수 있었습니다.
            그래서 우리는 그때의 기억을 다시금 떠올리게 하고자 웹 게임을 개발하게 되었습니다.
            요즘은 PC게임의 발전으로 웹 게임은 조금씩 사라져가는 추세라고 생각합니다.
            하지만 우리는 간단한 게임으로도 강력한 중독성과 재미를 불러올 수 있음을 알고 있습니다.
            웹에서의 게임 개발은 방해물이 아닌 도전과제임을 기억해야 합니다.
            시작은 간단한 퍼즐게임에 불과하지만, 계속해서 발전해나가는 모습을 보일 것입니다.
            이러한 뜻을 함께 할 분들은 <a onclick='link("dev/project_remind.php");'>Project REMIND 지원</a>을 참조해주십시오.
            <h1 class="center">배워서 남주자.</h1>
            개발자가 사용하는 시간 중 큰 비중을 차지하는 부분은 '구현'이라 말할 수 있습니다.
            저 또한 게임을 개발하고 싶은 마음은 컸지만 어디서부터 시작해야 할지 몰라 참 난감하였던 경험이 있습니다.
            그래서 저희 개발자들은 작은 노력을 추가했습니다.
            저희의 도움이 큰 도움이 되지 못할지 언정, 저희가 배운 것을 조금이나마 나누기 위해 페이지의 소스 코드는 전부 게시글로 작성하여 공유됩니다.
            <a onclick='link("dev");'>여기를</a> 눌러 개발자 지원 페이지로 이동하십시오.
          </div>
        </div>
    </div>
  </article>
  <?php include_once('lib/footer.html'); ?>
</body>
</html>
