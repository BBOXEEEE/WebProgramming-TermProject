<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";

    $num   = $_GET["num"];
    $page  = $_GET["page"];

    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
    $sql = "SELECT * FROM board_diet WHERE num = $num";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    $sql = "DELETE FROM board_diet WHERE num = $num";
    mysqli_query($con, $sql);
    $qeury = "UPDATE member SET point = point - 30 WHERE id= '$userid'";
    mysqli_query($con, $qeury);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = '../board_info_diet.php?page=$page';
	     </script>
	   ";
?>
