<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/board_write.css">
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
        <section id="grid-bottom">
            <h2 style="text-align:left;">💪 오늘도 운동한 당신, 멋져요👍</h2>
            <div class="today">
                <div class="write-box">
                    <form name="board" method="post" action="./php/board_today_create.php" enctype="multipart/form-data">
                        <div class="input-box">
                            <input type="text" name="title" placeholder="제목을 입력하세요">
                            <label>TITLE</label>
                        </div>
                        <div class="file-box">
                            <input type="file" name="upfile">
                        </div>
                        <div class="input-box content">
                            <textarea name="content"></textarea>
                            <label>CONTENTS</label>
                        </div>
                    </form>
                    <div class="buttons">
                        <button type="button" class="submit" onclick="checkInput()">글쓰기</button>
                        <button type="button" class="submit" onclick="location.href='./board_today.php?page=1'">취소</button>
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
            const fileInput = document.querySelector('input[name="upfile"]');
            const contentInput = document.querySelector('textarea[name="content"]');
            const boardForm = document.querySelector('form[name="board"]');
            if(!titleInput.value){
                alert("제목을 입력하세요!");
                titleInput.focus();
                return;
            }
            const allowedFormats = ["image/jpeg", "image/png", "image/jpg", "image/gif"];
            if (fileInput.value) {
                const file = fileInput.files[0];
                if (!allowedFormats.includes(file.type)) {
                    alert("올바른 이미지 파일 형식이 아닙니다!");
                    fileInput.value = ""; // Clear the file input
                    return;
                }
            }
            const maxSizeInBytes = 10 * 1024 * 1024; // 10MB
            if (fileInput.value) {
                const file = fileInput.files[0];
                if (file.size > maxSizeInBytes) {
                    alert("파일 크기가 10MB를 초과합니다!");
                    fileInput.value = ""; // Clear the file input
                    return;
                }
            }
            if(!contentInput.value){
                alert("내용을 입력하세요!");
                contentInput.focus();
                return;
            }
            boardForm.submit();
        }
    </script>
</body>
</html>