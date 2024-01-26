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
        آرایه ها
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
        <li><a href="#-day-5">📔 روز پنجم</a>
            <ul>
                <li><a href="#arrays">آرایه ها</a>
                    <ul>
                        <li><a href="#how-to-create-an-empty-array">چگونه یک آرایه خالی ایجاد کنیم</a></li>
                        <li><a href="#how-to-create-an-array-with-values">چطوری به یک آرایه مقدار بدیم</a></li>
                        <li><a href="#creating-an-array-using-split">ساخت آرایه توسط تابع split</a></li>
                        <li><a href="#accessing-array-items-using-index">دسترسی به اعضای آرایه ها</a></li>
                        <li><a href="#modifying-array-element">ویرایش اعضای آرایه</a></li>
                        <li><a href="#methods-to-manipulate-array">توابع مروبوط به آرایه ها</a>
                            <ul>
                                <li><a href="#array-constructor">سازنده آرایه (Array Constructor)</a></li>
                                <li><a href="#creating-static-values-with-fill">پر کردن مقادیر آرایه با fill</a></li>
                                <li><a href="#concatenating-array-using-concat">الحاق آرایه با concat</a></li>
                                <li><a href="#getting-array-length">بدست اوردن طول آرایه</a></li>
                                <li><a href="#getting-index-an-element-in-arr-array">دریافت اندیس آرایه (indexOf)</a>
                                </li>
                                <li><a href="#getting-last-index-of-an-element-in-array">دریافت آخرین اندیس آرایه (lastIndexOf)</a></li>
                                <li><a href="#checking-index-of-an-array">بررسی وجود یک عضو در آرایه</a></li>
                                <li><a href="#checking-array">بررسی یک آرایه</a></li>
                                <li><a href="#converting-array-to-string">تبدیل آرایه به رشته</a></li>
                                <li><a href="#joining-array-elements">تبدیل آرایه به رشته به صورت شخصی سازی شده!</a>
                                </li>
                                <li><a href="#slice-array-elements">متود Slice در آرایه</a></li>
                                <li><a href="#splice-method-in-array">متود Splice در آرایه</a></li>
                                <li><a href="#adding-item-to-an-array-using-push">اضافه کردن اعضا به آرایه توسط push</a>
                                </li>
                                <li><a href="#removing-the-end-element-using-pop">حذف کردن اعضا از آرایه توسط pop</a>
                                </li>
                                <li><a href="#removing-an-element-from-the-beginning">حذف یک عنصر از ابتدا آرایه</a>
                                </li>
                                <li><a href="#add-an-element-from-the-beginning">اضافه کردن یک عنصر به اول آرایه</a>
                                </li>
                                <li><a href="#reversing-array-order">معکوس کردن ترتیب یک آرایه</a></li>
                                <li><a href="#sorting-elements-in-array">مرتب سازی در آرایه ها</a></li>
                            </ul>
                        </li>
                        <li><a href="#array-of-arrays">آرایه ایی از آرایه ها (آرایه چند بعدی)</a></li>
                    </ul>
                </li>
                <li><a href="#-exercise">💻 تمرینات</a>
                    <ul>
                        <li><a href="#exercise-level-1">تمرین: سطح 1</a></li>
                        <li><a href="#exercise-level-2">تمرین: سطح 2</a></li>
                        <li><a href="#exercise-level-3">تمرین: سطح 3</a></li>
                    </ul>
                </li>
            </ul>
        </li>
    </ul>
</section>
<!-- End List -->

<!-- Start Article -->
<article class="container">
    <h1 id="-day-5">📔 روز پنجم</h1>
        <h1 id="arrays">آرایه ها</h1>
            <div>
                <p>
                    در جلسات پیش در مورد آرایه ها صحبت کردیم و نحوه تعریف اون هارو هم باهم کار کردیم ؛ اما امروز قراره یکم دیپ تر (عمیقتر) بشیم و در مورد
                    آرایه ها بیشتر اطلاعات کسب کنیم. همنوجوری که قبلا گفتم ، آرایه ها شبیه متغیر ها هستند ، با این فرق که میتونن چندین مقدار رو ذخیره کنن.
                    همه آرایه ها عضو هاشون (عنصرهاشون یا بهشون ایندکس هم گفته میشه) از صفر شروع میشه و آخرین عضو هر آرایه هم از مقدار طول آرایه (تعداد اعضا) یدونه کمتره. همچنین یه آرایه میتونه خالی باشه ، میتونه اعضای تکراری داشته باشه ، میتونه چند نوع مختلف داده داشته باشه و همچنین میتونه داخل خودش یه آرایه دیگه داشته باشه (آرایه چند بعدی) که جلوتر در مورد همه اینا صحبت میکنیم!
                </p>
            </div>
            <h2 id="how-to-create-an-empty-array">چگونه یک آرایه خالی ایجاد کنیم</h2>
                <div>
                    <p>
                        ما برای تعریف آرایه دو روش داریم ، قبلا با یکی از روش ها که استفاده از براکت ([]) بود آشنا شدید و یکی دیگه از روش های تعریف آرایه با استفاده از کلمه کلیدی Array هست
                        که میتونید این زیر طریقه استفاده هر دو روش رو ببینید.
                    </p>
                    <pre>
                        <code>
                            const arr = []
                            // یا
                            const arr2 = Array()

                            // جفت این سیسنتکس ها یک آرایه خالی ایجاد میکنه
                        </code>
                    </pre>
                    <p>
                        توجه کنید که برای آرایه ها بیشتر از const استفاده میکنن تا let ، حواستون باشه توی آرایه ها const به معنی متغیر ثابت نیست و میتونید مقادیرش رو تغییر بدید ، اما نمیتونید به صورت مستقیم تغییرش بدید ، به مثال زیر دقت کنید :
                    </p>
                    <pre>
                        <code>
                            const array = [1,2,3,4,5] // یه آرایه ساختیم به تعداد 5 عضو
                            array = [1,3,5]  // اینجا به ارور میخوریم ، چون گفتیم نمیتونیم به صورت مستقیم آرایه رو تغییر بدیم
                            array[0] = 5 // اینجا عضو اول رو بدون خطا عوض کردیم

                            /*
                            فقط باید حواستون باشه بعد از تعریف آرایه با کلمه کلیدی
                            const
                            نمیتونید از اسم متغیر به صورت خالی استفاده کنید
                            */
                        </code>
                    </pre>
                </div>
            <h2 id="how-to-create-an-array-with-values">چطوری به یک آرایه مقدار بدیم</h2>
                <div>
                    <p>
                        خب بالا دیدیم چجوری یه آرایه خالی بسازیم ، برای پر کردن آرایه هم کارمون خیلی آسونه بچه ها ، فقط داخل براکت یا پرانتز مقادیرمون رو قرار بدیم و به همین راحتی یه آرایه رو پر میکنیم :
                    </p>
                    <pre>
                        <code>
                            const numbers = [0, 3.14, 9.81, 37, 98.6, 100] // آرایه ایی از اعداد
                            const fruits = ['banana', 'orange', 'mango', 'lemon'] // آرایه ایی از رشته ها
                            const countries = ['Finland' , 2 , 'Iran' , 4 , 'Sweden' , 6 , 'Norway' , 8 , 'Iceland' , 10] // آرایه ایی از رشته ها و اعداد

                            // روش دوم
                            const num = Array(0, 3.14 , 9.81 , 10)
                            const veg = Array('tomato' , 'onion' , 'cabbage')
                            const rand = Array('2312' , 13 , '23123' , 232 ,  '12')
                        </code>
                    </pre>
                </div>
            <h2 id="creating-an-array-using-split">ساخت آرایه توسط تابع split</h2>
                <div>
                    <p>
                         توی جلسات گذشته با تابع split آشنا شدیم و گفتیم این تابع رشته شما رو توسط یک واسطه تقسیم میکنه و هر عضو رو داخل آرایه قرار میده (مثلا رشته alex, amir, jabar رو به واسطه (,) تبدیل به ['alex' , 'amir' , 'jabar'] میکنه) اینم یه روش دیگه برای ایجاد آرایه است :
                    </p>
                    <pre>
                        <code>
                            let names = "amir , ali , hamid , zahra karami , yeganeh" ;
                            const arrayName = names.split(' , ')
                            console.log(arrayName) // Print ['amir' , 'ali' , 'hamid' , 'zahra karami' , 'yeganeh']

                            let text = "I Love Computer and Programming" ;
                            const arrayText = text.split(' ');
                            console.log(arrayText) // print : ['I' 'Love' 'Computer' 'and' 'Programming']
                        </code>
                    </pre>
                </div>
            <h2 id="accessing-array-items-using-index">دسترسی به اعضای آرایه ها</h2>
                <div>
                    <p>
                        تا الان در مورد تعریف و تبدیل آرایه صحبت کردیم ، حالا میرسیم به بخش مهممون یعنی دسترسی به یکی از اعضای آرایه ؛ برای دسترسی به اعضا باید از
                        براکت و اندیس عضو استفاده کنید ، مثلا یک آرایه به شکل let arr = ['amir' , 'mohammad' , 'yeganeh'] برای بدست اوردن عضو دوم آرایه از این دستور استفاده میکنیم : arr[1] (حواستون باشه که اندیس ها از 0 شروع میشن پس عضو اول برابر 0 و هر عضو دیگه ایی هم بخواید میشه خود عضو منهای 1 (عضو 100 ام برابر میشه با اندیس 99))
                    </p>
                    <pre>
                        <code>
                            const fruits = ['banana', 'orange', 'mango', 'lemon']
                            let firstFruit = fruits[0] // اولین عضو یعنی موزو ریختیم تو این متغیر

                            console.log(firstFruit) // banana

                            secondFruit = fruits[1]
                            console.log(secondFruit) // orange

                            let lastFruit = fruits[3]
                            console.log(lastFruit) // lemon
                            // آخرین عضو رو میشه مث زیر محاسبه کرد

                            let lastIndex = fruits.length - 1
                            lastFruit = fruits[lastIndex]

                            console.log(lastFruit)  // lemon
                        </code>
                    </pre>
                    <pre>
                        <code>
                            const countries = [
                            'AmirCountry',
                            'Bolivia',
                            'Canada',
                            'Denmark',
                            'Ethiopia',
                            'Finland',
                            'Germany',
                            'Hungary',
                            'Ireland',
                            'Japan',
                            'Kenya'
                            ] // List of countries

                            console.log(countries)      // همه آرایه رو برمیگردونه
                            console.log(countries[0])   //  -> کشور منو برمیگردونه
                            console.log(countries[10])  //  -> Kenya
                        </code>
                    </pre>
                </div>
            <h2 id="modifying-array-element">ویرایش اعضای آرایه</h2>
                <div>
                    <p>
                        حالا که میتونیم به اعضای آرایه دسترسی داشته باشیم ، میتونیم هر یک از اعضا رو ویرایش کنیم :
                    </p>
                    <pre>
                        <code>
                            const numbers = [1, 2, 3, 4, 5]
                            numbers[0] = 10      // عضو اول یعنی 0 رو به 10 تغییر دادیم
                            numbers[1] = 20      // عضو دوم یعنی 2 رو به 20 تغییر دادیم

                            console.log(numbers) // [10, 20, 3, 4, 5]
                        </code>
                    </pre>
                </div>
            <h2 id="methods-to-manipulate-array">توابع مروبوط به آرایه ها</h2>
                <div>
                    <p>
                        حالا که با کلیات آرایه ها آشنا شدیم ، بریم و با توابع کار با آرایه ها هم آشنا بشیم تا یکمی بتونیم با این آرایه های گوگولی بازی کنیم!(منظورم از بازی همون کاره!)
                    </p>
                </div>
                <h3 id="array-constructor">سازنده آرایه (Array Constructor)</h3>
                    <div>
                        <p>
                            یکمی بالاتر در مورد Array صحبت کردیم اما این تابع رو بهش میگیم تابع سازنده آرایه و اکثر برای ساخت تابع خالی به کار میره و بهتره برای آرایه های مقدار دار از همون براکت استفاده کنیم :
                        </p>
                        <pre>
                            <code>
                                const arr = Array()
                                console.log(arr) // Print : []

                                const arr2 = Array("amir","mohammad","roox")
                                console.log(arr) // Print : ["amir","mohammad","roox"]

                                const arr3 = Array(3)
                                console.log(arr) // Print : (3) [empty x 3]
                                /*
                                وقتی به این تابع فقط یک آرگومان عددی پاس میدید برای شما به اون تعداد اعضای خالی میسازه
                                */
                            </code>
                        </pre>
                    </div>
                <h3 id="creating-static-values-with-fill">پر کردن مقادیر آرایه با fill</h3>
                    <div>
                        <p>
                            یه تابع جالب داریم به نام fill که باعث میشه آرایه ما همه اعضاش برابر با یک مقدار بشن :
                        </p>
                        <pre>
                            <code>
                                const arr = ['Amir' , "mohammad" , 13] ;
                                arr.fill("jojo"); // تمام اعضای آرایه رو به جوجو تبدیل میکنه
                                console.log(arr); // ['jojo' , 'jojo' , 'jojo']

                                const eightX = Array(8).fill('X') // یک آرایه با 8 عضو خالی رو با ایکس پر میکنه
                                console.log(eightX) // ['X', 'X' , 'X' , 'X' , 'X' , 'X' , 'X' , 'X']
                            </code>
                        </pre>
                    </div>
                <h3 id="concatenating-array-using-concat">الحاق آرایه با concat</h3>
                    <div>
                        <p>
                            قبلا هم در مورد concat کردن صحبت کرده بودیم و گفتیم که به اتصال دو تاچیز بهم میگن کان کت کردن.توی آرایه ها هم همچین چیزی داریم که باعث میشه دوتا آرایه رو بهم بچسبونیم و اسم این تابع هم concat عه!
                        </p>
                        <pre>
                            <code>
                                const firstList = [1, 2, 3]
                                const secondList = [4, 5, 6]
                                const thirdList = firstList.concat(secondList)  // آرایه اول رو به آرایه دوم میچسبونه

                                console.log(thirdList)  // [1, 2, 3, 4, 5, 6]
                            </code>
                        </pre>
                    </div>
                <h3 id="getting-array-length">بدست اوردن طول آرایه</h3>
                    <div>
                        <p>
                            قبلا در مورد طول رشته ها صحبت کردیم،اما باید بگم طول آرایه هارو هم میتونیم با همون تابع length بدست بیاریم.طول آرایه ها یعنی چی!؟یعنی تعداد اعضاشون به همین راحتی!
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5 , 6]
                                console.log(numbers.length) // طول آرایه (تعداد اعضا) 6 تاست
                            </code>
                        </pre>
                    </div>
                <h3 id="getting-index-an-element-in-arr-array">دریافت اندیس آرایه (indexOf)</h3>
                    <div>
                        <p>
                            تابع indexOf رو هم قبلا توی رشته ها دیده بودید که باعث میشد داخل رشته بگرده و ایندکس یه حرفی رو براتون پیدا کنه ، توی آرایه ها هم از این تابع میشه استفاده کرده تا براتون یه عضو رو پیدا کنه ؛ اگه پیدا کرد ، اندیس متناسبشو برمیگردونه و اگرم پیدا نکرد ، باهاتون قهر میکنه و ۱- رو برمیگردونه.
                            <br>
                            <b>
                                تا یادم نرفته بگم که خود string ها هم یه جور آرایه هستند ، میشه گفت رشته ها آرایه ایی از کارکتر ها هستند برای همین از بعضی از توابع اونا میشه توی ارایه ها هم استفاده کرد داش گلم (یا ابجی نازم)(البته بهتره بگیم از توابع آرایه ها میشه در داخل رشته ها استفاده کرد)
                            </b>
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]

                                console.log(numbers.indexOf(5)) // -> 4
                                console.log(numbers.indexOf(0)) // -> -1
                                console.log(numbers.indexOf(1)) // -> 0
                                console.log(numbers.indexOf(3)) // -> 2
                                console.log(numbers.indexOf(6)) // -> -1
                            </code>
                        </pre>
                        <p>
                            این پایینم یه مثال زدم برای اینکه ببنیم این تابع کجا به کار میره :
                        </p>
                        <pre>
                            <code>
                                const fruits = ['banana', 'orange', 'mango', 'lemon']
                                let index = fruits.indexOf('banana')

                                if(index === -1){
                                    console.log('This fruit does not exist in the array')
                                } else {
                                    console.log('This fruit does exist in the array')
                                }

                                // تو این مسئله میتونیم چک کنیم اگه عضوی داخل آرایه نبود یچیزی چاپ کن و اگر بود یه چیز دیگه
                            </code>
                        </pre>
                    </div>
                <h3 id="getting-last-index-of-an-element-in-array">دریافت آخرین اندیس آرایه (lastIndexOf)</h3>
                    <div>
                        <p>
                            خب تابع بالا ، شبیه کارش توی رشته ها ، وقتی اولین تناسب رو دید همونو برمیگردونه و تابع lastIndexOf هم برعکس تابع قبلی آخرین تناسب رو برمیگردونه ؛ یعنی اگه چیزی که بهش پاس دادید توی آرایه ۳ تا باشه ، اندیس آخریش رو بهتون میده و اگه پیدا نکردش مثل تابع قبلی قهر میکنه و 1- برمیگردونه.
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5, 3, 1, 2]

                                console.log(numbers.lastIndexOf(2)) // اندیس آخرین 2 داخل آرایه رو برمیگردونه که میشه 7
                                console.log(numbers.lastIndexOf(0)) // چون 0 توی آرایه نداریم -1 برمیگردونه
                                console.log(numbers.lastIndexOf(1)) //  اندیس آخرین 1 رو برمیگردونه که برابر با 6 میشه
                                console.log(numbers.lastIndexOf(4)) //  3
                                console.log(numbers.lastIndexOf(6)) // -1
                            </code>
                        </pre>
                    </div>
                <h3 id="checking-index-of-an-array">بررسی وجود یک عضو در آرایه</h3>
                    <div>
                        <p>
                            تابع include هم قبلا باهاش اشنا شدید عزیزان من ، و توی آرایه ها هم دقیقا مثل رشته ها کار میکنه و اگه عضوی رو پیدا کرد true میده و اگه اون عضو پیدا نکرد false بر میگردونه😁
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]

                                console.log(numbers.includes(5)) // true
                                console.log(numbers.includes(0)) // false
                                console.log(numbers.includes(1)) // true
                                console.log(numbers.includes(6)) // false

                                // این تابع برای دستورات شرطی بهتر عمل میکنه مثل زیر :

                                if (numbers.includes(3)) {
                                    console.log('عدد 3 رو پیدا کردممم')
                                } else {
                                    console.log('عدد 3 پیدا نشد عشقم')
                                }
                            </code>
                        </pre>
                    </div>
                <h3 id="checking-array">بررسی یک آرایه</h3>
                    <div>
                        <p>
                            حالا یه تابع جدید داریم به نام isArray که این تابع چک میکنه یه متغیر آرایه هست یا نه. میپرسید کجا به کار میاد؟ من نمیخوام بهتونم بگم ولی دلمم نمیاد نگم پس میگم ، یه مواقعی شما از یه جاهایی خروجی میگیرد یا با توابع مختلف کار میکنید و مقدار رو توی یه متغیر میریزد و نمیدونید اون مقدار آرایه هست یا نه برای همین با این تابع چک میکنید تا مطمئن بشید با آرایه سر و کار دارید (مثلا فرض کنید یه تابع عدد برگردونه و شما به اشتباه از توابع آرایه روی اون مقدار استفاده کنید ،صد در صد باعث خطا میشه ، پس باید از قبل چک کنید ببیند این متغیر قشنگمون ارایه هست یا نه و اگه بود کارمونو روش انجام بدیم و اگه نبود بسپاریمش دست خدا) و یادتونم باشه این متود جزو متود های Array هست پس باید با خود Array صدا زده بشه مثل زیر :
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                console.log(Array.isArray(numbers)) // چون متغیر بالا آرایه است پس خروجی درست میشه

                                const number = 100
                                console.log(Array.isArray(number)) // و چون متغیر بالا عدده و آرایه نیست ، خروجی غلط میشه
                            </code>
                        </pre>
                    </div>
                <h3 id="converting-array-to-string">تبدیل آرایه به رشته</h3>
                    <div>
                        <p>
                            دیدیم با استفاده از split میتونیم رشته رو به آرایه تبدیل کنیم ، حالا اگه بخوایم آرایه رو تبدیل به رشته کنیم باید چه گلی به سرمون بگیرم؟ هیچی از یه تابع خوشگل به نام toString استفاده میکنیم تا اعضای آرایمون رو با استفاده از ',' (کاما) بهم بچسبونیم (مثلا ارایه [1,'jj',13] تبدیل میشه به رشته 1,13,jj) ، این زیرم میتونید نگا کنید :
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                console.log(numbers.toString()) // 1,2,3,4,5

                                const names = ['Amir', 'Roox', 'Elias', 'Brot']
                                console.log(names.toString()) // Amir,Roox,Elias,Brot

                                // توجه کنید که این تابع اعضای آرایه رو با کاما بهم میچسبونه
                            </code>
                        </pre>
                    </div>
                <h3 id="joining-array-elements">تبدیل آرایه به رشته به صورت شخصی سازی شده!</h3>
                    <div>
                        <p>
                            حالا میگید من آرایمو نمیخوام با ',' بهم بچسبونم و میخوام بین اعضای آرایه ام از # استفاده کنم ، اونوقت باید چیکار کنم؟اونوقت باید از تابع join استفاده کنید که میشه گفت دقیقا برعکس split کار میکنه و میتونید بهش بگید اعضای آرایه شما رو به وسیله چه چیزی بهم وصل کنه :
                        </p>
                        <pre>
                            <code>
                                const arr = [1,2,3,4,5]
                                console.log(arr.join())  // اگر از این تابع بدون آرگومان استفاده کنید مثل تابع قبلی اعضا رو با کاما بهم میچسبونه
                                console.log(arr.join('#')) // حالا با این چیزی که ما بهش دادیم اعضا رو با هشتک بهم وصل میکنه (5#4#3#2#1)
                                console.log(arr.join(' '))  // حالا هم اعضا رو با فضای خالی بهم وصل میکنه (5 4 3 2 1)

                                // این پایینم یه مثال دیگه ببینیم
                                const webTechs = [
                                'HTML',
                                'CSS',
                                'JavaScript',
                                'React',
                                'Redux',
                                'Node',
                                'MongoDB'
                                ]

                                console.log(webTechs.join())       // "HTML,CSS,JavaScript,React,Redux,Node,MongoDB"
                                console.log(webTechs.join(' # '))  // "HTML # CSS # JavaScript # React # Redux # Node # MongoDB"
                            </code>
                        </pre>
                    </div>
                <h3 id="slice-array-elements">متود Slice در آرایه</h3>
                    <div>
                       <p>
                           دیدید این ادمای با کلاس ساندویچم به قسمت های کوچیک تر تقسیم میکنن و با چنگال میخورن؟حالا ما میخوایم یه آرایه رو تیکه تیکه کنیم ، باید از تابع slice استفاده کنیم که این تابع باعث میشه قسمتی از آرایه رو تیکه کنیم مثلا ۲ تا عضو اول یا ۶ تا عضو آخر یه آرایه رو میتونیم به دست بیارم (به صورت آرایه ایی جداگانه)
                       </p>
                        <pre>
                            <code>
                                // syntax
                                const array = Array();
                                array.slice('اندیس انتهایی','اندیس ابتدایی')
                            </code>
                        </pre>
                        <pre>
                            <code>
                                const numbers = [1,2,3,4,5]

                                console.log(numbers.slice()) // بدون آرگومان استفاده کردن باعث میشه کل آرایه رو به شما برگردونه
                                console.log(numbers.slice(0)) // اگه یه آرگومان بهش پاس بدید از همون اندیس تا آخر آرایه رو برمیگردونه
                                console.log(numbers.slice(0)) // Print : [1,2,3,4,5]
                                console.log(numbers.slice(2)) // Print : [3,4,5]
                                console.log(numbers.slice(1,4)) // Print : [2,3,4] // اگه بهش دو آرگومان بدیم از اندیس ابتدایی تا اندیس انتهایی رو برامون جدا میکنه (خود اندیس انتهایی حساب نمیشه)
                                console.log(numbers.slice(0,3))  // Print : [1,2,3]
                                console.log(numbers.slice(3,4))  // Print : [4]
                            </code>
                        </pre>
                    </div>
                <h3 id="splice-method-in-array">متود Splice در آرایه</h3>
                    <div>
                        <p>
                            تابع splice هم میشه گفت برعکس slice کار میکنه و شما یه قسمتی رو بهش میگید و از آرایه جدا میکنه و باقی مونده آرایه رو بهتون برمیگردونه (تابع slice قسمتی که جدا کردید رو بهتون میده ولی تابع splice قسمتی که جدا کردید رو از آرایه اصلی پاک میکنه و باقی آرایه رو برمیگردونه)
                        </p>
                        <pre>
                            <code>
                                 const numbers = [1, 2, 3, 4, 5]
                                numbers.splice() // اگر بدون آرگومان ازش استفاده کنید تمام آرایه رو پاک میکنه
                                console.log(numbers)  // Print : []
                                // - - - - - - - - - -
                                numbers.splice(1,3) // اگر از دو آرگومان استفاده کنید اندیس ابتدایی و انتهایی رو از آرایه حذف میکنه
                                console.log(numbers)  // Print : [1, 5] :

                                // توجه کنید خروجی خود تابع اعدادی که حذف میکنه است ، ولی بعد از حذف کردن متغیر ما تغییر میکنه
                            </code>
                        </pre>
                    </div>
                <h3 id="adding-item-to-an-array-using-push">اضافه کردن اعضا به آرایه توسط push</h3>
                    <div>
                        <p>
                            اگه به کامیپوتر علاقه دارید یا قبلا سرچ زیاد کردید ، حتما در مورد پشته ها میدونید ؛ اگرم نمیدونید زیاد داستان سختی نیست به صورت کلی یعنی داده ایی که اول وارد میشه آخر خارج میشه (فرض کنید بشقاب هارو روی هم گذاشتید ، برای اینکه اولین بشقابی که گذاشتید رو بردارید (اون زیریه) ، نیازه که بشقاب های که آخر گذاشتید رو اول بردارید (بشقاب های رو)) به این حالت میگیم پشته! حالا چرا اینو گفتم؟ چون یه خورده مربوط میشه به تابع push و خواستم یکم اطلاعاتتون رو بیشتر کنم!
                            در هر صورت کار تابع push اینه که یه عضو به آخر آرایه تون اضافه کنه.
                        </p>
                        <pre>
                            <code>
                                // syntax
                                const arr  = ['item1', 'item2','item3']
                                arr.push('آیتم جدید')  // یه عضو جدید به آخر آرایه اضافه کردیم
                                console.log(arr) // ['item1', 'item2','item3','آیتم جدید']
                            </code>
                        </pre>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                numbers.push(6)
                                console.log(numbers) // -> [1,2,3,4,5,6]
                            </code>
                        </pre>
                    </div>
                <h3 id="removing-the-end-element-using-pop">حذف کردن اعضا از آرایه توسط pop</h3>
                    <div>
                        <p>
                            یه تابع هم داریم pop که یه عضو از آخر آرایه رو برامون حذف میکنه (دقیقا برای همین گفتم یه خورده به پشته ربط داره چون به آخر اضافه میشه و از آخر هم کم میشه)
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                numbers.pop() // -> یدونه عضو از آخر آرایه حذف میکنه ، به همین راحتی
                                console.log(numbers) // -> [1,2,3,4]
                            </code>
                        </pre>
                    </div>
                <h3 id="removing-an-element-from-the-beginning">حذف یک عنصر از ابتدا آرایه</h3>
                    <div>
                        <p>
                            حالا یکی میگه من نمیخوام از آخر آرایه چیزی حذف کنم و میخوام از اول آرایه حذف کنم ؛ اونموقع از تابع shift استفاده میکنید تا یه عضو از اول آرایه حذف کنید.
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                numbers.shift() // -> عضو اول آرایه رو حذف میکنه
                                console.log(numbers) // -> [2,3,4,5]
                            </code>
                        </pre>
                    </div>
                <h3 id="add-an-element-from-the-beginning">اضافه کردن یک عنصر به اول آرایه</h3>
                    <div>
                        <p>
                            همچنین یکی میگه من دوج ندالم به آخر آرایه چیزی اضافه کنم و میخوام به اولش اضافه کنم ؛ اونوقت جاوا اسکریپت میگه قفونت بجم عجیجم برای اینم تابع دارم و اسمش unshift و میتونید باهاش به اول آرایه عضو اضافه کنید :
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                numbers.unshift(0) // -> عدد 0 رو به اول آرایه اضافه میکنه
                                console.log(numbers) // -> [0,1,2,3,4,5]
                            </code>
                        </pre>
                        <p>
                            <b>
                                 تا یادم نرفته بگم که چرا تابع های pop ، push ، shift و unshift رو گفتم؛ شما به طور معمول میتونید با استفاده از دسترسی مستقیم به آرایه اعضای آرایه رو تغییر بدید ، اما نمیتونید اعضاشون رو مستقیم حذف کنید (این زیررو ببینید تا بهتر متوجه بشید : )
                            </b>
                        </p>
                        <pre>
                            <code>
                                 const arr = [12,13] // یه آرایه داریم با دوتا عضو
                                // میخوایم یه عضو بهش اضافه کنیم
                                arr[2] = 13  // الان به اندیس دوم آرایه 13 رو دادیم ، به این شکل به آرایه دو عضوی ما یه عضو اضافه میشه
                                /*
                                 حالا فرض کنید ما کلی اندیس توی آرایه امون داریم ، اونوقت به صرفه نیست که بشماریمشون تا یه عضو به آخر اضافه کنیم
                                 اونجاست که تابع
                                push
                                به کمکمون میاد
                                */

                                // حالا فرض کنید میخوایم این عضو آخری که اضافه کردیم رو حذف کنیم
                                delete arr[2]  // با استفاده از این دستور میتونیم عضو آخر رو حذف کنیم
                                /*
                                ولی اگه توجه کنید این روش هم برای آرایه هایی که عضو بیشتری دارن به ضرفه نیست پس از تابع
                                pop
                                استفاده میکنیم
                                */

                                // حالا فرض کنید میخوایم عضو اول رو حذف کنید
                                delete arr[0]  // این دستور عضو اول رو حذف میکنه و مشکلی توی آرایه های پر عضوی هم نداره
                                /*
                                اما یادتون باشه کلمه کلیدی
                                delete
                                نمیتونه عضو هارو کاملا پاک کنه یعنی توی مثال بالا با اینکه هم عضو اول رو حذف کردیم هم عضو آخر
                                بازم آرایه ما 3 تا عضو داره ولی عضو اول و آخرش خالیه ، پس این یه باگ به حساب میاد
                                برای همین بهتره از تابع های
                                pop , shift
                                استفاده کنیم
                                */

                                // حالا فرض کنید میخوایم به اول آرایمون یه عضو اضافه کنیم
                                /*
                                 روش مستقیمی برای اضافه کردن عضو به اول آرایه نداریم و هرکاری کنیم عضو اول قبلیمون توی آرایه با عضو جدیدمون جابه جا میشه
                                پس اینجا هم چاره ایی نداریم جز استفاده از تابع
                                unshift
                                */
                            </code>
                        </pre>
                    </div>
                <h3 id="reversing-array-order">معکوس کردن ترتیب یک آرایه</h3>
                    <div>
                        <p>
                            یدونه تابع خیلی ساده هم داریم به نام reverse که همونطوری که از روش پیداست باعث میشه آرایه ما دقیقا برعکس بشه (یعنی یه آرایه 3 عضوی ، عضو اولش میشه عضو سوم ، عضو سومش میشه عضو اول و عضو دومشم سر جای خودش میمونه)
                        </p>
                        <pre>
                            <code>
                                const numbers = [1, 2, 3, 4, 5]
                                numbers.reverse()
                                console.log(numbers) // [5, 4, 3, 2, 1]

                                numbers.reverse()
                                console.log(numbers) // [1, 2, 3, 4, 5]
                            </code>
                        </pre>
                    </div>
                <h3 id="sorting-elements-in-array">مرتب سازی در آرایه ها</h3>
                    <div>
                        <p>
                            یکی از مهم ترین توابع توی آرایه ها تابع sort ، این تابع باعث میشه آرایه ما مرتب بشه (یعنی اگه آرایه ایی از کلمات داریم اونا رو بر اساس حروف الفبا مرتب میکنه)
                        </p>
                        <pre>
                            <code>
                                const webTechs = [
                                'HTML',
                                'CSS',
                                'JavaScript',
                                'React',
                                'Redux',
                                'Node',
                                'MongoDB'
                                ]

                                webTechs.sort()
                                console.log(webTechs) // ["CSS", "HTML", "JavaScript", "MongoDB", "Node", "React", "Redux"]

                            </code>
                        </pre>
                        <p>
                            <b>
                                توجه کنید که این تابع بر روی رشته ها کار میکنه و برای مرتب سازی اعداد باید صبر کنید تا به توابع برسیم تا اونجا بگم چجوری میتونیم از این تابع برای مرتب سازی اعداد استفاده کنیم ، اگه الان
                                از این تابع برای اعداد استفاده کنیم 25 رو بزرگتر از 100 نشون میده چون کارکتر به کارکتر حساب میکنه و کارکتر اول 25 عدد 2 که از کارکتر اول عدد 100 که 1 هست بزرگتره و همچنین آگاه باشید که روی رشته های فارسی خیلی خوبه کار نمیکنه!
                            </b>
                        </p>
                    </div>
            <h2 id="array-of-arrays">آرایه ایی از آرایه ها (آرایه چند بعدی)</h2>
                    <div>
                        <p>
                            تا الان در مورد آرایه های یه بعدی صحبت کردیم (آرایه یه بعدی یعنی داخل خودش آرایه دیگه ایی نداره) ولی آرایه هایی داریم که عضو های خودشون
                            آرایه هستند ؛ برای مثال توی دنیای واقعی میتونم اینجوری بگم که فک کنید یه آرایه دارید به نام کلاس درس ، هر دانش آموز خودش یه عضو از این آرایه است و همچنین هر دانش آموز میتونه خودش یه آرایه باشه و داخلش اسم ، سن و جنسیتش قرار بگیره.(به این مثال میگیم آرایه 2 بعدی چون یه آرایه داخلش یه آرایه دیگه است ؛ حالا اگه داخل یک آرایه یه آرایه قرار بگیره و داخل اون آرایه هم یه آرایه دیگه ، میشه آرایه 3 بعدی)
                            <br>
                            من این زیر یه مثال از آرایه دو بعدی براتون میزنم و بهتون میگم چجوری میتونید به اعضاشون دسترسی پیدا کنید :
                        </p>
                        <pre>
                            <code>
                                const array = [
                                    [1,2,3],
                                    [4,5,6]
                                ]
                                // آرایه بالا یه آرایه دو بعدیه که با اینجوری نوشتن میتونید بهتر بفهمید چند بعدیه

                                console.log(array[0])  // print : [1,2,3]
                                //اگه عضو اولش رو بخوایم ببینم به عضو اول که یک آرایه هست رو برمیگردونه
                                console.log(array[1][2])  // print : 6
                                // اینجا ما از دوتا براکت اسفتفاده کردمی چون آرایه دو بعدیه
                                // ما اینجا میخوایم عضو سوم از عضو دوم آرایه رو بدست بیاریم که از این سیسنتکس اسفاده میکنیم

                                // تمرین کنید و ببینید چجوری میتونید عضو دوم از عضو اول آرایه رو بدست بیارید (2)
                            </code>
                        </pre>
                        <p>
                            حالا که در مورد آرایه های چند بعدی هم یاد گرفتید این زیر چنتا مثال دیگم میزنم تا بیشتر آشنا بشید :
                        </p>
                        <pre>
                            <code>
                                const frontEnd = ['HTML', 'CSS', 'JS', 'React', 'Redux']
                                const backEnd = ['Node','Express', 'MongoDB']
                                const fullStack = [frontEnd, backEnd]
                                console.log(fullStack)   // [["HTML", "CSS", "JS", "React", "Redux"], ["Node", "Express", "MongoDB"]]
                                console.log(fullStack.length)  // 2
                                console.log(fullStack[0])  // ["HTML", "CSS", "JS", "React", "Redux"]
                                console.log(fullStack[1]) // ["Node", "Express", "MongoDB"]
                                console.log(fullStack[0][3]) // "React"
                                console.log(fullStack[1][0]) // "Node"

                                // این پایینم یه آرایه 3 بعدی ببینید
                                const Array3D = [
                                    [1 , 2 , 3] ,
                                    [
                                        ["name" , "age"] ,
                                        ["sex" , "color"]
                                    ]
                                ]
                                console.log(Array3D[1]) // [["name","age"],["sex" , "color"]]
                                console.log(Array3D[1][1]) // ["sex" , "color"]
                                console.log(Array3D[1][1][1]) // "color"

                                // هرچقدر بعد یه آرایه بیشتر بشه به همون تعداد براکت اضافه میشه
                            </code>
                        </pre>
                        <p>
                            <b>
                                خب خب ، خسته نباشید بلخره امروزم تموم شد و تا الان خیلی چیزای زیادی یاد گرفتید! تمرین فراموش نشه و در مورد آرایه های چند بعدی هم حتما تمرین کنید چون یخورده درکش ممکنه سخت باشه؛ تمرینای امروزم یادتون نره قشنگا!
                            </b>
                        </p>
                    </div>
        <h1 id="-exercise">💻 تمرینات</h1>
            <h2 id="exercise-level-1">تمرین: سطح 1</h2>
                <div>
                    <ol>
                        <li>یه آرایه خالی ایجاد کنید.</li>
                        <li>یه آرایه ایجاد کنید که 6 تا عضو داشته باشه و عضواش نصفشون رشته و نصفشون عدد باشه.</li>
                        <li>یه آرایه دلخواه درست کنید و طولشو پیدا کنید.</li>
                        <li>اولین عضو ، آخرین عضو و عضو وسط آرایتون رو پیدا کنید (برای پیدا کردن عضو وسط باید طول آرایه رو تقسیم بر دو کنید تا اندیس وسط به دست بیاد! اینم راهنمایی من)</li>
                        <li>یه آرایه 2 بعدی ایجاد کنید.</li>
                        <li>روی آرایه 2 بعدی بالا تمرین کنید و اعضاشو روی کنسول نمایش بدید.</li>
                        <li>یه آرایه جدید درست کنید و با تابع مرتبش کنید.</li>
                        <li>حالا همون تابع مرتب شده رو برعکس کنید (تابع reverse)</li>
                        <li>حالا 2 تا عضو اول آرایتون رو حذف کنید (از تابع splice استفاده کنید)</li>
                    </ol>
                </div>
            <h2 id="exercise-level-2">تمرین: سطح 2</h2>
                <div>
                   <ol>
                       <li>یه فایل به نام text.js بسازید و داخلش فقط رشته زیر رو قرار بدید
                        <pre>
                            <code>
                                let text = 'I love teaching and empowering people. I teach HTML, CSS, JS, React, Python.'
                            </code>
                        </pre>
                       </li>
                       <li>یه فایل دیگه به نام tools.js بسازید و داخل این فایل ابتدا نقطه و کاما رو حذف کنید و بعد هر کلمه رو تبدیل به یک عضو آرایه کنید مثل زیر
                       <pre>
                           <code>
                               ["I" , "love" , "teaching" , "and" , "empowering" , "people" , "I" , "teach" , "HTML" , "CSS" , "JS" , "React" , "Python"]
                           </code>
                       </pre>
                           در آخر هم این آرایه رو روی کنسول نمایشه بدید (توجه کنید که باید فایل index.html به هردو فایل text.js و tools.js دسترسی داشته باشه تا با باز کردن index.html بتونید آرایه رو روی کنسول مشاهده کنید)
                           <br>
                           <b>توجه داشته باشید که باید دوتا فایل رو به فایل index.html متصل کنید (از طریق تگ script) با این کار هردو فایل tools و text با هم ارتباط دارن و میتونید رشته ابتدایی رو ویرایش کنید!</b>
                       </li>
                       <li>حالا بررسی کنید که داخل آرایه PHP وجود داره یا نه ، اگه وجود داشت "بله" رو چاپ کنه و اگه وجود نداشت با استفاده از تابع push به آخر آرایه اضافه کنه</li>
                   </ol>
                </div>
            <h2 id="exercise-level-3">تمرین: سطح 3</h2>
                <div>
                    <ol>
                        <li>آرایه ایی ایجاد کنید با 20 تا عضو که اعداد 20 تا 40 رو پوشش بده</li>
                        <li>آرایه رو مرتب کنید و حداقل سن و حداکثر سن رو با استفاده از توابع ریاضی Math پیدا کنید</li>
                        <li>میانگین سنی رو پیدا کنید و روی کنسول چاپ کنید</li>
                        <li>آرایه جدیدی بسازید و یکی از اعضا رو برابر آرایه قبلی کنید (آرایه 2 بعدی)</li>
                        <li>با آرایه دو بعدی بالا تمرین کنید و تمامی توابع بالا رو روشنون تست کنید</li>
                    </ol>
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