<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/board_modify.css">
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
	    $page = $_GET["page"];
	
	    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
	    $sql = "SELECT * FROM board_free WHERE num = $num";
	    $result = mysqli_query($con, $sql);
	    $row = mysqli_fetch_array($result);
	    $name       = $row["name"];
	    $title      = $row["title"];
	    $content    = $row["content"];

        $title   = str_replace(" ", "&nbsp;", $title);
        $content = str_replace(" ", "&nbsp;", $content);
	    $content = str_replace("\n", "<br>", $content);
    ?>
        <section id="grid-bottom">
            <h2 style="text-align:left;">📌 수정하기</h2>
            <div class="item">
                <div class="write-box">
                    <form name="modify" method="post" action="./php/board_free_update.php?num=<?=$num?>&page<?=$page?>" enctype="multipart/form-data">
                        <div class="input-box">
                            <input type="text" name="title" value="<?=$title?>">
                            <label>TITLE</label>
                        </div>
                        <div class="input-box content">
                            <textarea name="content"><?=$content?></textarea>
                            <label>CONTENTS</label>
                        </div>
                    </form>
                    <div class="buttons">
                        <button type="button" class="submit" onclick="checkInput()">수정하기</button>
                        <button type="button" class="submit" onclick="location.href='./board_notic.php?page=<?=$page?>'">취소</button>
                    </div>
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
            const modifyForm = document.querySelector('form[name="modify"]');
            if(!titleInput.value){
                alert("제목을 입력하세요!");
                titleInput.focus();
                return;
            }
            modifyForm.submit();
        }
    </script>
</body>
</html>