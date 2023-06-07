<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/message_view.css">
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
        $mode = $_GET["mode"];
        
	    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
	    $sql = "SELECT * FROM message WHERE num = $num";
	    $result = mysqli_query($con, $sql);

	    $row = mysqli_fetch_array($result);
	    $from_id      = $row["from_id"];
	    $to_id        = $row["to_id"];
        $title        = $row["title"];
        $content      = $row["content"];
	    $regist_day   = $row["regist_day"];

	    $content = str_replace(" ", "&nbsp;", $content);
	    $content = str_replace("\n", "<br>", $content);

        $sql = "UPDATE message SET is_read = true WHERE num = '$num'";
        mysqli_query($con, $sql);
    ?>
        <section id="grid-bottom">
            <h2 style="text-align:left;">📩 쪽지함</h2>
            <div class="item">
                <div class="message_box">
                    <div class="title-box">
                        <label><?=$title?></label>
                    </div>
                    <div class="writer-box">
                        <?php
                            if($mode == "inbox"){
                        ?>
                            <label><?=$from_id?></label>
                        <?php
                        }
                        ?>
                        <?php
                            if($mode == "outbox") {
                        ?>
                            <label><?=$to_id?></label>
                        <?php
                        }
                        ?>
                        <label><?=$regist_day?></label>
                    </div>
                    <div class="content-box">
                        <label><?=$content?></label>
                    </div>
                    <div class="buttons">
                        <?php
                            if($mode == "inbox"){
                        ?>
                            <button type="button" class="submit" onclick="location.href='./message_reply.php?num=<?=$num?>&page=<?=$page?>'">답장</button>
                            <button type="button" class="submit" onclick="location.href='./message_inbox.php?page=<?=$page?>'">목록 보기</button>
                            <button type="button" class="submit" onclick="checkDelete()">삭제</button>
                        <?php
                        }
                        ?>
                        <?php
                            if($mode == "outbox"){
                        ?>
                            <button type="button" class="submit" onclick="location.href='./message_outbox.php?page=<?=$page?>'">목록 보기</button>
                            <button type="button" class="submit" onclick="checkDelete()">삭제</button>
                        <?php
                        }
                        ?>
                    </div>
                    
                </div>
                
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script>
        function checkDelete(){
            let result = confirm("정말 삭제하시겠습니까?");
            if(result){
                window.location.href = `./php/message_delete.php?num=<?=$num?>&page=<?=$page?>`;
            }
            else{
                window.close();
            }
        }
    </script>
</body>
</html>