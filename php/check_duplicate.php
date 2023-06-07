<?php
    $host = 'localhost';
    $username = 'LWB';
    $password = 'qkrtpgus956322!';
    $dbname = 'LWB';

    // 데이터베이스 연결
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // 아이디 중복 체크를 위한 코드
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
        $id = $_POST['id'];

        // 데이터베이스 조회
        $query = "SELECT id FROM member WHERE id = '$id'";
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
