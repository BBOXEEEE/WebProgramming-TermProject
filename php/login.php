<?php
    $id   = $_POST["id"];
    $pass = $_POST["pw"];

    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");               
    $sql = "SELECT * FROM member WHERE id='$id'";
    $result = mysqli_query($con, $sql);

    $num_match = mysqli_num_rows($result);

    if(!$num_match) 
    {
        echo("
            <script>
                window.alert('등록되지 않은 아이디입니다!')
                history.go(-1)
            </script>
            ");
    }
    else
    {
        $row = mysqli_fetch_array($result);
        $db_pass = $row["pw"];

        mysqli_close($con);

        if($pass != $db_pass)
        {

        echo("
            <script>
                window.alert('비밀번호가 틀립니다!')
                history.go(-1)
            </script>
        ");
        exit;
        }
        else
        {
            session_start();
            $_SESSION["userid"] = $row["id"];
            $_SESSION["username"] = $row["name"];
            $_SESSION["email"] = $row["email"];
            $_SESSION["phone"] = $row["phone"];
            echo("
            <script>
                window.alert('{$row["name"]}님 반갑습니다!');
            </script>
            ");
            echo("
            <script>
                location.href = '../main_view.php';
            </script>
            ");
        }
    }      
?>
