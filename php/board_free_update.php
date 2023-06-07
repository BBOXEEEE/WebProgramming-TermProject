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

    $query = "UPDATE board_free SET title = '$title', content = '$content' WHERE num = '$num'";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                alert("게시물이 수정되었습니다!");
                window.location.href = `../board_free.php?page={$page}`;
            </script>';
    } else {
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }
    $mysqli->close();
?>
