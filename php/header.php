<?php
    session_start();
    if (isset($_SESSION["userid"])) $userid = $_SESSION["userid"];
    else $userid = "";
    if (isset($_SESSION["username"])) $username = $_SESSION["username"];
    else $username = ""; 
    if (isset($_SESSION["email"])) $email = $_SESSION["email"];
    else $email = "";
    if (isset($_SESSION["phone"])) $phone = $_SESSION["phone"];
    else $phone = ""; 
?>	

<div class="toggleBtn">
        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
            <path fill="currentColor" d="M 0 2 L 0 4 L 24 4 L 24 2 Z M 0 11 L 0 13 L 24 13 L 24 11 Z M 0 20 L 0 22 L 24 22 L 24 20 Z"></path>
        </svg>
</div>
<div class="wrap">
        <div class="logo">
            <a href="./main_view.php"><img src="./img/logo2.png"></a>
        </div>
        <div class="navWrap">
            <nav>
                <ul class="main">
                    <li>
                        <a href="./guide_chest_view.php">운동 가이드</a>
                    </li>
                    <li>
                        <a href="./shared_board1_view.php">운동 정보 공유</a>
                    </li>
                    <li>
                        <a href="#">오늘의 운동</a>
                    </li>
                    <li>
                        <a href="#">질의 응답</a>
                    </li>
                    <li>
                        <a href="#">커뮤니티</a>
                    </li>
                </ul>
                <?php
                    if($userid) {
                ?>
                <ul class="main-end">
                <li>
                        <a href="./mypage_view.php">내정보</a>
                    </li>
                    <li>
                        <a href="./php/logout.php">로그아웃</a>
                    </li>
                </ul>
                <?php
                } else {
                ?>
                <ul class="main-end">
                <li>
                        <a href="./signup_view.php">회원가입</a>
                    </li>
                    <li>
                        <a href="./login_view.php">로그인</a>
                    </li>
                </ul>
                <?php
                }
                ?>
            </nav>
            <div class="navBackground"></div>
        </div>
    </div>