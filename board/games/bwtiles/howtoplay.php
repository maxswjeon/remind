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
      <h1 class="title">REMIND<br><div class="second_tile">Black & White tiles</div></h1>
    </header>
      <article class="center">
        <div class="ui container">
          <div class="text_post" style="margin-top:0;">
            <div class="left text">
              <h1 class="center">게임 방법</h1>
              이 게임은 간단한 조작으로 즐기는 퍼즐 게임입니다.
              타일을 클릭하게 되면 그 타일은 위, 아래, 양옆 타일의 색을 반전시킵니다.
              이러한 규칙을 이용하여 모든 타일의 색을 바꾸는 것이 이 게임의 목적입니다.
              <h1 class="center">실제 플레이 영상</h1>
              <iframe width="100%" height="450" src="https://www.youtube.com/embed/3D02aoEmYps" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      <div id="back" onclick="history.back();">&lt; back</div>
      </article>
    <?php include_once('../../lib/footer.html'); ?>
  </body>
</html>
