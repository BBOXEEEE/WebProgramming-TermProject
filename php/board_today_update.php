<meta charset="utf-8">
<?php
    $host = 'localhost';
    $user = 'LWB';
    $password = 'qkrtpgus956322!';
    $dbname = 'LWB';

    $mysqli = new mysqli($host, $user, $password, $dbname);
    if ($mysqli->connect_error) {
        die('Connect Error: ' . $mysqli->connect_error);
    }

    $num = $_GET["num"];
    $page = $_GET["page"];
    $title = $_POST["title"];
    $content = $_POST["content"];

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
        $sql = "SELECT file_name, file_type, file_copied FROM board_today WEHRE num = '$num'";
        $result = $mysqli->query($sql);

        $row = mysqli_fetch_array($result);
		$upfile_name      = $row["file_name"];
		$upfile_type      = $row["file_type"];
		$copied_file_name = $row["file_copied"];
	}

    $query = "UPDATE board_today SET title = '$title', content = '$content', file_name = '$upfile_name', file_type = '$upfile_type', file_copied = '$copied_file_name' WHERE num = '$num'";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                alert("게시물이 수정되었습니다!");
                window.location.href = `../board_today.php?page={$page}`;
            </script>';
    } else {
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }
    $mysqli->close();
?>
