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
        <div>
            <p>
                امروز قراره در مورد دوتا آبجکت نسبتا جدید صحبت کنیم که ممکنه خیلی به کارمون بیاد.قبل از شروع و توضیح دادن باید بگم چیزایی که امروز یاد
                میگیریم تقریبا ساختار داده جدیدی هستن و نحوه کار و کاربردشون متغیره، پس بهتره یاد بگیرید!
            </p>
        </div>
        <h1 id="set">آبجکت Set</h1>
            <div>
                <p>
                    خب مثل همیشه یه توضیح کوجولو میدم تا بفهمیم این ساختار اصصلا چجوریه. یادتونه قبلا با هم دیگه آرایه ساختیم؟ یا دیگه الان خودتون توش
                    استادید! ما توی آرایه ها میتونیم اعضای برابر داشته باشیم مثل این : [12,13,134,13,13,17,18] اینجا 3 تا 13 داریم ، پس توی آرایه ها
                    عضو های تکراری سر جاشون میمونن. اما ساختار جدیدی که امروز میخوایم در موردش حرف بزنیم Set عه که شبیه آرایه است
                    اما عضو تکراری نداره و وقتی استفاده میشه که مثلا داده رو از جای دیگه دارید دریافت میکنید و نمیخواید داده تکراری براتون وجود داشته باشه!
                </p>
            </div>
            <h2 id="creating-an-empty-set">ایجاد یک Set خالی</h2>
                <div>
                    <p>
                        برای ساخت یه Set خالی دقیقا مثل آبجکت Date عمل میکنیم و از کلمه کلیدی new هم استفاده میکنیم :
                    </p>
                    <pre>
                        <code>
                            const empty = new Set()
                            console.log(empty)  // Print : set(0) {}
                        </code>
                    </pre>
                </div>
            <h2 id="creating-set-from-array">ایجاد یک آرایه متمایز با Set</h2>
                <div>
                    <p>
                        حالا که فهمیدیم چجوری یه Set خالی بسازیم بیاید پرش کنیم ، خالی که بدردمون نمیخوره! تا یادمم نرفته بگم باید بهش آرایه پاس بدید که عضو های تکراری رو
                        براتون حذف کنه :
                    </p>
                    <pre>
                        <code>
                            const array = ['Amir', 'Zahra', 'Amir', 'Amir', 'Zahra', '12', '12', 12, 13]
                            const full = new Set(array)
                            console.log(full); // Print : ['Amir', 'Zahra', '12', 12, 13]

                            // شاید بگید چرا پس دوتا 12 بالا هست ولی باید بگم یه 12 رشته هست یدونه 12 عددی
                            // آبچکت سِت هم فقط داده های شبیه به هم رو چک میکنه و تکراری هارو پاک میکنه
                        </code>
                    </pre>
                </div>
            <h2 id="adding-an-element-to-a-set">اضافه کردن عضو</h2>
                <div>
                    <p>
                        حالا که تونستیم عضو های تکراری رو حذف کنیم ، چجوری میتونیم یه عضو جدید به این ساختارمون اضافه کنیم ؟
                        خیلی هم راحته ، فقط از کلمه کلیدی add استفاده میکنیم همینقدر آسون :
                    </p>
                    <pre>
                        <code>
                            const companies = new Set()
                            console.log(companies.size) // 0 : سایز اندازه عناصر رو برای ما برمیگردونه که فعلا خالیه

                            companies.add('Google') // یه عضو جدید اضافه کردیم
                            companies.add('Facebook')
                            companies.add('Amazon')
                            companies.add('Oracle')
                            companies.add('Microsoft')
                            console.log(companies.size) // 5 : حالا بعد از اضافه کردن عضو 5 تا عضو داریم
                            console.log(companies) // Print : Set(5){'Google', 'Facebook', 'Amazon', 'Oracle', 'Microsoft'}
                        </code>
                    </pre>
                </div>
            <h2 id="deleting-an-element-a-set">حذف کردن عضو</h2>
                <div>
                    <p>
                        حالا فرض کنید ما یه ساختار ایجاد کردیم ، عضو هم توش داشتیم ولی از یه عضوی خوشممون نیومد و خواستیم پرتش کنیم بیرون! اونوقت باید
                        از کلمه delete استفاده کنیم برای حذف یه عنصر (البته وقتی که وجود داشت!)
                    </p>
                    <pre>
                        <code>
                            const array = ['Google','Facebook','Amazon','Oracle','Microsoft'];
                            const companies = new Set(array)

                            console.log(companies.delete('Google')) // Print : True
                            console.log(companies.size) // 4 elements left in the set
                        </code>
                    </pre>
                    <b>
                        توجه کنید که Set خودش یه آرایه نیست و ساختاری شبیه آرایه داره ، اما میتونید مثل آرایه باهاش رفتار کنید! مثلا میتونید
                        داخل حلقه ها ازش استفاده کنید به این صورت :
                    </b>
                    <pre>
                        <code>
                            const array = ['Google','Facebook','Amazon','Oracle','Microsoft'];
                            const companies = new Set(array)

                            for (const elem of companies) {
                                console.log(elem)
                            }
                            /*
                            Print :
                                Google
                                Facebook
                                Amazon
                                Oracle
                                Microsoft
                            */
                        </code>
                    </pre>
                </div>
            <h2 id="checking-an-element-in-the-set">بررسی وجود یک عضو</h2>
                <div>
                    <p>
                        حالا فرض کنید که میخوایم ببینیم توی این ساختار عضوی وجود داره یا نه ، برای این کار باید از کلمه کلیدی (تابع)
                        has استفاده کنیم. توجه هم کنید که گفتیم این ساختار شبیه آرایه هاست پس نمیشه از توابع مختص آرایه برای این ساختار استفاده کرد (مثل includes) :
                    </p>
                    <pre>
                        <code>
                            const array = ['Google','Facebook','Amazon','Oracle','Microsoft'];
                            const companies = new Set(array)

                            console.log(companies.has('Apple')) // Print : false
                            console.log(companies.has('Facebook')) // Print : true

                            // اگر عضوی وجود داشته باشه درست و اگه وجود نداشته باشه نادرست برمیگردونه
                        </code>
                    </pre>
                </div>
            <h2 id="clearing-the-set">پاک کردن کامل یک Set</h2>
                <div>
                    <p>
                        حالا مثلا ما کارهامون با ساختارمون تموم شد و میخوایم یه کار دیگه انجام بدیم ، برای حذف تمام عضو ها دوتا را داریم
                        اولیش اینکه یه حلقه اجرا کنیم و همشون رو با delete پاک کنیم یا اینکه از تابع clear استفاده کنیم که برای ما
                        برنامه نویسای خسته (یا همون کلمه ایی که میدونید) روش دوم راحت تره!
                    </p>
                    <pre>
                        <code>
                            const array = ['Google','Facebook','Amazon','Oracle','Microsoft'];
                            const companies = new Set(array)
                            console.log(companies.size) // Print : 5

                            companies.clear()
                            console.log(companies)
                            console.log(companies.size) // Print : 0
                        </code>
                    </pre>
                </div>
            <h2 id="union-of-sets">اتصال ستها (Union of sets)</h2>
                <div>
                    <p>
                        حالا که تا اینجا چیزای ابتدایی رو یاد گرفتیم یخورده دیپ تر میشیم! اگه دوتا آبجکت از Set داشتیم و خواستیم
                        اون هارو بهم وصل کنیم نمیتونیم از + استفاده کنیم، بلکه باید از مدل جدیدی استفاده کنیم که این زیر میبینید :
                    </p>
                    <pre>
                        <code>
                            let a = [1, 2, 3, 4, 5]
                            let b = [3, 4, 5, 6]
                            let c = [...a, ...b]
                            // تا اینجا تونستیم دو تا آرایه رو تبدیل به یه آرایه کنیم
                            // 3 نقطه به معنی عناصر نامشخصه ، یعنی ما نمیدونیم چنتا عضو نیازه

                            let A = new Set(a)
                            let B = new Set(b)
                            let C = new Set(c)

                            console.log(C) // Print : Set(6) = {1, 2, 3, 4, 5, 6}
                        </code>
                    </pre>
                    <b>
                        در واقع با استفاده از این روش اجتماع (مجموع اعضا) دو تا آرایه رو تبدیل به Set کردیم.
                    </b>
                </div>
            <h2 id="intersection-of-sets">اشتراک بین ست ها (Intersection of sets)</h2>
                <div>
                    <p>
                        حالا اگه بخوایم اشتراک دوتا آرایه رو تبدیل به Set کنیم باید چیکار کنیم؟ (یعنی دوتا آرایه داریم، میخوایم مشترکینشو بدون تکرار چاپ کنیم) :
                    </p>
                    <pre>
                        <code>
                            let a = [1, 2, 3, 4, 5]
                            let b = [3, 4, 5, 6]
                            // فعلا دوتا آرایه تعریف کردیم

                            let A = new Set(a)
                            let B = new Set(b)
                            // حالا هرکدوم رو تبدیل به سِت میکنیم

                            let c = a.filter((num) => B.has(num))
                            /*
                             برای اینکه بتونیم اشتراک دوتا آرایه رو بدست بیاریم باید یه آرایه رو با اون یکی مقایسه کنیم
                             پس از فیلتر استفاده میکنیم تا اعضای آرایه رو با دومین آرایه که تبدیل به سِت شده مقایسه کنیم
                            و اگر وجود داشت اونو داخل یه آرایه دیگه میریزیم و در آخر تبدیل به سِت میکنیم
                            */
                            let C = new Set(c)

                            console.log(C)  // Print : Set(3) {3, 4, 5}
                        </code>
                    </pre>
                </div>
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