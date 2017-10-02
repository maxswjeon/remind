var canvas, display, cwidth, cheight;
var title1 = title2 = 0;
var up = 87, left = 65, down = 83, right = 68;
/*
키보드변수. 기본설정은 WASD이다.
-방향키
up = 38, left = 37, down = 40, right = 39;
-숫자키
up = 38, left = 37, down = 40, right = 39;
*/
//변수 선언

window.onload = function() {
  canvas = document.getElementById('canvas');
  display = canvas.getContext('2d');
  cwidth = canvas.width;
  cheight = canvas.height;
  if (run() !== true) {location.href = '?error=1';}
}

function run() {
  drawBG('title1');
  return true;
}

window.onclick = function() {
  if (title1) {
    title1 = false;
    drawBG('title2');
  } else if (title2) {
    title2 = false;
    drawBG('title1');
  }
}

function drawBG(str, color) {
  switch (str) {
    case 'title1':
      title1 = true;
      display.drawImage(img_title,0,0);
      return true;
    case 'title2':
      title2 = true;
      display.fillStyle = 'red';
      display.fillRect(0,0,cwidth,cheight);
      return true;
    case 'color':
      display.fillStyle = color;
      display.fillRect(0,0,cwidth,cheight);
      return true;
    default:
      return false;
  }
}

function size(n) {
  //사용자의 제어에 의한 게임 화면크기의 조절이 가능하다. n에는 1~10의 정수만 입력할 것.
  if (!n || n > 10 || n < 0 || Math.floor(n) !== n) {
    return false;
  } else {
    canvas.className = 'p'+Number(n)*10;
    return true;
  }
}
