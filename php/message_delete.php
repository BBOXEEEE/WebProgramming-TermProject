<?php
    $num   = $_GET["num"];
    $page  = $_GET["page"];

    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
    $sql = "DELETE FROM message WHERE num = $num";
    mysqli_query($con, $sql);
    mysqli_close($con);

    echo "
	     <script>
	         location.href = '../message_inbox.php?page=$page';
	     </script>
	   ";
?>
