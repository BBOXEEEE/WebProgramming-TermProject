<meta charset="utf-8">
<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";

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
    $comment_num = $_GET["comment_num"];

    $query = "UPDATE member SET point = point - 10 WHERE id = '$userid'";
    $mysqli->query($query);

    $query = "DELETE FROM comment_qna WHERE num = '$comment_num'";

    if ($mysqli->query($query) === true) {
        echo 
            '<script>
                window.location.href = "../board_qna_view.php?num='. $num. '&page=' .$page. '";
            </script>';
    } else {
        echo 'Error: ' . $query . '<br>' . $mysqli->error;
    }
    $mysqli->close();
?>
