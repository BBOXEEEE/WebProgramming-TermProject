<head>
<title>와플보드 - 커뮤니티 사이트 제작 솔루션</title>
<meta name="description" content="커뮤니티 사이트 만들기, 게시판 프로그램, 구글 애드센스, 쿠팡파트너스, 네이버블로그, 티스토리, SEO, 커뮤니티 순위, 제작, 구축 솔루션.">
<meta name="robots" content="index,follow">
<meta name="viewport" content="width=device-width">
<link rel="icon" type="image/png" sizes="512x512" href="https://static.waffleboard.io/static/assets/favicon/favicon-512.png">
<link rel="icon" type="image/png" sizes="300x300" href="https://static.waffleboard.io/static/assets/favicon/favicon-300.png">
<link rel="icon" type="image/png" sizes="180x180" href="https://static.waffleboard.io/static/assets/favicon/favicon-180.png">
<link rel="icon" type="image/png" sizes="96x96" href="https://static.waffleboard.io/static/assets/favicon/favicon-96.png">
<link rel="icon" type="image/png" sizes="32x32" href="https://static.waffleboard.io/static/assets/favicon/favicon-32.png">
<link rel="icon" type="image/png" sizes="16x16" href="https://static.waffleboard.io/static/assets/favicon/favicon-16.png">
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&amp;display=swap" rel="stylesheet">
<style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video,
    main,
    article,
    aside {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
        box-sizing: border-box;
    }

    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        font-family: sans-serif;
        line-height: 1;
    }

    ol,
    ul {
        list-style: none;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: "";
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    select,
    input,
    textarea,
    button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0;
        font-size: 1em;
        box-sizing: border-box;
        outline: none;
    }

    input[type="file"],
    button {
        cursor: pointer;
    }

    a {
        color: #000;
        text-decoration: none;
    }

    .hidden {
        display: none;
    }
</style>

<style>
    :root {
        --main-color: #00ffa8;
        --main-color-hover: #00d58e;
        --main-background-color: #c4ffeb;
        --main-background-color-hover: #68ffcd;
    }

    html.active,
    body.active {
        height: 100%;
        overflow-y: hidden;
    }

    body {
        font-family: "Noto Sans KR", sans-serif;
        /* font-family: Arial, Helvetica, sans-serif; */
    }

    a {
        color: #000;
        text-decoration: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-weight: bold;
    }

	h1 {
		font-size: 3em;
	}

    main {
        width: 1250px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        gap: 50px;
        margin: 0 auto;
    }

    button {
        cursor: pointer;
    }

    .bold {
        font-weight: bold;
    }

    .wrap {
        width: 1250px;
    }

    @media (max-width: 1250px) {
        h1 {
            font-size: 9vw;
        }

        h2 {
            font-size: 6vw;
        }

        .wrap {
            width: 100%;
            padding: 0 10px;
        }

        main {
            width: 100%;
            padding: 0 10px;
        }
    }

    /* Pagination */
    .pagination {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination a {
        color: black;
        text-decoration: none;
    }

    .pagination .prev,
    .pagination .next {
        width: 50px;
        height: 30px;
        box-sizing: border-box;
    }

    .pagination .prev a,
    .pagination .next a {
        width: 100%;
        height: 100%;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination .prev .notSelected,
    .pagination .next .notSelected {
        background-color: rgba(0, 0, 0, 0.1);
    }

    .pagination .number {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .pagination .number a {
        width: 30px;
        height: 30px;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: rgba(0, 0, 0, 0.1);
        border-right: 0;
        margin: 0 5px;
        border-radius: 4px;
    }

    .pagination .number a:hover {
        background-color: rgba(0, 0, 0, 0.3);
    }

    .pagination .number .selected {
        background-color: rgba(0, 0, 0, 0.03);
    }

    .pagination .number .notSelected {
        background-color: rgba(0, 0, 0, 0.1);
    }

    /* Flash */
    #flash {
        position: fixed;
        top: 20px;
        right: 20px;
        min-width: 300px;
        width: fit-content;
        display: flex;
        justify-content: center;
        align-items: flex-start;
        flex-direction: column;
        color: #000;
        box-shadow: 0 2px 30px 0 rgba(0, 0, 0, 0.06);
        box-sizing: border-box;
        z-index: 10;
    }

    #flash.active {
        display: none;
    }

    #flash.trueBackground {
        background-color: #10b886;
    }

    #flash.falseBackground {
        background-color: #e74c3c;
    }

    #flash .message {
        display: flex;
        justify-content: center;
        align-items: center;
        color: #fff;
        padding: 20px;
        padding-right: 40px;
        padding-bottom: 26px;
    }

    #flash .bar {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 6px;
        background-color: rgba(255, 255, 255, 0.5);
        animation: barClose 5s;
    }

    @keyframes barClose {
        from {
            width: 100%;
        }

        to {
            width: 0;
        }
    }

    #flash .close {
        position: absolute;
        top: 10px;
        right: 10px;
        cursor: pointer;
    }

    #flash .close svg {
        width: 16px;
        height: 16px;
        color: rgba(255, 255, 255, 0.6);
    }

    /* Banner */
    #banners {
        width: 1080px;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        gap: 10px;
    }

    #banners .banner {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #banners .banner a {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    #banners .banner img {
        max-width: 100%;
        width: 100%;
    }

    @media (max-width: 1250px) {
        #banners {
            width: 100%;
            grid-template-columns: repeat(1, 1fr);
            padding: 0 10px;
        }

        #banners .banner img {
            max-width: 100%;
            width: 100%;
        }
    }

    /* contact */
    main #contact {
        font-weight: bold;
        padding: 40px 0;
        box-sizing: border-box;
    }

    main #contact .items {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }

    main #contact .items a {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 20px 60px;
        border-radius: 4px;
        font-size: 1.2em;
        background-color: rgba(0, 0, 0, 0.03);
    }

    main #contact .items div {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 0;
        margin: 0;
    }

    main #contact .items img {
        width: 18px;
        height: 18px;
        margin-right: 10px;
    }

    main #contact .items a:hover {
        background-color: rgba(0, 0, 0, 0.06);
    }

    main #contact .kakao {
        /* background-color: #FFDC00; */
        cursor: pointer;
    }

    main #contact .telegram {
        /* background-color: #179CDE; */
    }

    @media (max-width: 1250px) {
        main #contact .items {
            grid-template-columns: repeat(1, 1fr);
        }
    }
</style>

        <style>
            h1,
            h2 {
                font-size: 2em;
                line-height: 1.2em;
                word-break: keep-all;
            }

            h3 {
                font-weight: bold;
            }

            main #grid > .item {
                position: relative;
                top: 0;
                display: flex;
                flex-direction: column;
                gap: 20px;
                padding: 40px;
                background-color: #fff;
                box-shadow: 4px 12px 30px 6px rgba(0,0,0,.09);
                border-radius: 16px;
                transition: 0.2s;
            }

            main #grid > .item:hover {
                top: -4px;
                box-shadow: 4px 12px 30px 6px rgba(0,0,0,.2);
            }

            main .content {
                display: flex;
                flex-direction: column;
                gap: 10px;
                font-size: 1.1em;
                line-height: 1.6em;
                word-break: keep-all;
            }

            main .content img {
                width: 100%;
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }

            .introduce {
                grid-column: 1 / 3;
                grid-row: 1 / 3;
            }

            .col-start {
                grid-column: 1 / 3;
            }

            .col-end {
                grid-column: 2 / 4;
            }

            .col-all {
                grid-column: 1 / 4;
            }

            .samples {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .samples a {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: #eee;
                padding: 10px;
                border-radius: 8px;
            }

            .samples a:hover {
                background-color: #e9e9e9;
            }

            .cases {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-wrap: wrap;
                gap: 10px;
            }

            .cases .case {
                /* background-color: #f3f3f3; */
                padding: 10px;
                border-radius: 8px;
                border: 1px solid #eee;
            }

            .features {
                display: grid;
                grid-template-columns: repeat(5, 1fr);
                gap: 14px;
            }

            .features .feature {
                display: flex;
                align-items: center;
                flex-direction: column;
                text-align: center;
                gap: 10px;
                font-size: 0.9em;
            }

            .features .feature svg {
                width: 40px;
                height: 40px;
            }

            .price {
                color: var(--main-color);
                font-size: 2em;
                font-weight: bold;
            }

            .manual {
                color: var(--main-color-hover);
                text-decoration: underline;
            }

            .blogs {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }

            .blogs .blog {
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                gap: 10px;
            }

            .blogs .blog .title {
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            .contact {
                width: 100%;
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                gap: 30px;
            }

            .contact a {
                flex: 1;
                display: flex;
                justify-content: center;
                align-items: center;
                gap: 10px;
                font-weight: bold;
                background-color: #eee;
                padding: 20px;
                border-radius: 8px;
            }

            .contact a:hover {
                background-color: #ccc;
            }

            @media (min-width: 1251px) {
                main #grid {
                    display: grid;
                    grid-template-columns: repeat(3, 1fr);
                    gap: 36px;
                }
            }

            @media (max-width: 1250px) {
                main #grid {
                    display: flex;
                    flex-direction: column;
                    gap: 36px;
                }

                main #grid > .item {
                    position: unset;
                    width: 100%;
                    display: flex;
                }

                .introduce,
                .col-start,
                .col-end,
                .col-all {
                    grid-column: unset;
                }

                .features {
                    grid-template-columns: repeat(2, 1fr);
                }

                .blogs {
                    grid-template-columns: repeat(1, 1fr);
                }

                .contact {
                    grid-template-columns: repeat(1, 1fr);
                    gap: 10px;
                }
            }
        </style>
        <style>
            .coupang {
                width: max-content;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
                text-align: center;
                color: #fff;
                background-color: #0093FF;
                font-size: 0.9em;
                padding: 10px;
                margin: 0 auto;
                border-radius: 8px;
            }

            .coupang .main {
                font-weight: bold;
            }

            .coupang .comment {
                color: rgba(255, 255, 255, 0.7);
                font-size: 0.9em;
            }
        </style>
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
    <meta http-equiv="origin-trial" content="A+xK4jmZTgh1KBVry/UZKUE3h6Dr9HPPioFS4KNCzify+KEoOii7z/goKS2zgbAOwhpZ1GZllpdz7XviivJM9gcAAACFeyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiQXR0cmlidXRpb25SZXBvcnRpbmdDcm9zc0FwcFdlYiIsImV4cGlyeSI6MTcwNzI2Mzk5OSwiaXNUaGlyZFBhcnR5Ijp0cnVlfQ==">
    <meta http-equiv="origin-trial" content="AymqwRC7u88Y4JPvfIF2F37QKylC04248hLCdJAsh8xgOfe/dVJPV3XS3wLFca1ZMVOtnBfVjaCMTVudWM//5g4AAAB7eyJvcmlnaW4iOiJodHRwczovL3d3dy5nb29nbGV0YWdtYW5hZ2VyLmNvbTo0NDMiLCJmZWF0dXJlIjoiUHJpdmFjeVNhbmRib3hBZHNBUElzIiwiZXhwaXJ5IjoxNjk1MTY3OTk5LCJpc1RoaXJkUGFydHkiOnRydWV9">
</head>
<body>
        <!-- Global site tag (gtag.js) - Google Ads: 778486207 -->
<script type="text/javascript" async="" src="https://cdn.channel.io/plugin/ch-plugin-web.js"></script><script type="text/javascript" async="" src="https://www.googletagmanager.com/gtag/js?id=G-87G20HTB32&amp;l=dataLayer&amp;cx=c"></script><script async="" src="https://www.googletagmanager.com/gtag/js?id=AW-778486207"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-778486207');
</script> 
<script>
  const flash = document.querySelector('#flash');
  if (flash) {
    const flashClose = flash.querySelector('.close');
    flashClose.addEventListener('click', () => {
      flash.classList.toggle('active');
    });

    setTimeout(() => {
      flash.style.display = 'none';
    }, 5000);
  }
</script>
<style>
    header {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 80px;
        /* border-bottom: 2px solid rgba(0, 0, 0, 0.1); */
        background-color: #fff;
        z-index: 3;
        box-sizing: border-box;
    }

    header .toggleBtn {
        display: none;
        justify-content: center;
        align-items: center;
        cursor: pointer;
    }

    header .wrap {
        height: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    header .logo {
        padding: 10px 0;
    }

    header .logo img {
        max-width: 260px;
    }

    header .navWrap {
        flex: 1;
    }

    header nav {
        flex: 1;
        display: flex;
        justify-content: space-between;
        align-items: center;
        height: 100%;
    }

    header nav .main {
        flex: 1;
        display: flex;
        justify-content: flex-end;
        align-items: center;
    }

    header nav .main > li {
        height: 100%;
        position: relative;
    }

    header nav .main > li > a {
        height: 100%;
        font-size: 1.1em;
        font-weight: 400;
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 6px;
        z-index: 3;
        padding: 0 12px;
    }

    header nav .main > li > a:hover::after {
        background-color: #00ffa8;
    }

    header nav .main > li > a svg {
        width: 12px;
        height: 12px;
        color: #888;
    }

    header .mypage {
        display: flex;
        justify-content: center;
        align-items: center;
        font-size: 0.9em;
    }

    header .mypage .slash {
        font-size: 0.3em;
        color: rgba(0, 0, 0, 0.3);
        padding: 0 6px;
    }

    main {
        margin-top: 160px;
    }

    @media (min-width: 1251px) {
        header .wrap {
            gap: 80px;
        }

        header nav .main {
            height: 100%;
        }

        header nav .main li > a::after {
            position: absolute;
            bottom: 32px;
            content: "";
            width: 80%;
            height: 5px;
            z-index: -1;
        }

        header nav .main > li > a:hover::after {
            border-radius: 5px;
        }

        header nav .main > li:hover > ul {
            display: flex;
        }

        header nav .main > li > ul {
            position: absolute;
            top: 78px;
            left: 50%;
            transform: translate(-50%, 0);
            display: none;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background-color: #fff;
            border: 2px solid rgba(0, 0, 0, 0.1);
            box-sizing: border-box;
        }

        header nav .main > li > ul > li {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header nav .main > li > ul > li > a {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 14px 40px;
        }

        header nav .main > li > ul > li > a:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        header .navWrap .navBackground {
            display: none;
        }
    }

    @media (max-width: 1250px) {
        header {
            height: unset;
            border: 0;
        }

        header .toggleBtn {
            position: absolute;
            top: 0;
            right: 0;
            width: 70px;
            height: 70px;
            display: flex;
            z-index: 10;
        }

        header .toggleBtn svg {
            color: #000;
            width: 22px;
            height: 22px;
        }

        header .wrap {
            flex-direction: column;
        }

        header .logo {
            width: 100%;
            height: 70px;
            padding: 0;
            display: flex;
            justify-content: flex-start;
            padding: 0 20px;
            align-items: center;
            box-sizing: border-box;
            z-index: 5;
        }

        header .logo img {
            max-height: 22px;
        }

        header .navWrap {
            display: none;
        }

        header .navWrap.active {
            display: flex;
        }

        header nav {
            position: fixed;
            top: 0;
            right: 0;
            width: 70%;
            height: 100vh;
            display: flex;
            justify-content: flex-start;
            flex-direction: column;
            background-color: #fff;
            padding-left: 10px;
            padding-right: 10px;
            box-sizing: border-box;
            z-index: 10;
        }

        header nav.active {
            display: flex;
        }

        header nav .main {
            width: 100%;
            flex-direction: column;
        }

        header nav .main > li {
            width: 100%;
            margin-bottom: 10px;
            background-color: rgba(0, 0, 0, 0.05);
            border-radius: 4px;
            box-sizing: border-box;
        }

        header nav .main > li > a {
            width: 100%;
            padding: 10px 0;
        }

        header nav .main > li:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }

        header nav .main > li > ul {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        header nav .main > li > ul > li {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
        }

        header nav .main > li > ul > li > a {
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
            border-radius: 4px;
            box-sizing: border-box;
        }

        header nav .main > li > ul > li > a:hover {
            font-weight: bold;
        }

        header .main {
            order: 2;
        }

        header .mypage {
            order: 1;
            padding: 20px 0;
        }

        header .mypage li a:hover {
            font-weight: bold;
        }

        header .navWrap .navBackground {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            cursor: pointer;
            z-index: 2;
        }

        main {
            margin-top: 120px;
        }
    }
</style>
<header>
    <div class="toggleBtn">
        <svg fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24px" height="24px">
            <path fill="currentColor" d="M 0 2 L 0 4 L 24 4 L 24 2 Z M 0 11 L 0 13 L 24 13 L 24 11 Z M 0 20 L 0 22 L 24 22 L 24 20 Z"></path>
        </svg>
    </div>
    <div class="wrap">
        <div class="logo">
            <a href="/"><img src="https://static.waffleboard.io/static/assets/logo.svg" alt="와플보드"></a>
        </div>
        <div class="navWrap">
            <nav>
                <ul class="main">
                    <li>
                        <a href="/features">제품 특징</a>
                    </li>
                    <li>
                        <a href="/themes">테마</a>
                    </li>
                    <li>
                        <a href="/plugins">플러그인</a>
                    </li>
                    <li>
                        <a href="/solutions">기타 솔루션</a>
                    </li>
                    <li>
                        <a href="/payment">결제</a>
                    </li>
                    <li>
                        <a href="/ranking">커뮤니티 순위</a>
                    </li>
                    <li>
                        <a href="/blog">블로그</a>
                    </li>
                    <li>
                        <a href="https://waffleboard.gitbook.io/manual/" target="_blank">
                            <div>메뉴얼</div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path fill="currentColor" d="M320 0c-17.7 0-32 14.3-32 32s14.3 32 32 32h82.7L201.4 265.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L448 109.3V192c0 17.7 14.3 32 32 32s32-14.3 32-32V32c0-17.7-14.3-32-32-32H320zM80 32C35.8 32 0 67.8 0 112V432c0 44.2 35.8 80 80 80H400c44.2 0 80-35.8 80-80V320c0-17.7-14.3-32-32-32s-32 14.3-32 32V432c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16V112c0-8.8 7.2-16 16-16H192c17.7 0 32-14.3 32-32s-14.3-32-32-32H80z"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
            <div class="navBackground"></div>
        </div>
    </div>
</header>
<script>
    const html = document.querySelector("html");
    const body = document.querySelector("body");
    const navWrap = document.querySelector(".navWrap");
    const navBackground = document.querySelector(".navBackground");
    const toggleBtn = document.querySelector(".toggleBtn");

    if (toggleBtn) {
        toggleBtn.addEventListener("click", () => {
            navWrap.classList.toggle("active");
            html.classList.toggle("active");
            body.classList.toggle("active");
        });
    }

    if (navBackground) {
        navBackground.addEventListener("click", () => {
            navWrap.classList.toggle("active");
            html.classList.toggle("active");
            body.classList.toggle("active");
        });
    }
</script>

        <main>
            <section id="grid">
                <div class="item introduce">
                    <h1>코딩 지식이 필요없는 커뮤니티 사이트 만들기 ✨</h1>
                    <div class="content">
                        <p>
                            와플보드는 커뮤니티/홈페이지를 손쉽게 만들고 관리할 수 있는 국산 CMS 플랫폼입니다.<br>
                            최신화된 서버리스 기술을 사용해 비용을 99% 절감할 수 있습니다.
                        </p>
                        <img src="https://static.waffleboard.io/static/assets/main.png" style="max-width: 600px;" alt="와플보드">
                    </div>
                </div>
                <div class="item">
                    <h2>구글 SEO 상위노출 🚀</h2>
                    <div class="content">
                        <p>
                            구글 SEO 상위노출 마케팅의 시작<br>
                            와플보드와 함께 시작하세요!
                        </p>
                    </div>
                </div>
                <div class="item">
                    <h2>반응형 디자인 🖥️📱</h2>
                    <div class="content">
                        데스크탑, 태블릿, 모바일 등 보여지는 디스플레이 크기에 따라 홈페이지 사이즈가 자동으로 조정됩니다!
                    </div>
                </div>
                <div class="item">
                    <h2>손쉬운 테마 변경 🏞️</h2>
                    <div class="content">
                        클릭 몇번으로 테마 및 색상을 변경할 수 있어요!
                    </div>
                </div>
                <div class="item">
                    <h2>게시글 자동등록 플러그인 🤖</h2>
                    <div class="content">
                       타 사이트 게시글을 자동등록 할 수 있습니다! (별도구매)
                    </div>
                </div>
                <div class="item">
                    <h2>애플/안드로이드 앱 등록 📱</h2>
                    <div class="content">
                        애플.안드로이드 앱을 등록할 수 있습니다. (별도구매)
                    </div>
                </div>
                <div class="item">
                    <h2>미리보기 &amp; 테스트 🧑🏻‍💻</h2>
                    <div class="content">
                        <div class="samples">
                            <a href="https://sample.waffleboard.io" target="_blank">샘플 페이지</a>
                            <a href="https://test.waffleboard.io" target="_blank">테스트 &amp; 관리자 모드</a>
                        </div>
                    </div>
                </div>
                <div class="item col-end">
                    <h2>고객 운영 주제 예시 👨‍👧‍👧</h2>
                    <div class="content">
                        <div class="cases">
                            <div class="case">코인 커뮤니티</div>
                            <div class="case">스포츠 커뮤니티</div>
                            <div class="case">유머 커뮤니티</div>
                            <div class="case">종합 커뮤니티</div>
                            <div class="case">주식 커뮤니티</div>
                            <div class="case">유흥 커뮤니티</div>
                            <div class="case">한인 커뮤니티</div>
                            <div class="case">익명 커뮤니티</div>
                        </div>
                    </div>
                </div>
                <!-- <div class="item col-all">
                    <h2></h2>
                    <div class="content">
                        
                    </div>
                </div> -->
                <div class="item">
                    <h2>AWS 서버리스 기술 사용 🫥</h2>
                    <div class="content">
                        국내 최고 AWS 전문가를 어렵게 모셔 비용과 성능을 동시에 잡았습니다!<br>
                        필요한 그 1/1000초(1천분의 1초) 순간마다 서버를 사용하고<br>
                        그 사용한 만큼만 비용을 지불합니다.<br>
                        또한 갑자기 몰려드는 유저도 거뜬하게 처리할 수 있도록<br>
                        필요한 만큼 서버를 수천대까지 생성할 수 있습니다.<br>
                        비용 그래프를 통해 와플보드와 일반 서버 그리고 카페24의 비용을 확인하세요!
                    </div>
                </div>
                <div class="item col-end">
                    <h2>잠깐, 서버 비용이 왜 이렇게 저렴하죠? 💵</h2>
                    <div class="content">
                        사용자가 없는 밤, 서버를 사용하지도 않는데 왜 비용을 지불하시나요?<br>
                        아직도 서버를 한대 두대씩 사서 관리하시나요?<br>
                        유저(트래픽)이 몰릴 때 서버가 꺼질까봐 걱정이 되시나요?<br>
                        비용 절감을 위해 서버를 다운그레이드 해야하나 고민하시나요?<br>
                        와플보드와 함께라면 그런 걱정 없습니다!<br>
                        <img src="https://static.waffleboard.io/static/assets/pricing.svg" alt="가격">
                    </div>
                </div>
                <div class="item col-all">
                    <h2>와플보드 특징들 🔥</h2>
                    <div class="content">
                        <div class="features">
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path>
                                </svg>
                                <div>WYSIWYG 에디터를 통한<br>손쉬운 게시글 작성</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
                                </svg>
                                <div>네이버, 페이스북, 구글, 카카오<br>등을 통한 회원 가입 시스템</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-8-square" viewBox="0 0 16 16">
                                    <path d="M10.97 9.803c0 1.394-1.218 2.355-2.988 2.355-1.763 0-2.953-.955-2.953-2.344 0-1.271.95-1.851 1.647-2.003v-.065c-.621-.193-1.33-.738-1.33-1.781 0-1.225 1.09-2.121 2.66-2.121s2.654.896 2.654 2.12c0 1.061-.738 1.595-1.336 1.782v.065c.703.152 1.647.744 1.647 1.992Zm-4.347-3.71c0 .739.586 1.255 1.383 1.255s1.377-.516 1.377-1.254c0-.733-.58-1.23-1.377-1.23s-1.383.497-1.383 1.23Zm-.281 3.645c0 .838.72 1.412 1.664 1.412.943 0 1.658-.574 1.658-1.412 0-.843-.715-1.424-1.658-1.424-.944 0-1.664.58-1.664 1.424Z"></path>
                                    <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2Zm15 0a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2Z"></path>
                                </svg>
                                <div>게시글, 댓글, 출석체크 등<br>회원 포인트 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
                                    <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"></path>
                                    <path d="m2.165 15.803.02-.004c1.83-.363 2.948-.842 3.468-1.105A9.06 9.06 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.437 10.437 0 0 1-.524 2.318l-.003.011a10.722 10.722 0 0 1-.244.637c-.079.186.074.394.273.362a21.673 21.673 0 0 0 .693-.125zm.8-3.108a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6c0 3.193-3.004 6-7 6a8.06 8.06 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a10.97 10.97 0 0 0 .398-2z"></path>
                                </svg>
                                <div>자동으로 접속되는 편리한<br>자체 개발 채팅 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-piggy-bank" viewBox="0 0 16 16">
                                    <path d="M5 6.25a.75.75 0 1 1-1.5 0 .75.75 0 0 1 1.5 0zm1.138-1.496A6.613 6.613 0 0 1 7.964 4.5c.666 0 1.303.097 1.893.273a.5.5 0 0 0 .286-.958A7.602 7.602 0 0 0 7.964 3.5c-.734 0-1.441.103-2.102.292a.5.5 0 1 0 .276.962z"></path>
                                    <path fill-rule="evenodd" d="M7.964 1.527c-2.977 0-5.571 1.704-6.32 4.125h-.55A1 1 0 0 0 .11 6.824l.254 1.46a1.5 1.5 0 0 0 1.478 1.243h.263c.3.513.688.978 1.145 1.382l-.729 2.477a.5.5 0 0 0 .48.641h2a.5.5 0 0 0 .471-.332l.482-1.351c.635.173 1.31.267 2.011.267.707 0 1.388-.095 2.028-.272l.543 1.372a.5.5 0 0 0 .465.316h2a.5.5 0 0 0 .478-.645l-.761-2.506C13.81 9.895 14.5 8.559 14.5 7.069c0-.145-.007-.29-.02-.431.261-.11.508-.266.705-.444.315.306.815.306.815-.417 0 .223-.5.223-.461-.026a.95.95 0 0 0 .09-.255.7.7 0 0 0-.202-.645.58.58 0 0 0-.707-.098.735.735 0 0 0-.375.562c-.024.243.082.48.32.654a2.112 2.112 0 0 1-.259.153c-.534-2.664-3.284-4.595-6.442-4.595zM2.516 6.26c.455-2.066 2.667-3.733 5.448-3.733 3.146 0 5.536 2.114 5.536 4.542 0 1.254-.624 2.41-1.67 3.248a.5.5 0 0 0-.165.535l.66 2.175h-.985l-.59-1.487a.5.5 0 0 0-.629-.288c-.661.23-1.39.359-2.157.359a6.558 6.558 0 0 1-2.157-.359.5.5 0 0 0-.635.304l-.525 1.471h-.979l.633-2.15a.5.5 0 0 0-.17-.534 4.649 4.649 0 0 1-1.284-1.541.5.5 0 0 0-.446-.275h-.56a.5.5 0 0 1-.492-.414l-.254-1.46h.933a.5.5 0 0 0 .488-.393zm12.621-.857a.565.565 0 0 1-.098.21.704.704 0 0 1-.044-.025c-.146-.09-.157-.175-.152-.223a.236.236 0 0 1 .117-.173c.049-.027.08-.021.113.012a.202.202 0 0 1 .064.199z"></path>
                                </svg>
                                <div>자체 내장된 배너 관리 시스템으로<br>빠른 수익 창출</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-reply-all" viewBox="0 0 16 16">
                                    <path d="M8.098 5.013a.144.144 0 0 1 .202.134V6.3a.5.5 0 0 0 .5.5c.667 0 2.013.005 3.3.822.984.624 1.99 1.76 2.595 3.876-1.02-.983-2.185-1.516-3.205-1.799a8.74 8.74 0 0 0-1.921-.306 7.404 7.404 0 0 0-.798.008h-.013l-.005.001h-.001L8.8 9.9l-.05-.498a.5.5 0 0 0-.45.498v1.153c0 .108-.11.176-.202.134L4.114 8.254a.502.502 0 0 0-.042-.028.147.147 0 0 1 0-.252.497.497 0 0 0 .042-.028l3.984-2.933zM9.3 10.386c.068 0 .143.003.223.006.434.02 1.034.086 1.7.271 1.326.368 2.896 1.202 3.94 3.08a.5.5 0 0 0 .933-.305c-.464-3.71-1.886-5.662-3.46-6.66-1.245-.79-2.527-.942-3.336-.971v-.66a1.144 1.144 0 0 0-1.767-.96l-3.994 2.94a1.147 1.147 0 0 0 0 1.946l3.994 2.94a1.144 1.144 0 0 0 1.767-.96v-.667z"></path>
                                    <path d="M5.232 4.293a.5.5 0 0 0-.7-.106L.54 7.127a1.147 1.147 0 0 0 0 1.946l3.994 2.94a.5.5 0 1 0 .593-.805L1.114 8.254a.503.503 0 0 0-.042-.028.147.147 0 0 1 0-.252.5.5 0 0 0 .042-.028l4.012-2.954a.5.5 0 0 0 .106-.699z"></path>
                                </svg>
                                <div>Q&amp;A 질문 답변 위한<br>게시글 답글 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-megaphone" viewBox="0 0 16 16">
                                    <path d="M13 2.5a1.5 1.5 0 0 1 3 0v11a1.5 1.5 0 0 1-3 0v-.214c-2.162-1.241-4.49-1.843-6.912-2.083l.405 2.712A1 1 0 0 1 5.51 15.1h-.548a1 1 0 0 1-.916-.599l-1.85-3.49a68.14 68.14 0 0 0-.202-.003A2.014 2.014 0 0 1 0 9V7a2.02 2.02 0 0 1 1.992-2.013 74.663 74.663 0 0 0 2.483-.075c3.043-.154 6.148-.849 8.525-2.199V2.5zm1 0v11a.5.5 0 0 0 1 0v-11a.5.5 0 0 0-1 0zm-1 1.35c-2.344 1.205-5.209 1.842-8 2.033v4.233c.18.01.359.022.537.036 2.568.189 5.093.744 7.463 1.993V3.85zm-9 6.215v-4.13a95.09 95.09 0 0 1-1.992.052A1.02 1.02 0 0 0 1 7v2c0 .55.448 1.002 1.006 1.009A60.49 60.49 0 0 1 4 10.065zm-.657.975 1.609 3.037.01.024h.548l-.002-.014-.443-2.966a68.019 68.019 0 0 0-1.722-.082z"></path>
                                </svg>
                                <div>홈페이지 모든 방문자에게<br>노출하는 공지사항 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-lines-fill" viewBox="0 0 16 16">
                                    <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z"></path>
                                </svg>
                                <div>자유로운 표현과 의사 소통을 위한<br>댓글 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bezier" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M0 10.5A1.5 1.5 0 0 1 1.5 9h1A1.5 1.5 0 0 1 4 10.5v1A1.5 1.5 0 0 1 2.5 13h-1A1.5 1.5 0 0 1 0 11.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zm10.5.5A1.5 1.5 0 0 1 13.5 9h1a1.5 1.5 0 0 1 1.5 1.5v1a1.5 1.5 0 0 1-1.5 1.5h-1a1.5 1.5 0 0 1-1.5-1.5v-1zm1.5-.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1zM6 4.5A1.5 1.5 0 0 1 7.5 3h1A1.5 1.5 0 0 1 10 4.5v1A1.5 1.5 0 0 1 8.5 7h-1A1.5 1.5 0 0 1 6 5.5v-1zM7.5 4a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5h-1z"></path>
                                    <path d="M6 4.5H1.866a1 1 0 1 0 0 1h2.668A6.517 6.517 0 0 0 1.814 9H2.5c.123 0 .244.015.358.043a5.517 5.517 0 0 1 3.185-3.185A1.503 1.503 0 0 1 6 5.5v-1zm3.957 1.358A1.5 1.5 0 0 0 10 5.5v-1h4.134a1 1 0 1 1 0 1h-2.668a6.517 6.517 0 0 1 2.72 3.5H13.5c-.123 0-.243.015-.358.043a5.517 5.517 0 0 0-3.185-3.185z"></path>
                                </svg>
                                <div>사이트 데이터 확보를 위한<br>크롤링 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-bandaid" viewBox="0 0 16 16">
                                    <path d="M14.121 1.879a3 3 0 0 0-4.242 0L8.733 3.026l4.261 4.26 1.127-1.165a3 3 0 0 0 0-4.242ZM12.293 8 8.027 3.734 3.738 8.031 8 12.293 12.293 8Zm-5.006 4.994L3.03 8.737 1.879 9.88a3 3 0 0 0 4.241 4.24l.006-.006 1.16-1.121ZM2.679 7.676l6.492-6.504a4 4 0 0 1 5.66 5.653l-1.477 1.529-5.006 5.006-1.523 1.472a4 4 0 0 1-5.653-5.66l.001-.002 1.505-1.492.001-.002Z"></path>
                                    <path d="M5.56 7.646a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708Zm1.415-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707ZM8.39 4.818a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707Zm0 5.657a.5.5 0 1 1-.708.707.5.5 0 0 1 .707-.707ZM9.803 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707Zm1.414-1.414a.5.5 0 1 1-.706.708.5.5 0 0 1 .707-.708ZM6.975 9.06a.5.5 0 1 1-.707.708.5.5 0 0 1 .707-.707ZM8.39 7.646a.5.5 0 1 1-.708.708.5.5 0 0 1 .707-.708Zm1.413-1.414a.5.5 0 1 1-.707.707.5.5 0 0 1 .707-.707Z"></path>
                                </svg>
                                <div>AWS 클라우드로<br>서버 안정성 확보<br>(동접자 최대 20만명)</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-person-lock" viewBox="0 0 16 16">
                                    <path d="M11 5a3 3 0 1 1-6 0 3 3 0 0 1 6 0ZM8 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 5.996V14H3s-1 0-1-1 1-4 6-4c.564 0 1.077.038 1.544.107a4.524 4.524 0 0 0-.803.918A10.46 10.46 0 0 0 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h5ZM9 13a1 1 0 0 1 1-1v-1a2 2 0 1 1 4 0v1a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1h-4a1 1 0 0 1-1-1v-2Zm3-3a1 1 0 0 0-1 1v1h2v-1a1 1 0 0 0-1-1Z"></path>
                                </svg>
                                <div>완벽하게 기밀 보장되는<br>익명 게시판/댓글 시스템</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-cursor" viewBox="0 0 16 16">
                                    <path d="M14.082 2.182a.5.5 0 0 1 .103.557L8.528 15.467a.5.5 0 0 1-.917-.007L5.57 10.694.803 8.652a.5.5 0 0 1-.006-.916l12.728-5.657a.5.5 0 0 1 .556.103zM2.25 8.184l3.897 1.67a.5.5 0 0 1 .262.263l1.67 3.897L12.743 3.52 2.25 8.184z"></path>
                                </svg>
                                <div>제한 없는 게시판 추가<br>및 손쉬운 메뉴 설정</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-trophy" viewBox="0 0 16 16">
                                    <path d="M2.5.5A.5.5 0 0 1 3 0h10a.5.5 0 0 1 .5.5c0 .538-.012 1.05-.034 1.536a3 3 0 1 1-1.133 5.89c-.79 1.865-1.878 2.777-2.833 3.011v2.173l1.425.356c.194.048.377.135.537.255L13.3 15.1a.5.5 0 0 1-.3.9H3a.5.5 0 0 1-.3-.9l1.838-1.379c.16-.12.343-.207.537-.255L6.5 13.11v-2.173c-.955-.234-2.043-1.146-2.833-3.012a3 3 0 1 1-1.132-5.89A33.076 33.076 0 0 1 2.5.5zm.099 2.54a2 2 0 0 0 .72 3.935c-.333-1.05-.588-2.346-.72-3.935zm10.083 3.935a2 2 0 0 0 .72-3.935c-.133 1.59-.388 2.885-.72 3.935zM3.504 1c.007.517.026 1.006.056 1.469.13 2.028.457 3.546.87 4.667C5.294 9.48 6.484 10 7 10a.5.5 0 0 1 .5.5v2.61a1 1 0 0 1-.757.97l-1.426.356a.5.5 0 0 0-.179.085L4.5 15h7l-.638-.479a.501.501 0 0 0-.18-.085l-1.425-.356a1 1 0 0 1-.757-.97V10.5A.5.5 0 0 1 9 10c.516 0 1.706-.52 2.57-2.864.413-1.12.74-2.64.87-4.667.03-.463.049-.952.056-1.469H3.504z"></path>
                                </svg>
                                <div>회원 랭킹 시스템</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-123" viewBox="0 0 16 16">
                                    <path d="M2.873 11.297V4.142H1.699L0 5.379v1.137l1.64-1.18h.06v5.961h1.174Zm3.213-5.09v-.063c0-.618.44-1.169 1.196-1.169.676 0 1.174.44 1.174 1.106 0 .624-.42 1.101-.807 1.526L4.99 10.553v.744h4.78v-.99H6.643v-.069L8.41 8.252c.65-.724 1.237-1.332 1.237-2.27C9.646 4.849 8.723 4 7.308 4c-1.573 0-2.36 1.064-2.36 2.15v.057h1.138Zm6.559 1.883h.786c.823 0 1.374.481 1.379 1.179.01.707-.55 1.216-1.421 1.21-.77-.005-1.326-.419-1.379-.953h-1.095c.042 1.053.938 1.918 2.464 1.918 1.478 0 2.642-.839 2.62-2.144-.02-1.143-.922-1.651-1.551-1.714v-.063c.535-.09 1.347-.66 1.326-1.678-.026-1.053-.933-1.855-2.359-1.845-1.5.005-2.317.88-2.348 1.898h1.116c.032-.498.498-.944 1.206-.944.703 0 1.206.435 1.206 1.07.005.64-.504 1.106-1.2 1.106h-.75v.96Z"></path>
                                </svg>
                                <div>하루/누적 방문자 기능</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M64 64C46.3 64 32 78.3 32 96V416c0 17.7 14.3 32 32 32H512c17.7 0 32-14.3 32-32V96c0-17.7-14.3-32-32-32H64zM0 96C0 60.7 28.7 32 64 32H512c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V96zm214.6 73.4l72 160c3.6 8.1 0 17.5-8 21.2s-17.5 0-21.2-8L247.3 320H152.7l-10.2 22.6c-3.6 8.1-13.1 11.7-21.2 8s-11.7-13.1-8-21.2l72-160c2.6-5.7 8.3-9.4 14.6-9.4s12 3.7 14.6 9.4zM200 215l-32.9 73h65.7L200 215zm176 25a40 40 0 1 0 0 80 40 40 0 1 0 0-80zm40-19.9V176c0-8.8 7.2-16 16-16s16 7.2 16 16V280v56c0 8.8-7.2 16-16 16c-7.6 0-14-5.3-15.6-12.4C404.9 347.4 391 352 376 352c-39.8 0-72-32.2-72-72s32.2-72 72-72c14.8 0 28.6 4.5 40 12.1z"></path></svg>
                                <div>구글 애드센스<br>배너 수익</div>
                            </div>
                            <div class="feature">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M16 0C7.2 0 0 7.2 0 16s7.2 16 16 16H53.9c7.6 0 14.2 5.3 15.7 12.8l58.9 288c6.1 29.8 32.3 51.2 62.7 51.2H496c8.8 0 16-7.2 16-16s-7.2-16-16-16H191.2c-15.2 0-28.3-10.7-31.4-25.6L152 288H466.5c29.4 0 55-20 62.1-48.5L570.6 71.8c5-20.2-10.2-39.8-31-39.8H99.1C92.5 13 74.4 0 53.9 0H16zm90.1 64H539.5L497.6 231.8C494 246 481.2 256 466.5 256H145.4L106.1 64zM168 456a24 24 0 1 1 48 0 24 24 0 1 1 -48 0zm80 0a56 56 0 1 0 -112 0 56 56 0 1 0 112 0zm200-24a24 24 0 1 1 0 48 24 24 0 1 1 0-48zm0 80a56 56 0 1 0 0-112 56 56 0 1 0 0 112z"></path></svg>
                                <div>쿠팡 파트너스 방문하고<br>게시글 읽기</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-start">
                    <h2>가격안내 ⚡️</h2>
                    <div class="content">
                        <div class="price">330,000원</div>
                        <div>사이트 1개당 라이센스 / 한번만 지불</div>
                        <div>서버 비용 : AWS 신규가입 1년간 프리티어 범위 내 무료</div>
                        <div>자세한 사항은 와플보드 메뉴얼의 <a href="https://waffleboard.gitbook.io/manual/create/aws-pricing" target="_blank" class="manual">AWS 요금과 프리티어</a> 안내를 참고바랍니다.</div>
                    </div>
                </div>
                <div class="item">
                    <h2>기술 스펙 📚</h2>
                    <div class="content">
                        <div>.NET</div>
                        <div>Serverless</div>
                        <div>Lambda</div>
                        <div>MySQL</div>
                    </div>
                </div>
                <div class="item col-all">
                    <h2>문의 &amp; 기능개발 요청 💬</h2>
                    <div class="content">
                        <div class="contact">
                            <a href="https://waffleboard.channel.io" target="_blank" class="channel" onsubmit="gtag_report_conversion_contact()">채팅 상담하기</a>
                            <a href="http://pf.kakao.com/_xdfBYb/chat" target="_blank" class="kakao" onsubmit="gtag_report_conversion_contact()">카카오톡 채널</a>
                            <a href="https://t.me/teamw99" target="_blank" class="telegram" onsubmit="gtag_report_conversion_contact()">텔레그램</a>
                        </div>
                    </div>
                </div>
                <a href="/features" class="item col-all">
                    <h2>구글애드센스 &amp; 쿠팡파트너스 제휴 마케팅으로 수익창출 🤑</h2>
                    <div class="content">
                        구글애드센스, 쿠팡파트너스, 타불라 등 배너광고를 달고 수익을 창출하세요!
                        <div class="coupang">
                            <div class="main">쿠팡 보고 컨텐츠 펼쳐보기 &gt;</div>
                            <div class="comment">원치 않을 경우 뒤로 가기를 눌러주세요</div>
                        </div>
                    </div>
                </a>
                <div class="item col-all">
                    <h2>서버리스 게시판 프로그램 세대의 시작! 🎉</h2>
                    <div class="content">
                        이제는 서버관리를 AWS에 맡기고, 운영에 집중하세요!
                    </div>
                </div>
                <div class="item col-all">
                    <h2>블로그</h2>
                    <div class="content">
                        <div class="blogs">
                            
                            <div class="blog">
                                <a href="/blog/커뮤니티-사이트-제작으로-수익-만들기" class="image">
                                
                                    <img src="https://static.waffleboard.io/blog/1644409110911-ux2yx7ef37p.png" alt="커뮤니티 사이트 제작으로 수익 만들기">
                                
                                </a>
                                <div class="info">
                                    <a href="/blog/커뮤니티-사이트-제작으로-수익-만들기" class="title">커뮤니티 사이트 제작으로 수익 만들기</a>
                                </div>
                            </div>
                            
                            <div class="blog">
                                <a href="/blog/커뮤니티-사이트-만들기-운영비용-알아보기" class="image">
                                
                                    <img src="https://static.waffleboard.io/blog/1644407021629-f42r5iwnh7l.png" alt="커뮤니티 사이트 만들기 운영비용 알아보기">
                                
                                </a>
                                <div class="info">
                                    <a href="/blog/커뮤니티-사이트-만들기-운영비용-알아보기" class="title">커뮤니티 사이트 만들기 운영비용 알아보기</a>
                                </div>
                            </div>
                            
                            <div class="blog">
                                <a href="/blog/커뮤니티-사이트-만들기-와플보드로-시작하세요" class="image">
                                
                                    <img src="https://static.waffleboard.io/blog/1644407240253-fgnv5y7j3o.png" alt="커뮤니티 사이트 만들기 와플보드로 시작하세요">
                                
                                </a>
                                <div class="info">
                                    <a href="/blog/커뮤니티-사이트-만들기-와플보드로-시작하세요" class="title">커뮤니티 사이트 만들기 와플보드로 시작하세요</a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <style>
    footer {
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 60px;
        padding-bottom: 80px;
    }

    footer .wrap {
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: row;
    }

    footer .support {
        font-size: 1.2em;
        font-weight: bold;
        padding-bottom: 20px;
    }

    footer .company {
        flex: 1;
        font-size: 0.9em;
        color: rgba(0, 0, 0, 0.7);
    }

    footer .company .line {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        padding: 4px 0;
    }

    footer .company .title {
        color: rgba(0, 0, 0, 0.4);
    }

    footer .company .slash {
        color: rgba(0, 0, 0, 0.2);
        padding: 0 6px;
    }

    footer .affiliate {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap: 20px;
    }

    footer .affiliate svg {
        max-width: 100px;
        height: 40px;
    }

    @media (max-width: 1250px) {
        footer .wrap {
            flex-direction: column;
        }

        footer .company {
            margin-bottom: 20px;
        }

        footer .company .line {
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }

        footer .company .line div {
            padding: 4px 0;
        }

        footer .company .slash {
            display: none;
        }
    }
</style>
<footer>
    <div class="wrap">
        <div class="company">
            <div class="line">
                <a href="https://waffleboard.gitbook.io/manual/" target="_blank" class="support">와플보드 메뉴얼</a>
            </div>
            <div class="line">
                <div>
                    <span class="title"><a href="https://waffleboard.channel.io" target="_blank">채팅 상담하기</a>
                        (홈페이지 우측 하단 채널톡 버튼)</span>
                </div>
                <div class="slash">|</div>
                <div>
                    <span class="title">카카오톡 채널 : </span><a href="http://pf.kakao.com/_xdfBYb/chat" target="_blank">와플보드</a>
                </div>
                <div class="slash">|</div>
                <div>
                    <span class="title">텔레그램 : </span><a href="https://t.me/teamw99" target="_blank">메세지 보내기</a>
                </div>
                <!-- <div class="slash">|</div> -->
                <!-- <div><span class="title">이메일 : </span><a href="mailto:help@waffleboard.io">help@waffleboard.io</a></div> -->
                <!-- <div class="slash">|</div> -->
                <!-- <div><span class="title">연락처 : <a href="tel:07080953149">070-8095-3149</a></span></div> -->
            </div>
            <div class="line">
                <div><span class="title">전원생활 대표 : </span>김정애</div>
                <div class="slash">|</div>
                <div>
                    <span class="title">소재지 : </span>서울 강남구 테헤란로63길
                    9 4F
                </div>
                <!-- <div><span class="title">소재지 : </span>강원도 원주시 개운로 59</div> -->
            </div>
            <div class="line">
                <div>
                    <span class="title">사업자등록번호 : </span>511-05-40337
                </div>
                <div class="slash">|</div>
                <!-- <div><span class="title">통신판매신고 : </span>제2021-강원원주-01253</div>
        <div class="slash">|</div> -->
                <div><span class="title">호스팅제공 : </span>AWS</div>
            </div>
            <div class="line">
                <!-- <div><span class="title"><a href="/terms">이용약관</a></div> -->
                <!-- <div class="slash">|</div> -->
                <!-- <div><span class="title"><a href="/privacy">개인정보처리방침</a></div> -->
                <!-- <div class="slash">|</div> -->
                <div><a href="/license">라이센스 및 교환환불정책</a></div>
            </div>
        </div>
        <div class="affiliate">
            <a href="https://aws.amazon.com/ko/" target="_blank" class="aws">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" viewBox="0 0 304 182" style="enable-background: new 0 0 304 182" xml:space="preserve">
                    <style type="text/css">
                        .st0 {
                            fill: #252f3e;
                        }
                        .st1 {
                            fill-rule: evenodd;
                            clip-rule: evenodd;
                            fill: #ff9900;
                        }
                    </style>
                    <g>
                        <path class="st0" d="M86.4,66.4c0,3.7,0.4,6.7,1.1,8.9c0.8,2.2,1.8,4.6,3.2,7.2c0.5,0.8,0.7,1.6,0.7,2.3c0,1-0.6,2-1.9,3l-6.3,4.2   c-0.9,0.6-1.8,0.9-2.6,0.9c-1,0-2-0.5-3-1.4C76.2,90,75,88.4,74,86.8c-1-1.7-2-3.6-3.1-5.9c-7.8,9.2-17.6,13.8-29.4,13.8   c-8.4,0-15.1-2.4-20-7.2c-4.9-4.8-7.4-11.2-7.4-19.2c0-8.5,3-15.4,9.1-20.6c6.1-5.2,14.2-7.8,24.5-7.8c3.4,0,6.9,0.3,10.6,0.8   c3.7,0.5,7.5,1.3,11.5,2.2v-7.3c0-7.6-1.6-12.9-4.7-16c-3.2-3.1-8.6-4.6-16.3-4.6c-3.5,0-7.1,0.4-10.8,1.3c-3.7,0.9-7.3,2-10.8,3.4   c-1.6,0.7-2.8,1.1-3.5,1.3c-0.7,0.2-1.2,0.3-1.6,0.3c-1.4,0-2.1-1-2.1-3.1v-4.9c0-1.6,0.2-2.8,0.7-3.5c0.5-0.7,1.4-1.4,2.8-2.1   c3.5-1.8,7.7-3.3,12.6-4.5c4.9-1.3,10.1-1.9,15.6-1.9c11.9,0,20.6,2.7,26.2,8.1c5.5,5.4,8.3,13.6,8.3,24.6V66.4z M45.8,81.6   c3.3,0,6.7-0.6,10.3-1.8c3.6-1.2,6.8-3.4,9.5-6.4c1.6-1.9,2.8-4,3.4-6.4c0.6-2.4,1-5.3,1-8.7v-4.2c-2.9-0.7-6-1.3-9.2-1.7   c-3.2-0.4-6.3-0.6-9.4-0.6c-6.7,0-11.6,1.3-14.9,4c-3.3,2.7-4.9,6.5-4.9,11.5c0,4.7,1.2,8.2,3.7,10.6   C37.7,80.4,41.2,81.6,45.8,81.6z M126.1,92.4c-1.8,0-3-0.3-3.8-1c-0.8-0.6-1.5-2-2.1-3.9L96.7,10.2c-0.6-2-0.9-3.3-0.9-4   c0-1.6,0.8-2.5,2.4-2.5h9.8c1.9,0,3.2,0.3,3.9,1c0.8,0.6,1.4,2,2,3.9l16.8,66.2l15.6-66.2c0.5-2,1.1-3.3,1.9-3.9c0.8-0.6,2.2-1,4-1   h8c1.9,0,3.2,0.3,4,1c0.8,0.6,1.5,2,1.9,3.9l15.8,67l17.3-67c0.6-2,1.3-3.3,2-3.9c0.8-0.6,2.1-1,3.9-1h9.3c1.6,0,2.5,0.8,2.5,2.5   c0,0.5-0.1,1-0.2,1.6c-0.1,0.6-0.3,1.4-0.7,2.5l-24.1,77.3c-0.6,2-1.3,3.3-2.1,3.9c-0.8,0.6-2.1,1-3.8,1h-8.6c-1.9,0-3.2-0.3-4-1   c-0.8-0.7-1.5-2-1.9-4L156,23l-15.4,64.4c-0.5,2-1.1,3.3-1.9,4c-0.8,0.7-2.2,1-4,1H126.1z M254.6,95.1c-5.2,0-10.4-0.6-15.4-1.8   c-5-1.2-8.9-2.5-11.5-4c-1.6-0.9-2.7-1.9-3.1-2.8c-0.4-0.9-0.6-1.9-0.6-2.8v-5.1c0-2.1,0.8-3.1,2.3-3.1c0.6,0,1.2,0.1,1.8,0.3   c0.6,0.2,1.5,0.6,2.5,1c3.4,1.5,7.1,2.7,11,3.5c4,0.8,7.9,1.2,11.9,1.2c6.3,0,11.2-1.1,14.6-3.3c3.4-2.2,5.2-5.4,5.2-9.5   c0-2.8-0.9-5.1-2.7-7c-1.8-1.9-5.2-3.6-10.1-5.2L246,52c-7.3-2.3-12.7-5.7-16-10.2c-3.3-4.4-5-9.3-5-14.5c0-4.2,0.9-7.9,2.7-11.1   c1.8-3.2,4.2-6,7.2-8.2c3-2.3,6.4-4,10.4-5.2c4-1.2,8.2-1.7,12.6-1.7c2.2,0,4.5,0.1,6.7,0.4c2.3,0.3,4.4,0.7,6.5,1.1   c2,0.5,3.9,1,5.7,1.6c1.8,0.6,3.2,1.2,4.2,1.8c1.4,0.8,2.4,1.6,3,2.5c0.6,0.8,0.9,1.9,0.9,3.3v4.7c0,2.1-0.8,3.2-2.3,3.2   c-0.8,0-2.1-0.4-3.8-1.2c-5.7-2.6-12.1-3.9-19.2-3.9c-5.7,0-10.2,0.9-13.3,2.8c-3.1,1.9-4.7,4.8-4.7,8.9c0,2.8,1,5.2,3,7.1   c2,1.9,5.7,3.8,11,5.5l14.2,4.5c7.2,2.3,12.4,5.5,15.5,9.6c3.1,4.1,4.6,8.8,4.6,14c0,4.3-0.9,8.2-2.6,11.6   c-1.8,3.4-4.2,6.4-7.3,8.8c-3.1,2.5-6.8,4.3-11.1,5.6C264.4,94.4,259.7,95.1,254.6,95.1z"></path>
                        <g>
                            <path class="st1" d="M273.5,143.7c-32.9,24.3-80.7,37.2-121.8,37.2c-57.6,0-109.5-21.3-148.7-56.7c-3.1-2.8-0.3-6.6,3.4-4.4    c42.4,24.6,94.7,39.5,148.8,39.5c36.5,0,76.6-7.6,113.5-23.2C274.2,133.6,278.9,139.7,273.5,143.7z"></path>
                            <path class="st1" d="M287.2,128.1c-4.2-5.4-27.8-2.6-38.5-1.3c-3.2,0.4-3.7-2.4-0.8-4.5c18.8-13.2,49.7-9.4,53.3-5    c3.6,4.5-1,35.4-18.6,50.2c-2.7,2.3-5.3,1.1-4.1-1.9C282.5,155.7,291.4,133.4,287.2,128.1z"></path>
                        </g>
                    </g>
                </svg>
            </a>
        </div>
    </div>
</footer><script type="text/javascript" async="" src="https://googleads.g.doubleclick.net/pagead/viewthroughconversion/778486207/?random=1685640091361&amp;cv=11&amp;fst=1685640091361&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45be35v0&amp;u_w=1440&amp;u_h=900&amp;url=https%3A%2F%2Fwaffleboard.io%2F&amp;ref=https%3A%2F%2Fwaffleboard.io%2Fblog&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=%EC%99%80%ED%94%8C%EB%B3%B4%EB%93%9C%20-%20%EC%BB%A4%EB%AE%A4%EB%8B%88%ED%8B%B0%20%EC%82%AC%EC%9D%B4%ED%8A%B8%20%EC%A0%9C%EC%9E%91%20%EC%86%94%EB%A3%A8%EC%85%98&amp;auid=1008935839.1685640041&amp;uaa=arm&amp;uab=64&amp;uafvl=Google%2520Chrome%3B111.0.5563.64%7CNot(A%253ABrand%3B8.0.0.0%7CChromium%3B111.0.5563.64&amp;uamb=0&amp;uap=macOS&amp;uapv=13.2.1&amp;uaw=0&amp;data=event%3Dgtag.config&amp;rfmt=3&amp;fmt=4"></script>
<script>
    // Delete Button Confirm
    const deleteBtn = document.querySelectorAll('button[value="delete"]');
    deleteBtn.forEach(b => {
        b.addEventListener("click", event => {
            if (!confirm("삭제 확인")) {
                event.stopImmediatePropagation();
                event.preventDefault();
            }
        });
    });

    const makeOrderNumber = async () => {
        return new Promise((resolve, reject) => {
            const xhr = new XMLHttpRequest();
            xhr.onload = () => {
                if (xhr.status === 200 || xhr.status === 201) {
                    const result = xhr.responseText;
                    resolve(result);
                } else {
                    console.error(xhr.responseText);
                }
            };
            xhr.open("GET", "/api/makeOrderNumber");
            xhr.send();
        });
    };
</script>
<script defer="">
    (function () {
        var w = window;
        if (w.ChannelIO) {
            return w.console.error("ChannelIO script included twice.");
        }
        var ch = function () {
            ch.c(arguments);
        };
        ch.q = [];
        ch.c = function (args) {
            ch.q.push(args);
        };
        w.ChannelIO = ch;
        function l() {
            if (w.ChannelIOInitialized) {
                return;
            }
            w.ChannelIOInitialized = true;
            var s = document.createElement("script");
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://cdn.channel.io/plugin/ch-plugin-web.js";
            var x = document.getElementsByTagName("script")[0];
            if (x.parentNode) {
                x.parentNode.insertBefore(s, x);
            }
        }
        if (document.readyState === "complete") {
            l();
        } else {
            w.addEventListener("DOMContentLoaded", l);
            w.addEventListener("load", l);
        }
    })();

    ChannelIO("boot", {
        pluginKey: "51ac5e7c-e0d3-4592-98c1-c8c9673a52fa",
    });
</script>
<!-- Google tag (gtag.js) -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=G-87G20HTB32"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() {
        dataLayer.push(arguments);
    }
    gtag("js", new Date());

    gtag("config", "G-87G20HTB32");
</script>

        <!-- Event snippet for 문의 conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
  function gtag_report_conversion_contact(url) {
    var callback = function () {
      if (typeof(url) != 'undefined') {
        window.location = url;
      }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-778486207/oQS6CL2o6sEDEL-Dm_MC',
        'event_callback': callback
    });
    return false;
  }
</script>
    
<div id="ch-plugin" class="notranslate" style="z-index: 10000000 !important;">      <div id="ch-plugin-entry"><div style="display: block !important;"></div></div>      <div id="ch-plugin-script" style="display:none;" class="ch-messenger-hidden">        <iframe id="ch-plugin-script-iframe" style="position:relative!important;height:100%!important;width:100%!important;border:none!important;"></iframe>      </div>    <style data-styled="active" data-styled-version="5.3.9"></style></div></body>