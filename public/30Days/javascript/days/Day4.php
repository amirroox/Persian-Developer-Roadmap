<?php
$Name_Page = str_replace('.php' , '' , basename(__FILE__));
$Name_File = 'JavaScript';
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'public/30Days/style.css' ?>">  <!-- Style This Page -->
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
$test = str_replace("day"  , '' , $Name_Page);
$test = [$test-1 , $test+1 , $test]; // 0 -> Pre  , 1 -> Nex , 2 -> Current
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
        شرط ها
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
        <h2><a href="<?= site_url($Name_File) ?>"><?= $Name_File ?></a></h2>
        <h2>Day <?= $test[2] ?></h2>
    </section>
</section>

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex">
    <div class="row">
        <a href="<?='day'.$test[1]?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?=$test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?='day'.$test[0]?>" class="col-xs-5 col-md-2">
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
                    تا یادم نرفته بگم برای دستورات شرطی توی جاوا اسکریپت سه تا راه داریم یا استفاده از if - else یا با استفاده از switch و یا عملگر 3 گانه که جلوتر فرقشونو میگیم!
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
                <div>
                    <p>
                        ما تو زندگی خودمونم هزاران تصمیم میگیرم و این تصمیم ها و شرط ها همیشه توی دو حالت (در این صورت و در غیر این صورت) نیست ، یعنی اکثرا ما شرایط متعدی رو برای زندگی داریم ، مثلا
                        میگیم اگه فردا بارون بیاد ، بارونی میپوشیم ، اگر برف بیاد کاپشن میپوشیم و اگه آفتابی باشه تی شرت میپوشیم اینا شرط های چندگانه هستند که ما توی زبان برنامه نویسی بهشون میگیم if - else if - else ، توی مثال بالا هم اگه بخوایم عدد رندممون بالای 0.5 باشه ، خود عدد چاپ بشه ،
                        بین 0.3 و 0.5 باشه اوکی چاپ بشه و زیر 0.3 باشه نوکی چاپ بشه باید از این سینتکس استفاده کنیم!
                    </p>
                    <pre>
                        <code>
                            if(شرط اول) {
                                // code
                            }
                            else if (شرط دوم) {
                                // code2
                            }
                            else {
                                // code3
                            }

                            /*
                            با توجه به سینتکس بالا اگه شرط اول درست باشه کد داخل ایف اجرا میشه ، اگر درست نباشه شرط بعدی امتحان میشه
                            اگه شرط دوم درست باشه که کد داخل الس ایف اجرا میشه و اگر اینم درست نباشه کد داخل اِلس اجرا میشه
                            */
                        </code>
                    </pre>
                    <p>
                        <b>
                        توجه داشته باشید که ما میتونیم از تعداد نا محدودی else if استفاده کنیم ، اما if و else فقط میتونن یدونه باشن ! به مثالای زیر توجه کنید (که البته میکنید!)
                        </b>
                    </p>
                    <pre>
                        <code>
                            let a = 0
                            if (a > 0) {
                                console.log(`${a} is a positive number`)
                            } else if (a < 0) {
                                console.log(`${a} is a negative number`)
                            } else if (a == 0) {
                                console.log(`${a} is zero`)
                            } else {
                                console.log(`${a} is not a number`)
                            }

                            // با توجه به کد بالا چون متغیر برابره 0 شرط اول درست نیست ، شرط دومم درست نیست ، ولی شرط سوم درسته
                            // پس شرط سوم اجرا میشه
                        </code>
                    </pre>
                    <p>
                        <b>
                            بازم توجه کنید ببینید چی میگم! وقتی داخل شرط ها یه شرط درست باشه دیگه بقیه شرط های else if و else آزمایش نمیشن ، همینطور یادتون باشه که if الزامی برای داشتن else نداره ، یعنی میتونید کلا از else استفاده نکنید.
                        </b>
                    </p>
                </div>
            <h2 id="switch">switch</h2>
                <div>
                    <p>
                        مهم ترین دستور شرطی در جاوا اسکریپت if اما یه جایگزین برای شرط هایی که زیاد else if دارن ، استفاده از switch ؛ کار سوییچ هم دقیقا مثل شرط های else if داره اما سرعتش برای این کار بالاتره!
                        برای مثال یه متغیر میسازید و بهش یه عدد از 1 تا 7 میدید و میخواید کاری کنید که هر عددی بود ، روز متناسب با اون براتون چاپ بشه (مثلا اگه 3 بود دوشنبه چاپ بشه) اینجا میفهمید که اگه از else if استفاده کنید دستورات خیلی زیاد میشن و سرعت هم میاد پایین ، قبل از اینکه این برنامه رو بنویسم بزارید این پایین
                        با سینتکس switch آشناتون کنم :
                    </p>
                    <pre>
                        <code>
                            switch (متغیر) {
                                case مقدار اول :
                                    // code1
                                    break
                                case مقدار دوم :
                                    // code2
                                    break
                                .
                                .
                                .
                                default:
                                    // code else
                            }

                            /*
                            با توجه به سینتکس بالا ما باید متغیری که میخواد شرط روش انجام بشه رو داخل پرانتز بزاریم
                            بعد از اون باید شرط هامونو رو جلوی کلمه کلیدی کیس قرار بدیم ، البته حواستون باشه که ما توی این قسمت
                            از عملگر های مقایسه ایی استفاده نمیکنیم و مقداری که قراره متغیر داشته باشه رو جلوی کیس میزاریم
                            */
                        </code>
                    </pre>
                    <pre>
                        <code>
                            // اینم اون مثال 7 روز هفته
let day = prompt('لطفا یک عدد وارد کنید')
switch (day) {
  case 1:
    console.log('شنبه')
    break
  case 2:
    console.log('یک شنبه')
    break
  case 3:
    console.log('دو شنبه')
    break
  case 4:
    console.log('سه شنبه')
    break
  case 5:
    console.log('چهار شنبه')
    break
  case 6:
    console.log('پنج شنبه')
    break
  case 7:
    console.log('جمعه')
    break
  default:
    console.log('بیشتر از 7 روز در هفته نداری!')
}
                        </code>
                    </pre>
                    <p>
                        برای تمرین مثال بالا رو با else if هم بنویسید ، اما برای توضیح کد بالا باید بگم ما از کاربر یه عدد میگیریم و اون رو توی متغیر day قرار میدیم
                        بعد از switch استفاده میکنیم و داخل پرانتز متغیری که روش شرط هارو میخوایم انجام بدیم قرار میدیم که اینجا همون day میشه ، بعد از اون
                        از کلمه کلیدی case استفاده میکنیم و مقداری که مد نظرمونو رو روش میزاریم ؛ در مثال بالا اگر day برابر با یک بود case اول اجرا میشه ، چون جلوی case مقدار 1 قرار گرفته.(در switch ما از عملگر های مقایسه ایی استفاده نمیکنیم و فقط متغیر داخل پرانتز switch با مقدار روی به روی case مقایسه میشه و اگر برابر بود دستورات جلوی : اون case اجرا میشن)
                        <b>
                            حالا شاید بگید break چیه؟ اگر داخل هر case از break استفاده نکنید ، تمام case ها اجرا میشن ، چون طریقه کار case شبیه if نیست. و break در اصل باعث میشه کلا از سوییچ خارج بشیم (break یک دستور کنترلیه که جلوتر بیشتر باهاش آشنا میشید ، ولی فعلا بدونید که داخل case باید باشه و اگر نباشه case های بعدی پشت هم اجرا میشن)
                            در مورد default هم باید بگیم که کار else رو میکنه و اگه شرط هیچ کدوم از case ها قابل قبول نبود ، دستورات این قسمت اجرا میشه.
                        </b>
                        <br>
                        یه مثال دیگه این زیر میزنم که ببینیم چجوری میشه از عملگر های مقایسه ایی داخل سوییچ استفاده کرد؛ ولی بهتره برای مقایسه از همون if استفاده کنید.
                    </p>
                    <pre>
                        <code>
                            let num = prompt('یه عدد وارد کنید');
                            switch (true) {
                            case num > 0:
                                console.log('عدد شما مثبته');
                                break;
                            case num == 0:
                                console.log('عدد شما صفره');
                                break;
                            case num < 0:
                                console.log('عدد شما منفیه');
                                break;
                            default:
                                console.log('چیزی که وارد کردید ، عدد نیست');
                            }
                        </code>
                    </pre>
                    <p>
                        توجه کنید توی مثال بالا ما توی پرانتز switch از true استفاده کردیم یعنی مقدار جلوی case رو با true مقایسه میکنه و هرکدوم درست بود رو اجرا میکنه.
                    </p>
                    <pre>
                        <code>
                            let num = 2 ;
                            switch(num) {
                                case 1 : console.log('salam')
                                case 2 : console.log('salam')
                                case 3 : console.log('salam')
                                default : console.log('khodafes')
                            }

                            /*
                            با توجه به دستورات بالا ، چون ما از کلمه کلیدی
                            break
                            استفاده نکردیم دوبار سلام چاپ میشه و در آخرم خدافس، حالا چرا دوبار چاپ میشه
                            چون متغیرمون برابر 2 و شرط اول درست نیست تا اصلا اجراش کنه
                            ولی وقتی وارد شرط دوم میشه چون از بِریک استفاده نکردیم
                            تمامی شرط های بعدی رو هم بدون چک کردن اجرا میکنه ، پس حواستون به این مورد باشه

                            بعضی مواقع دوست داریم چنتا شرط خروجی یکسان داشته باشن اونوقت میشه بدون بِریک کار رو جلوبرد مث زیر
                            */
                            let num = 2 ;
                            switch(num) {
                                case 2 :
                                case 4 :
                                case 6 :
                                case 8 :
                                    console.log('even')
                                    break;
                                case 1 :
                                case 3 :
                                case 5 :
                                case 7 :
                                    console.log('odd')
                                    break;
                                default : console.log(' ')
                            }

                            /*
                            توی مثال بالا اگه متغیرمون 2 ، 4 ، 6 یا 8 باشه زوج چاپ میشه
                            و اگه 1 ، 3 ، 5 یا 7 باشه فرد چاپ میشه
                            */
                        </code>
                    </pre>
                </div>
            <h2 id="ternary-operators">عملگر 3 گانه (Ternary Operators)</h2>
                <div>
                    <p>
                        جلسه پیش در مورد عملگر های 3 گانه صحبت کردیم ، این عملگر هم برای دستورات شرطی ساده خیلی استفاده میشه ، میگم ساده ، چون برای شرط های پیچیده ظاهر قشنگی نداره و همینطور درک کد هم خیلی سخت میشه .
                    </p>
                    <pre>
                        <code>
                            let check = true
                            isRaining ? console.log('true') : console.log('false')  // print : true

                            let num = -1
                            num > 10 ? console.log('Big') ; console.log('Small') // Print : Small

                            /*
                            شرط ما قسمت اول ، قبل از علامت سوال میاد ، و اگر شرط درست باشه ، قسمت دوم (بعد از علامت سوال) اجرا میشه
                            و اگر شرط درست نباشه ، قسمت سوم (بعد از دو نقطه) اجرا میشه
                            */
                        </code>
                    </pre>
                    <p>
                        احتمالا امروز خسته نشده باشید ، چون چیزایی که باید یاد بگیرید خیلی کمتر بود!! برای درک بهتر دستورات شرطی و همینطور دستور کنترلی break حتما این دستورات رو برای خودتون بنویسید و تست کنید تا بهتر درکش کنید. تمرینات امروزم یادتون نره قشنگا!
                    </p>
                </div>
        <h1 id="-exercises">💻 تمرینات</h1>
            <h2 id="">تمرینات: سطح 1</h2>
                <div>
                    <ol>
                        <li>از ورودی کاربر با استفاده از prompt بخواید که سنشو وارد کنه و با استفاده از دستورات شرطی اگر بالای 18 سال بود بهش خوش امد بگید و اگه زیر 18 سال بود بهش بگید اینجا مناسب شما نیست!</li>
                        <li>دقیقا مثل تمرین بالا از کاربر سنشو بگیرید ولی ایندفعه با استفاده از if else با سن خودتون مقایسش کنید و اگه بزرگ ، کوچیک تر یا مساوی بود پیام مناسب چاپ کنید.</li>
                        <li>دو تا تمرین بالارو با استفاده از عملگر 3 تایی هم انجام بدید.</li>
                    </ol>
                </div>
            <h2 id="">تمرینات: سطح 2</h2>
                <div>
                    <ol>
                        <li>برنامه ایی بنویسید که از ورودی عددی دیافت کنه و زوج و فرد بودن عدد رو شناسایی کنه (راهنمایی : اعداد زوج تقسیم بر 2 باقی مونده ندارن)</li>
                        <li>برنامه ایی بنویسید که اگه بهش ماه های سال رو دادید ، فصل اون ماه رو برگردونه (برای مثال اگه بهش مرداد پاس دادید، تابستون رو برگدونه)</li>
                        <li>همین مثال بالا رو برعکس بنویسید (یعنی اگه بهش تابستون رو پاس دادید ، تیر ، مرداد و شهریور رو برگردونه)</li>
                    </ol>
                </div>
            <h2 id="">تمرینات: سطح 3</h2>
                <div>
                    <ol>
                        <li>برنامه ایی بنویسید که تعداد روز هر ماه رو برگردونه (مثلا گفتید مرداد ، 31 رو برگردونه )</li>
                        <li>همون برنامه بالا رو بنویسید ولی فرض کنید سال ، سال کبیسه است (اسفند یه روز بیشتر داره!)</li>
                    </ol>
                </div>
</article>
<!-- End Article -->

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex mg2b">
    <div class="row">
        <a href="<?='day'.$test[1]?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?=$test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?='day'.$test[0]?>" class="col-xs-5 col-md-2">
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
<script src="<?= MAIN_SERVER . 'assets/js/Helper.js'?>"></script>

<!-- File Need It Code -->
<script src="<?= MAIN_SERVER . 'public/30Days/javascript/assets/FileNeedIt.js'?>"></script>

<!-- Scroll Function -->
<script src="<?= MAIN_SERVER . 'public/30Days/javascript/assets/script.js'?>"></script>
<!-- END MAIN SCRIPT-->
</body>
</html>