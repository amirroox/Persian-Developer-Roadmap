<?php
include_once "../../../Constants.php";
$Name_Page = str_replace('.php', '', basename(__FILE__));
$Name_File = basename(__DIR__);
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->
    <link rel="stylesheet" href="../style.css">  <!-- Style This Page -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/vendor/prism.css' ?>">  <!-- Style Prism Library -->
    <title> <?= $Name_Page . ' ' . $Name_File ?>  </title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->


<!-- MAIN -->
<?php
// Number Of Day
$test = str_replace("Day", '', $Name_Page);
$test = [$test - 1, $test + 1, $test]; // 0 -> Pre  , 1 -> Nex , 2 -> Current
?>
<!-- Subject -->
<section class="container subject">
    <h1>
        <?= "$Name_File 30 Days" ?> (جاوا اسکریپت در 30 روز)
        -
        روز
        <?= $test[2] ?>
        <br>
        &gt;&gt;
        آبجکت Map و Set
    </h1>
    <p>راهنمای قدم به قدم برای تبدیل شدن به برنامه نویس جاوا اسکریپت در <b>30 روز</b></p>
    <br>
    <div class="row options">
        <div class="col-xs-12 col-s-12 col-l-6">
            <a href="<?= MAIN_SERVER ?>">تمامی نقشه راه ها</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href='<?= MAIN_GITHUB . "/issues/new?title=[Suggestion] $Name_File Developer - 30Days" ?>'
               target="_blank">پیشنهاد
                تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2><a href="<?= MAIN_SITE ?>" target="_blank">Subscribe</a></h2>
        <h2><?= $Name_File ?></h2>
        <h2>Day <?= $test[2] ?></h2>
    </section>
</section>

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex">
    <div class="row">
        <a href="<?= 'Day' . $test[1] . '.php' ?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?= $test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?= 'Day' . $test[0] . '.php' ?>" class="col-xs-5 col-md-2">
            روز قبلی (
            <?= $test[0] ?>
            )
            &larr;
        </a>
    </div>
</div>
<!-- End Previous and Next Days -->

<br>
<!-- Start List -->
<section class="container list30days">
    <ul>
        <li><a href="#day-10">روز دهم</a>
            <ul>
                <li><a href="#set">آبجکت Set</a>
                    <ul>
                        <li><a href="#creating-an-empty-set">ایجاد یک Set خالی</a></li>
                        <li><a href="#creating-set-from-array">ایجاد یک آرایه متمایز با Set</a></li>
                        <li><a href="#adding-an-element-to-a-set">اضافه کردن عضو</a></li>
                        <li><a href="#deleting-an-element-a-set">حذف کردن عضو</a></li>
                        <li><a href="#checking-an-element-in-the-set">بررسی وجود یک عضو</a></li>
                        <li><a href="#clearing-the-set">پاک کردن کامل یک Set</a></li>
                        <li><a href="#union-of-sets">اتصال ستها (Union of sets)</a></li>
                        <li><a href="#intersection-of-sets">اشتراک بین ست ها (Intersection of sets)</a></li>
                        <li><a href="#difference-of-sets">تفاوت بین ست ها (Difference of sets)</a></li>
                    </ul>
                </li>
                <li><a href="#map">آبجکت Map</a>
                    <ul>
                        <li><a href="#creating-an-empty-map">ایجاد یک Map خالی</a></li>
                        <li><a href="#creating-an-map-from-array">ایجاد یک آرایه کلید دار با Map</a></li>
                        <li><a href="#adding-values-to-the-map">اضافه کردن عضو در Map</a></li>
                        <li><a href="#getting-a-value-from-map">گرفتن یک مقدار در Map</a></li>
                        <li><a href="#checking-key-in-map">بررسی وجود کلید در Map</a></li>
                    </ul>
                </li>
                <li><a href="#exercises">تمرینات</a>
                    <ul>
                        <li><a href="#exerciseslevel-1">تمرینات:سطح 1</a></li>
                        <li><a href="#exerciseslevel-2">تمرینات:سطح 2</a></li>
                        <li><a href="#exerciseslevel-3">تمرینات:سطح 3</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- End List -->

<!-- Start Article -->
<article class="container">
    <h1 id="day-10">روز دهم</h1>
        <h1 id="set">آبجکت Set</h1>
            <h2 id="creating-an-empty-set">ایجاد یک Set خالی</h2>
            <h2 id="creating-set-from-array">ایجاد یک آرایه متمایز با Set</h2>
            <h2 id="adding-an-element-to-a-set">اضافه کردن عضو</h2>
            <h2 id="deleting-an-element-a-set">حذف کردن عضو</h2>
            <h2 id="checking-an-element-in-the-set">بررسی وجود یک عضو</h2>
            <h2 id="clearing-the-set">پاک کردن کامل یک Set</h2>
            <h2 id="union-of-sets">اتصال ستها (Union of sets)</h2>
            <h2 id="intersection-of-sets">اشتراک بین ست ها (Intersection of sets)</h2>
            <h2 id="difference-of-sets">تفاوت بین ست ها (Difference of sets)</h2>
        <h1 id="map">آبجکت Map</h1>
            <h2 id="creating-an-empty-map">ایجاد یک Map خالی</h2>
            <h2 id="creating-an-map-from-array">ایجاد یک آرایه کلید دار با Map</h2>
            <h2 id="adding-values-to-the-map">اضافه کردن عضو در Map</h2>
            <h2 id="getting-a-value-from-map">گرفتن یک مقدار در Map</h2>
            <h2 id="checking-key-in-map">بررسی وجود کلید در Map</h2>
        <h1 id="exercises"></h1>
            <h2 id="exerciseslevel-1">تمرینات:سطح 1</h2>
            <h2 id="exerciseslevel-2">تمرینات:سطح 2</h2>
            <h2 id="exerciseslevel-3">تمرینات:سطح 3</h2>
</article>
<!-- End Article -->

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex mg2b">
    <div class="row">
        <a href="<?= 'Day' . $test[1] . '.php' ?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?= $test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?= 'Day' . $test[0] . '.php' ?>" class="col-xs-5 col-md-2">
            روز قبلی (
            <?= $test[0] ?>
            )
            &larr;
        </a>
    </div>
</div>
<!-- End Previous and Next Days -->

<!-- END MAIN -->

<!-- Up Button -->
<?php include MAIN_DIR . 'public/Main/Top_Button.php' ?>

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
<script src="<?= MAIN_SERVER . 'assets/js/Helper.js' ?>"></script>

<!-- File Need It -->
<script src="assets/FileNeedIt.js"></script>

<script>
    scroll_down('.list30days li a', 600);
    scroll_down('#top_button', 1000, '#Head-Sec');
</script>
<!-- END MAIN SCRIPT-->
</body>
</html>