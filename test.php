<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REMIND</title>
    <style media="screen">
      @import url(//fonts.googleapis.com/earlyaccess/nanumgothic.css);
      @import url(//fonts.googleapis.com/css?family=Stalinist+One);
      html {
       font-family: 'Nanum Gothic', sans-serif;
      }
      .Stalinist.One{
        font-family: 'Stalinist One', cursive;
      }
      body {
        height: 100%;
        margin: 0;
        background: gray;
        background: linear-gradient(gray, black);
      }
      canvas {
        background: black;
      }
      .p50 {
        width: 50%;
        height: auto;
        margin: 3rem 25% 0 25%;
      }
      .p60 {
        width: 60%;
        height: auto;
        margin: 3rem 20% 0 20%;
      }
      .p70 {
        width: 70%;
        height: auto;
        margin: 3rem 15% 0 15%;
      }
      .p80 {
        width: 80%;
        height: auto;
        margin: 3rem 10% 0 10%;
      }
      .p90 {
        width: 90%;
        height: auto;
        margin: 3rem 5% 0 5%;
      }
      .p100 {
        width: 100%;
        height: auto;
        margin: 3rem 0 0 0;
      }
      article {
        width: 100%;
      }
      div.text {
        color: white;
      }
      .center {
        text-align: center;
      }
    </style>
    <script type="text/javascript">
      window.onload = function() {
        var c = document.getElementById('canvas');
        var cc = c.getContext('2d');
        //canvas width: 1000
        //canvas height: 600
      }
    </script>
  </head>
  <body>
    <article>
      <canvas class="p60" id="canvas" width="1000" height="600"></canvas>
      <p class="article">
        <div class="center text">
          <h1 class="center Stalinist One">new game</h1>
          <div class="menus">
            <div class="menu">
              화면 크기 조절
            </div>
          </div>
        </div>
      </p>
    </article>
  </body>
</html>
