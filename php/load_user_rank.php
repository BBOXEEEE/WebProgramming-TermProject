<?php
    $host = 'localhost'; // 호스트명
    $username = 'LWB'; // 사용자명
    $password = 'qkrtpgus956322!'; // 비밀번호
    $dbname = 'LWB'; // 데이터베이스명

    // MySQL 데이터베이스에 연결합니다.
    $mysqli = new mysqli($host, $username, $password, $dbname);

    if ($_SERVER['REQUEST_METHOD'] === 'GET') {

        // 중복 체크를 위해 SELECT 쿼리를 실행합니다.
        $query = "SELECT name, point FROM member ORDER BY point DESC LIMIT 10";
        $result = $mysqli->query($query);

        // 결과 데이터를 배열로 변환합니다.
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }

        // JSON 형태로 응답
        header('Content-Type: application/json');
        echo json_encode($data);
        exit();
    }
    $mysqli->close();
?>
