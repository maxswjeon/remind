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
    <link rel="stylesheet" type="text/css" href="dev_m.css">
    <title>REMIND</title>
    <script src="/lib/functions.js"></script>
  </head>
  <body>
    <header onclick="link('/');">
      <h1 class="title">REMIND<br><div class="second_tile">Developers</div></h1>
    </header>
    <article class="">
      <div class="alert" style="margin: 0.4rem auto !important;">
        <h3 class="center">소스 코드 사용에 대하여<br>일부 제한이 발생할 수 있습니다.</h3>
        <p class="center">다음 태그에 대한 설명을 참조해주십시오.</p>
        <ul>
          <li>영리목적 금지: 이 코드는 비영리 목적에 한하여 사용을 허가합니다.</li>
          <li>재배포 금지: 이 코드의 재배포는 금지됩니다.</li>
          <li>2차 수정 금지: 이 코드의 사용 시 수정이 금지됩니다.</li>
        </ul>
      </div>
    <h2 class="small_title">0. 시작하며, 개발자의 말</h2>
    <div class="des">
      <h3 style="
      background: #F15F5F;
      color: white;
      border: 0.1rem solid #A91717;
      border-radius: 0.4rem;
      padding: 0.5rem;
      ">
        주의! 아직 작성이 완료된 게시글이 아닙니다.
      </h3>
      <i class="tag">영리 목적 허용</i>
      <i class="tag">재배포 허용</i>
      <i class="tag">2차 수정 허용</i>
    </div>
    <br>

    <div id="back" onclick="link('/dev');" >&lt; back</div>
    </article>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
