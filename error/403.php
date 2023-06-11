<?php include "../Constants.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->

    <title>403 Forbidden</title>
    <style>
        html,body{
            width: 100%;
            height: 100%;
            margin: 0;
        }
        #app {
            padding: 1rem;
            background: black;
            display: flex;
            height: 100%;
            justify-content: center;
            align-items: center;
            color: var(--color-pink);
            text-shadow: 0 0 10px;
            font-size: 6rem;
            flex-direction: column;
        }
        .txt {
            font-size: 1.8rem;
            text-align: center;
        }
        @keyframes blink {
            0%   {opacity: 0}
            49%  {opacity: 0}
            50%  {opacity: 1}
            100% {opacity: 1}
        }

        .blink {
            animation-name: blink;
            animation-duration: 1s;
            animation-iteration-count: infinite;
        }
        #home:hover {
            color: var(--color-red);
        }
    </style>
</head>
<body>
<div id="app">
    <div>403</div>
    <div class="txt" dir="rtl">
        <span>دسترسی به این بخش ممنوع عزیزم</span>
        <span class="blink">!</span>
        <br>
        <a id="home" href="<?= MAIN_SERVER?>">صفحه اصلی</a>
    </div>
</div>
</body>
</html>