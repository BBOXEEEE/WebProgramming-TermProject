<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/guide_workout.css">
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
        <section id="grid-top">
            <div class="category curr">
                <a href="./guide_chest.php">운동 방법</a>
            </div>
            <div class="category">
                <a href="./guide_bmi.php">BMI 계산</a>
            </div>
        </section>
        <h3 style="text-align:center;">✨ 운동 방법을 모를땐 아래 유튜브 영상을 참고하세요❗️</h3>
        <section id="grid-middle">
            <div class="category">
                <a href="./guide_chest.php">가슴</a>
            </div>
            <div class="category">
                <a href="./guide_back.php">등</a>
            </div>
            <div class="category curr">
                <a href="./guide_leg.php">하체</a>
            </div>
            <div class="category">
                <a href="./guide_shoulder.php">어깨</a>
            </div>
            <div class="category">
                <a href="./guide_arm.php">팔</a>
            </div>
        </section>
        <section id="grid-bottom">
            <h3 style="text-align:center;">💪 하체 운동은 현기증을 유발합니다..☠️</h3>
            <div class="item all">
                <h2>🏋️ 스쿼트</h2>
                <h3>스쿼트하고 걸을 수 있다..? 한 세트 더해.</h3>
                <div class="content">
                    <img src="./img/workout/leg/barbell squat.gif" alt="">
                    <a href="https://youtu.be/MWjKQGoNW0U">스쿼트 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 레그 프레스</h2>
                <h3>위에 사람은 거뜬히 태워야지?</h3>
                <div class="content">
                    <img src="./img/workout/leg/leg press.gif" alt="">
                    <a href="https://youtu.be/EV0F_3S7Sks">레그프레스 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 레그 익스텐션</h2>
                <h3>스쿼트로 지친 하체, 익스텐션으로 끝까지 털자!</h3>
                <div class="content">
                    <img src="./img/workout/leg/leg extension.gif" alt="">
                    <a href="https://youtu.be/rIoPAhtMdvw">레그 익스텐션 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 레그 컬</h2>
                <h3>후면 하체를 강화하기 위한 운동!</h3>
                <div class="content">
                    <img src="./img/workout/leg/leg curl.gif" alt="">
                    <a href="https://youtu.be/y9mGy5RFwe4">레그컬 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 런지</h2>
                <h3>발 넓이에 따라 자극 부위가 달라요!</h3>
                <div class="content">
                    <img src="./img/workout/leg/lunge.gif" alt="">
                    <a href="https://youtu.be/oYiBDWhmrX8">런지 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 시티드 카프레이즈</h2>
                <h3>설마.. 종아리는 따로 운동 안해?</h3>
                <div class="content">
                    <img src="./img/workout/leg/sitted caprase.gif" alt="">
                    <a href="https://youtu.be/QdAtQJMKi0U">시티드 카프레이즈 자세 보러가기!</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
</body>
</html>