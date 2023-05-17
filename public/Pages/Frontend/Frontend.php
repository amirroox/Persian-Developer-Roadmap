<?php include "../../../Constants.php"?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../assets/css/FullStyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Frontend</title>
</head>
<body>
<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>

<!-- MAIN -->
<section class="container subject">
    <h1>Frontend Developer (توسعه دهنده سمت کاربر)</h1>
    <p>راهنمای قدم به قدم برای تبدیل شدن به توسعه دهنده سمت کاربر در سال 1402</p>
    <br>
    <div class="row options">
        <div class="col-l-6">
            <a href="../../../index.php">تمامی نقشه راه ها</a>
            <a href="#">دانلود به صورت PDF</a>
        </div>
        <div class="col-l-6">
            <a href="#" style="float: left">پیشنهاد تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2>Road Map</h2>
    </section>

</section>

<section class="container" style="direction: ltr">

    <?php include "FrontendEn.svg" ?>
</section>

<!-- FOOTER -->
<?php require MAIN_DIR . "Public/Main/Footer.php" ?>
</body>
</html>
