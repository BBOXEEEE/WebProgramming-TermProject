<?php
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = "";
    if (isset($_SESSION["email"])) $email = $_SESSION["email"];
    else $email = "";
    if (isset($_SESSION["phone"])) $phone = $_SESSION["phone"];
    else $phone = ""; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/mypage.css">
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
        <section id="signup">
            <div class="item">
                <h2>회원정보 수정</h2>
                <div class="signup-form">
                    <form name="modifyForm" method="post" action="./php/modify.php?id=<?=$userid?>">
                    <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person"></ion-icon>
                            </span>
                            <input type="text" name="username" value="<?=$username?>" required>
                            <label>Username</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="person-circle"></ion-icon>
                            </span>
                            <input type="text" name="id" value="<?=$userid?>"required>
                            <label>ID</label>
                            <span class="message" style="font-size: 0.7em; text-align: left;"></span>
                        </div>
                        <div class="input-box pw">
                            <span class="icon">
                                <ion-icon name="lock-closed" id="pw"></ion-icon>
                            </span>
                            <input type="password" name="pw" required>
                            <label>Password</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="lock-closed" id="check"></ion-icon>
                            </span>
                            <input type="password" name="pwcheck" required>
                            <label>Check Password</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="mail"></ion-icon>
                            </span>
                            <input type="email" name="email" value="<?=$email?>" required>
                            <label>Email</label>
                        </div>
                        <div class="input-box">
                            <span class="icon">
                                <ion-icon name="call"></ion-icon>
                            </span>
                            <input type="tel" name="phone" value="<?=$phone?>" required>
                            <label>Phone</label>
                        </div>
                        <button type="submit" class="modify">Modify</button>
                        <button type="submit" class="cancel">Cancel</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script src = "./js/modify.js"></script>
</body>
</html>