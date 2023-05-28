<?php include "Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?= MAIN_SERVER . 'assets/img/LogoWh.svg'?>" rel="icon" type="image/svg" sizes="32x32">
    <title>Developer RoadMap</title>
    <link rel="stylesheet" href="assets/css/FullStyle.css">
    <link rel="stylesheet" href="assets/css/Style.css">
</head>
<body>
<!-- HEADER -->
<?php require "public/Main/Header.php" ?>

<!-- TOP SECTION HEAD -->
<section id="Top-Sec">
    <div class="Header">
        <h1>Developer Roadmap</h1>
        <p>نقشه راه شما آماده است</p>
    </div>
    <section class="between">
        <hr class="between">
        <h2>نقشه راه بر اساس نقش</h2>
    </section>
    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Frontend/">Frontend (سمت کاربر) </a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Backend/">Backend (سمت سرور)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/DevOps/">DevOps (توسعه عملیات)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/FullStack/">Full Stack (سمت کاربر و سمت سرور) </a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Android/">Android (اندروید)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/PostgreSQL/">PostgreSQL (پستگرس کیوال)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Blockchain/">Blockchain (بلاکچین) </a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/QA/">QA Engineer (مدیر تضمین کیفیت)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/SoftwareArchitect/">Software Architect (معماری نرم افزار)</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>نقشه راه بر اساس مهارت</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Vue/">Vue</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/React/">React</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/JavaScript/">JavaScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Python/">Python</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Java/">Java</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/">Node.js</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/GO/">GO</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/">TypeScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/">Docker</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>نقشه راه 30 روزه</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Vue/">HTML</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/React/">React</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/JavaScript/">JavaScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Python/">Python</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Java/">Java</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Nodejs/">Node.js</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>تمرین و پیشرفت</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#"></a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#"></a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#"></a>
        </div>
    </div>

</section>

<!-- DOWN SECTION  -->
<section class="Down-Sec">
    <div id="Guide" class="container">
        <h3> راهنما </h3>
        <div>
            <a href="public/Guides/bin/WhereToStart.php">از کجا شروع کنیم ؟</a>
            <a href="public/Guides/bin/ImportantPoints.php">نکات مهم قبل از استفاده (حتما بخونید)</a>
        </div>
    </div>
</section>
<!-- Community -->
<?php require "public/Main/Community.php"?>

<!-- FOOTER -->
<?php require "public/Main/Footer.php" ?>


<!-- MAIN SCRIPT -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js' ?>"></script>
    <!-- Script For Response Menu -->
<script src="<?= MAIN_SERVER . 'assets/js/Response-Menu.js' ?>"></script>

<script>
    //Scroll To Guide (Up - Down)
             $("#Guide-Btn-Down , #Guide-Btn-Up").on("click", function (event) {
                event.preventDefault();
                console.log(event)
                $("html, body").animate({
                    scrollTop: $("#Guide").offset().top
                }, 1000);
                return false;
            });
</script>
</body>
</html>

