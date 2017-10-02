<?php

session_start();


// 데이터베이스 정보 불러옴
include "db.class.php";

// 각종 에러 출력 안함
//ini_set('display_errors', 0);

define("CMD_USER_CHECK_LOGIN", 0);
define("CMD_USER_CHECK_REGISTER", 1);
define("CMD_USER_CHECK_LOGOUT", 2);

if (!isset($_POST['cmd'])) {
    if (empty($include) or !$include) {
        die("<script>alert('잘못된 접근입니다. 메인 페이지로 이동합니다.'); history.go(-1);</script>");
    }
}

if (isset($_POST['cmd'])) {
    $player_id = $_POST['userid'];
    $player_pw = $_POST['userpw'];

    switch ((int) $_POST['cmd']) {
        case CMD_USER_CHECK_LOGIN: // 로그인
            $player_id = $mysqli->real_escape_string($player_id);
            $player_pw = $mysqli->real_escape_string($player_pw);

            $query = "select * from players where player_id=trim('{$player_id}') and player_pw='$player_pw'";
            $row = mysqli_fetch_array($mysqli->query($query));

            if (isset($row['player_id'])) {
                $_SESSION['player_id'] = $row['player_id'];
                echo "success";
            } else {
                echo "false";
            }
            break;
        case CMD_USER_CHECK_REGISTER: // 회원가입
            $player_id = $mysqli->real_escape_string($player_id);
            $player_pw = $mysqli->real_escape_string($player_pw);

            if (strlen($player_id) > 20) {
                die("<script>alert('입력하신 아이디가 너무 길어요ㅠ'); history.go(-1); </script>");
            } else if (strlen($player_id) < 3) {
                die("<script>alert('입력하신 아이디가 너무 짧으신거 아니에요ㅠ?'); history.go(-1); </script>");
            }

            if (preg_match("/'|\"|\\|`|@|[*]|-|;|=/i", $player_id)) {
                die("<script>alert('입력하신 아이디에 특수문자가 포함되어 있습니다.'); history.go(-1); </script>");
            } else if (preg_match("/'|\\|\"|`|[*]|-|;|=/i", $player_id)) {
                die("<script>alert('입력하신 닉네임에 특수문자가 포함되어 있습니다.'); history.go(-1); </script>");
            }

            $query1 = "select * from players where player_id='$player_id'";
            $result1 = mysqli_fetch_array($mysqli->query($query1));
            if ($result1) {
                die("<script>alert('입력하신 아이디가 중복 됩니다.'); history.go(-1); </script>");
            }

            $sql = "insert into players(player_id,player_pw)
          values('$player_id','$player_pw')";
            $mysqli->query($sql);
            die("<script>alert('register success'); history.go(-1); </script>");
            break;
        case CMD_USER_CHECK_LOGOUT: // 로그아웃
            if (session_destroy()) {
                header("Location: ../");
            }
            echo "logout";
            break;
    }
}

?>
