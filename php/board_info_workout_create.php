<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

    // DB 연결 정보를 설정합니다.
    $host = 'localhost'; // 호스트명
    $user = 'LWB'; // 사용자명
    $password = 'qkrtpgus956322!'; // 비밀번호
    $dbname = 'LWB'; // 데이터베이스명

    // MySQL 데이터베이스에 연결합니다.
    $mysqli = new mysqli($host, $user, $password, $dbname);

    // 연결 오류가 발생한 경우 오류 메시지를 출력합니다.
    if ($mysqli->connect_error) {
        die('Connect Error: ' . $mysqli->connect_error);
    }

    // POST 요청에서 폼 데이터를 가져옵니다.
    $title = $_POST["title"];
    $content = $_POST["content"];
    $title = htmlspecialchars($title, ENT_QUOTES);
    $content = htmlspecialchars($content, ENT_QUOTES);
    $regist_day = date("Y-m-d H:i:s");


    // 쿼리를 생성합니다.
    $query = "UPDATE member SET point = point + 30 WHERE id = '$userid'";
    $mysqli->query($query);

    $query = "INSERT INTO board_workout (id, name, title, content, regist_day) VALUES ('$userid', '$username', '$title', '$content', '$regist_day')";

    // 쿼리를 실행하여 데이터를 DB에 삽입합니다.
    if ($mysqli->query($query) === true) {
        // 등록 성공 시 알림창을 띄웁니다.
        echo 
            '<script>
                alert("게시물이 등록되었습니다!");
                window.location.href = "../board_info_workout.php?page=1";
            </script>';
    } else {
        // 등록 실패 시 오류 메시지를 출력합니다.
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }

    // MySQL 연결을 닫습니다.
    $mysqli->close();
?>
