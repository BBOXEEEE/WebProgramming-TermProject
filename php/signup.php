<?php
    // DB 연결 정보를 설정합니다.
    $host = 'localhost'; // 호스트명
    $username = 'LWB'; // 사용자명
    $password = 'qkrtpgus956322!'; // 비밀번호
    $dbname = 'LWB'; // 데이터베이스명

    // MySQL 데이터베이스에 연결합니다.
$mysqli = new mysqli($host, $username, $password, $dbname);

// 연결 오류가 발생한 경우 오류 메시지를 출력합니다.
if ($mysqli->connect_error) {
    die('Connect Error: ' . $mysqli->connect_error);
}

// POST 요청에서 폼 데이터를 가져옵니다.
$username = $_POST['username'];
$id = $_POST['id'];
$pw = $_POST['pw'];
$email = $_POST['email'];
$phone = $_POST['phone'];

// 쿼리를 생성합니다.
$query = "INSERT INTO members (name, id, pw, email, phone, level, point) VALUES ('$username', '$id', '$pw', '$email', '$phone', 9, 0)";

// 쿼리를 실행하여 데이터를 DB에 삽입합니다.
if ($mysqli->query($query) === true) {
    // 등록 성공 시 알림창을 띄웁니다.
    echo 
        '<script>
            alert("등록되었습니다.");
            window.location.href = "../main_view.php";
        </script>';
} else {
    // 등록 실패 시 오류 메시지를 출력합니다.
    echo 'Error: ' . $query . '<br>' . $mysqli->error;
}

// MySQL 연결을 닫습니다.
$mysqli->close();
?>
