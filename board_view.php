<?php
    // ... (데이터베이스 연결 등의 필요한 코드)
    $host = 'localhost'; // 호스트명
    $username = 'LWB'; // 사용자명
    $password = 'qkrtpgus956322!'; // 비밀번호
    $dbname = 'LWB'; // 데이터베이스명

    // MySQL 데이터베이스에 연결합니다.
    $mysqli = new mysqli($host, $username, $password, $dbname);

    // 게시물 번호를 확인하고 해당 게시물을 로드합니다.
    if (isset($_GET['id'])) {
        $postId = $_GET['id'];

        // 게시물을 조회하는 SQL 쿼리를 작성합니다.
        $query = "SELECT * FROM workoutBoard WHERE num = $postId";
        $result = $mysqli->query($query);

        if ($result && $result->num_rows > 0) {
            // 게시물이 존재하는 경우 해당 게시물을 가져옵니다.
            $post = $result->fetch_assoc();

            // 게시물 내용을 화면에 표시합니다.
            echo "<h2>게시물 번호: " . $post['num'] . "</h2>";
            echo "<h3>제목: " . $post['title'] . "</h3>";
            echo "<p>작성자: " . $post['name'] . "</p>";
            echo "<p>작성일: " . $post['regist_day'] . "</p>";
            echo "<p>조회수: " . $post['hit'] . "</p>";
            echo "<p>내용: " . $post['content'] . "</p>";
        } else {
            echo "게시물을 찾을 수 없습니다.";
        }

        // 결과를 해제합니다.
        $result->free();
    } else {
        echo "게시물 번호를 전달받지 못했습니다.";
    }

    // ... (데이터베이스 연결 해제 등의 필요한 코드)
    $mysqli->close();
?>
