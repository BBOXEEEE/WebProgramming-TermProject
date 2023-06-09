<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/guide_bmi.css">
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
            <div class="category">
                <a href="./guide_chest.php">운동 방법</a>
            </div>
            <div class="category curr">
                <a href="./guide_bmi.php">BMI 계산</a>
            </div>
        </section>
        <section id="grid-bottom">
            <h3 style="text-align:center;">✨ 나의 BMI를 알아보자❗️</h3>
            <div class="item all">
                <h2>BMI (Body Mass Index)</h2>
                <h3>BMI는 자신의 몸무게(kg)을 키의 제곱(m)으로 나눈 값입니다.</h3>
                <p>체질량지수는 근육량, 유전적 원인, 다른 개인적 차이를 반영하지 못하는 <br>
                    있음에도 불구하고 조사자들이나 의료인들이 가장 많이 쓰는 방법 중 하나입니다.</p>
                <img src="./img/bmi.png" alt="">
                <div class="content">
                    <div class="input-box">
                        <input type="text" name="height" required>
                        <label>키</label>
                    </div>
                    <div class="input-box">
                        <input type="text" name="weight" required>
                        <label>몸무게</label>
                    </div>
                    <button type="button" class="calc">계산하기</button>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script src="./js/bmi.js"></script>
</body>
</html>