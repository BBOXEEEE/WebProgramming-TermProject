<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/community.css">
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
    <section id="grid">
        <div class="item introduce">
            <h1>💪 아직도 운동을 망설이시나요?</h1>
                <div class="content">
                    <p>
                        <span>Light Weight Baby</span>와 함께 지금 당장 운동합시다!<br>
                        운동 가이드부터 운동 방법, 식단 등의 정보를 공유하고 <span>득근</span> 하세요
                    </p>
                    <iframe width="700" height="350" src="https://www.youtube.com/embed/fU2xOddhzXk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        <div class="item col-side">
            <h2>👑 인기 회원</h2>
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td style="width:50px; height:40px; font-weight:bold;">순위</td>
                            <td style="width:200px; height:40px; font-weight:bold;">회원명</td>
                            <td style="width:50px; height:40px; font-weight:bold;">포인트</td>
                        </tr>
                    </thead>
                    <tbody id="userRank"></tbody>
                </table>
            </div>
        </section>
        <section id="grid-bottom">
            <div class="item col-start">
                <h2>🥇 공지사항</h2>
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td style="width:50px; height:40px; font-weight:bold;">번호</td>
                            <td style="width:150px; height:40px; font-weight:bold;">제목</td>
                            <td style="width:100px; height:40px; font-weight:bold;">작성자</td>
                            <td style="width:100px; height:40px; font-weight:bold;">날짜</td>
                        </tr>
                    </thead>
                    <tbody id="noticeBoard"></tbody>
                </table>
            </div>
            <div class="item col-end">
                <h2>🥇 자유게시판</h2>
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td style="width:50px; height:40px; font-weight:bold;">번호</td>
                            <td style="width:150px; height:40px; font-weight:bold;">제목</td>
                            <td style="width:100px; height:40px; font-weight:bold;">작성자</td>
                            <td style="width:100px; height:40px; font-weight:bold;">날짜</td>
                        </tr>
                    </thead>
                    <tbody id="freeBoard">
                    </tbody>
                </table>
            </div>
            <div class="item col-start">
                <h2>🥇 운동 루틴</h2>
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td style="width:50px; height:40px; font-weight:bold;">번호</td>
                            <td style="width:150px; height:40px; font-weight:bold;">제목</td>
                            <td style="width:100px; height:40px; font-weight:bold;">작성자</td>
                            <td style="width:100px; height:40px; font-weight:bold;">날짜</td>
                        </tr>
                    </thead>
                    <tbody id="workoutBoard"></tbody>
                </table>
            </div>
            <div class="item col-end">
                <h2>🎯 오늘의 운동</h2>
                <table style="width:100%;">
                    <thead>
                        <tr>
                            <td style="width:50px; height:40px; font-weight:bold;">번호</td>
                            <td style="width:150px; height:40px; font-weight:bold;">제목</td>
                            <td style="width:100px; height:40px; font-weight:bold;">작성자</td>
                            <td style="width:100px; height:40px; font-weight:bold;">날짜</td>
                        </tr>
                    </thead>
                    <tbody id="todayBoard"></tbody>
                </table>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script src="./js/main.js"></script>
</body>
</html>