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
        <br>
        &gt;&gt;
        بولین ها و عملگر ها - تاریخ
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
        <li><a href="#-day-3">روز سوم</a>
            <ul>
                <li><a href="#booleans">بولین ها (Booleans)</a>
                    <ul>
                        <li><a href="#truthy-values">مقادیر صحیح (Truthy values)</a></li>
                        <li><a href="#falsy-values">مقادیر غلط (Falsy values)</a></li>
                    </ul>
                </li>
                <li><a href="#undefined">تعریف نشده (Undefined)</a></li>
                <li><a href="#null">خالی (Null)</a></li>
                <li><a href="#operators">عملگر ها (Operators)</a>
                    <ul>
                        <li><a href="#assignment-operators">عملگر انتساب (Assignment operators)</a></li>
                        <li><a href="#arithmetic-operators">عملگر های ریاضی (Arithmetic Operators)</a></li>
                        <li><a href="#comparison-operators">عملگر های مقایسه ایی (Comparison Operators)</a></li>
                        <li><a href="#logical-operators">عملگر های منطقی (Logical Operators)</a></li>
                        <li><a href="#increment-operator">عملگر افزایشی (Increment Operator)</a></li>
                        <li><a href="#decrement-operator">عملگر کاهشی (Decrement Operator)</a></li>
                        <li><a href="#ternary-operators">عملگر 3 تایی یا 3 گانه (Ternary Operators)</a></li>
                        <li><a href="#operator-precedence">الویت عملگر ها (Operator Precedence)</a></li>
                    </ul>
                </li>
                <li><a href="#window-methods">توابع ویندو (Window Methods)</a>
                    <ul>
                        <li><a href="#window-alert-method">تابع ()alert</a></li>
                        <li><a href="#window-prompt-method">تابع ()prompt</a></li>
                        <li><a href="#window-confirm-method">تابع ()confirm</a></li>
                    </ul>
                </li>
                <li><a href="#date-object">شی تاریخ (Date Object)</a>
                    <ul>
                        <li><a href="#creating-a-time-object">ساخت شی زمان</a></li>
                        <li><a href="#getting-full-year">دریافت سال</a></li>
                        <li><a href="#getting-month">دریافت ماه</a></li>
                        <li><a href="#getting-date">دریافت تاریخ</a></li>
                        <li><a href="#getting-day">دریافت روز</a></li>
                        <li><a href="#getting-hours">دریافت ساعت</a></li>
                        <li><a href="#getting-minutes">دریافت دقیقه</a></li>
                        <li><a href="#getting-seconds">دریافت ثانیه</a></li>
                        <li><a href="#getting-time">دریاقت زمان</a></li>
                    </ul>
                </li>
                <li><a href="#-day-3-exercises">تمرینات روز سوم</a>
                    <ul>
                        <li><a href="#exercises-level-1">تمرین: سطح 1</a></li>
                        <li><a href="#exercises-level-2">تمرین: سطح 2</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- End List -->

<!-- Start Article -->
<article class="container">
    <h1 id="-day-3">روز سوم</h1>
        <h1 id="booleans">بولین ها (Booleans)</h1>
            <div>
                <p>
                    قبلا با همدیگه در مورد انواع داده صحبت کردیم (من فرض میکنم صحبت کردیم ، وگرنه خودم میدونم فقط من دارم میگم!) و یکی از انواع داده بولین ها بودند ،
                    بولین ها فقط مقدار درست (true) و نادرست (false) رو برمیگردونن ، یعنی اگه ازشون بپرسی آیا آمریکا کشور بدی است ؟ در جواب میگن آره یا نه (متاسفانه آمریکا ندیدم پس جواب نمیدم!)
                </p>
                <pre>
                    <code>
                            let isLightOn = true
                            let isRaining = false
                            let isHungry = false
                            let isMarried = true
                            let truValue = 4 > 3    // true
                            // اگر در مقدار دهی به متغیر ها از عملگرهای مقایسه ایی استفاده کنیم
                            // جواب مقایسه در متغیر ذخیره میشود
                    </code>
                </pre>
            </div>
            <h2 id="truthy-values">مقادیر صحیح (Truthy values)</h2>
                <div>
                    <p>بیاین بررسی کنیم چه چیزایی جواب true بر میگردونه!</p>
                    <ol>
                       <li>تمام اعداد مثبت و منفی بجز 0 برابر با true هستند </li>
                       <li>تمام رشته ها به جز رشته خالی ('') برابر با true هستند</li>
                       <li>و خود مقدار true هم جزو مقادیر صحیحیه!</li>
                    </ol>
                </div>
            <h2 id="falsy-values">مقادیر غلط (Falsy values)</h2>
                <div>
                    <p>حالا که مقادیر درست رو بررسی کردیم ، میرسیم به مقادیری که False بر میگردونن</p>
                    <ol>
                        <li>همونطور که بالاتر گفتیم عدد 0 false بر میگردونه</li>
                        <li>نوع داده null و undefined هم جزو اونایین که false بر میگردونن</li>
                        <li>NaN هم که قبلا گفتیم یعنی عدد نیست و این هم false میده بهمون</li>
                        <li>رشته های خالی چه داخل تک کوتیشن باشن چه داخل دابل کوتیشن و بک کوتیشن ، در هر صورت false بر میگردونن</li>
                        <li>و همچنین خود مقدار False هم جزو مقادیر غلطه!</li>
                        <li>
                            <ul>
                                0n هم جزو مقادیریه که false بر میگردونه
                                <li style="text-align: justify;overflow: hidden">
                                    <b>
                                         قبلا با انواع داده ها آشنا شدید و گفتم غیر از اون داده ها ، داده های دیگه ایی هم وجود داره ، یکی از اونا نوع داده "BigInt" هست ؛ این نوع داده هم مثل نوع داده
                                        عددی (number) میمونه ولی برای اعداد خیلی بزرگ استفاده میشه مثل عدد عجق وجقی مثل 23612356235223423423423423423635625356263526 که خیلی بزرگه(نوع داده number تا یه حدی میتونه اعداد رو هندل کنه)
                                        ، من نمیخوام در مورد این نوع داده حرف بزنم چون کم استفاده میشه ولی اگه دوست داشتید یه سرچی بزنید و اطلاعاتتونو بیشتر کنید؛
                                        همینطور که 0n غلط بر میگردونه 1n درست بر میگردونه (جلوی هر عددی یدونه n بزاری تبدیلش میکنی به بیگ اینت!)
                                    </b>
                                </li>
                            </ul>
                        </li>
                    </ol>
                </div>
                <div>
                    <p>
                        یه تابع داریم به نام ()Boolean که کار این تابع اینه که چیزی که بهش پاس میدید رو بررسی کنه ببینه درسته یا نه (یعنی برای تست موارد بالا میتونیم ازش استفاده کنیم)
                    </p>
                    <pre>
                        <code>
                            // بیاین ببینیم چجوری اعداد و رشته ها درست یا غلطن
                            Boolean(6 > 8)          // Print False
                            Boolean(13 > 8)         // Print True
                            Boolean(0)              // Print False
                            Boolean(13)             // Print True
                            Boolean('')             // Print False
                            Boolean('Amir')         // Print False
                            Boolean(``)             // Print False
                            Boolean(NaN)            // Print False
                            Boolean(undefined)      // Print False
                            Boolean(0)              // Print False
                            Boolean(0n)             // Print False
                            Boolean(01)             // Print True

                            // تابع بالا رو خودتونم چک کنید ، متوجه میشید که این تابع خروجیش بولینه و فقط درست یا نادرست برمیگردونه
                            // با تابع بالا میتونیم متوجه بشیم یه دستور یا هرچیزی درست هست یا ن!
                        </code>
                    </pre>
                    <p>اینارو برای دکور نگفتما ، اینا مهمن پس به خاطر داشته باشید ، چون بعدا از درست و غلط برای دستورات شرطی و خیلی موارد دیگه استفاده میکنیم!</p>
                </div>
        <h1 id="undefined">تعریف نشده (Undefined)</h1>
            <div>
                <p>
                    بعضی از بخش هارو شما قبلا خوندید و اینجا گذاشتم که روزانه مرور کنید عزیزان من ! همونطور که قبلا گفتیم این نوع داده برای متغیریه که بهش مقدار ندادیم
                    یا تابعی که مقدار بازگشتی نداره (یعنی چیزی برنگردونه!)
                </p>
                <pre>
                    <code>
                        let name ;
                        console.log(name) ;     // Undefined
                        Boolean() ;             //Undefined
                    </code>
                </pre>
            </div>
        <h1 id="null">خالی (Null)</h1>
            <div>
                <p>
                    null هم نوع داده ایی که هیچی توش نباشه ، یعنی هیچی هیچی توش نباشه (عدد 0 یا رشته خالی "" جزو null نیستن!)
                </p>
                <pre>
                    <code>
                        let empty = null
                        console.log(empty) // -> null
                    </code>
                </pre>
            </div>
        <h1 id="operators">عملگر ها (Operators)</h1>
            <div>
                <p>
                    رسیدیم به بحث زیبای عملگر ها ، قبل از تعریف عملگر ها بزارید تعریف خود عملگر رو بدونیم ؛ وقتی میگیم 4 + 2 به علامت + میگیم عملگر و به اعداد 2 و 4 میگیم عملوند
                    ، عملوند همون متغیرامون برای محاسباته و عملگر هم خود همون محاسبات رو برامون انجام میده.
                    توجه کنید که عملگر ها فقط علامت های ریاضی نیستند و این پایین با همشون آشنا میشیم :
                </p>
            </div>
            <h2 id="assignment-operators">عملگر انتساب (Assignment operators)</h2>
                <div>
                    <p>
                        تا اینجا خیلی از علامت = استفاده کردیم ، این علامت هم یک عملگره و مقدار سمت راست رو به مقدار سمت چپ ارسال میکنه (یا بهتره بگیم مقدار سمت راست رو به مقدار سمت چپ نسبت میده) ، به این علامت میگن عملگر انتساب
                        و کارشم که دیگه توضیح دادم چیه!
                        <br>
                        به صورت ساده این عملگر برای اختصاص مقدار به متغیر بکار میره.
                    </p>
                    <pre>
                        <code>
                            let firstName = 'Amir'
                            let country = 'Iran'
                        </code>
                    </pre>
                    <p>
                        صبر کنیدددد! تموم نشده ، عملگر انتساب فقط = نیست و عملگر های دیگه ایی هم داریم که کارشون اختصاص دادن مقدار به متغیره و براتون این زیر بقیشونم اوردم :)
                    </p>
                    <div class="xs-hidden" style="text-align: center">
                        <img class="img-responsive" src="img/Assignment_operators.png" alt="Assignment_operators">
                    </div>
                    <pre class="s-hidden">
                        <code>
                            =   -> let number   = 12            // number = 12
                            +=  -> 	   number  += 15			// number = number  + 15  (Sum)
                            -=  -> 	   number  -= 13			// number = number  - 13  (Minus)
                            *=  -> 	   number  *= 2				// number = number  * 15  (Multi)
                            /=  -> 	   number  /= 3				// number = number  / 13  (Devide)
                            %=  -> 	   number  %= 5				// number = number  % 13  (Mod)
                            **= -> 	   number **= 2				// number = number ** 13  (Power)
                        </code>
                    </pre>
                    <pre style="text-align: right;direction: rtl;" class="line-numbers_none">
                        <code class="language-text">
                            با توجه به مثال بالا یه توضیحی در موردشون اینجا میدم! فقط قبل از توضیح یه عملگر ** وجود داره که به معنی توان ریاضی است
                            توی عملگرهای انتسابی بالا ، کارمون یخوره راحت تر شده ، مثلا ما یه متغیر داریم به نام number که مقدارشو برابر با 12 کردیم.
                            حالا اگه ما بخوایم به این مقدار 15 تا اضافه کنیم (و توی همون متغیر number ذخیره بشه) دو تا روش داریم ،
                             یکیش دستور  number = number + 15 که یخورده زیاده ولی روش دوم استفاده از number += 15 که هم کمتره هم همون کارو میکنه.
                            برنامه نویسا از نوشتن کد های طولانی و تکراری خوششون نمیاد برای همین همه (یا اکثرشون) از روش دوم استفاده میکنن.
                            بقیه دستورات هم دقیقا مثل همین جمع عمل میکنن فقط عملگرشون فرق داره.

                        </code>
                    </pre>
                </div>
            <h2 id="arithmetic-operators">عملگر های ریاضی (Arithmetic Operators)</h2>
                <div>
                    <p>
                        بالا در مورد عملگرهای انتسابی صحبت کردیم و قبلا هم در مورد عملگر های ریاضی یه چیزایی دیدیم ، اینجا یکم جزئی تر بهشون نگاه میکنیم :
                    </p>
                    <ol>
                        <li>عملگر + : همون کار جمع کردنو انجام میده</li>
                        <li>عملگر - : کار تفریق کردنمونو راحت میکنه</li>
                        <li>عملگر * : میتونیم باهاش ضرب کنیم</li>
                        <li>عملگر / : میتونیم باهاش تقسیم کنیم</li>
                        <li>عملگر % : باقی مونده تقسیم دو تا عدد رو بهمون میده</li>
                        <li>عملگر ** : عدد اول رو به توان دومی میرسونه</li>
                    </ol>
                    <pre>
                        <code>
                            let numOne = 4
                            let numTwo = 3
                            let sum = numOne + numTwo   // دیگه راحته جمع دو عدد که میشه 7
                            let diff = numOne - numTwo  // منهاشم که بلدید میشه 1
                            let multi = numOne * numTwo  // ضربشونم که میشه 12
                            let div = numOne / numTwo   // تقسیمشون میشه 1.33333 که رند میکنیم میشه 1.33
                            let remainder = numOne % numTwo  // 4 تقسیم بر 3 یدونه باقی مونده بهمون میده
                            let powerOf = numOne ** numTwo  // عدد 4 به توان 3 هم که میشه (بزارید حساب کنم ، اها میشه 64)

                            console.log(sum, diff, multi, div, remainder, powerOf) // 7,1,12,1.33,1, 64
                        </code>
                    </pre>
                    <pre>
                        <code>
                            // میتونید از این عملگرا با هم دیگه استفاده کنید و یادتون باشه اینجا هم برای الویت ها میتونید از پرانتز کمک بگیرید
                            const PI = 3.14 ;
                            let radius = 100 ;

                            const area = PI * (radius * radius) // شعاع ضبدر شعاع ضبدر عدد پی که میشه مساحت

                            console.log(area) // Print 31400
                        </code>
                    </pre>
                </div>
            <h2 id="comparison-operators">عملگر های مقایسه ایی (Comparison Operators)</h2>
                <div>
                    <p>
                        دیگه رسیدم به عمگلر های مقایسه ایی که قبلا یکیشو (==) گفته بودیم ، اینجا میخوایم با بقیشون آشنا بشیم که البته بیشترشونو از قبل تو مدرسه یاد گرفتید!
                    </p>
                    <pre style="text-align: right;direction: rtl;" class="line-numbers_none">
                        <code class="language-text">
                            == : معنی برابری رو میده - مثال : 5 == 6 : جواب میشه false اما 6 == 6 میشه true
                            === : همون معنی برابری رو میده اما نوع داده دو طرف رو هم محاسبه میکنه - مثال : "6" == 6 : جواب میشه false اما 6 === 6 میشه true
                            =! : معنی نا برابری رو میده ، یعنی مقدار دو سمت باهم برابر نباشن - مثال : 5 =! 6 : جواب میشه true
                            ==! : همون معنی نابرابری رو میده اما نوع داده دو طرف رو هم محاسبه میکنه - مثال : "6" ==! 6 : جواب میشه true اما 6 ==! 6 میشه false
                            < و > : معنی کوچک تر و بزرگ تر رو میده - مثال : 5 > 6 : جواب میشه false اما 6 > 1 میشه true
                            =< و => : معنی کوچک تر مساوی و بزرگ تر مساوی رو میده - مثال : 5 =< 6 : جواب میشه true
                        </code>
                    </pre>
                    <p>
                        من این زیر چنتا مثال با جواب میزنم ؛ فقط دقت داشته باشید که عملگر === علاوه بر چک کردن برابری مقادیر ، نوع داده رو هم بررسی میکنه ، یعنی رشته "12" با عدد 12 ممکنه مقدارشون یکی باشه اما نوع داده عدد با رشته یکی نیست!
                    </p>
                    <pre>
                        <code>
                            /*
                            توجه کنید که وقتی میگم درسته یعنی
                            true
                            بر میگرده و وقتی میگم غلطه یعنی
                            false
                            بر میگرده
                            */

                            console.log(3 > 2)              // درسته چون 3 از 2 بزرگتره
                            console.log(3 >= 2)             // بازم درسته چون 3 از 2 بزرگتر مساویه
                            console.log(3 < 2)              // غلطه چون 2 از 3 بزرگ تر نیست
                            console.log(3 == 2)             // غلطه چون 2 و 3 که باهم برابر نیستن
                            console.log(3 != 2)             // درسته چون همین بالا گفتیم 2 و 3 باهم برابر نیستن
                            console.log(3 == '3')           // درسته چون این عملگر فقط مقدار رو بررسی میکنه
                            console.log(3 === '3')          // غلطه چون رشته با عدد برابر نیست
                            console.log(3 !== '3')          // درسته چون مقادیر باهم برابرن اما نوع رشته با عدد برابر نیست
                            console.log(3 !== 3)            // غلطه چون 3 با 3 برابره
                            console.log(0 == false)         // درسته چون 0 برابر با غلطه (بالاتر توضیح داده بودیم)
                            console.log(0 === false)        // غلظه چون 0 عدده ولی فالس یه بولین
                            console.log(0 == '')            // درسته
                            console.log(0 == ' ')           // اینم درسته چون فضای خالی هم برابر با صفره
                            console.log(1 == true)          // درسته
                            console.log(1 === true)         // غلطه چون 1 عدده و تُرو یک بولین
                            console.log(undefined == null)  // درسته ، تعریف نشده مقدارش با نال یکیه
                            console.log(undefined === null) // غلظه چون مقدار یکیه اما نوع داده یکی نیست
                            console.log(NaN == NaN)         // غلطه ، چون وقتی عدد نباشه معلوم نیست اصلا چیه
                            console.log(NaN === NaN)        // غلطه ، چون وقتی عدد نیست میتوه رشته ، بولین و هرچیز دیگه ایی باشه

                            // میتونید از این عملگرا بین توابع هم استفاده کنید (ترکیبی پرو)
                            console.log('mango'.length == 'avocado'.length)  // false
                            console.log('mango'.length != 'avocado'.length)  // true
                            console.log('mango'.length < 'avocado'.length)   // true
                            console.log('milk'.length == 'meat'.length)      // true
                            console.log('milk'.length != 'meat'.length)      // false
                            console.log('tomato'.length == 'potato'.length)  // true
                            console.log('python'.length > 'dragon'.length)   // false

                            /*
                            تابع
                            length
                            طول رشته رو به عدد برمیگردونه برای مثال اولین دستور بالا میشه 5 == 7 که کاملا غلطه
                            */
                        </code>
                    </pre>
                    <p>
                        دوستان حتما سعی کنید مقایسه های بالا رو درک کنید و بدونید چه چیزی برابر با false و چه چیزی برابر با true میشه ، چون جلوتر خیلی باهاشون کار داریم!
                    </p>
                </div>
            <h2 id="logical-operators">عملگر های منطقی (Logical Operators)</h2>
                <div>
                    <p>
                        اگه آمار و احتمال خونده باشید در جریان واو منطقی و یای منطقی هستید اگرم نیستید اشکال نداره چون قوانین ساده ایی داره ؛ ما از عملگر های منطقی برای ترکیب بین عملگر های مقایسه ایی استفاده میکنیم.
                        حالا اینی که گفتم یعنی چی ؟ بیاین یه فرضی کنیم ، مثلا به هر عملیات مقایسه ایی مثل 4 == 5 یه اسم بدیم ، من به این عملیات میگم ممد ، حالا یه عملیات دیگه داریم مثل 6 > 5 اسم اینم میگم امیر (امیری که 206 نداره) ، حالا من میگم
                        "امیر و ممد" رو صدا بزنید تا بیان پیشم ؛ وقتی از "و" استفاده کردیم یعنی هم امیر و هم ممد جفتشون باید بیان پیشم و یکی بیاد قبول نیست ، توی عبارات منطقی هم همینه ، مثلا برای مثال علمی میشه این عبارت
                          5 == 6 && 5 < 6 رو در نظر گرفت که علامت && (امپرسند) همون "و" خودمونه ؛ حالا این عبارتی که نوشتیم فقط زمانی درسته که هر دو طرف عملگر منطقیمون درست باشه ، یه طرف 5 < 6 که درسته ولی اون طرف 5 == 6 درست نیست ، پس به همین دلیل جواب کلی میشه false.
                        <br>
                        3 تا عملگر منطقی داریم ، && (و) ، || (یا) ، ! (نقیض) ، که اولین مورد رو توضیح دادم ، در مورد "یا" میشه گفت زمانی درسته که حداقل یکی درست باشه ، مثلا توی عبارت 6 > 7 || 5 == 5 جواب میشه true چون 5 برابر 5 هست و مهم نیست عبارت دیگه درسته یا غلط (وقتی میگم شام برام سبزی پلو با گردن درست کنید یا سبزی پلو با ماهی شما یدونه رو هم درست کنید کافیه ، چون گفتم یا) ، در مورد !
                        هم باید بگم که این عملگر کلا هرچیزی دستش بیاد رو برعکس میکنه برای همین بهش میگیم نقیض ، یعنی اگه بگیم (4 == 5)! جواب میشه true چون 4 برابر با 5 نیست ، پس تا فعلا جواب false ولی یدونه ! پشتش اومده که یعنی جوابو برعکس کن
                        پس false میشه true به همین راحتی ؛ شاید برای بعضیا انقدر توضیح دادن الکی باشه ولی بلخره من توضیحمو میدم شاید یکی بهتر درک کنه ، پایین مثالاشو میبینید :
                    </p>
                    <pre>
                        <code>
                            // && - ampersand -  And operator

                            const check = 4 > 3 && 10 > 5         // true && true -> true
                            const check = 4 > 3 && 10 < 5         // true && false -> false
                            const check = 4 < 3 && 10 < 5         // false && false -> false

                            // ||  - pipe - or operator

                            const check = 4 > 3 || 10 > 5         // true  || true -> true
                            const check = 4 > 3 || 10 < 5         // true  || false -> true
                            const check = 4 < 3 || 10 < 5         // false || false -> false

                            // ! - Negation

                            let check = 4 > 3                     // true
                            let check = !(4 > 3)                  //  false
                            let isLightOn = true
                            let isLightOff = !isLightOn           // false
                            let isMarried = !false                // true
                        </code>
                    </pre>
                </div>
            <h2 id="increment-operator">عملگر افزایشی (Increment Operator)</h2>
                <div>
                    <p>
                        یکی از عملگر های پر کاربرد در برنامه نویسی همین عملگره و کارش اینه که یه واحد به متغیر ما اضافه میکنه!
                    </p>
                    <pre>
                        <code>
                            let num = 13 ;
                            num++ ;
                            ++num ;
                            // دو دستور بالا مخفف دستور پایینن
                            num = num + 1
                        </code>
                    </pre>
                    <p>
                        <b>
                            توجه تونو جلب میکنم به num++ و ++num ، شاید بگید جابه جا کردنش که فرقی نداره اما باید بگم متاسفانه خیلی خیلی هم فرق داره،
                            فرقشونو این پایین میتونید ببینید :
                        </b>
                    </p>
                    <pre>
                        <code>
                            let count = 0
                            console.log(++count)        // 1
                            console.log(count)          // 1

                            let count2 = 0
                            console.log(count2++)        // 0
                            console.log(count2)          // 1

                            // توجه کنید وقتی ++ قبل از متغیر میاد ، قبل از چاپ شدن روی کنسول 1 به متغیر اضافه میشه
                            // اما وقتی ++ بعد از متغیر میاد ، اول متغیر با همون مقدار قبلیش چاپ میشه و بعدا یدونه بهش اضافه میشه
                            // در واقع وقتی ++ قبل از متغیر بیاد اولویت بیشتری داره و اگر بعدش بیاد الویت کمتری داره
                        </code>
                    </pre>
                </div>
            <h2 id="decrement-operator">عملگر کاهشی (Decrement Operator)</h2>
                <div>
                    <p>
                        این عملگرم دقیقا مثل بالاییه و فقط بجای بعلاوه 1 کردن ، منهای یک میکنه و دقیقا مقل عملگر بالا -- قبل و بعد متغیر الویت های مختلفی دارن ، باز این زیر مثالشو زدم
                    </p>
                    <pre>
                        <code>
                            let count = 0
                            console.log(--count)        // -1
                            console.log(count)          // -1

                            let count2 = 0
                            console.log2(count2--)        // 0
                            console.log2(count2)          // -1
                        </code>
                    </pre>
                </div>
            <div>
                <p>
                    <b>
                        وقتی ++ یا -- قبل از متغیر بیان بهشون میگن Pre و وقتی بعدش بیاد میگن post اینم گفتم در جریان انگلیسیش باشید !
                    </b>
                </p>
            </div>
            <h2 id="ternary-operators">عملگر 3 تایی یا 3 گانه (Ternary Operators)</h2>
                <div>
                    <p>
                        جلوتر که رفتیم در مورد عبارت های شرطی صحبت میکنیم اما فعلا بدونید عملگر 3 گانه براتون شرط گذاشتن رو فراهم میکنه ، بهش میگن سه گانه چون 3 بخش مجزا داره که این پایین میبیند :
                    </p>
                    <pre>
                        <code>
                            let isRaining = true
                            isRaining ? console.log('hello') : console.log('bye')

                            /*
                            در قسمت اول متغیری ایجاد کردیم و بهش مقدار
                            true
                            دادیم بعد از اون از عملگر 3 تایی استفاده کردیم ، قسمت اول از سمت چپ (پشت علامت سوال) همون بخش اول
                            و بخش شرطیه ماست اگه این بخش (شرط) درست باشه قسمت دوم یعنی سمت راست علامت سوال اجرا میشه و اگه غلط
                            باشه قسمت سوم ، یعنی سمت راست دو نقطه(:) اجرا میشه
                            و توی دستورات بالا هم قسمت اول درسته ، پس توی کنسول
                            hello
                            چاپ میشه
                            */
                        </code>
                    </pre>
                    <pre>
                        <code>
                            // یه مثال دیگه هم اینجا زدم تا جا بیوفته
                            let num = 2
                            num > 3 ? console.log('Big') : console.log('Small')

                            // قسمت اول بررسی میکنه متغیر از 3 بزرگ تر هست یا نه و چون بزرگ تر نیست قسمت سوم اجرا میشه
                        </code>
                    </pre>
                </div>
            <h2 id="operator-precedence">الویت عملگر ها (Operator Precedence)</h2>
                <div>
                    <p>
                        الویت عملگر ها یکمی زمانبره ، برای همین سرچ کنید یا روی این
                        <a href="https://www.w3-farsi.com/posts/87742/operator-precedence-in-javascript/" target="_blank">لینک کلیک کنید</a>
                        ، ولی به طور خلاصه الویت عملیات هارو قبلا تو ریاضی خوندید ، مثلا الویت ضرب از جمع بیشتره و همینطور الویت پرانتز از همه بیشتره ، این الویت هارو میتونید سرچ کنید و یاد بگیرید :)
                        <br>
                         برای مثال برای محاسبه 2 × (4 + 5) - (2 ÷ 2 + 6 × 1) باید اول داخل پرانتز رو حساب کنید ، بعد ضرب و تقسیم و بعد هم جمع و تفریقو.
                    </p>
                </div>
        <h1 id="window-methods">توابع ویندو (Window Methods)</h1>
            <div>
                <p>
                    قبلا با یکی از توابع window آشنا شدیم که اسمش alert بود و چیزی که میخواستید رو به جای کنسول روی صفحه نمایش نشون میداد
                    <a href="javascript:void(0)" onclick="alert('ها ها ها')">مث این</a>
                     ، اول بزارید بگم که window خودش یه شی بزرگه که مربوط به صفحه نمایشه برای همین یکی از این توابع رو وقتی صدا میزنیم
                    روی صفحه باز میشه و تا تاییدش نکنید ، نمیتونید کار دیگه ایی بکنید! شاید سوال پیش بیاد که ما میگیم جزو توابع window پس چرا مثل توابع string با نقطه (.) جدا نشده ؟ باید بگم شما میتونید از window.alert هم استفاده کنید و
                    هیچ فرقی با alert نداره ، فقط برای راحتی منو شما اون window اولش رو حذف کردن (البته توجه کنید که از بعضی توابع رشته هم میشه بدون نقطه استفاده کرد اما اصولا دیگه معنی نمیدن چون اونوقت دقیقا چه کاری داریم انجام میدیم ؟!)
                </p>
            </div>
            <h2 id="window-alert-method">تابع ()alert</h2>
                <div>
                    <p>
                        قبلا با این تابع آشنا شدیم و روش کارشم سادست ، یه پیام بهش پاس میدیم ، و اونو برای ما برمیگردونه ! (حتما توجه کنید که توی سایت ها زیاد از این تابع نباید استفاده کنید چون خیلی رو مخه! و علاوه بر اون میتونه تو بعضی شرایط مخرب هم باشه)
                    </p>
                    <pre>
                        <code>
                            alert(پیام شما)

                            alert('Welcome to 30DaysOfJavaScript')
                        </code>
                    </pre>
                </div>
            <h2 id="window-prompt-method">تابع ()prompt</h2>
                <div>
                    <p>
                        این تابع هم مثل تابع بالا شکلشو شمایلش یه جوره اما میتونه از کاربر ورودی دریافت کنه ، برای مثال
                        <a href="javascript:void(0)" onclick="let number = prompt('یه عدد تو ذهنت انتخاب کن و اینا بنویس' , 'هر عددی شد'); alert(`بیا عشق کن ببین چجوری تو ذهنتو پیدا کردم : ${number}`)">روی این کلیک کن </a>
                        تا متوجه بشی.
                        این تابع دوتا آرگومان میگیره ، آرگومان اول متن پرسش و آرگومان دوم نگهدارنده متنه (توی مثال بالا "هر عددی شد" آرگومان دومه)
                    </p>
                    <pre>
                        <code>
                            prompt('متن پرسش', 'نگهدارنده')
                        </code>
                    </pre>
                    <pre>
                        <code>
                            let number = prompt('Enter number', 'number goes here') // مقدار ورودی کاربر رو توی متغیر ذخیره میکنه
                            console.log(number)
                        </code>
                    </pre>
                </div>
            <h2 id="window-confirm-method">تابع ()confirm</h2>
                <div>
                    <p>
                        این تابع هم مثل تابع بالاییه ولی کاربر فقط میتونه تایید یا رد کنه اگر پیغام رو تایید کنه true برمیگرده و اگه رد کنه false بر میگرده ، مثل این :
                        <a href="javascript:void(0)" onclick="let bool = confirm('سایت خوبی درست کردم دیگه نه ؟ :('); alert(`چیزی که زدی : ${bool}`)">روم کلیک کن </a>
                    </p>
                    <pre>
                        <code>
                            const agree = confirm('منو دوس داری؟')
                            console.log(agree)
                        </code>
                    </pre>
                </div>
        <h1 id="date-object">شی تاریخ (Date Object)</h1>
            <div>
                <p>
                    هممون میدونیم زمان طلاست ، واقعا آرزو میکردم 24 ساعتم 240 ساعت باشه تا به کارام برسم ولی خب متاسفانه 24 ساعتم 12 ساعته تموم میشه ! توی جاوا اسکریپت هم
                    یه شی دیگه داریم به نام Date که میتونیم با تاریخ و زمان کار کنیم ، این شی هم متود ها و توابع زیادی داره که چنتاشو اینجا بررسی میکنیم :
                </p>
                <ol>
                    <li>getFullYear : سال جاری میلادی رو برمگیردونه به این شکل : 2023</li>
                    <li>getMonth : ماه جاری میلادی رو برمیگردونه به صورت عدد ماه (از 0 تا 11 شروع میشه ، ماه اول 0 و ماه دوزادم 11)</li>
                    <li>getDate : روز جاری میلادی رو برمیگردونه به صورت عددی از 1 تا 31</li>
                    <li>getDay : عدد روز هفته رو برمیگردونه به صورت 0 تا 6</li>
                    <li>getHours : ساعت جاری (سیستم) رو برمیگردونه به صورت 0 تا 23</li>
                    <li>getMinutes : دقیقه جاری رو برمیگردونه به صورت 0 تا 59</li>
                    <li>getSeconds : ثانیه جاری رو برمیگردونه به صورت 0 تا 59</li>
                    <li>getMilliseconds : میلی ثانیه جاری رو برمیگردونه به صورت 0 تا 999</li>
                    <li>getTime : زمان سپری شده از 1 ژانویه 1970 تا همین (این زمان به ساعت یونیکس معروفه که یکی از مهم ترین مقیاس های اندازه گیری زمان آنیه ، میتونید سرچ کنید اطلاعاتتون بیشتر شه)</li>
                </ol>
            </div>
            <h2 id="creating-a-time-object">ساخت شی زمان</h2>
                <div>
                    <p>
                        تا الان برای استفاده از توابع اشیا یا کار با توابع فقط تابع مورد نظر رو صدا میزدیم ، اما برای استفاده از توابع زمان باید یه شی بسازید!
                        بزارید یه مثال بزنم درک کنید یه خورده ، وقتی از توابع ریاضی استفاده میکنید شی ریاضی از قبل تعریف شده و نیازی ندارید دوباره شی جدید بسازید ، ولی در شی تاریخ ، چون زمان همیشه در حرکته
                        نمیشه از شی پیش ساخته استفاده کرد چون فرمول زمان رو بهم میریزه ، برای همین شما باید از شی اصلی ، یه شی جدید بسازید (توجه کنید که تا الان شی Math و شی String رو مورد بررسی قرار دادیم و برای هیچ کدوم نیاز به ساخت شی جدید نداشتیم چون هر متغیری که میسازیم خودش میتونه یه شی از string باشه پس به ساخت ما نیاز نداره ، همینطور شی Math یه شی ثابته و فرمول های ثابت خودش رو داره پس اصلا نیازی به ساخت شی برای این مورد هم وجود نداره)
                        <br>
                        ممکنه یکم اینجا گیج شده باشید ، که اشکال نداره چون بحث ما الان در مورد شی و شی گرایی نیست فقط یه توضیح دادم تا بدونید که برای استفاده از بعضی اشیا نیاز به نمونه سازی (ساخت شی جدید) دارید. (شی Date یه شی مرجع است که ما از روش نمونه میسازیم ، مثلا به ما میگن چایی شیرین از چایی + شکر ساخته شده ، حالا اگه ما بخوایم چایی شیرین درست کنیم فقط چایی رو با شکر قاطی میکنیم و نیازی به مشاهده یه چای شیرین از قبل نداریم ، شی مرجع هم دقیقا مثل همین میمونه یعنی فقط ساختار مشخصه و خودش یک شی نیست ، ولی میتونید از روش شی بسازید ، مثال ساده تر مثل نقشه ساختمونه (شی مرجع) که از روش میشه ساختمون واقعی (شی نمونه سازی شده) ساخت.)
                        <br>
                        با استفاده از دستور new میتونید از یک شی مرجع ، نمونه بسازید ، به مثال زیر توجه کنید :
                    </p>
                    <pre>
                        <code>
                            let now = new Date()
                            console.log(now) // Print :  Tue Jun 06 2023 17:51:51 GMT+0330 (Iran Standard Time)
                        </code>
                    </pre>
                    <p>
                        حالا میتونیم از متغیر now استفاده کنیم و توابع مختلف رو روش تست کنیم :
                    </p>
                </div>
            <h2 id="getting-full-year">دریافت سال</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getFullYear()) // 2023
                        </code>
                    </pre>
                </div>
            <h2 id="getting-month">دریافت ماه</h2>
                <div>
                    <pre>
                        <code>
                           console.log(now.getMonth())  // 5 ، چون الان توی ماه ژوئن هستیم و ششمین ماه (اندکس از 0 تا 11)
                        </code>
                    </pre>
                </div>
            <h2 id="getting-date">دریافت تاریخ</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getDate()) // 6 چون امروز روز ششم ماه (ایندکس از 1 تا 31)
                        </code>
                    </pre>
                </div>
            <h2 id="getting-day">دریافت روز</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getDay()) // 2 چون امروز روز سوم هفته است (ایندکس از 0 تا 6)
                        </code>
                    </pre>
                </div>
            <h2 id="getting-hours">دریافت ساعت</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getHours())  // 17 چون الا ساعت 5 بعد از ظهره
                        </code>
                    </pre>
                </div>
            <h2 id="getting-minutes">دریافت دقیقه</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getMinutes())  // 52 چون الان ساعت 17 و 52 دقیقه است
                        </code>
                    </pre>
                </div>
            <h2 id="getting-seconds">دریافت ثانیه</h2>
                <div>
                    <pre>
                        <code>
                            console.log(now.getSeconds()) // 41
                        </code>
                    </pre>
                </div>
            <h2 id="getting-time">دریافت زمان</h2>
                <div>
                    <p>
                        دریافت زمان به معنی زمان گذشته شده از ساعت یونیکس (1 ژانویه 1970) تا الان به میلی ثانیه ست که به دو روش به دست میاد :
                    </p>
                    <ol>
                        <li>
                            استفاده از ()getTime
                            <pre>
                                <code>
                                    const now = new Date()
                                    console.log(now.getTime()) // 1686062188637
                                </code>
                            </pre>
                        </li>
                        <li>
                            استفاده از ()Date.now
                            <pre>
                                <code>
                                    // برای استفاده از این تابع نیازی به ساخت شی ندارید
                                    const allSeconds = Date.now() //
                                    console.log(allSeconds) // 1686062188637

                                    // این پایین هم مقایسه کردیم ببینیم این دو روشی که یاد دادیم برابرن یا نه ، که برابرن
                                    const timeInSeconds = new Date().getTime()
                                    console.log(allSeconds == timeInSeconds) // true
                                </code>
                            </pre>
                        </li>
                    </ol>
                    <p>
                        این پایین هم یه مثال داریم که قالب تاریخ و ساعت رو به ما نشون میده :
                    </p>
                    <pre>
                        <code>
                            const now = new Date()
                            const year = now.getFullYear() // return year
                            const month = now.getMonth() + 1 // return month(1 - 12)
                            const date = now.getDate() // return date (1 - 31)
                            const hours = now.getHours() // return number (0 - 23)
                            const minutes = now.getMinutes() // return number (0 -59)

                            console.log(`${date}/${month}/${year} ${hours}:${minutes}`) // Print Now : 6/6/2023 18:11
                        </code>
                    </pre>
                    <p>
                        خسته نباشید بچه ها! باشه ناخدا! تمرین فراموشتون نشه و سعی کردم راحت مطالب رو بهتون بگم اگه مشکلی توش وجود داره حتما بهمون خبر بدید دیگه ! بوس به کله هاتون.
                        <br>
                        اوه تازه یادم اومد ، تمرینای زیر رو برای خودتون انجام بدید تا تسلط کافی پیدا کنید :)
                    </p>
                </div>
        <h1 id="-day-3-exercises">تمرینات روز سوم</h1>
            <h2 id="exercises-level-1">تمرین: سطح 1</h2>
                <div>
                    <ol>
                        <li>برید تست کنید ببیند '1.0000001' برابر با 1.0000001 هست یا نه (عملگر ==)</li>
                        <li>برید ببینید ('9,99')parseInt برابر با 10 هست یا نه</li>
                        <li>3 عبارت بنویسید که جوابشون بشه true</li>
                        <li>3 عبارت دیگم بنویسد که جوابشون بشه false</li>
                        <li>هرکدوم از عبارات بالا رو بجای نمایش توی کنسول روی صفحه نمایش بدید</li>
                        <li>حتما ترکیب بین عملگر منطقی (&& || !) رو با عملگر های مقایسه ایی انجام بدید تا درک بهتری داشته باشید</li>
                    </ol>
                </div>
            <h2 id="exercises-level-2">تمرین: سطح 2</h2>
                <div>
                    <p>
                        با استفاده از شی Date یه قالب نمایش تاریخ و ساعت بسازید و توی کنسول نمایش بدید (تمامی ارقام باید 2 رقمی باشن یعنی 5 رو 05 نمایش بدید) مثل زیر :
                    </p>
                    <pre>
                        <code class="language-text">
                            YYYY-MM-DD HH:mm                      2023-01-02 07:05
                        </code>
                    </pre>
                </div>
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

<!-- File Need It -->
<script src="assets/FileNeedIt.js"></script>

<!-- Scroll Function -->
<script src="assets/script.js"></script>
<!-- END MAIN SCRIPT-->
</body>
</html>