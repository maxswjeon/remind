<!DOCTYPE html>
<?php if (empty($_POST['is_true'])) { ?>
  <script>
    alert("잘못된 접근입니다. 메인페이지로 이동합니다.");
    location.href='/';
  </script>
<?php } ?>
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
              <h1 class="center">승리!</h1>
            </div>
          </div>
        </div>
      </article>
    <?php include_once('../../lib/footer.html'); ?>
  </body>
</html>
