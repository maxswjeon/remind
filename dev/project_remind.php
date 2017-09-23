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
    <header onclick="link('/');">
      <h1 class="title">REMIND<br><div class="second_tile">Developers</div></h1>
    </header>
    <article class="center">
      <div class="ui container ">
      <div class="text_post">
        <h1 class="Stalinist One">Project REMIND</h1>
          <div class="text" style="text-align: left">
          우리는 어릴 적 웹에 있는 플래시 게임들을 즐겨 했습니다.
          저 또한 그런 플래시 게임들을 즐겨 했습니다.
          친구들과 집에 모이면 하나의 컴퓨터로 2인용 게임을 하기도 하였고 혼자서도 재미있게 게임을 즐길 수 있었습니다.
          그래서 저는 그때의 기억을 다시금 떠올리게 하고자 웹 게임을 개발하게 되었습니다.
          요즘은 PC게임의 발전으로 웹 게임은 조금씩 사라져가는 추세라고 생각합니다.
          하지만 우리는 간단한 게임으로도 강력한 중독성과 재미를 불러올 수 있음을 알고 있습니다.
          웹에서의 게임 개발은 방해물이 아닌 도전과제임을 기억해야 합니다.
          시작은 간단한 퍼즐게임에 불과하지만, 계속해서 발전해나가는 모습을 보일 것입니다.
          프로젝트에 대한 계획 및 구상안은 다음과 같습니다.
          <div class="text_post" style="box-shadow: 0 0.025rem 0.025rem 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); text-align: left;">
            <h2 class="center Stalinist One">REMIND</h2>
            <div class="text">
              <ul>
                <li>기간: 2017년 8월 12일 ~ 2018년 8월 12일 (실제 서비스 기간은 연장될 수 있음.)</li>
                <li>목표:
                  <ol>
                    <li>수많은 게이머들에게 웹 게임의 발전 가능성을 제시한다.</li>
                    <li>게임 및 웹 소스 코드 공개를 통해 많은 개발자들을 지원한다.</li>
                    <li>프로젝트에 참여함으로써 웹과 프로그래밍에 대한 지식 범위를 넓게 한다.</li>
                    <li>금전적 이익 추구를 배제하며 발생하는 수익은 전부 투명하게 공개함과 동시에 프로젝트의 발전 또는 사회에 기부한다. 이를 통해 사회 발전에 일부 기여한다.</li>
                  </ol></li>
                <li>
                  계획: 프로젝트 참여자들과 함께 웹 페이지를 개선해나가며 발전시킨다. 후원등으로 발생하는 금전적 이익은 출처(후원자가 원치 않을 시 본명 대신 '익명'으로 기제함.) 및 금액 등을 페이지에 명시하며 사용 또한 정확하게 명시한다.
                  참여자 모집과 개선 및 발전을 계속해서 진행해나가며 우리또한 발전하게 될 것이다.
                </li>
                <li>참여 인원 제한: 없음. (후에 제한될 수 있음.)</li>
                <li>프로젝트 참여 자격: 프로젝트 참여를 통한 <b>금전적 이익을 추구하지 않으며</b> 다음 조건 중 하나 이상을 만족하는 자.<ol>
                  <li>게임 개발. 프로젝트에서 사용될 웹 프로그래밍 언어를 숙지하여 웹 게임 개발에 참여할 자.(HTML, CSS, Javascript, PHP)</li>
                  <li>DB관리 및 백엔드 개발. Mysql 데이터베이스 및 PHP sql문법을 숙지하였으며 WAMP사용을 통한 웹 백엔드 개발에 능숙한 자.</li>
                  <li>디자인. HTML과 CSS를 숙지하고 웹 디자인에 능숙한 자.</li>
                    <li>이외의 방법으로 프로젝트 발전에 기여할 자.</li>
                  </ol></li>
                  <li>참여 방법: REMIND에 카카오톡 문의. <a href="https://open.kakao.com/o/sEQZfcA" style="color:skyblue">이곳을 클릭하여 오픈 채팅방으로 이동.</a></li>
                </ul>
              </div>
            </div>
        </div>
      </div>
            </div>
    <div id="back" onclick="link('/dev');" >&lt; back</div>
    </article>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
