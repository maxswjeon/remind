<!DOCTYPE html>
<html>
  <head>
    <?php $include = 1; include_once('../lib/functions.php');?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <article>
    <h2 class="small_title">0. 시작하며, 개발자의 말</h2>
    <div class="des">
      <div class="alert" style="margin: 0.4rem auto !important;">
        <h3 class="center">소스 코드 사용에 대하여<br>일부 제한이 발생할 수 있습니다.</h3>
        <p class="center">다음 태그에 대한 설명을 참조해주십시오.</p>
        <ul>
          <li>영리목적 금지: 이 코드는 비영리 목적에 한하여 사용을 허가합니다.</li>
          <li>재배포 금지: 이 코드의 재배포는 금지됩니다.</li>
          <li>2차 수정 금지: 이 코드의 사용 시 수정이 금지됩니다.</li>
        </ul>
      </div>
      <h3 style="
      background: #F15F5F;
      color: white;
      border: 0.1rem solid #A91717;
      border-radius: 0.4rem;
      padding: 0.5rem;
      ">
        주의! 현재 이 코드는 최적화가 이루어지지 않은 상태에서 최소한의 구상으로 구현된 코드입니다.
        코드 최적화 작업 후 이 게시글은 수정될 예정임을 참고해주십시오.
      </h3>
      <i class="tag" style="background:red;">영리 목적 금지</i>
      <i class="tag">재배포 허용</i>
      <i class="tag">2차 수정 허용</i>
      좋은 웹 게임은 인터넷에 널려 있지만, 그것을 만드는 과정을 친절하게 설명해주는 곳은 거의 없었죠.
      때문에 저는 배우고 싶은 내용을 배우지 못하고 항상 구현하고 싶은 기능의 구현 방법을 찾지 못해 실제 개발 시간보다 구글과 네이버에서
      보내는 시간이 많았습니다.
      그때문인지 저는 항상 <br><br>
      <b>"게임을 만들면 소스를 공개하고 자세히 설명해주겠다!"</b><br>
      라고 마음먹었습니다.
      하지만 저는 웹프로그래머인지라, 게임을 제작할 능력은 없었습니다.
      게임에 자주 사용되는 canvas태그를 사용하자니 너무 복잡한 스크립트를 배우기 두려웠고
      수학이 어려웠습니다. 그래서 flash를 배우자니 flash가 설치된
      브라우저에서만 구동된다는 점에 배우기 꺼려했습니다. 그래도 게임을 한번 제작해보고 싶은 마음에 알고 있는 모든
      html, css, javascript 문법을 총출동시켰습니다. 참고로 저는 웹에서 조차 실력있는 사람은 아닙니다.
      그저 열심히 배워서 만들었는데 혹시라도 누군가에게 도움이 될까, 작성하는 글입니다.
      문법적 결함 및 개선점을 알고 계시다면 tmdgus0084@naver.com으로 메일부탁드립니다.
    </div>
    <br>
    <h2 class="small_title">1. 스타일</h2>
    <div class="des">
      사실 UI와 API만 주면 뭔 게임인들 못만들까요. 근데 그 UI와 API를 직접 제작하려니 머리가 아팠습니다.
      초기에는 canvas태그를 통해 작성해보았지만, 각 타일마다 이벤트를 지정하는게 굉장히 복작해서(불가능일지도?)
      포기했었습니다. 하지만 웹을 꾸미는 언어는 canvas(javascript)가 아닌 css입니다. 그때문에 저는 ui의 제작을 css로 시작해보았습니다.
      <br><br>
      <h2 class="small_title">1-1. CSS</h2>
      <textarea name="name" rows="26" cols="60">
div {
  display: inline-block;
}

div.display {
  display: block;
  line-height: 0;
  margin-top: 1.5%;
  width: 100%;
  height: 50rem;
}

div.black_tile {
  width: 5%;
  height: 5rem;
  background: black;
}

div.white_tile {
  width: 5%;
  height: 5rem;
  background: white;
}
      </textarea> <br>
      먼저 div.display는 모든 타일들을 담는 배경이 됩니다.
      실제로 사용자의 눈에 보이지는 않지만 모든 타일들을 묶어주는 중요한 부분입니다.
      총 200개의 타일이 이 태그 안에 모두 들어갑니다.
      div.black_tile와 div.white_tile에 적용된 설정을 보시면,
      기본적으로 div태그는 display: block을 갖습니다. 이렇게 될 경우 각 타일마다 줄바꿈이 생기는 일이 벌어집니다. 때문에 모든 div 태그에 display: inline-block을 추가해줍니다.
      <br><br>
      <h2 class="small_title">1-2. HTML & JAVASCRIPT</h2>
      <textarea name="name" rows="21" cols="80">
<div class="display" id="display">
  <script>
    function random_() {
      return (Math.round(Math.random()) === 1);
    }
    //Randomly ture or false return

    for (var i = 1; i <= 200; i++) {
      if (random_()) {
        class_ = "white_tile";
      } else {
        class_ = "black_tile";
      }
      document.write('<div class=\"'+class_+'\"id=\"'+i+'tile\"></div>');
    }
    //타일들을 표시한다.
  </script>
</div>
      </textarea> <br>
      자바스크립트를 보기 전, 우선 모든 타일은 div.display에 모이는 것을 보실 수 있습니다.
      총 200개의 타일은 1/2확률로 클래스명을 받고 그 클래스명에 따라 색이 지정됩니다.
      그 뒤에는 클릭 이벤트를 주기 위해 각 타일마다 다른 id명을 부여합니다.
    </div><br>
    <h2 class="small_title">2. 이벤트 지정</h2>
    <div class="des">
      이 부분에서 많은 고민을 했습니다. 위에서 지정한 각 타일을 객체로 지정하려고 하는데
      그렇게 되면 객체는 최소 200개가 되어야합니다. 객체의 이름이 항상 달라져야하기 때문에 반복문을 사용하기는
      제 지식내에서 불가능했습니다. 그래서, php로 작성하고 그것을 복사/붙여넣기했습니다.
      힘든 일 하라고 기계는 만들어졌고 힘든 일이 생겼다고 힘들게 할 필요는 없어졌습니다.<br><br>
      <h2 class="small_title">2-1. 객체 선언</h2>
      <textarea name="name" rows="12" cols="80">
        var tile_1 = document.getElementById('1tile');
        var tile_2 = document.getElementById('2tile');
        var tile_3 = document.getElementById('3tile');
         .
         .
         .
         (중략)
        var tile_198 = document.getElementById('198tile');
        var tile_199 = document.getElementById('199tile');
        var tile_200 = document.getElementById('200tile');
      </textarea>
      이 부분까지는 자동으로 만들어진 코드를 붙여넣기했으니 힘들지 않았습니다.
      하지만 문제가 생겼습니다. 위, 아래, 양옆의 타일의 색을 반전시키는 스크립트가 필요한데,
      모두 같은게 아닙니다.
      예를 들면 1열 1행에 있는 블럭은 왼쪽과 위쪽 타일을 반전시키지 않습니다.
      때문에 수정이 필요한 타일은 직접 수정했지만, 나머지는 역시 php를 이용해 작성한 후, 붙여넣기했습니다.<br><br>
      <h2 class="small_title">2-2. onclick 이벤트 지정</h2>
      <textarea name="name" rows="52" cols="80">
function revers_color(color) {
  if (color == "white_tile") {
    return "black_tile";
  } else if (color == "black_tile") {
    return "white_tile";
  }
}
//반전된 색상을 리턴해준다.

function is_game_end() {
  black_tiles = document.getElementsByClassName('black_tile');
  white_tiles = document.getElementsByClassName('white_tile');
  if (black_tiles.length === 0 || white_tiles.length === 0) {
    alert("당신의 승리입니다!");
    document.getElementById('hide_target').className = 'hide';
    document.getElementById('vis_target').className = "vis center";
    document.getElementById('title').style.color = 'red';
  }
}
//각 타일을 가져온 후, 어느 한 색의 타일 개수가 0이면(=모든 타일의 색이 같으면) 승리이벤트를 실행한다.

tile_1.onclick = function() { tile_2.className = revers_color(tile_2.className); tile_21.className = revers_color(tile_21.className); is_game_end(); }
tile_2.onclick = function() { tile_1.className = revers_color(tile_1.className); tile_3.className = revers_color(tile_3.className); tile_22.className = revers_color(tile_22.className); is_game_end(); }
tile_3.onclick = function() { tile_2.className = revers_color(tile_2.className); tile_4.className = revers_color(tile_4.className); tile_23.className = revers_color(tile_23.className); is_game_end(); }
.
.
.
(중략)
tile_198.onclick = function() { tile_197.className = revers_color(tile_197.className); tile_199.className = revers_color(tile_199.className); tile_178.className = revers_color(tile_178.className); is_game_end(); }
tile_199.onclick = function() { tile_198.className = revers_color(tile_198.className); tile_200.className = revers_color(tile_200.className); tile_179.className = revers_color(tile_179.className); is_game_end(); }
tile_200.onclick = function() { tile_199.className = revers_color(tile_199.className); tile_180.className = revers_color(tile_180.className); is_game_end(); }
      </textarea>
      수정해야할 이벤트는 직접 수정하고 수정이 필요없는 부분은 모두 붙여넣기 했습니다. 각 함수에 어려운 문법은 없으니 쉽게 해석하실 겁니다.<br><br>
      <b style="font-size: 1rem;">2-2-1. 함수 해석</b>
      -function revers_color: 이 함수의 용도는 입력받은 문자로 작성된 색 타일 정보를 이 스크립트내에서 사용하는 반전된 색을 문자로 작성한 문자열을 반환하는 것입니다.
      간단히말해, "white_tile"을 입력받으면 "black_tile"을, "black_tile"을 입력받으면 "white_tile"을 리턴합니다. <br><br>
      -function is_game_end: 이 함수의 용도는 사용자의 게임 승리 여부를 확인하는 것입니다. getElementsByClassName함수를 이용해서 black_tiles 변수와 white_tiles 변수에 각 색깔의 타일들을
      유사배열 형태로 저장합니다. 이때, 둘 중 하나의 배열의 크기가 0일 경우(if (black_tiles.length === 0 || white_tiles.length === 0)), 이 함수를 사용자가 게임에서 승리하였다고 인식하고 그에 맞는 이벤트를 실행합니다.
      알림창을 띄우거나, 타이틀의 색을 바꾸는 등... <br><br>
      -tile_n.onclick = function(): 이 함수의 용도는 사용자가 타일을 클릭했을 때, 주변 타일의 색을 바꿉니다. 위에 두 함수는 이 함수를 위해 만들어진 것입니다. 먼저 tile_n.className = revers_color(tile_n.className); 을 통해,
      주변 타일의 색을 바꾸고 is_game_end 함수를 실행해 게임의 승리 여부를 확인합니다.
      <br><br>
    </div>

    <h2 class="small_title">3.끝내며</h2>
    <div class="des">
      이 게임을 제작하는데 2시간, 수정 및 기능 추가(사용자 의견 반영)이 1시간 가량 소요됬고, 이 글을 작성하는데 3시간이 소요됬습니다.
      개발 시간 3시간은 짧지만 하루중에 3시간은 짧은게 아닙니다. 저에게는 굉장히 소중하고 힘들게 작성한 코드지만 이렇게 코드를 공개하고 다른 이에게 도움을 주고 싶은 마음에 미흡한 필력으로나마 글을 작성해보았습니다.
      이런 필력으로 설명하려니 부족한 부분이 많고 이해하기 힘드실 겁니다. 코드 전문은 <a href="https://www.dropbox.com/s/phh6jk31mtq7ym6/index.html?dl=0" target="_blank">여기</a>를 클릭하여 열람 가능합니다.
      모두 훌륭한 개발자가 되시길 응원합니다. 감사합니다.
      <h5 class="center Stalinist One"><i>REMIND: Developer, Hwang Seunghyeon</i></h5>
    </div>
    <div id="back" onclick="link('/dev');" >&lt; back</div>
    </article>
    <?php
     include_once('../lib/footer.html');
     ?>
  </body>
</html>
