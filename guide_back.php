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
            <div class="category curr">
                <a href="./guide_back.php">등</a>
            </div>
            <div class="category">
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
            <h3 style="text-align:center;">💪 넓은 등을 가지고 싶다면❓</h3>
            <div class="item all">
                <h2>🏋️ 데드리프트</h2>
                <h3>3대 운동 중 하나! 단, 허리조심☠️</h3>
                <div class="content">
                    <img src="./img/workout/back/barbell deadlift.gif" alt="">
                    <a href="https://youtu.be/EBjYQeeBI-0">데드리프트 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 바벨 로우</h2>
                <h3>잘하긴 어렵지만, 잘하면 좋은 운동!</h3>
                <div class="content">
                    <img src="./img/workout/back/barbell bent over row.gif" alt="">
                    <a href="https://youtu.be/-j7Xtlx2S2g">바벨로우 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 랫풀다운</h2>
                <h3>대국민 등운동! 아.. 심심한데 당기러 갈까?</h3>
                <div class="content">
                    <img src="./img/workout/back/lat pulldown.gif" alt="">
                    <a href="https://youtu.be/7L2eKsdf8r4">랫풀다운 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 풀업</h2>
                <h3>집에서 이것만이라도 열심히 해보자!</h3>
                <div class="content">
                    <img src="./img/workout/back/chin up.gif" alt="">
                    <a href="https://youtu.be/VhfJB-VQOfg">풀업 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 덤벨 로우</h2>
                <h3>양손, 한손 자유롭게, 입맛대로!</h3>
                <div class="content">
                    <img src="./img/workout/back/dumbbell row.gif" alt="">
                    <a href="https://youtu.be/sxJgiFJsdfA">벤치프레스 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 시티드 로우</h2>
                <h3>두께감 있는 등을 만들고 싶다면! 당장 앉아!</h3>
                <div class="content">
                    <img src="./img/workout/back/sitted row.gif" alt="">
                    <a href="https://youtu.be/sMFW6wBhAk4">시티드 로우 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 티바 로우</h2>
                <h3>난 꿔바로우보다 티바로우가 맛있더라 ㅋㅋ</h3>
                <div class="content">
                    <img src="./img/workout/back/tbar row.gif" alt="">
                    <a href="https://youtu.be/XtfQeOPIck0">티바 로우 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 케이블 암풀다운</h2>
                <h3>웜업, 마무리 운동으로 꼭 해보세요! 진짜 맛있음!</h3>
                <div class="content">
                    <img src="./img/workout/back/cable pulldown.gif" alt="">
                    <a href="https://youtu.be/YntwjLKHlLk">케이블 암풀다운 자세 보러가기!</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
</body>
</html>