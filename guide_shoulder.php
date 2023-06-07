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
            <div class="category">
                <a href="./guide_leg.php">하체</a>
            </div>
            <div class="category curr">
                <a href="./guide_shoulder.php">어깨</a>
            </div>
            <div class="category">
                <a href="./guide_arm.php">팔</a>
            </div>
        </section>
        <section id="grid-bottom">
            <h3 style="text-align:center;">💪 사레레.. 사레레..❗️</h3>
            <div class="item all">
                <h2>🏋️ OHP</h2>
                <h3>요즘은 OHP까지 4대 운동이래!</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/ohp.gif" alt="">
                    <a href="https://youtu.be/JD9AyVsJKb0">OHP 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 덤벨 숄더 프레스</h2>
                <h3>고중량 후에 넓은 가동범위로 한번더!</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/dumbbell shoulder press.gif" alt="">
                    <a href="https://youtu.be/66gDfjrm-gk">덤벨 숄더 프레스 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 스미스머신 숄더 프레스</h2>
                <h3>어깨 고립 후 뚜드려 패자!</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/smith machine shoulder press.gif" alt="">
                    <a href="https://youtu.be/QXhw6sJ8Hf8">스미스머신 숄더 프레스 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 사이드 레터럴 레이즈</h2>
                <h3>사레레.. 말 안해도 알죠?</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/side lateral raise.gif" alt="">
                    <a href="https://youtu.be/iNgwwI3WBTo">사이드 레터럴 레이즈 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 프론트 레이즈</h2>
                <h3>전면 삼각근이 발달해야 옷핏이 산다!</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/front raise.gif" alt="">
                    <a href="https://youtu.be/u3zQI-PWaOw">프론트 레이즈 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 벤트오버 레터럴 레이즈</h2>
                <h3>뒤에서 봤을 때 후면 삼각근이 뽈록하면, 진짜 멋있다고!</h3>
                <div class="content">
                    <img src="./img/workout/shoulder/bent over lateral raise.gif" alt="">
                    <a href="https://youtu.be/aeEfbxnrqS4">벤트오버 레터럴 레이즈 자세 보러가기!</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
</body>
</html>