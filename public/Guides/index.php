<?php include "../../Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->
    <link rel="stylesheet" href="<?= MAIN_SERVER .'assets/css/Style.css'?>">
    <title> Guides </title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->


<!-- MAIN -->

<!-- Subject -->
<section class="container subject">
    <h1> Guides (راهنما) </h1>
    <p>راهنمای قدم به قدم در استفاده از سایت ما </p>
    <br>
    <div class="row options">
        <div class="col-xs-12 col-s-12 col-l-6">
            <a href="<?= MAIN_SERVER ?>">تمامی نقشه راه ها</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href='<?= MAIN_GITHUB . "/issues/new?title=[Suggestion] Developer" ?>' target="_blank">پیشنهاد تغییر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2><a href="<?= MAIN_SITE ?>" target="_blank">Subscribe</a></h2>
        <h2>Guides</h2>
    </section>
</section>


<section class="Down-Sec">
    <div id="Guide" class="container">
        <div>
            <a href="bin/WhereToStart.php">از کجا شروع کنیم ؟</a>
            <a href="bin/ImportantPoints.php">نکات مهم قبل از استفاده (حتما بخونید)</a>
        </div>
    </div>
</section>
<!-- END MAIN -->

<!-- Community -->
<?php require MAIN_DIR . "public/Main/Community.php"?>
<!-- End Community -->
<!-- FOOTER -->
<?php require MAIN_DIR . "public/Main/Footer.php" ?>
<!-- END FOOTER -->


<!-- MAIN SCRIPT -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js' ?>"></script>

<!-- Script For Response Menu -->
<script src="<?= MAIN_SERVER . 'assets/js/Response-Menu.js' ?>"></script>

<!-- END MAIN SCRIPT-->
</body>
</html>