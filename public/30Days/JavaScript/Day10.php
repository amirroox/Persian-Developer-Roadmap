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
        <h2><a href="index.php"><?= $Name_File ?></a></h2>
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
                <div>
                    <p>
                        حالا اگه بخوایم تفاوت بین دوتا آرایه رو بدست بیاریم فقط یه تغییر کوچولو به کد بالمون میدیم (برای پیدا کردن تفاوت دو تا آرایه باید چک کنیم کدوم عضو از آرایه اول توی آرایه دوم نیست!)
                    </p>
                    <pre>
                        <code>
                            let a = [1, 2, 3, 4, 5]
                            let b = [3, 4, 5, 6]
                            // فعلا دوتا آرایه تعریف کردیم

                            let B = new Set(b)
                            // حالا هرکدوم رو تبدیل به سِت میکنیم

                            let c = a.filter((num) => !B.has(num))
                            /*
                             برای اینکه بتونیم تفاوت دوتا آرایه رو بدست بیاریم باید یه آرایه رو با اون یکی مقایسه کنیم
                             پس از فیلتر استفاده میکنیم تا اعضای آرایه رو با دومین آرایه که تبدیل به سِت شده مقایسه کنیم
                            و اگر وجود نداشت اونو داخل یه آرایه دیگه میریزیم و در آخر تبدیل به سِت میکنیم
                            */
                            let C = new Set(c)

                            console.log(C)  // Print : Set(3) {1, 2}
                        </code>
                    </pre>
                </div>
        <h1 id="map">آبجکت Map</h1>
            <div>
                <p>
                    حالا که در مورد Set اطلاعات کافی پیدا کردیم بیاین در مورد Map صحبت کنیم و ببینیم این چیه؟!
                    این ساختار هم یه نوع ساختار جدیده که دارای Key و Value عه دقیقا یه ساختار شبیه به آبجکت ها داره ولی یه سودی نسبت به اون برای ما
                    ایجاد میکنه که این زیر میخوایم بررسی کنیم :
                </p>
                <pre>
                    <code>
                        // این روش توی آبجکته
                        const myObj = {}
                        const obj1 = {}
                        const obj2 = {}

                        myObj[obj1] = 'a'
                        myObj[obj2] = 'b'

                        console.log(myObj) // Print : {[object Object]: 'b'}
                        /*
                        ما انتظار داشتیم هر دوتا آبجکت جدیدمون رو بتونیم به آبجکت اولیه اضافه کنیم
                        ینی میخواستیم آبجکت زیر رو بسازیم
                        {obj1:'a' , obj2:'b'}
                        اما نتونستیم همچین چیزی رو بسازیم ، چون توی آبجکت ها فقط آخرین
                        key Object
                        هارو میشه وارد کرد و قبلیا از بین میرن
                        */
                        // توجه کنید که اینجا میخواستیم دوتا آبجکت رو داخل یه آبجکت قرار بدیم ، یعنی این مشکل برای آبجکت های چند بعدیه
                    </code>
                </pre>
                <b>
                    اما توی ساختار Map ما همچین مشکلی نداریم و میتونیم پشت هم Key Value اضافه کنیم. پس به طور کلی با Map میتونیم چندین Object رو به عنوان Key ذخیره کنیم
                    کاری که توی خود آبجکت ها نمیشه انجام داد!
                </b>
            </div>
            <h2 id="creating-an-empty-map">ایجاد یک Map خالی</h2>
                <div>
                    <p>
                        حالا برسیم ببینیم چجوری میتونیم یه Map خالی برای دست گرمی ایجاد کنیم تا بعدا بریم سراغ چیزای دیگه!
                    </p>
                    <pre>
                        <code>
                            const map = new Map()
                            console.log(map) // Print : Map(0) {}
                            // به همین راحتی ، مث آب خوردن یه مَپ ساختیم
                        </code>
                    </pre>
                </div>
            <h2 id="creating-an-map-from-array">ایجاد یک آرایه کلید دار با Map</h2>
                <div>
                    <p>
                        حالا بیاید این Map ون رو پرش کنیم تا نحوه ایجادش یاد بگیریمممم!
                    </p>
                    <pre>
                        <code>
                            countries = [
                                ['Finland', 'Helsinki'],
                                ['Sweden', 'Stockholm'],
                                ['Norway', 'Oslo'],
                                ['Iran', 'Tehran']
                            ]
                            // بالا یه متغیر جهانی ایجاد کردیم ، حواستون باشه

                            const map = new Map(countries)
                            // به همین راحتی آرایه مون رو به یه مَپ تبدیل کردیم
                            console.log(map)
                            /*
                            Map(3) {"Finland" => "Helsinki", "Sweden" => "Stockholm", "Norway" => "Oslo", "Iran" => "Tehran"}
                            */
                            console.log(map.size) // Print : 3
                        </code>
                    </pre>
                    <p>
                        توجه کنید که توی مثال بالا ما یه آرایه 2 بعدی ایجاد کردیم که هر عضوش دارای دوتا خونه است ، اولی کلید (Key) حساب میشه و دومی
                        مقدار (Value) و حتما تست کنید اگه آرایه دوبعدیتون 3 تا عضو داشت چی میشد!!!
                    </p>
                    <pre>
                        <code>
                            //حالا همون مثال آبجکت رو با مَپ مینزیم
                            const obj1 = {};
                            const obj2 = {};

                            const myMap = new Map([ [ obj1, 'a'], [obj2, 'b'] ]);
                            console.log(myMap); // Map { {} => 'a', {} => 'b' }
                            // حالا همونی که میخواستیم شد

                            // ایندفعه به جای تبدیل مستقیم آرایه 2 بعدی به مَپ از روش کیلد و مقدار استفاده کردیم
                            // این روشو میتونید این پایین ببینید چطوریاس
                            const yourMap = new Map([ [key,value] , ... , [key,value] ])
                            // به همین راحتی داخل براکت ، دوباره براکت باز میکنید و کلید و مقدار رو بهش میدید
                        </code>
                    </pre>
                </div>
            <h2 id="adding-values-to-the-map">اضافه کردن عضو در Map</h2>
                <div>
                    <p>
                        حالا که اصول اولیه رو یاد گرفتیم بریم با چنتا از متود های این ساختار هم آشنا بشیم! اولین متود ، برای اضافه کردن عضو استفاده میشه
                        و خیلی هم راحتهه استفادش!
                    </p>
                    <pre>
                        <code>
                            const person = new Map();
                            console.log(person.size) // Print : 0
                            person.set('amir','roox')
                            person.set('zahra','karami')
                            person.set('sepideh','akbari')
                            console.log(person.size) // Print : 3

                            // توی این تابع اولین پارامتر کلید و دومین پارامتر مقداره
                        </code>
                    </pre>
                </div>
            <h2 id="getting-a-value-from-map">گرفتن یک مقدار در Map</h2>
                <div>
                    <p>
                        برای گرفتن مقادیر Map هم از تابع get استفاده میکنیم و اگر کلید مرتبط وجود داشت ، مقدار برمیگرده :
                    </p>
                    <pre>
                        <code>
                        const myArray = [
                            ['amir','roox'],
                            ['zahra','karami'],
                            ['sepideh','akbari']
                        ]
                        const myMap = new Map(myArray)

                        console.log(myMap.get('amir')) // Print : 'roox'
                        console.log(myMap.get('ali')) // Print : undefined
                        </code>
                    </pre>
                </div>
            <h2 id="checking-key-in-map">بررسی وجود کلید در Map</h2>
                <div>
                    <p>
                        برای چک کردن اینکه یک کلید در Map موجود هست یا نه هم از تابع has استفاده میکنیم :
                    </p>
                    <pre>
                        <code>
                        const myArray = [
                            ['amir','roox'],
                            ['zahra','karami'],
                            ['sepideh','akbari']
                        ]
                        const myMap = new Map(myArray)

                        console.log(myMap.has('amir')) // Print : true
                        console.log(myMap.has('ali')) // Print : false
                        </code>
                    </pre>
                    <b>
                        امروزم بلخره تموم شد و یه چیزایی جدید باهم یاد گرفتیم که کمتر بررسی میشن اما کاربردی هستن. حتما حتما امروز رو خوب تمرین کنید تا
                        جلوتر به مشکل نخورید!
                    </b>
                </div>
        <h1 id="exercises">تمرینات</h1>
            <h2 id="exerciseslevel-1">تمرینات:سطح 1</h2>
                <div>
                    <ol>
                        <li>یه ساختار Set خالی ایجاد کنید و عشق کنید.</li>
                        <li>با استفاده از حلقه اعداد 0 تا 10 رو توش قرار بدید.</li>
                        <li>همه اعضارو پاک کنید (یکم کِرم داریم ، با استفاده از حلقه و تابع delete)</li>
                        <li>دوباره چنتا عضو اضافه کنید و ایندفعه با تابع clear اعضا رو پاک کنید.</li>
                        <li>یه Map ایجاد کنید و هر کلید رو یه شاعر و مقدارش رو برابر با کتابش قرار بدید.</li>
                    </ol>
                </div>
            <h2 id="exerciseslevel-2">تمرینات:سطح 2</h2>
                <div>
                    <ol>
                        <li>دوتا Set عددی ایجاد کنید.</li>
                        <li>بدون اینکه از بالا کمک بگیرید اشتراک ، اجتماع و تفاوتشون رو پیدا کنید.</li>
                    </ol>
                </div>
            <h2 id="exerciseslevel-3">تمرینات:سطح 3</h2>
                <div>
                    <ol>
                        <li>
                            کد زیر رو در نظر بگیرید :
                            <pre>
                                <code>
                                    [
                                        { English: 91 },
                                        { French: 45 },
                                        { Arabic: 25 },
                                        { Spanish: 24 },
                                        { Russian: 9 },
                                        { Portuguese: 9 },
                                        { Dutch: 8 },
                                        { German: 7 },
                                        { Chinese: 5 },
                                        { Swahili: 4 },
                                        { Serbian: 4 }
                                    ]
                                </code>
                            </pre>
                        </li>
                        <li>ساختار map با این کلید و مقادیر بسازید.</li>
                        <li>یه تابع بسازید که پارامتر اول یه Map و پارامتر دوم یه کلید بگیره و در آخر اگه اون کلید وجود داشت ، مقدار رو برگردونه (کاری مشابه با تابع get)
                            <pre>
                                <code>
                                    // تابع به صورت زیر باید باشه
                                    function myFunction(Map , Key) { ... }

                                    myFunction(myMap , 'Amir') // available : 'example'
                                    myFunction(myMap , 'Ali') // Not available :  False
                                </code>
                            </pre>
                        </li>
                    </ol>
                </div>
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
<!-- Down Button -->
<?php include MAIN_DIR . 'public/Main/To_Button.php'?>
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

<!-- Scroll Function -->
<script src="assets/script.js"></script>
<!-- END MAIN SCRIPT-->
</body>
</html>