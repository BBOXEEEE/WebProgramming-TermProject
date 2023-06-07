<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    // 데이터베이스 연결 설정
    $host = 'localhost';
    $user = 'LWB';
    $password = 'qkrtpgus956322!';
    $dbname = 'LWB';

    // 데이터베이스 연결
    $mysqli = new mysqli($host, $user, $password, $dbname);

    // 연결 확인.
    if ($mysqli->connect_error) {
        die('Connect Error: ' . $mysqli->connect_error);
    }

    // POST 요청 저장
    $title = $_POST["title"];
    $content = $_POST["content"];
    $title = htmlspecialchars($title, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d H:i:s");


    // 글 작성 시 포인트 30점 획득
    $query = "UPDATE member SET point = point + 30 WHERE id = '$userid'";
    $mysqli->query($query);

    // 게시글 추가
    $query = "INSERT INTO board_free (id, name, title, content, regist_day) VALUES ('$userid', '$username', '$title', '$content', '$regist_day')";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                alert("게시물이 등록되었습니다!");
                window.location.href = "../board_free.php?page=1";
            </script>';
    } else {
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }
    $mysqli->close();
?>
