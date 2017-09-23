<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
    @import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
    @import url(//fonts.googleapis.com/css?family=Stalinist+One);
      html{
       font-family: 'Nanum Gothic', sans-serif;
      }
      body {
        margin: 0;
        text-align: center;
        background: #DCDCDC;
        margin-bottom: 1rem;
      }
      .center {
        text-align: center;
      }
      #title {
        font-family: 'Stalinist One', cursive;
        margin-top: 0.5rem;
        margin-bottom: 0px;
      }
      #second_title {
        font-family: 'Stalinist One', cursive;
        margin-top: 0px;
        border-bottom: 0.5rem solid black;
      }
      .small_title {
        text-align: center;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
      }

      .des {
        line-height: 1.4;
        font-size: 1.2rem;
        display: block;
        max-width: 100% !important;
        text-align: center;
      }
      @media only screen and (max-width: 767px) {
        .des {
          line-height: 1.4;
          font-size: 0.9rem;
          width: auto !important;
          margin-left: 1em !important;
          margin-right: 1em !important;
          text-align: center;
        }
      }
      @media only screen and (min-width: 768px) and (max-width: 991px) {
        .des {
          line-height: 1.4;
          width: 723px;
          margin-left: auto !important;
          margin-right: auto !important;
          text-align: center;
        }
      }
      @media only screen and (min-width: 992px) and (max-width: 1199px) {
        .des {
          line-height: 1.4;
          width: 933px;
          margin-left: auto !important;
          margin-right: auto !important;
          text-align: center;
        }
      }
      @media only screen and (min-width: 1200px) {
        .des {
          line-height: 1.4;
          width: 1127px;
          margin-left: auto !important;
          margin-right: auto !important;
          text-align: center;
        }
      }
      b {
        display: block;
        text-align: center;
      }
      footer {
        font-size: 4%;
        color: #4F4F4F;
        border-top: 2px solid #4F4F4F;
        margin-top: 4rem;
        margin-left: 3rem;
        margin-right: 3rem;
        padding-top: 0.5rem;
        display: inherit;
      }
      img {
        width: 90%;
        height: auto;
      }
    </style>
  </head>
  <body>
    <h1 id="title">REMIND</h1>
    <h2 id="second_title">iOS Web app support</h2>
    <a href="/" style="
    background:#B70000;
    color:white;
    padding:0.5rem;
    border-radius: 1rem;
    text-decoration: none;
    ">게임으로 돌아가기</a><br><br>
    <h3 class="small_title">REMIND 웹앱 사용/설치법</h3>
    <div class="des">
      REMIND는 다양한 사용자를 위한 지원에 위해 힘쓰고 있습니다.
      iOS 사용자를 위한 웹앱 기능이 추가되었습니다.
      이 웹 페이지를 마치 하나의 어플리케이션과 같이 동작하게 할 수 있습니다.
      하지만 앱스토어를 사용하지 않으며 부담스러운 용량을 필요로 하지는 않습니다.
      단지 몇번의 클릭만으로 빠르게 설치가 가능합니다. <br><br>
      <div class="center">
        <b>1. Safari를 통해 REMIND 홈페이지에 접속합니다.</b><br>
        <img src="support_img/ins1.jpg" alt="1">
      </div>
      <br><br>
      <div class="center">
        <b>2. 화면 아래에 공유 버튼을 클릭합니다.</b><br>
        <img src="support_img/ins2.jpg" alt="2">
      </div>
      <br><br>
      <div class="center">
        <b>3. 이 페이지를 홈화면에 추가합니다.</b><br>
        <img src="support_img/ins3.jpg" alt="3">
        <img src="support_img/ins4.jpg" alt="4">
        <img src="support_img/ins5.png" alt="5">
      </div>
      <br><br>
      이렇게 이제 앱으로 REMIND를 즐길 수 있습니다. 앱 실행시 인터넷 접속이 요구될 수 있습니다. 이 앱은 업데이트를 요구하지 않습니다.
      REMIND를 플레이해주셔서 감사합니다. <br>
      <a href="/" style="color:skyblue;">게임으로 돌아가기</a>
    </div>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
