document.write('<div style="background:black"><div id="loading"></div></div>');

window.onload = function() {
  var nav = document.getElementsByTagName('nav');
  var article = document.getElementsByTagName('article');
  var menu = document.getElementsByClassName('menu');
  //객체 선언

  if (nav.length === 1) {nav[0].className = 'center onload';}
  if (article.length === 1) {article[0].className = 'center onload';}
  if (menu.length !== 0) {
    for (var i = 0; i < menu.length; i++) {
      menu[i].className = 'menu menu_onload';
    }
  }
}

function link(str) {
  var nav = document.getElementsByTagName('nav');
  var article = document.getElementsByTagName('article');
  var loading = document.getElementById('loading');
  if (nav.length > 0) {nav[0].className = 'center outload';}
  if (article.length > 0) {article[0].className = 'center outload';}
  loading.className = 'now_loading';
  delay_for_link(str, 0.4);
}

function delay_for_link(link_str, min) {
  document.getElementById('loading').innerHTML = '<meta http-equiv="refresh" content="'+min+';url='+link_str+'">';
}

function now_dev_alert() {
  alert("아직 업데이트가 준비되지 않았습니다.");
}
