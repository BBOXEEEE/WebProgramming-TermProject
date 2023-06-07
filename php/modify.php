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

    $id = $_GET['id'];
    $pw = $_POST['pw'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $query = "UPDATE member SET pw='$pw', email='$email', phone='$phone' WHERE id='$id'";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                alert("회원정보가 수정되었습니다!");
                window.location.href = "../main_view.php";
            </script>';
    } else {
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }
    $mysqli->close();
?>
