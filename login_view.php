<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/login.css">
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
        <section id="login">
            <div class="item">
                <h2>로그인</h2>
                <div class="login-form">
                    <form name="loginForm" method="post" action="./php/login.php">
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person-circle"></ion-icon>
                            </span>
                            <input type="text" name="id" required>
                            <label>ID</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="lock-closed"></ion-icon>
                            </span>
                            <input type="password" name="pw" required>
                            <label>Password</label>
                        </div>
                        <button type="submit" class="login">Login</button>
                        <div class="register">
                            <p>Don't have an account?
                                <a href="./signup_view.php" class="register-link">Resigter</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
</body>
</html>