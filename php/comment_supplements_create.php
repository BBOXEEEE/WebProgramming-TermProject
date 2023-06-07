<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    $host = 'localhost';
    $user = 'LWB';
    $password = 'qkrtpgus956322!';
    $dbname = 'LWB';

    $mysqli = new mysqli($host, $user, $password, $dbname);
    if ($mysqli->connect_error) {
        die('Connect Error: ' . $mysqli->connect_error);
    }

    $post_num = $_GET["num"];
    $page = $_GET["page"];
    $comment = $_POST["comment"];
    $comment = htmlspecialchars($comment, ENT_QUOTES);
    $regist_day = date("Y-m-d H:i:s");

    $query = "UPDATE member SET point = point + 10 WHERE id = '$userid'";
    $mysqli->query($query);

    $query = "INSERT INTO comment_supplements (post_num, id, name, comment, regist_day) VALUES ('$post_num', '$userid', '$username', '$comment', '$regist_day')";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                window.location.href = "../board_info_supplements_view.php?num='. $post_num. '&page=' .$page. '";
            </script>';
    } else {
        // 등록 실패 시 오류 메시지를 출력합니다.
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }

    // MySQL 연결을 닫습니다.
    $mysqli->close();
?>
