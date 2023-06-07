<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>헬스 커뮤니티 | Light Weight Baby</title>
    <link rel="stylesheet" href="./css/common.css">
    <link rel="stylesheet" href="./css/header.css">
    <link rel="stylesheet" href="./css/message_box.css">
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
                <a href="./message_inbox.php?page=1">수신 쪽지함</a>
            </div>
            <div class="category">
                <a href="./message_outbox.php?page=1">발신 쪽지함</a>
            </div>
        </section>
        <section id="grid-bottom">
            <div class="item all">
                <table style="width: 600px">
                    <thead>
                        <tr>
                            <td class="col1" style="width:50px; height: 50px; font-weight:bold;">번호</th>
                            <td ckass="col2" style="width:350px; height: 50px; font-weight:bold;">제목</th>
                            <td class="col3" style="width:100px; height: 50px; font-weight:bold;">수신</th>
                            <td class="col4"style="width:100px; height: 50px; font-weight:bold;">날짜</th>
                        </tr>
                        <tbody id="messageList">
                        </tbody>
                    </thead>
                </table>
                <div id="pagination"></div>
            </div>
        </section>
    </main>
    <footer>
        <?php include "./php/footer.php"?>
    </footer>
    <script src="./js/message_inbox.js"></script>
</body>
</html>