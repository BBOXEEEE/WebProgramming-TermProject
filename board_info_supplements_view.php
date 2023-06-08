<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/board_view.css">
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
        
	    $con = mysqli_connect("localhost", "LWB", "qkrtpgus956322!", "LWB");
	    $sql = "SELECT * FROM board_supplements WHERE num = $num";
	    $result = mysqli_query($con, $sql);

	    $row = mysqli_fetch_array($result);
	    $id           = $row["id"];
	    $name         = $row["name"];
        $title        = $row["title"];
        $content      = $row["content"];
	    $regist_day   = $row["regist_day"];
	    $hit          = $row["hit"];

	    $content = str_replace(" ", "&nbsp;", $content);
	    $content = str_replace("\n", "<br>", $content);
   
        $hit_cookie_user = $userid.$num."_hit";
        if($userid && !(isset($_COOKIE[$hit_cookie_user]))) {                  
            $new_hit = $hit + 1;                                  
            $sql = "UPDATE board_supplements SET hit=$new_hit WHERE num=$num";  
            mysqli_query($con, $sql);
        } 
        $hit_cookie_nouser = $num."_hit";
        if(!$userid){
            if(!isset($_COOKIE[$hit_cookie_nouser])){
                $new_hit = $hit + 1;
                $sql = "UPDATE board_supplements SET hit = $new_hit WHERE num = $num";
                mysqli_query($con, $sql);
            }
        }
    ?>
        <section id="grid-bottom">
            <div class="item">
                <div class="post-box">
                    <div class="title-box">
                        <label><?=$title?></label>
                    </div>
                    <div class="writer-box">
                        <label><?=$name?></label>
                        <label><?=$regist_day?></label>
                        <label class="hit"><ion-icon name="eye"></ion-icon>&nbsp<?=$hit?></label>
                    </div>
                    <div class="content-box">
                        <label><?=$content?></label>
                    </div>
                    <div class="buttons">
                        <button type="button" class="submit" onclick="location.href='./board_info_supplements.php?page=<?=$page?>'">목록보기</button>
                        <?php
                            if($userid == $id  || $userid == "admin"){
                        ?>
                            <button type="button" class="submit" onclick="location.href=`./board_info_supplements_modify.php?num=<?=$num?>&page=<?=$page?>`">수정</button>
                            <button type="button" class="submit" onclick="checkDelete()">삭제</button>
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <?php
                    $comment = "댓글을&nbsp입력하세요!";
                    if(!$userid){
                        $comment = "댓글은 로그인 후 작성할 수 있습니다!";
                    }
                ?>
                <div class="comment-box">
                    <div class="input-box">
                        <h3>Comment</h3>
                        <?php
                            if($userid){
                        ?>
                            <form name="comment" method="post" action="./php/comment_supplements_create.php?num=<?=$num?>&page=<?=$page?>">
                                <textarea name="comment" placeholder=<?=$comment?>></textarea>
                            </form>
                            <button type="button" class="submint" onclick="checkInput()">전송</button>
                        <?php
                        } else {
                        ?>
                            <form class="nouser" name="comment" action="#">
                                <textarea name="comment" readonly><?=$comment?></textarea>
                            </form>
                        <?php
                        }
                        ?>
                    </div>
                    <div id="commentList">
                        <?php
                            $sql = "SELECT * FROM comment_supplements WHERE post_num = '$num'";
                            $result = mysqli_query($con, $sql);
                            $total_row = $result->num_rows;
                            if($result->num_rows > 0){
                                for($i=0; $i<$result->num_rows; $i++){
                                    mysqli_data_seek($result, $i);
                                    $row = mysqli_fetch_array($result);
                                    $comment_num  = $row["num"];
                                    $id           = $row["id"];
                                    $name         = $row["name"];
                                    $comment      = $row["comment"];
                                    $regist_day   = $row["regist_day"];
                                    $comment = str_replace(" ", "&nbsp;", $comment);
	                                $comment = str_replace("\n", "<br>", $comment);
                        ?>
                                <?php
                                    if($total_row == 1){
                                ?>
                                        <div class="comment" style="border-bottom: none;">
                                            <span class="writer"><?=$name?></span>
                                            <span class="information">
                                                <?=$regist_day?>
                                                <?php
                                                    if($userid == $id || $userid == "admin"){
                                                ?>
                                                    <a href="./php/comment_supplements_delete.php?num=<?=$num?>&page=<?=$page?>&comment_num=<?=$comment_num?>">삭제</a>
                                                <?php
                                                }
                                                ?>
                                            </span>
                                            <span class="content"><?=$comment?></span>
                                        </div>
                                <?php
                                } else {
                                ?>
                                    <div class="comment">
                                        <span class="writer"><?=$name?></span>
                                        <span class="information">
                                            <?=$regist_day?>
                                            <?php
                                                if($userid == $id || $userid == "admin"){
                                            ?>
                                                <a href="./php/comment_supplements_delete.php?num=<?=$num?>&page=<?=$page?>&comment_num=<?=$comment_num?>">삭제</a>
                                            <?php
                                            }
                                            ?>
                                        </span>
                                        <span class="content"><?=$comment?></span>
                                    </div>
                                <?php
                                }
                                ?>
                        <?php
                                }
                            } else{
                        ?>
                                <div class="comment" style="border-bottom: none; color: gray;">
                                    <span>댓글이 없습니다.</span>
                                </div>
                        <?php
                            }
                            //mysqli_close($con);
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
                window.location.href = `./php/board_info_supplements_delete.php?num=<?=$num?>&page=<?=$page?>`;
            }
            else{
                window.close();
            }
        }
        function checkInput(){
            const commentInput = document.querySelector('textarea[name="comment"]');
            const commentForm = document.querySelector('form[name="comment"]');
            if(!commentInput.value){
                alert("댓글을 입력하세요!");
                commentInput.focus();
                return;
            }
            commentForm.submit();
        }
    </script>
</body>
</html>