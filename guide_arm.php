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
            <div class="category">
                <a href="./guide_shoulder.php">어깨</a>
            </div>
            <div class="category curr">
                <a href="./guide_arm.php">팔</a>
            </div>
        </section>
        <section id="grid-bottom">
            <h3 style="text-align:center;">💪 뭐라고..? 티셔츠 소매가 남는다고..❓</h3>
            <div class="item all">
                <h2>🏋️ 바벨컬</h2>
                <h3>이두도 고중량이 필요해!</h3>
                <div class="content">
                    <img src="./img/workout/arm/barbell curl.gif" alt="">
                    <a href="https://youtu.be/FjT0VMmD238">바벨컬 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ E-Z바 컬</h2>
                <h3>손목이 아프다면, E-Z바를 이용해보세요!</h3>
                <div class="content">
                    <img src="./img/workout/arm/ezbar curl.gif" alt="">
                    <a href="https://youtu.be/R6UWbYy6fwM">E-Z바 컬 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 라잉 트라이셉스 익스텐션</h2>
                <h3>팔의 3분의 2는 삼두! 라트익으로 가자!</h3>
                <div class="content">
                    <img src="./img/workout/arm/lying triceps extension.gif" alt="">
                    <a href="https://youtu.be/hbDE-gbAHCY">라잉 트라이셉스 익스텐션 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 케이블 푸쉬다운</h2>
                <h3>삼두, 얘로 운동하면 진짜 맛있음!</h3>
                <div class="content">
                    <img src="./img/workout/arm/cable pushdown.gif" alt="">
                    <a href="https://youtu.be/ObEtLS9heOo">케이블 푸쉬다운 자세 보러가기!</a>
                </div>
            </div>
            <div class="item all">
                <h2>🏋️ 원 암 덤벨컬</h2>
                <h3>마지막까지 쥐어짜자. 내려놓지마!</h3>
                <div class="content">
                    <img src="./img/workout/arm/one arm dumbbell curl.gif" alt="">
                    <a href="https://youtu.be/y3aMzyKqvNM">원 암 덤벨컬 자세 보러가기!</a>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
</body>
</html>