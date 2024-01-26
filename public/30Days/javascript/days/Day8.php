<?php
$Name_Page = str_replace('.php', '', basename(__FILE__));
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
$test = str_replace("day", '', $Name_Page);
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
        آبجکت ها
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
        <a href="<?= 'day' . $test[1]?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?= $test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?= 'day' . $test[0]?>" class="col-xs-5 col-md-2">
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
        <li><a href="#-day-8">📔 روز هشتم</a>
            <ul>
                <li><a href="#scope">مفهوم Scope</a>
                    <ul>
                        <li><a href="#window-global-object">Window Global Object</a></li>
                        <li><a href="#global-scope">مفهوم Global scope</a></li>
                        <li><a href="#local-scope">مفهوم Local scope</a></li>
                    </ul>
                </li>
                <li><a href="#-object">📔 شی (Object)</a>
                    <ul>
                        <li><a href="#creating-an-empty-object">ساخت یک آبجکت خالی</a></li>
                        <li><a href="#creating-an-objecting-with-values">ساخت آبجکت با مقدار</a></li>
                        <li><a href="#getting-values-from-an-object">گرفتن مقادیر یک آبجکت</a></li>
                        <li><a href="#creating-object-methods">ساخت متود و استفاده از متود های آبجکت</a></li>
                        <li><a href="#setting-new-key-for-an-object">اضافه کردن کلید جدید به آبجکت</a></li>
                        <li><a href="#object-methods">توابع مربوط به آبجکت ها</a>
                            <ul>
                                <li><a href="#getting-object-keys-using-object-keys">دریافت کلید های آبجکت با Object.keys</a></li>
                                <li><a href="#getting-object-values-using-object-values">دریافت مقادیر آبجکت با Object.values</a></li>
                                <li><a href="#getting-object-keys-and-values-using-object-entries">دریافت کلید ها و مقادیر آبجکت با Object.entries</a></li>
                                <li><a href="#checking-properties-using-has-own-property">چک کردن وجود یک کلید در آبجکت با hasOwnProperty</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li><a href="#-exercises">💻 تمرینات</a>
                    <ul>
                        <li><a href="#exercises-level-1">تمرین: سطح 1</a></li>
                        <li><a href="#exercises-level-2">تمرین: سطح 2</a></li>
                        <li><a href="#exercises-level-3">تمرین: سطح 3</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- End List -->

<!-- Start Article -->
<article class="container">
    <h1 id="-day-8">📔 روز هشتم</h1>
        <div>
            <p>
                خب بحث امروز ما در مورد object هاست. قبلا در مورد انواع داده صحبت کردیم و اشاره هایی به آبجکت ها هم داشتیم ولی امروز قراره بیشتر بازش کنیم تا با این نوع داده و تعریفش اشنا بشید(قبلا در مورد تعریفش چیزی نگفتیم فقط گفتیم برای استفاده از بعضی شی ها باید یه نمونه از اونا با کلمه new بسازیم مثل Date).
                پس امروز در مورد شی صحبت میکنیم عزیزان دلم.
            </p>
        </div>
        <h1 id="scope">مفهوم Scope</h1>
            <div>
                <p>
                    قبل از اینکه وارد بحث object ها بشیم بزارید در مورد اسکوپ ها یا حوزه صحبت کنیم ؛ تو جلسه اول باهم دیگه فرق بین let و var رو گفتیم و یه توضیح در مورد scope ها دادیم ، ولی اینجا میخوایم کامل تر در موردش بگیم ، و کاملا بهتون یاد بدیم اسکوپ دقیقا چیه.
                    همونجوری که قبلا گفتیم اسکوپ یا حوزه یعنی ما از چه جاهایی به متغیر دسترسی داریم (فرض کنید اب تو یخچاله ، شما از تو اتاق دسترسی ندارید ولی از توی اشپزخونه دسترسی دارید ، اینجا اب داخل یخچال متغیرمونه و اتاق و اشپزخونه میتونه دوتا حوزه مختلفمون باشه). حالا توی برنامه نویسی ما کلا دوتا حوزه داریم ، یدونه scope global که بهش میگیم حوزه جهانی و یدونه scope local که بهش میگیم حوزه محلی و این پایین میخوام در مورد این دوتا صحبت کنم :
                </p>
            </div>
            <h2 id="window-global-object">Window Global Object</h2>
                <div>
                    <p>
                        قبل از معرفی اسکوپ های جهانی و محلی یبار دیگه شی window رو یاد اوری میکنم ، شی window دقیقا شی اصلی پنجره مرورگره و خیلی از توابع برای این شی هستند. حالا چرا در مورد این صحبت کردم؟
                        چون قبل از مبحث اسکوپ ها باید ببنیم مهمترین اسکوپ چیه؟ و اون اسکوپ چیزی نیست جز شی window ؛ اگه بخوام بهترم این مورد رو توضیح بدم میتونم بگم : شیء window که توسط تمام مروگر ها پشتیبانی می شود، نماینده ی پنجره ی مرورگر شما است و شاید مهم ترین و ریشه ای ترین قسمته؛
                        تمام اشیاء، توابع و متغیرهای سراسری به صورت خودکار عضوی از شیء window خواهند شد؛ بنابراین می توان گفت متغیرهای سراسری خصوصیات شیء window بوده و توابع سراسری نیز متدهای آن محسوب می شوند.
                        به همین دلیل اول در مورد این صحبت کردم تا متوجه بشید هرچیزی رو به صورت عمومی تعریف کنید زیر مجموعه این شی window ماعه! این زیر یه مثال زدم تا بهتر متوجه بشیم داستان از چه قراره :
                    </p>
                    <pre>
                        <code>
                            let a = 13
                            b = 12
                            /*
                            توجه کنید که شما میتونید بدون استفاده از کلمات کلیدی
                            var , let , const
                            هم متغیر بسازید ولی وقتی بدون کلمات کلید متغیر میسازید ، اون متغیر به صورت سراسری تعریف شده
                            و چیزی که سراسریه همونطوری که گفتیم زیر مجموعه آبجکت ویندو عه
                            حالا چجوری باید بررسیش کنیم این موردو؟ مثل زیر میتونید تست کنید
                            */

                            console.log(window.a)  // undefined
                            console.log(window.b)  // 12
                            console.log(a)  // 13
                            console.log(b)  // 12

                            // اگه کد بالا رو چک کنید میفهمید اونی که سراسری تعریف شده هم به صورت ساده و هم از طریق آبجکت ویندو قابل دسترسیه
                            // ولی اونی که با کلمات کلیدی تعریف شده زیر مجموعه آبجکت ویندو نیست
                        </code>
                    </pre>
                </div>
            <h2 id="global-scope">مفهوم Global scope</h2>
                <div>
                    <p>
                        حالا که در مورد آبجکت ویندو فهمیدیم ، برسیم سر موضوع اصلی یعنی اسکوپ ها! گلوبال اسکوپ یا اسکوپ جهانی یعنی ما متغیری رو در جایی اعلان کنیم (بسازیم) که از همه جا
                        قابل دسترسی باشه (البته باید حواستون باشه این همه جا ، واقعا همه جا همه جا نیست!) برای اینکه بفهمیم اسکوپ جهانی کجاس مثل زیر و با دقت نگاه کنید :
                    </p>
                    <pre>
                        <code>
                            let a = 'JavaScript'
                            let b = 10
                            /*
                            دوتا متغیر بالا توی گلوبال اسکوپ هستند چون از همه جا بهشون دسترسی داریم
                            */
                            function letsLearnScope() {
                                console.log(a, b) // JavaScript 10
                                // به دوتا متغیر بالا ، داخل تابع دسترسی داریم
                                if (true) {
                                    let a = 'Python'
                                    let b = 100
                                    console.log(a, b) // Python 100
                                    // چون داخل شرط متغیر جدید با همون نام های متغیر های بالا ایجاد شده با صدا زدن ، نزدیک ترین متغیر رو چاپ میکنه
                                }
                                console.log(a, b) // JavaScript 10
                            // به دوتا متغیر بالا ، داخل تابع دسترسی داریم
                            }
                            letsLearnScope()
                            console.log(a, b) // JavaScript 10
                            // به دوتا متغیر بالا ، خارج از تابع هم دسترسی داریم
                        </code>
                    </pre>
                    <p>
                        <b>
                            با توجه به مثال بالا میشه چنتا نکته رو گفت! اسکوپ جهانی توی مثال بالا ، تعریف متغیر خارج از تابع است ، یعنی هرچیزی که خارج از تابع تعریف کنیم از هرجایی که دلمون بخواد
                            بهش دسترسی داریم ، برای همین از داخل تابع به متغیر های خارج از تابع دسترسی داشتیم ، اما برعکس این مورد درست نیست (یعنی به متغیر های داخل تابع ، خارج از تابع دسترسی نداریم که به اونا میگیم اسکوپ لوکال)
                        </b>
                    </p>
                </div>
            <h2 id="local-scope">مفهوم Local scope</h2>
                <div>
                    <p>
                        در مورد گلوبال اسکوپ ، که فهمیدیم از همه جا میتونیم بهش دسترسی داشته باشیم ، اما توی لوکال اسکوپ ها یا حوزه محلی ، ما فقط به متغیر
                        داخل حوزه خودش دسترسی داریم و خارج از حوزه خودش شناسایی شده نیست (مثلا داخل توابع اگه متغیری ایجاد کنیم ، خارج از تابع بهشون دسترسی نداریم!)
                    </p>
                    <pre>
                        <code>
                            function check () {
                                let a = 13 ;
                                console.log(a) // 13
                                // داخل تابع به متغیر دسترسی داریم
                            }
                            console.log(a) // undefined
                            // خارج از تابع به متغیر دسترسی نداریم
                        </code>
                    </pre>
                    <p>
                        حالا فقط داخل تابع ها اینجوریه؟ صد در صد نه! داخل هر بلاکی متغیر ایجاد کنیم از خارج از اون بلاک بهش دسترسی نداریم (بلاک چیه؟ هر چیزی که آکولاد باز و بسته داره ، به داخلش بلاک میگن؛ یعنی دستور if ، for  و ... همشون بلاک به حساب میان و داخل هرکدومشون متغیر ایجاد کنید ، خارج از بلاکشون به متغیرتون دسترسی ندارید) :
                    </p>
                    <pre>
                        <code>
                            if (true) {
                                let a = 13 ;
                                console.log(a) // 13
                                // داخل شرط به متغیر دسترسی داریم
                            }
                            console.log(a) // undefined
                            // خارج از شرط به متغیر دسترسی نداریم


                            {
                                let gg = 85
                                console.log(gg) //85
                            }
                            console.log(gg) //undefined

                            /*
                            حتی مثال بالا هم یه بلاک حساب میاد ، شاید دطتوری نداشته باشه ولی آکولاد باز و بسته داره ، پس اگه چیزی توش تعریف بشه
                            خارج از اون بهش دسترسی نداریم
                            */
                        </code>
                    </pre>
                    <p>
                        <b>
                            ممکنه تا الان متوجه شده باشید چجوری اسکوپ بندی میکنیم ، اما من بازم میگم! اگه توجه کنید هرچیزی که ما با آکولاد باز و بسته میکنیم و برای زیبایی هم
                            کد هارو با فرورفتگی (برامدگی یا هرچیزی که اسمشو میزارید) مینویسم ، درسته که فضای خالی توی برنامه نویسی اهمیت نداره و واقعا این تو رفتگیا دکوری ان ، اما برای ما علاوه بر زیبایی
                            مشخص کننده اسکوپ ها هم هستن! پس برای شناسایی اسکوپ ها اولین گام نگاه کردن به آکولاد ها و تو رفتگی هاست که کمک میکنه بلاک هارو شناسایی کنید و دومین چیز هم توابع است که با آکولاد یا بی آکولاد در هر صورت چیزی داخلشون تعریف کنید محلی به حساب میان!(حالا میتونید برید
                            <a href="Day1.php#variables">روز اول قسمت متغیر</a>
                            هارو دوباره بخونید و فرق بین let و var رو بهتر متوجه بشید!)
                            <br>
                            ولی اگه حال ندارید اونا کامل بخونید من بازم اینجا میگم ، متغیری که با let ایجاد میشه فقط تو اسکوپ خودش قابل دسترسه ، اما متغیری که با var تعریف میشه حتی داخل بلاک هم از خارج قابل دسترسه و
                            به گونه ایی کلا اسکوپ هارو به مسخره گرفته!برای همین بهتره ازش استفاده نکنید.
                        </b>
                    </p>
                    <pre>
                        <code>
                            // use var
                            if (true){
                                var gravity = 9.81
                                console.log(gravity) // 9.81
                            }
                            console.log(gravity)  // 9.81
                            // 🙃 خارج از بلاک هم به متغیر دسترسی دارید

                            for(var i = 0; i < 3; i++){
                                console.log(i) // 0, 1, 2
                            }
                            console.log(i) // 3
                            // 🤪 خارج از بلاک حلقه هم بهش دسترسی دارید ، حتی وقتی داخل شرط خود حلقه تعریف شده

                            // توجه کنید اگه داخل تابع تعریف بشه از خارج از تابع قابل دسترسی نیست
                            function letsLearnScope() {
                                var gravity = 9.81
                                console.log(gravity)
                            }
                            console.log(gravity) // باعث خطا میشه چون خارج از تابع قابل دسترسی نیست
                        </code>
                    </pre>
                    <pre>
                        <code>
                            // use let
                            if (true){
                                let gravity = 9.81
                                console.log(gravity) // 9.81
                            }
                            console.log(gravity)  // Error
                            //  خارج از بلاک  به متغیر دسترسی نداریم

                            for(var i = 0; i < 3; i++){
                                console.log(i) // 0, 1, 2
                            }
                            console.log(i) // Error
                            // خارج از بلاک حلقه هم بهش دسترسی نداریم

                            // توجه کنید این کلمه کلیدی هم اگه داخل تابع تعریف بشه از خارج از تابع قابل دسترسی نیست
                            function letsLearnScope() {
                                var gravity = 9.81
                                console.log(gravity)
                            }
                            console.log(gravity) // باعث خطا میشه چون خارج از تابع قابل دسترسی نیست
                        </code>
                    </pre>
                    <b>
                        const هم با let یکسانه و مثل var خراب کار نیست ، فقط فرقشون باهم در تغییر مقدارشونه که همونطور که میدونید const رو نمیشه عوض کرد ولی let رو میشه!
                    </b>
                </div>
        <h1 id="-object">📔 شی (Object)</h1>
            <div>
                <p>
                    حالا که در مورد اسکوپ ها هم کامل صحبت کردیم میرسیم به بحث شیرینه آبجکت ها یا همون شی خودمون. قبل از تعریف خود آبجکت ها بزارید بگم آبجکت چیه؟! آبجکت هم مثل آرایه ها
                    متغیریه که به جای یه مقدار چنتا مقدار داره. اما فرقش با آرایه اینه که میتونید برای هر مقدار شناسه هم ایجاد کنید. بزارید یه مثال بزنم تا درک کنید.
                    هم من هم شما آبجکتیم 😙 ، منو شما ویژگی ها و متود های مختلفی داریم ، مثلا ویژگیمون میتونه رنگ پوستمون باشه (که من سفید برفی ام) و متودمون میتونه کاری که میکنیم باشه (مثل نوشتن ، خوندن ، خوابیدن و ...) خب اینا اصلا چه ربطی داره؟ ربطش اینجاست که اگه همه این ویژگی هارو داخل آرایه بزاریم
                    قاطی میکنیم کدومشون ویژگیه و کدومشون متودمونه : ['مشکی' , 'مشکی' , 'سفید'] الان با این آرایه هیشکی نمیفهمه چیم سیاه ، چیم سفید!!
                    <br>
                    برای همین نیاز به چیزی داریم که قشنگ مشخص کنه چی سفیده ، چی سیاه و برای همین میتونیم از آبجکت ها استفاده کنیم. توجه کنید که ما میتونیم همه رو جدا جدا توی متغیر های مختلف بنویسیم اما
                    یکپارچه نیستن و بهم دیگه ربط ندارن ، پس بدرد کار ما نمیخوره!
                </p>
                <pre>
                    <code>
                        // متغیر های جدا جدا
                        let mySkin = 'White' ;
                        let myHair = 'Black' ;
                        let myEys = 'Black' ;
                        // الان خیلی خوب مشخصه چی ، چیه اما بهم اصلا ربطی ندارن و متغیر های جدان

                        // به صورت آرایه
                        const myBody = ['White' , 'Black' , 'Black']
                        // این بهم مرتبطه ، اما مشخص نیست چی به چیه

                        // به صورت آبجکت
                        // 😝 نمیگم چجوریه اصلا
                        // ولی پایین میبینید چقدر راحت تره ، هم مرتبط و داخل یه چیز جمع شده ، هم مشخصه چی به چیه
                    </code>
                </pre>
            </div>
            <h2 id="creating-an-empty-object">ساخت یک آبجکت خالی</h2>
                <div>
                    <p>
                        اولین گام برای یادگیری آبجکت ساختشه ، و اول میخوایم به آبجکت خالی بسازیم ، مثل قبل که متغیر خالی یا آرایه خالی ساختیم.
                        برای ساخت آبجکت هم مثل آرایه بهتره از const استفاده کنیم و بعد جلوی متغیرمون به جای براکت از آکولاد استفاده کنیممم! و یادتون باشه این آکولاد هم بلاک به حساب میاد اما چون به یه متغیر نسبت داده میشه میتونه بیرون از بلاکش بهش دسترسی داشت!
                    </p>
                    <pre>
                        <code>
                            const myObject = {} // یه آبجکت خوشگل ساختیم که فعلا خالیه
                            console.log(myObject) // Print : {}
                        </code>
                    </pre>
                </div>
            <h2 id="creating-an-objecting-with-values">ساخت آبجکت با مقدار</h2>
                <div>
                    <p>
                        یه آبجکت خالی که به دردمون نمیخوره بلخره باید پرش کنیم! و برای پر کردن باید برای هر مقداری که مد نظرمونه یه شناسه (کلید - key) بسازیم و با همین کلیدا میفهمیم چی به چیه!
                        پس ما برای ساخت آبجکت اول باید آکولادو باز کنیم بعد یه شناسه یا کلید بنویسم ، بعد جلوش (:) بزاریم و در نهایت مقدارشو بنویسم و اگه ویژگی جدید خواستیم اضافه کنیم
                        از (,) استفاده میکنیم و همین مسیرو دوباره تکرار میکنیم! حالا هم عملی این زیر ببنید :
                    </p>
                    <pre>
                        <code>
                            // Object
                            const body = {
                                mySkin : 'White' ,
                                myHair : 'Black' ,
                                myEys : 'Black'
                            }
                            console.log(body) // {mySkin: 'White', myHair: 'Black', myEys: 'Black'}

                            // میبنید الان هم یکپارچه است ، هم به همدیگه مرتبط
                            // 🙄 آبجکت ها مثل آرایه ها میتونن نوع داده مختلف بگیرن ، همچنین میتونن داخل خودشون آرایه هم بگیرن
                            const person = {
                                firstName: 'Amir' ,
                                lastName: 'Roox' ,
                                age: 21 ,
                                country: 'Iran' ,
                                isSingle: true ,
                                skills: [
                                    'HTML',
                                    'CSS',
                                    'JavaScript',
                                    'React',
                                    'Node',
                                    'MongoDB',
                                    'Python',
                                    'PHP'
                                ]
                            }
                        </code>
                    </pre>
                </div>
            <h2 id="getting-values-from-an-object">گرفتن مقادیر یک آبجکت</h2>
                <div>
                    <p>
                        حالا که یاد گرفتیم چجوری آبجکت بسازیم باید بدونیم چجوری میتونیم مقادیر این آبجکت قشنگمونو بدست بیاریم. توی آرایه ها که خیلی راحت براکت رو باز میکردیم و ایندکس رو وارد میکردیم توی آبجکت ها هم دوتا راه داریم :
                    </p>
                    <ol>
                        <li>روش اول استفاده از اسم آبجکت + . + کلید</li>
                        <li>روش دوم استفاده از براکت و نوشتن کلید داخل اونه</li>
                    </ol>
                    <pre>
                        <code>
                            const body = {
                                mySkin : 'White' ,
                                myHair : 'Black' ,
                                myEys : 'Black'
                            }

                            // روش اول استفاده از اسم آبجکت + . + کلید
                            console.log(body.mySkin) // Print : 'White'
                            console.log(body.myHair) // Print : 'Black'
                            console.log(body.myEys) // Print : 'Black'

                            // روش دوم استفاده از برکات و نوشتن کلید داخل براکت
                            console.log(body['mySkin']) // Print : 'White'
                            console.log(body['myHair']) // Print : 'Black'
                            console.log(body['myEys']) // Print : 'Black'
                        </code>
                    </pre>
                </div>
            <h2 id="creating-object-methods">ساخت متود و استفاده از متود های آبجکت</h2>
                <div>
                    <b>
                        ما میتونیم توی آرایه ها و آبجکت ها از تابع هم استفاده کنیم (توی آرایه کمتر استفاده میشه) ، متغیر ها در داخل آبجکتها رو میگیم ویژگی اون شی و
                        تابع های داخل هر آبجکت رو میگیم متود یا خصوصیت اون شی ، این زیر یه آبجکت با تابع تعریف کردیم :
                    </b>
                    <pre>
                        <code>
                            const person = {
                                firstName: 'Amir' ,
                                lastName: 'Roox' ,
                                age: 21 ,
                                country: 'Iran' ,
                                isSingle: true ,
                                skills: [
                                    'HTML',
                                    'CSS',
                                    'JavaScript',
                                    'React',
                                    'Node',
                                    'MongoDB',
                                    'Python',
                                    'PHP'
                                ],
                                getFullName : function() {
                                    return this.firstName + ' ' + this.lastName
                                }
                            }
                        </code>
                    </pre>
                    <p>
                        تعریف تابع (تابع ناشناس) رو که از قبل بلدید و برای استفاده داخل آبجکت هم که مثل بقیه مقدار ها میشه ازش استفاده کرد (مثال بالا رو دقت کنید) ، ولی ممکنه بپرسید کلمه کلیدی
                        this یعنی چی؟ this به معنی "این" میشه و توی اینجا هم دقیقا به همین معنی "این" کار داریم! در واقع وقتی میگیم this یعنی همین آبجکتی که توش هستی و بعد با (.) یه یکی از کلیداش اشاره میکنی اینجوری از داخل همون آبجکت مقدار همون کلید رو برمیگردونه! این تا اینجا؛ حالا چجوری میتونیم از تابع آبجکتمون استفاده کنیم؟ خیلی راحت مثل زیر :
                    </p>
                    <pre>
                        <code>
                            console.log(person.getFullName()) // Print : 'Amir Roox'

                            // همچنین یادتون باشه میتونید با آرگومان و هر مدلی که خواستید تابع رو تعریف کنید
                        </code>
                    </pre>
                </div>
            <h2 id="setting-new-key-for-an-object">اضافه کردن کلید جدید به آبجکت</h2>
                <div>
                    <p>
                        آبجکت ها هم مث آرایه ها مقدارشونو میشه عوض کرد و ثابت نیستن ، یعنی میتونید بعد از تعریف آبجکتتون بهش کلید اضافه کنید یا کلید های قبلی
                        رو ویرایش کنید :
                    </p>
                    <pre>
                        <code>
                            const person = {
                                firstName: 'Amir' ,
                                lastName: 'Roox' ,
                                age: 21 ,
                                country: 'Iran' ,
                                isSingle: true ,
                                skills: [
                                    'HTML',
                                    'CSS',
                                    'JavaScript',
                                    'React',
                                    'Node',
                                    'MongoDB',
                                    'Python',
                                    'PHP'
                                ],
                                getFullName : function() {
                                    return this.firstName + ' ' + this.lastName
                                }
                            }

                            // اضافه کردن کلید جدید
                            person.title = 'Programmer'

                            // ویرایش مقدار یک کلید
                            person.isSingle = false
                            person.skills.push('Git')
                            // میتونیم به صورت پله ایی از توابع پشت سر هم استفاده کنیم و چون آرایه بود از پوش استفاده کردیم
                            // یکم ترکیب ببیند عشق کنید

                            // حتی میتونید یه تابع جدید به آبجکتتون اضافه کنید
                            person.getFull = function() {
                                return `${this.getFullName()} ${this.age}`
                            }

                            console.log(person.getFull()) // Print : Amir Roox 21
                        </code>
                    </pre>
                </div>
            <h2 id="object-methods">توابع مربوط به آبجکت ها</h2>
                <div>
                    <p>
                        حالا که قشنگ متوجه ساختار و استفاده از آبجکت ها شدیم بیاید چنتا تابع و متود مربوط به آبجکت ها رو بررسی کنیم شاید دوست داشتید!
                        <br>
                        یه تابع داریم به نام Object.assign که این تابع شی شما رو کپی میکنه ، مثلا یه شی دارید دلتون میخواد دوتاش کنید و روی دومی ویرایش انجام بدید
                        با این تابع میتونید این کارو بکنید و آبجکت اصلیتون تغییری نکنه :
                    </p>
                    <pre>
                        <code>
                            //syntax
                            Object.assign(آبجکت های دیگه ایی که میخواید اضافه کنید , آبجکتی که میخواید کپی کنید);
                        </code>
                    </pre>
                    <pre>
                        <code>
                            const target = { a: 1, b: 2 };
                            const copyTarget = Object.assign(target)
                            console.log(copyTarget) // Print : { a: 1, b: 2 }

                            // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

                            const target = { a: 1, b: 2 };
                            const copyTarget = Object.assign({}, target)
                            console.log(copyTarget) // Print : { a: 1, b: 2 }

                            /*
                            توی مثال بالا ما آرگومان اول رو یه آبجکت خالی دادیم و آرگومان دوم رو متغیرمون
                            اینا به هم وصل میشن و در نهایت توی یه متغیر دیگه ذخیره میشن
                            */

                            // - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

                            const target = { a: 1, b: 2 };
                            const source = { b: 4, c: 5 };

                            const returnedTarget = Object.assign(target, source);

                            /*
                            توی مثال بالا متغیر تارگت با سورس جمع میشه و اشتراک هاشون روی هم نوشته میشن
                            یعنی ما آبجکت زیر رو اول داریم
                            { a: 1, b: 2 }
                            بعد آبجکت بالا رو با آبجکت پایین بهم وصل میکنیم
                            { b: 4, c: 5 }
                            جمعشون میشه این پایینی
                            { a: 1, b: 2, b: 4, c: 5}
                            حالا کلید های یکسان رو در نظر میگیریم و اونی که دیر تر وارد شده رو جایگزین میکنیم
                            { a: 1, b: 4, c: 5}
                            در نهایت میشه آبجکت بالا
                            */

                            console.log(target);  // Print : Object { a: 1, b: 4, c: 5 }
                            console.log(source);  // Print : Object { b: 4, c: 5 }
                            console.log(returnedTarget);  // Print : Object { a: 1, b: 4, c: 5 }
                        </code>
                    </pre>
                </div>
                <h3 id="getting-object-keys-using-object-keys">دریافت کلید های آبجکت با Object.keys</h3>
                    <div>
                        <p>
                            ما یه تابع داریم که کارش خیلی آسونه و وقتی صداش کنیم تمامی کلیدهایی که برای آبجکتمون در نظر گرفتیم رو به صورت آرایه برامون بر میگردونه :
                        </p>
                        <pre>
                            <code>
                                const person = {
                                    firstName: 'Amir' ,
                                    lastName: 'Roox' ,
                                    age: 21 ,
                                    country: 'Iran' ,
                                    isSingle: true ,
                                    skills: [
                                        'HTML',
                                        'CSS',
                                        'JavaScript',
                                        'React',
                                        'Node',
                                        'MongoDB',
                                        'Python',
                                        'PHP'
                                    ],
                                    getFullName : function() {
                                        return this.firstName + ' ' + this.lastName
                                    }
                                }

                                const keys = Object.keys(copyPerson)
                                console.log(keys) //['firstName', 'lastName', 'age', 'country','isSingle', 'skills', 'getFullName']
                            </code>
                        </pre>
                        <b>
                            یادتون باشه که داخل شی میتونید از هر نوع داده ایی استفاده کنید (داخل آرایه هم میتونید از شی استفاده کنید) ، هم آرایه ، هم انواع داده ها و هم خود شی :
                        </b>
                        <pre>
                            <code>
                                const person = {
                                    firstName: 'Amir',
                                    age: 2500,
                                    country: 'Iran',
                                    city:'Rasht',
                                    skills: ['HTML', 'CSS', 'JS'],
                                    title: 'Programmer',
                                    address: {
                                        street: 'آزادی',
                                        alley: 'انقلاب نزدیک است'
                                    }
                                }

                                console.log(person.address.street) // Print : آزادی
                            </code>
                        </pre>
                    </div>
                <h3 id="getting-object-values-using-object-values">دریافت مقادیر آبجکت با Object.values</h3>
                    <div>
                        <p>
                            ما تونستیم تمام کلید هارو دریافت کنیم اما تموم نشده!! ما میتونیم مقادیر رو هم به صورت آرایه/آبجکت (اگه داخل آبجکتمون آرایه نباشه ، میشه آرایه اگه باشه میشه آبجکت) دریافت کنیم (یه روش میتونه برای تبدیل آبجکت به آرایه هم باشه) :
                        </p>
                        <pre>
                            <code>
                                const person = {
                                    firstName: 'Amir',
                                    age: 2500,
                                    country: 'Iran',
                                    city:'Rasht',
                                    skills: ['HTML', 'CSS', 'JS'],
                                    title: 'Programmer',
                                    address: {
                                        street: 'آزادی',
                                        alley: 'انقلاب نزدیک است'
                                    }
                                }
                                const values = Object.values(person)
                                console.log(values)
                                // ['Amir', 2500, 'Iran', 'Rasht', Array(3), 'Programmer', {…}]
                            </code>
                        </pre>
                    </div>
                <h3 id="getting-object-keys-and-values-using-object-entries">دریافت کلید ها و مقادیر آبجکت با Object.entries</h3>
                    <div>
                        <p>
                            یه تابع کمکی دیگه هم داریم ، که هم کلید و هم مقادیرو باهم بهتون برمیگردونه :
                        </p>
                        <pre>
                            <code>
                                const person = {
                                    firstName: 'Amir',
                                    age: 2500,
                                    country: 'Iran',
                                    city:'Rasht',
                                    skills: ['HTML', 'CSS', 'JS'],
                                    title: 'Programmer',
                                    address: {
                                        street: 'آزادی',
                                        alley: 'انقلاب نزدیک است'
                                    }
                                }
                                const values = Object.entries(person)
                                console.log(values)
                                /*
                                [Array(2), Array(2), Array(2), Array(2), Array(2), Array(2), Array(2)]
                                ['firstName', 'Amir']
                                ['age', 2500]
                                ['city', 'Rasht']
                                ['skills', Array(3)]
                                ['title', 'Programmer']
                                ['address', {…}]
                                */
                            </code>
                        </pre>
                    </div>
                <h3 id="checking-properties-using-has-own-property">چک کردن وجود یک کلید در آبجکت با hasOwnProperty</h3>
                    <div>
                        <p>
                            یه تابع کاربردی دیگه هم داریم برای زمانی که شی رو از جای دیگه دریافت میکنیم و میخوایم چک کنیم فلان کلید توش هست یا نه (فقط درست یا غلط برمیگردونه) :
                        </p>
                        <pre>
                            <code>
                                const person = {
                                    firstName: 'Amir',
                                    age: 2500,
                                    country: 'Iran',
                                    city:'Rasht',
                                    skills: ['HTML', 'CSS', 'JS'],
                                    title: 'Programmer',
                                    address: {
                                        street: 'آزادی',
                                        alley: 'انقلاب نزدیک است'
                                    }
                                }
                                console.log(person.hasOwnProperty('name')) // Print : false
                                console.log(person.hasOwnProperty('age')) // Print : true
                            </code>
                        </pre>
                        <p>
                            خب خب خب ، امروزم تموم شد و یکی از انواع مهم داده توی جاوا اسکریپت رو یاد گرفتید حتما امروز رو خیلی خوب یاد بگیرید و تمرین کنید
                            و در آخرم تمرینایی که براتون گذاشتمو حل کنید و عشق نماییددد.
                        </p>
                    </div>
        <h1 id="-exercises">💻 تمرینات</h1>
            <h2 id="exercises-level-1">تمرین: سطح 1</h2>
                <div>
                    <ol>
                        <li>یه شی خالی به نام خر (انگلیسی البته) درست کنید 🤭</li>
                        <li>همون شی خالی رو توی کنسول و alert نمایش بدید</li>
                        <li>حالا به این خرتون ویژگی اضافه کنید (طول(طوله بدن منظورمه نه چیز دیگه!) ، رنگ پوست ، جنسیت ، سن و و و)</li>
                        <li>حالا به صورت دونه دونه مقادیر رو دریافت کنید و توی کنسول نمایش بدید</li>
                        <li>حالا به این خر زیباتون چنتا ویژگی جدید اضافه کنید</li>
                    </ol>
                </div>
            <h2 id="exercises-level-2">تمرین: سطح 2</h2>
                <div>
                    <ol>
                        <li>توی اینترنت در مورد شی و شی گرایی یکم تحیقیق کنید</li>
                        <li>
                            با استفاده از دستوراتی که تا الان یاد گرفتید از کد زیر فقط کسایی رو نمایش بدید که point = 50 دارن
                            <pre>
                                <code>
                                    const users = {
                                      Alex: {
                                        email: 'alex@alex.com',
                                        skills: ['HTML', 'CSS', 'JavaScript'],
                                        age: 20,
                                        isLoggedIn: false,
                                        points: 30
                                      },
                                      Amir: {
                                        email: 'amirroox@yahoo.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'Redux', 'MongoDB', 'Express', 'React', 'Node'],
                                        age: 21,
                                        isLoggedIn: true,
                                        points: 50000
                                      },
                                      Brook: {
                                        email: 'daniel@daniel.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'React', 'Redux'],
                                        age: 30,
                                        isLoggedIn: true,
                                        points: 50
                                      },
                                      Daniel: {
                                        email: 'daniel@alex.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'Python'],
                                        age: 20,
                                        isLoggedIn: false,
                                        points: 40
                                      },
                                      John: {
                                        email: 'john@john.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'React', 'Redux', 'Node.js'],
                                        age: 20,
                                        isLoggedIn: true,
                                        points: 50
                                      },
                                      Thomas: {
                                        email: 'thomas@thomas.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'React'],
                                        age: 20,
                                        isLoggedIn: false,
                                        points: 40
                                      },
                                      Paul: {
                                        email: 'paul@paul.com',
                                        skills: ['HTML', 'CSS', 'JavaScript', 'MongoDB', 'Express', 'React', 'Node'],
                                        age: 20,
                                        isLoggedIn: false,
                                        points: 40
                                      }
                                    }
                                </code>
                            </pre>
                        </li>
                        <li>توی همون اطلاعات بالا کسایی رو چاپ کنید که داخل skill شون Redux رو دارن</li>
                        <li>یه کپی از شی اصلی بگیرد و توی کپی اسم خودتون و مشخصات رو وارد کنید</li>
                        <li>حالا تمام کلید هارو روی کنسول چاپ کنید (میشه اسم تمام یوزر ها که باید اسم خودتنم توش باشه)</li>
                    </ol>
                </div>
            <h2 id="exercises-level-3">تمرین: سطح 3</h2>
                <div>
                    <b>
                        یه تمرین خیلی مهم براتون دارم و اونم اینه که برید توی این
                        <a href="https://developer.mozilla.org/en-US/docs/Web/JavaScript" target="_blank">سایت</a>
                        و سعی کنید تمرین ها و مراحل آموزش رو بخونید
                        اگه انگلیسی بلد نیستید از گوگل ترنسلیت استفاده کنید چون منبع دیگه ایی نمیدم
                        این منبع خودش کاملههه.
                    </b>
                </div>
</article>
<!-- End Article -->

<!-- Start Previous and Next Days -->
<div class="container Pre_Nex mg2b">
    <div class="row">
        <a href="<?= 'day' . $test[1]?>" class="col-xs-5 col-md-2">
            &rarr;
            روز بعدی (
            <?= $test[1] ?>
            )
        </a>
        <div class="col-xs-2 col-md-8"></div>
        <a href="<?= 'day' . $test[0]?>" class="col-xs-5 col-md-2">
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

<!-- File Need It Code -->
<script src="<?= MAIN_SERVER . 'public/30Days/javascript/assets/FileNeedIt.js'?>"></script>

<!-- Scroll Function -->
<script src="<?= MAIN_SERVER . 'public/30Days/javascript/assets/script.js'?>"></script>
<!-- END MAIN SCRIPT-->
</body>
</html>