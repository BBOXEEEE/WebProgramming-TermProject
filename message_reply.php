<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/message_reply.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link rel="icon" href="./img/favicon.ico"/>
    <script src="./js/header.js" defer></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</head>
<body>
    <header>
        <?php include "./php/header.php"?>
    </header>
    <main>
    <?php
	    $num  = $_GET["num"];
	    $page  = $_GET["page"];
        $mode = "inbox";
	    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
	    $sql = "SELECT * FROM message WHERE num = '$num'";
	    $result = mysqli_query($con, $sql);

	    $row = mysqli_fetch_array($result);
	    $from_id      = $row["from_id"];
	    $to_id        = $row["to_id"];
        $title        = $row["title"];
        $content      = $row["content"];
	    $regist_day   = $row["regist_day"];

        $title = "RE:&nbsp".$title;
	    $content = str_replace(" ", "&nbsp;", $content);
	    $content = str_replace("\n", "<br>", $content);
        $content = "\n\n\n------------- Original Message -------------\n\n".$content;

        $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
	    $sql = "SELECT * FROM member WHERE id = '$from_id'";
	    $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        $from_name = $row["name"];
    ?>
        <section id="message">
            <div class="item">
                <h2>답장 하기</h2>
                <div class="message-box">
                    <form name="messageFrom" method="post" action="./php/message_send.php">
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person"></ion-icon>
                            </span>
                            <input type="text" name="to" value=<?=$from_name?> readonly>
                            <label>To</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person-circle"></ion-icon>
                            </span>
                            <input type="text" name="from" value=<?=$username?> readonly>
                            <label>From</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="chatbubbles"></ion-icon>
                            </span>
                            <input type="text" name="title" value=<?=$title?> required>
                            <label>Title</label>
                        </div>
                        <div class="input-box content">
                            <span class="icon content">
                                <ion-icon name="mail-open"></ion-icon>
                            </span>
                            <textarea name="content"><?=$content?></textarea>
                            <label>Content</label>
                        </div>
                        <div class="buttons">
                            <button type="button" class="submit" onclick="checkInput()">전송</button>
                            <button type="button" class="submit" onclick="location.href='./main_view.php'">취소</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script>
        function checkInput(){
            const titleInput = document.querySelector('input[name="title"]');
            const contentInput = document.querySelector('textarea[name="content"]');
            const messageForm = document.querySelector('form[name="messageFrom"]');
            if(!titleInput.value){
                alert("제목을 입력하세요!");
                titleInput.focus();
                return;
            }
            if(!contentInput.value){
                alert("내용을 입력하세요!");
                contentInput.focus();
                return;
            }
            messageForm.submit();
        }
    </script>
</body>
</html>