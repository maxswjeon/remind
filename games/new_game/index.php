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
      <h1 class="title">REMIND<br><div class="second_tile">New game</div></h1>
    </header>
      <article class="center">
        <div class="ui container" style="border-top: 2px solid #3F3F3F;">
          <div class="text_post" style="text-align: left">
            <div class="text">
              <p>
                새로운 게임이 지금 개발중입니다! 여러 개발자가 뭉쳐 새로운 게임 개발에 들어섰습니다.
                <h1 class="center">게임 소개</h1>
                <ul>
                  <li>구상 단계입니다.</li>
                </ul>
                <h1 class="center">개발 참가자</h1>
               <ul>
                 <li>개발자, 황승현</li>
                 <li>개발자, 박재성</li>
                 <li>개발자, 박준형</li>
                 <li>개발자, Gomsang</li>
                 <li>시나리오, CALL ROLL</li>
               </ul>
                개발 상황은 빠르게 업데이트될 예정입니다. 감사합니다.
              </p>
            </div>
          </div>
        </div>
      <div id="back" onclick="link('/');" >&lt; back</div>
      </article>
    <?php include_once('../../lib/footer.html'); ?>
  </body>
</html>
