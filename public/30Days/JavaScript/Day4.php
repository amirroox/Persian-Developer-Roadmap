<?php
include_once "../../../Constants.php";
$Name_Page = str_replace('.php' , '' , basename(__FILE__));
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
$test = str_replace("Day"  , '' , $Name_Page);
$test = [$test-1 , $test+1 , $test]; // 0 -> Pre  , 1 -> Nex , 2 -> Current
?>
<!-- Subject -->
<section class="container subject">
    <h1>
        <?= "$Name_File 30 Days" ?> (جاوا اسکریپت در 30 روز)
        -
        روز
        <?= $test[2] ?>
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
        <a href="<?='Day'.$test[1].'.php'?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?=$test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?='Day'.$test[0].'.php'?>" class="col-xs-5 col-md-2">
            روز قبلی (
            <?=$test[0] ?>
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
        <li><a href="#-day-4">📔 روز چهارم</a>
            <ul>
                <li><a href="#conditionals">شرط ها (Conditionals)</a>
                    <ul>
                        <li><a href="#if">If</a></li>
                        <li><a href="#if-else">if else</a></li>
                        <li><a href="#if--else-if-else">else if - else</a></li>
                        <li><a href="#switch">switch</a></li>
                        <li><a href="#ternary-operators">عملگر 3 گانه (Ternary Operators)</a></li>
                    </ul>
                </li>
                <li><a href="#-exercises">💻 تمرینات</a>
                    <ul>
                        <li><a href="#exercises-level-1">تمرینات: سطح 1</a></li>
                        <li><a href="#exercises-level-2">تمرینات: سطح 2</a></li>
                        <li><a href="#exercises-level-3">تمرینات: سطح 3</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- End List -->

<!-- Start Article -->
<article class="container">
    <h1 id="-day-4">📔 روز چهارم</h1>
        <h1 id="conditionals">شرط ها (Conditionals)</h1>
            <div>
                <p>
                    خب خب ، بلخره رسیدیم به دستورات شرطی ، تا حالا با خیلی از موارد توی زبان جاوا اسکریپت آشنا شدیم و جلسه قبل هم یخورده در مورد شرط ها آشناییت پیدا کردید (عملگر 3 گانه) ،
                    امروز کلا کارمون در مورد شرط هاست ؛ در نگاه اول اصلا شرط چیه ؟ وقتی بهتون میگم من فقط با سیستم عشق بازی میکنم ، یعنی تو زندگیم جز کامپیوتر چیز دیگه ایی نیست که باهاش عشق بازی (تبادل احساسات) کنم ، پس وقتی صحبت از
                    شرط ها میشه یعنی ما میخوایم فقط در شرایطی که خودمون صلاح میدونیم ، دستوری اجرا بشه ؛ برای مثال من یه متغیر تعریف میکنم که به صورت رندوم (Math.random) یه عددی بهش پاس داده میشه
                    و من میگم اگه (اگر کلمه شرطیه) این عدد بزررگ تر از 0.5 بود اونو برای من چاپ کن و اگه نبود چاپش نکن ، ما برای پیاده‌سازی همچین چیزی به شرط ها نیاز داریم!
                    <br>
                    تا یادم نرفته بگم برای دستورات شرطی توی جاوا اسکریپت دوتا راه داریم یا استفاده از if - else یا با ساتفاده از switch که جلوتر فرقشونو میگیم!
                </p>
            </div>
            <h2 id="if">if</h2>
                <div>
                    <p>
                        در اکثر زبان های برنامه نویسی برای دستورات شرطی از کلمه کلیدی if استفاده میشه و در اینجا هم از همین کلمه کیلیدی استفاده میکنیم ؛
                        برای اینکه بتونیم از if استفاده کنیم به خود کلمه if و شرط نیاز داریم :
                    </p>
                    <pre>
                        <code>
                            if(شرط) {
                                کدی که اگر شطر درست بود اجرا میشود
                            }

                            /*
                             با توجه به سینتکس بالا برای استفاده از دستورات شرطی ، شرطمون رو داخل پرانتز میزاریم و اگه
                            شرط داخل پرانتزمون درست بود دستورات داخل آکولاد اجرا میشه ، و اگر درست نبود
                            کلا داخل آکولاد نمیره تا بخواد چیزیو اجرا کنه
                            */

                            // برای درک بهتر ، مثال زیر رو ببینید
                        </code>
                    </pre>
                    <pre>
                        <code>
                            let number = 22 ;
                            if (number > 13 ) {
                                console.log(`${num} > 13`);
                            }
                            // چون عدد 22 بزرگتر از 13 است ، پس دستور کنسول چاپ میشه

                            let check = false;
                            if (check) {
                                console.log('Salam');
                            }
                            // اینجا هم که خیلی واضح است که اصلا داخل شرط نمیریم تا سلام چاپ بشه چون شرطمون غلطه
                        </code>
                    </pre>
                    <p>
                        همونطور که جلسه پیش گفتیم خود false هم غلطه!(یعنی ساده‌ترین نوع یک عبارت نادرست همین false)
                    </p>
                    <pre>
                        <code>
                            // اینم اون مثال عدد رندوم که اگه بیشتر از 0.5 بود عدد رو چاپ کنه

                            let num = Math.random();
                            if(num > 0.5) {
                                console.log(num)
                            }
                        </code>
                    </pre>
                </div>
            <h2 id="if-else">if else</h2>
                <div>
                    <p>
                        تا الان در مورد if صحبت کردیم و فهمیدیم چجوری کار میکنه ، ولی حالا بریم رو همون مثال قبلی (عدد رندوم) ، اگه بخوایم اعداد بزرگر تر از 0.5 رو چاپ کنیم و برای اعداد کوچک تر هم چیز دیگه ایی چاپ کنیم
                        اونوقت نیاز به چی داریم؟ اونوقت نیاز به یه شرط جدید داریم که ما بهش میگیم else یعنی در غیر این صورت ، به زبان ساده یعنی اگه عددمون از 0.5 بزرگتر بود ، خود عدد رو چاپ کن و در غیر اینصورت یه کار دیگه بکن.همونطور که احتمال میدم تا حالا فهمیده باشید برای else نیاز به شرط داخل پرانتز نداریم ،
                        چون خود else به if وابسته است (وقتی میگیم در غیر اینصورت ، یعنی از قبل یه شرطی رو گفتیم)
                    </p>
                    <pre>
                        <code>
                            if(شرط) {
                                کدی که اگر شرط درست بود اجرا میشه
                            } else {
                                کدی که اگه شرط بالا درست نبود اجرا میشه
                            }

                            /*
                            با توجه به سینتکس بالا اگر شرط درست بود ، کد های داخل ایف اجرا میشه و اگه درست نبود
                            کدها یداخل اِلس اجرا میشه به همین راحتی
                            */
                        </code>
                    </pre>
                    <pre>
                        <code>
                            //یه مثال هم با هم ببینیم عشق کنیم

                            let num = 3
                            if (num > 0) {
                            console.log(`${num} Bozorg tare`)
                            } else {
                            console.log(`${num} kochik tare`)
                            }
                            //  Print : 3 Bozorg tare

                            num = -3
                            if (num > 0) {
                            console.log(`${num} Bozorg tare`)
                            } else {
                            console.log(`${num} kochik tare`)
                            }
                            //  Print : -3 kochik tare

                        </code>
                    </pre>
                    <pre>
                        <code>
                            // بیاین اون مثال عدد رندوم رو اینجا بنویسیم

                            let num = Math.random();
                            if(num > 0.5) {
                                console.log(num)
                            }
                            else {
                                console.log('oof');
                            }

                            // با هر بار اجرای کد بالا اگر عدد از 0.5 بزرگتر باشه خود عدد چاپ میشه و اگه کوچیکتر باشه "اوف" چاپ میشه
                        </code>
                    </pre>
                </div>
            <h2 id="if--else-if-else">else if - else</h2>
            <h2 id="switch">switch</h2>
            <h2 id="ternary-operators">عملگر 3 گانه (Ternary Operators)</h2>
        <h1 id="-exercises">💻 تمرینات</h1>
            <h2 id="">تمرینات: سطح 1</h2>
            <h2 id="">تمرینات: سطح 2</h2>
            <h2 id="">تمرینات: سطح 3</h2>
</article>
<!-- End Article -->

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex mg2b">
    <div class="row">
        <a href="<?='Day'.$test[1].'.php'?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?=$test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?='Day'.$test[0].'.php'?>" class="col-xs-5 col-md-2">
            روز قبلی (
            <?=$test[0] ?>
            )
            &larr;
        </a>
    </div>
</div>
<!-- End Previous and Next Days -->

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

<!-- File Need It -->
<script src="assets/FileNeedIt.js"></script>

<script>
    scroll_down('.list30days li a' , 600);
    scroll_down('#top_button' , 1000 , '#Head-Sec');
</script>
<!-- END MAIN SCRIPT-->
</body>
</html>