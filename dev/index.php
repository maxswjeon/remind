<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php $include = 1; include_once('../lib/functions.php');?>
    <!--for iOS-->
      <meta name="apple-mobile-web-app-capable" content="yes">
      <meta name="mobile-web-app-capable" content="yes">
      <meta name="apple-mobile-web-app-title" content="REMIND">
      <link rel="apple-touch-icon" href="http://remind.zz.am/ios/icon.jpg">
    <!---->
    <?php if (checkMobile()) { ?>
    <link rel="stylesheet" type="text/css" href="../../lib/mobile_main.css">
    <?php } else { ?>
    <link rel="stylesheet" type="text/css" href="../../lib/pc_main.css">
    <?php } ?>
    <title>REMIND</title>
    <script src="/lib/functions.js"></script>
  </head>
  <body>
    <header onclick="link('/');" class="center">
      <h1 class="title">REMIND<br><div class="second_tile">Developers</div></h1>
    </header>
    <nav class="center">
      <div class="alert" style="margin: 0.4rem auto !important;">
        <h3 class="center">소스 코드 사용에 대하여<br>일부 제한이 발생할 수 있습니다.</h3>
        <p class="center">다음 태그에 대한 설명을 참조해주십시오.</p>
        <ul>
          <li>영리목적 금지: 이 코드는 비영리 목적에 한하여 사용을 허가합니다.</li>
          <li>재배포 금지: 이 코드의 재배포는 금지됩니다.</li>
          <li>2차 수정 금지: 이 코드의 사용 시 수정이 금지됩니다.</li>
        </ul>
      </div>
      <?php if (checkMobile()){ ?>
      <!--mobile nav-->
      <div class="menu" onclick="link('dev_bwtile.php');">
        <img class="menu" src="../../img/main/m_bw_main.jpg">
        <div class="text">
          <b class="title">BW tiles</b>
          BW tiles의 개발 정보를 얻습니다.
        </div>
      </div>
      <div class="menu" onclick="link('project_remind.php');">
        <img class="menu" src="../../img/dev/m_project_remind.png">
        <div class="text">
          <b class="title">프로젝트 참여</b>
          프로젝트와 프로젝트 참여 정보를 얻습니다.
        </div>
      </div>
      <div class="menu" onclick="link('bonobono.php');">
        <img class="menu" src="../../img/dev/bonobono/bonobono11.jpeg">
        <div class="text">
          <b class="title">웹 디자이너 공고</b>
          프로젝트에 참여하여 페이지를 디자인해주실 분을 찾습니다!
        </div>
      </div>
      <?php }else{ ?>
      <!--pc nav-->
        <div class="polaroid" onclick="link('dev_bwtile.php');">
        <img src="../../img/bw_main.jpg">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">BW tiles</h2><br></p>
        </div>
        </div>
        <div class="polaroid" onclick="link('project_remind.php');">
        <img src="../../img/dev/project_remind.png">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">프로젝트 참여</h2><br></p>
        </div>
        </div>
        <div class="polaroid" onclick="link('bonobono.php');">
        <img src="../../img/dev/bonobono/bonobono35.jpeg">
        <div class="container">
          <p><h2 style="font-size: 150% !important;">웹 디자이너 공고</h2><br></p>
        </div>
        </div>
      <?php } ?>
    </nav>
    <article class="center">
      <div class="ui container" style="border-top: 2px solid #3F3F3F;">
        <?php
        if (!empty($_GET['oldlink'])) {
        echo "<br><b class='center' style='font-size:1.2rem;'>"."접속을 시도하신 링크는 이전 주소입니다. 현재 변경된 주소는 ".'<a href="http://remind.zz.am/dev">'."http://remind.zz.am/dev".'</a>'."입니다.".'</b><br><br>';
        }
         ?>
        <div class="text_post" style="text-align: left;">
          <h1 class="center">개발자를 위한 작은 노력</h1>
          좋은 웹 게임은 인터넷에 널려 있지만, 그것을 만드는 과정을 친절하게 설명해주는 곳은 거의 없었죠.
          때문에 저는 배우고 싶은 내용을 배우지 못하고 항상 구현하고 싶은 기능의 구현 방법을 찾지 못해 실제 개발 시간보다 구글과 네이버에서
          보내는 시간이 많았습니다.
          그 때문인지 저는 항상
          <b>"게임을 만들면 소스를 공개하고 자세히 설명해주겠다!"</b>
          라고 마음먹었습니다.
          이 프로젝트의 목적 중 하나는 "게임 및 웹 소스 코드 공개를 통해 많은 개발자들을 지원한다."입니다.
          저희의 능력이 부족하여 여러분에게 큰 도움이 되지 못할 수 있지만, 저희는 최선을 다해 개발자 여러분들과 정보를 공유하겠습니다.
          모두 좋은 개발자가 되길 희망합니다. 감사합니다.<br><br>
          <h5 class="center Stalinist One"><i>REMIND: Developer, Hwang Seunghyeon</i></h5>
        </div>
      </div>
    <div id="back" onclick="link('/');" >&lt; back</div>
    </article>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
