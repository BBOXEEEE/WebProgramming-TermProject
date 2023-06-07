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

    $upload_dir = '../data/';

    $upfile_name	 = $_FILES["upfile"]["name"];
	$upfile_tmp_name = $_FILES["upfile"]["tmp_name"];
	$upfile_type     = $_FILES["upfile"]["type"];
	$upfile_size     = $_FILES["upfile"]["size"];
	$upfile_error    = $_FILES["upfile"]["error"];

    if ($upfile_name && !$upfile_error)
	{
		$file = explode(".", $upfile_name);
		$file_name = $file[0];
		$file_ext  = $file[1];

		$new_file_name = date("Y_m_d_H_i_s");
		$new_file_name = $new_file_name;
		$copied_file_name = $new_file_name.".".$file_ext;      
		$uploaded_file = $upload_dir.$copied_file_name;

		if (!move_uploaded_file($upfile_tmp_name, $uploaded_file) )
		{
				echo("
					<script>
					alert('파일을 지정한 디렉토리에 복사하는데 실패했습니다.');
					history.go(-1)
					</script>
				");
				exit;
		}
	}
	else 
	{
		$upfile_name      = "";
		$upfile_type      = "";
		$copied_file_name = "";
	}

    // 쿼리 생성
    // 글 작성 시 포인트 30점 획득
    $query = "UPDATE member SET point = point + 50 WHERE id = '$userid'";
    $mysqli->query($query);

    // 게시글 추가
    $query = "INSERT INTO board_today (id, name, title, content, regist_day, file_name, file_type, file_copied) VALUES ('$userid', '$username', '$title', '$content', '$regist_day', '$upfile_name', '$upfile_type', '$copied_file_name')";

    if ($mysqli->query($query) === true) {
        // 등록 성공 시 알림창을 띄웁니다.
        echo 
            '<script>
                alert("게시물이 등록되었습니다!");
                window.location.href = "../board_today.php?page=1";
            </script>';
    } else {
        // 등록 실패 시 오류 메시지를 출력합니다.
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }

    // MySQL 연결을 닫습니다.
    $mysqli->close();
?>
