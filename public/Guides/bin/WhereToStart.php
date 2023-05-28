<?php
include_once "../../../Constants.php";
$Name_Page = str_replace('.php', '', basename(__FILE__));
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'public/Guides/style.css' ?>">  <!-- Style Main seed -->
    <title> <?= $Name_Page ?></title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->


<!-- MAIN -->
<!-- Subject -->
<section class="container subject">
    <h1><?= "$Name_Page" ?> (از کجا شروع کنیم ؟) </h1>
    <p>راهنمای قدم به قدم برای استقاده از سایت </p>
    <section class="between">
        <hr class="between">
        <h2><a href="<?= MAIN_SITE ?>" target="_blank">Subscribe</a></h2>
        <h2><?= $Name_Page ?></h2>
    </section>
</section>
<!-- End Subject -->
<!-- Text -->
<section class="container" id="Content">
    <div>
        <p>یکی از سوالات رایج برنامه نویسان این است که برنامه نویسی را از کجا شروع کنیم؟ و چگونه پیشرفت کنیم؟</p>
        <p>از آنجایی که اکثر دوستان برای ورود به دنیای کامپیوتر و برنامه نویسی با مشکلات زیادی مواجه بودند و با سوالات
            زیادی مواجه می شدند، تصمیم گرفتیم برای افرادی که نمی دانند از کجا شروع کنند یا افرادی که به سطح قابل قبولی
            از دانش رسیده اند اما برای پیشرفت نمی داند چه چیزی را شروع کنند، یک سایت راه‌اندازی کنیم.</p>
        <br>
        <p><b><a href="<?= MAIN_SERVER ?>" target="_blank">صفحه اصلی</a></b> دارای بخش های متفاوتی میباشد که شما میتوانید از
            هرکدام از آنها استفاده کنید.
            <br>
            <b>بخش اول</b> : نقشه راه بر اساس نقش میباشد (یعنی اگر زبان خاصی مورد نظر شما نیست و
            فقط میخواهید تخصص در یک نقش داشته باشید ، میتوانید این مسیر ها را انتخاب کنید)
            <br>
            <b>بخش دوم</b> : نقشه راه بر اساس
            مهارت یا زبان است (یعنی اگر به زبان یا مهارت خاصی علاقه مند هستید ، میتوانید از این نقشه راه ها استفاده
            نمایید)
            <br>
            <b>بخش سوم</b> : نقشه راه 30 روزه است که تا حد قابل قبولی میتواند شما را بر اساس
            زبان انتخابی بالا بکشد.
        </p>
        <br>
        <p>بعد از انتخاب نقشه راه ، میتوانید مراحل را پشت سر هم اجرا کنید و وقت مناسب برای یادگیری و تمرین آنها کنار بزارید. </p>
        <br>
        <p>حتما یادتون باشه اگر مشکلی در نقشه راه ها وجود داشت مارو مطلع کنید تا حتما رسیدگی کنیم ، و اگر این سایت به شما کمک کرده خوشحال میشیم حمایتمون کنید :)</p>
    </div>
</section>
<!-- End Text -->
<!-- END MAIN -->


<!-- Community -->
<?php require MAIN_DIR . "public/Main/Community.php" ?>
<!-- End Community -->
<!-- FOOTER -->
<?php require MAIN_DIR . "public/Main/Footer.php" ?>
<!-- END FOOTER -->


<!-- MAIN SCRIPT -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js' ?>"></script>
<!-- Script For Response Menu -->
<script src="<?= MAIN_SERVER . 'assets/js/Response-Menu.js' ?>"></script>
</body>
</html>