<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/board_list.css">
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
        <h1 style="text-align:left;">📌 오늘의 운동</h1>
        <h3 style="text-align:left;">💪 운동하고 인증샷❗️ 오운완~</h3>
            <div class="item all">
                <table>
                    <thead>
                        <tr>
                            <td class="col1" style="width:100px; height: 50px; font-weight:bold;">번호</th>
                            <td ckass="col2" style="width:550px; height: 50px; font-weight:bold;">제목</th>
                            <td class="col3" style="width:200px; height: 50px; font-weight:bold;">작성자</th>
                            <td class="col4"style="width:150px; height: 50px; font-weight:bold;">날짜</th>
                            <td class="col5" style="width:100px; height: 50px; font-weight:bold;">조회수</th>
                        </tr>
                        <tbody id="boardList">
                        </tbody>
                    </thead>
                </table>
                <div id="pagination"></div>
                <?php
                    if($userid){
                ?>
                    <button class="write-button" onclick="location.href='./board_today_write.php'">글쓰기</button>
                <?php
                    } else {
                ?>
                    <a href="javascript:alert('로그인 후 이용가능합니다!')"><button class="write-button">글쓰기</button></a>
                <?php
                    }
                ?>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script src="./js/today_list.js"></script>
</body>
</html>