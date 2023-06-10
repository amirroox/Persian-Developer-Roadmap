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
    <link rel="stylesheet" href="assets/vendor/jquery-ui.min.css">
    <style>
        .cover {
            background-color: rgb(34, 26, 58) !important;
            filter: blur(.05rem);
        }
    </style>
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
            <a href="public/Pages/FullStack/">Full Stack (سمت کاربر و سمت سرور) </a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/DevOps/" class="cover">DevOps (توسعه عملیات)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Android/" class="cover">Android (اندروید)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/PostgreSQL/" class="cover">PostgreSQL (پستگرس کیوال)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Blockchain/" class="cover">Blockchain (بلاکچین) </a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/QA/" class="cover">QA Engineer (مدیر تضمین کیفیت)</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/SoftwareArchitect/" class="cover">Software Architect (معماری نرم افزار)</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>نقشه راه بر اساس مهارت</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/JavaScript/">JavaScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Vue/" class="cover">Vue</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/React/" class="cover">React</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Python/" class="cover">Python</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Java/" class="cover">Java</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/" class="cover">Node.js</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/GO/" class="cover">GO</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/" class="cover">TypeScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/Pages/Nodejs/" class="cover">Docker</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>نقشه راه 30 روزه</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/HTML/" class="cover">HTML</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/JavaScript/">JavaScript</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/React/" class="cover">React</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Python/" class="cover">Python</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Java/" class="cover">Java</a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="public/30Days/Nodejs/" class="cover">Node.js</a>
        </div>
    </div>

    <section class="between">
        <hr class="between">
        <h2>تمرین و پیشرفت</h2>
    </section>

    <div id="role" class="row container">
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#" class="cover"></a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#" class="cover"></a>
        </div>
        <div class="col-xs-12 col-s-6 col-l-4">
            <a href="#" class="cover"></a>
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

<!-- Box Dialog -->
<div id="dialog-alert" style="display: none">
    <p style="text-align: center">
        متاسفانه این بخش در حال ساخت است.
    </p>
</div>
<!-- Box Dialog -->

<!-- Community -->
<?php require "public/Main/Community.php"?>

<!-- FOOTER -->
<?php require "public/Main/Footer.php" ?>


<!-- MAIN SCRIPT -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js' ?>"></script>
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-ui.min.js' ?>"></script>
    <!-- Script For Response Menu -->
<script src="<?= MAIN_SERVER . 'assets/js/Response-Menu.js' ?>"></script>

<!-- Script Helper -->
<script src="<?= MAIN_SERVER . 'assets/js/Helper.js'?>"></script>
<script>
    scroll_down('#Guide-Btn-Down , #Guide-Btn-Up' , 1000 , "#Guide");
    let cover_pointer = document.querySelectorAll(".cover");
    for(let i = 0 ; i < cover_pointer.length ; i++ ) {
        cover_pointer[i].setAttribute('href' , 'javascript:void(1)');
    }
    $(".cover").on("click", function () {
        $('#dialog-alert').dialog({
            title: "در حال ساخت" ,
            resizable: false ,
            closeText: "بستن" ,
            show: {
                effect: "blind",
                duration: 500
            },
            hide: {
                effect: "blind",
                duration: 500
            }
        });
    });
</script>
</body>
</html>

