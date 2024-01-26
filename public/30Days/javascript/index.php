<?php
$Name_Page = basename(__DIR__);
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'public/30Days/style.css' ?>">  <!-- Style This Page -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/vendor/prism.css' ?>">  <!-- Style Prism Library -->
    <title> <?= $Name_Page ?> 30 Days </title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->


<!-- MAIN -->

<!-- Subject -->
<section class="container subject">
    <h1><?= "$Name_Page 30 Days" ?> (جاوا اسکریپت در 30 روز) </h1>
    <p>راهنمای قدم به قدم برای تبدیل شدن به برنامه نویس جاوا اسکریپت در <b>30 روز</b></p>
    <br>
    <div class="row options">
        <div class="col-xs-12 col-s-12 col-l-6">
            <a href="<?= MAIN_SERVER ?>">تمامی نقشه راه ها</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href='<?= MAIN_GITHUB . "/issues/new?title=[Suggestion] $Name_Page Developer - 30Days" ?>'
               target="_blank">پیشنهاد
                تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2><a href="<?= MAIN_SITE ?>" target="_blank">Subscribe</a></h2>
        <h2><?= $Name_Page ?> 30 Days</h2>
    </section>
</section>

<!-- Start List -->
<div class="container box-days">
    <div class="row">
        <?php for ($i = 1; $i <= 30; $i++) : ?>
            <div class="col-xs-12 col-md-3 box">
                <a href="<?= MAIN_SERVER . "$Name_Page/Day$i" ?>"
                   style="background-image: url('<?= MAIN_SERVER . "public/30Days/$Name_Page/img/Day.png" ?>')">
                    <span>
                        Day <?= $i ?>
                    </span>
                </a>
            </div>
        <?php endfor; ?>
    </div>
</div>
<!-- End List -->

<!-- END MAIN -->

<!-- Up Button -->
<?php include MAIN_DIR . 'public/Main/Top_Button.php'?>

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

<!-- Script For Prism -->
<script src="<?= MAIN_SERVER . 'assets/vendor/prism.js' ?>"></script>

<!-- Script Helper -->
<script src="<?= MAIN_SERVER . 'assets/js/Helper.js'?>"></script>
<script>
    scroll_down('#top_button' , 1000 , '#Head-Sec');
</script>
<!-- END MAIN SCRIPT-->
</body>
</html>