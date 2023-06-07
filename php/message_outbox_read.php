<?php
session_start();
if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
else $userid = "";
// 데이터베이스 연결 설정
$servername = "localhost";
$username = "LWB";
$password = "qkrtpgus956322!";
$dbname = "LWB";

// 페이지네이션 설정
$itemsPerPage = 10; // 페이지당 게시물 수
$currentPage = isset($_GET['page']) ? $_GET['page'] : 1; // 현재 페이지

// 데이터베이스 연결
$conn = new mysqli($servername, $username, $password, $dbname);

// 연결 확인
if ($conn->connect_error) {
    die("데이터베이스 연결에 실패했습니다: " . $conn->connect_error);
}

// 게시물 총 수 조회
$totalItemsQuery = "SELECT COUNT(*) AS total FROM message WHERE from_id = '$userid'";
$totalItemsResult = $conn->query($totalItemsQuery);
$totalItemsRow = $totalItemsResult->fetch_assoc();
$totalItems = $totalItemsRow['total'];

// 총 페이지 수 계산
$totalPages = ceil($totalItems / $itemsPerPage);

// 현재 페이지에 해당하는 게시물 조회
$offset = ($currentPage - 1) * $itemsPerPage;
$query = "SELECT * FROM message WHERE from_id = '$userid' ORDER BY regist_day DESC LIMIT $itemsPerPage OFFSET $offset";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $row["regist_day"] = date("Y-m-d", strtotime($row["regist_day"]));
        $data[] = $row;
    }
    $response = array(
        'totalItems' => $totalItems,
        'data' => $data
    );
    header('Content-Type: application/json');
    echo json_encode($response);
} else {
    echo json_encode(array(
        'totalItems' => 0,
        'data' => array()
    ));
}

$conn->close();
?>
