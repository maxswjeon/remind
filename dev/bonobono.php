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
    <title>REMIND</title>
<style media="screen">
@import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
@import url('//fonts.googleapis.com/css?family=Wendy+One');
  header {
    font-family: 'Wendy One', sans-serif;
  }
  body {
    background-image: url('/img/dev/bonobono/fucking_bg.png');
    text-align: center;
    margin: 0;
  }
  header {
    background: white;
  }
  img.fucking.bonobono {
    width: 75%;
    border: 1rem solid white;
    margin-left: 1rem;
    box-shadow: 1rem 1rem 1rem 1rem rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  }
  .fucking.text {
    padding-top: 1rem;
    background-image: url('/img/dev/bonobono/cloud-346706_640.png');
    height: 10rem;
  }
  #back {
    background: #888888;
    opacity: 0.9;
    position: fixed;
    bottom: 1rem;
    left: 1rem;
    padding: 1rem;
    border-radius: 9rem;
  }
  footer {
    font-size: 1%;
    text-align: center;
    border-top: 0.1rem solid black;
    padding-top: 0.2rem;
    background-color: white;
  }
  a {
    color: skyblue;
    text-decoration: underline;
  }
  a:hover {
    color: inherit;
  }
</style>
<script type="text/javascript">
  var body, img;
  window.onload = function() {
    body = document.getElementsByTagName('body');
    img = document.getElementsByTagName('img');
    if (body[0].offsetWidth > body[0].offsetHeight) {
      for (var i = 0; i < img.length; i++) {
        img[i].style.width = '30%';
      }
    }
  }
  function link(str) {
    location.href = str;
  }
</script>
  </head>
  <body>
    <i>
    <header>
      <h1 onclick="link('/');">REMIND</h1>
    </header>
    <h1>웹 디자이너를 찾는다?!?!</h1>
    <img class="fucking bonobono" src="/img/dev/bonobono/bonobono.jpeg" onclick="link('project_remind.php');"><br>
    보노보노등장~~~~~!!! <br>
    이 사이트의 디자인을 꾸며줄 사람이 필요해요!<br>
    보노보노를 눌러보세요!<br>
    이 <del>프로잭트</del> 프로젝트를 알아볼 수 있대요!!!!!! <br>
    지금 웹 디자인을 도와줄 사람이 필요해요!!!!<br>
    이 프로젝트는 비영리 프로젝트에요!<br>
    <del>조개껍데기</del> 돈을 안준다는 뜻이에요.<br>
    참여하려면 다음과 같은 언어를 다룰 줄 알아야<del>헤</del>해요!!!!
    <ol>
      <li>(필수)HTML</li>
      <li>(필수)CSS</li>
      <li>(선택)Javascript</li>
    </ol>
    <div class="fucking text" onclick="link('project_remind.php');">
      <h1><b>이런 언어를 다룰 줄 아는 당신! 데단해~ 당장 지원해봐!! 이 무지개를 클릭해도 프로젝트 소개를 볼 수 있다고~~?!</b></h1>
    </div> <br><br>
    <img src="/img/dev/bonobono/fucking_thanks.png" class="fucking bonobono" style="border:none !important;"><br><br>
    <div id="back" onclick="link('/dev');" >&lt; back</div>
  </i>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
