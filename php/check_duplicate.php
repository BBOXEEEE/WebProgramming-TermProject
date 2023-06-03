<?php
    $host = 'localhost'; // 호스트명
    $username = 'LWB'; // 사용자명
    $password = 'qkrtpgus956322!'; // 비밀번호
    $dbname = 'LWB'; // 데이터베이스명

    // MySQL 데이터베이스에 연결합니다.
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // 아이디 중복 체크를 위한 코드
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];

        // 중복 체크를 위해 SELECT 쿼리를 실행합니다.
        $query = "SELECT id FROM members WHERE id = '$id'";
        $result = $mysqli->query($query);

        $response = array();
        $response['duplicate'] = false;

        if ($result->num_rows > 0) {
            $response['duplicate'] = true;
        }

        // JSON 형태로 응답
        header('Content-Type: application/json');
        echo json_encode($response);
        exit();
    }
    $mysqli->close();
?>
