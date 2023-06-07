<?php
    // 데이터베이스 연결 설정
    $servername = "localhost";
    $username = "LWB";
    $password = "qkrtpgus956322!";
    $dbname = "LWB";

    // 데이터베이스 연결
    $conn = new mysqli($servername, $username, $password, $dbname);
    // 연결 확인
    if ($conn->connect_error) {
        die("데이터베이스 연결에 실패했습니다: " . $conn->connect_error);
    }

    $query = "SELECT * FROM board_today ORDER BY hit DESC LIMIT 6";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $data = array();
        while ($row = $result->fetch_assoc()) {
            $row["regist_day"] = date("Y-m-d", strtotime($row["regist_day"]));
            $data[] = $row;
        }
        $response = array(
            'data' => $data
        );
        header('Content-Type: application/json');
        echo json_encode($response);
    } else {
        echo json_encode(array(
            'data' => array()
        ));
    }

    $conn->close();
?>
