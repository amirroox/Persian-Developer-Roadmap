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
        حلقه ها
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
        <li><a href="#-day-6">📔 روز ششم</a>
            <ul>
                <li><a href="#loops">حلقه ها (Loops)</a>
                    <ul>
                        <li><a href="#for-loop">حلقه فور (for Loop)</a></li>
                        <li><a href="#while-loop">حلقه وایل (while loop)</a></li>
                        <li><a href="#do-while-loop">حلقه دو وایل (do while loop)</a></li>
                        <li><a href="#for-of-loop">حلقه برای آرایه ها (Foreach)</a></li>
                        <li><a href="#break">دستور break</a></li>
                        <li><a href="#continue">دستور continue</a></li>
                    </ul>
                </li>
                <li><a href="#-exercises-day-6">💻 تمرینات روز ششم</a>
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
    <h1 id="-day-6">📔 روز ششم</h1>
        <h1 id="loops">حلقه ها (Loops)</h1>
            <div>
                <p>
                    امروز قراره در مورد تکرار و حلقه ها صحبت کنیم ، ولی باید از قبل توضیح بدم که حلقه و تکرار یعنی چی ؟ ما تو زندگیمون خیلی چیزا رو به صورت روتین انجام میدیم
                    مثلا صبح پا میشیم ، شب میخوابیم (حالا بعضیا شب بیدارن روز میخوابن به من ربطی نداره!) و یا خیلی از چیزایی که در روز انجام میدیم تکراری هستن ، مثلا هر شب ثبل از خواب
                    مسواک میزنیم و این هرروز به یک شکل تکرار میشه ، ما توی برنامه نویسی هم تکرار داریم و برای اینکه کار های تکراری رو انجام بدیم از حلقه ها استفاده میکنیم ؛
                    فرض کنید میخواید اعداد 1 تا 1000 رو توی کنسول چاپ کنید ، اگه بدون حلقه بخواید این کارو کنید زندگیتون زاره! چون باید 1000 بار از دستور console.log استفاده کنید
                    که هم وقتتونو میگیره هم 1000 خط به دستوراتون اضافه میشه (کسی دوست نداره برای یه کار ساده دستورات زیادی بنویسه! و یه ضرب المثل هست که میگه اگه تو برنامتون دستوری تکرار شد ، حتما میتونید دستوراتتونو کم کنید!)
                </p>
            </div>
            <h2 id="for-loop">حلقه فور (for Loop)</h2>
                <div>
                    <p>
                        اولین حلقه ایی که میخوایم یاد بگیرم حلقه for ، این حلقه برای دستوراتی استفاده میشه که ما میدونیم قراره چند بار تکرار بشه! پس ححواستون باشه اگه نمیدونید
                        یه دستور قراره چند بار تکرار بشه از این حلقه استفاده نکنید؛ من این پایین سینتکس استفاده از این دستور رو مینویسم و توضیح میدم چجوری کار میکنه :
                    </p>
                    <pre>
                        <code>
                            // For loop structure
                            for(افزایش یا کاهش, شرطمون, مقدار دهی اولیه){
                                // دستوراتی که میخوایم تکرار بشه
                            }

                            /*
                            با توجه به سینتکس بالا ، اولین چیزی که توی تکرار برامون مهمه تعداد تکراره ، که با استفاده از مقدار اولیه و شرط
                            میتونیم تعداد تکرارمون رو مشخص کنید
                            مقدار اولیه یعنی از چه چیزی تکرارمون شروع بشه و شرط یعنی تا کی ادامه پیدا کنه
                            قسمت کاهش یا افزایش هم توی مثال پایین میبینیم چجوری کار میکنه
                            */
                        </code>
                    </pre>
                    <pre>
                        <code>
                            // اینجا میخوایم اعداد 0 تا 5 رو چاپ کنیم
                            for(let i = 0; i <= 5; i++){
                                console.log(i)
                            }

                            /*
                            قسمت اول ، یعنی مقدار دهی اولیه ما یه متغیر تعریف کردیم که برابر با 0
                            تو قسمت دوم که شرطمونه گفتیم تا زمانی که متغیرمون کمتر از 5 تکرار رو برامون انجام بده
                            و در قسمت سوم گفتیم بعد از اجرای هر دور از حلقه یدونه به متغیرمون اضافه کن
                            حس میکنم متوجه شدید که چجوری کار میکنه ولی اگه بخوام واضح تر بگم اینجوری میشه که
                            اول یه متغیر تعریف میکنیم و حتما یه مقدار اولیه بهش میدیم ، توی مرحله دوم حلقه چک میکنه که ایا شرط درسته یا نه
                            اگه درست بود ، دستوراتمون رو اجرا میکنه (که اینجا دستوراتمون همون متغیر رو چاپ میکنه)
                            و بعد از اجرای دستورات میره قسمت (افزایش یا کاهش)
                            الان توی این حلقه ما به متغیر یه واحد اضافه کردیم ، یعنی الان متغیرمون از 0 میشه 1
                            حالا دوباره شرط رو بررسی میکنه ، که هنوزم درسته پس دستوراتو دوباره اجرا میکنه و بازم میره قسمت (افزایش یا کاهش)
                            حالا متغیرمون از 1 به 2 تبدیل میشه و هنوزم شرطمون درسته پس بازم دستورات ادامه پیدا میکنه
                            این روند تا جایی ادامه پیدا میکنه که شرط درست نباشه
                            بلخره بعد از 6 دور از حلقه متغیر از 5 میشه 6 و اونوقت شرط درست نیست (6 از 5 کوچیک تر نیست)
                            حالا دستوری اجرا نمیشه و از حلقه میزنه بیرون

                            توجه کنید که اگه قسمت (افزایش یا کاهش) نداشته باشیم متغیرمون همیشه 0 میمونه و 0 همیشه از 5 کوچیک تره
                            پس حلقه ما تا بی نهایت ادامه پیدا میکنه پس قسمت افزایش یا کاهش برامون خیلی مهمه
                            */
                        </code>
                    </pre>
                    <p>
                        این زیر چنتا مثال دیگه براتون اوردم عشق کنید :
                    </p>
                    <pre>
                        <code>
                            for(let i = 5; i >= 0; i--){
                              console.log(i)
                            }
                            // 5 4 3 2 1 0
                            /*
                            تو این قسمت متغیرمون از اول 5 و شرطمون اینه که متغیر بیشتر از 0 باشه
                            و قسمت کاهش یا افزایشمون این دفعه کاهشیه و هر دور از حلقه یدونه از متغیرمون کم میکنه
                            */


                            // این مثال یکم باحال تره
                            const numbers = [1, 2, 3, 4, 5]
                            let sum = 0
                            for(let i = 0; i < numbers.length; i++){
                              sum  = sum + numbers[i]
                            }
                            console.log(sum)  // 15
                            /*
                            همه چی رو من نباید توضیح بدم ، اینو خودتون درک کنید همه چیشم از قبل یاد گرفتید
                            کار این دستور هم اینه که اعضای آرایه مارو باهم جمع کنه
                            دستور
                            number.length
                            هم که تعداد اعضای آرایه رو مشخص میکنه و اینجوری نیازی نداریم اعضا رو بشموریم برای شرطمون
                            اینجوری دستورمون پویا میشه
                            (پویا یعنی نیاز به تغییر دستی نداریم و اگه آرایه رو بیشتر کنیم به صورت خودکار بازم تمام اعضا رو جمع میکنه)
                            */
                        </code>
                    </pre>
                </div>
            <h2 id="while-loop">حلقه وایل (while loop)</h2>
                <div>
                    <p>
                        یکی دیگه از حلقه ها ، حلقه while ، این حلقه خیلی راحت تره فهمیدنش نسبت به حلقه for و یادتون باشه از این حلقه برای
                        تکرار هایی استفاده میکنن که اکثرا نمیدونن چند بار قراره اجرا بشه
                    </p>
                    <pre>
                        <code>
                            // سینتکسش خیلی آسونه
                            while(شرط) {
                                // دستورات ما
                            }
                            // این حلقه تا زمانی دستورات رو اجرا میکنه که شرط داخل پرانتز درست باشه و اگه غلط بشه از حلقه میزنه بیرون
                        </code>
                    </pre>
                    <pre>
                        <code>
                            let i = 0
                            while (i <= 5) {
                              console.log(i)
                              i++
                            }
                            /*
                            اینم دستور هم مثل حلقه بالایی اعداد 0 تا 5 رو چاپ میکنه فقط با تفاوت که داخل خود حلقه قسمت (کاهش یا افزایش)
                            رو داریم و اگر نداشته باشیم ، این حلقه هم یه حلقه بی نهایت میشه و تا صبح میخواد اجرا بشه
                            یادتون باشه حلقه وایل فقط نیاز به یه شرط داره و چیز دیگه ایی نیاز نداره
                            */
                        </code>
                    </pre>
                </div>
            <h2 id="do-while-loop">حلقه دو وایل (do while loop)</h2>
                <div>
                    <p>
                        حلقه دو وایل یه حلقه جدید نیست و همون حلقه while فقط یه تفاوت ریزی داره و اونم اینه که توی حلقه while اول شرط چک میشه و بعد دستورات اجرا میشه
                        و اگه همون اول شرط غلط باشه ، داخل حلقه نمیره اما حلقه do while حداقل یه بار اجرا میشه ، یعنی اول دستورات شما رو اجرا میکنه و بعد شرط رو چک میکنه
                        برای همین همیشه حداقل یکبار اجرا شدن رو شاخشه!
                    </p>
                    <pre>
                        <code>
                            // سینتکسش شبیه همون وایل خودمونه
                            do {
                                // دستورات شما
                            } while (شرط شما)

                            // اینجا اول دستورات شما داخل بلاک (داخل آکولاد) اجرا میشه و آخر شرط بررسی میشه و اگه درست بود دوباره اجرا میشه
                            // و اگرم درست نبود از حلقه کذایی میزنه بیرون
                        </code>
                    </pre>
                </div>
            <h2 id="for-of-loop">حلقه برای آرایه ها (Foreach)</h2>
                <div>
                    <p>
                        ما یه حلقه دیگه به نام forEach داریم که بعدا باهاش آشنا میشیم اما فعلا باید اینو یاد بگیرد که ما از حلقه for میتونیم یه شکل دیگه هم استفاده کنیم
                        و این شکل جدید برای آرایه ها به کار میره و تو کارشم خیلی قویه!
                    </p>
                    <pre>
                        <code>
                            for (const element of arr) {
                                // دستورات شما
                            }
                        </code>
                    </pre>
                    <p>
                        شاید سینتکس بالا یکم براتون عجیب باشه ولی خیلی خیلی راحته! در واقع ما به حلقه for میگیم داداش من یه آرایه دارم میشه توی هر دور از حلقه از اندیس 0 شروع کنی بیای بالا؟ اینی که گفتم یعنی چی؟ این شکل از حلقه
                        یعنی یه آرایه به حلفه پاس میدید و اون توی هر دور از حلقه یه عضو از آرایه رو در نظر میگیره (دور اول عضو اول آرایه ، دور دوم عضو دوم و الی آخر) اینجوری تا وقتی ادامه پیدا میکنه
                        که اعضای آرایه تموم بشه ، پس خیلی راحت میشه فهمید تعداد تکرار این نوع حلقه به تعداد اعضای آرایه وابسته است و مارو از (کاهش یا افزایش) و حتی شرط بی نیاز میکنه؛ حالا برسیم سر سیتکس خودمون
                        که نوشته const element of arr دستور const که قبلا میدونید یعنی یه ثابت تعریف میکنه و ما اول یه ثابت به نام element تعریف کردیم
                        بعد از کلمه کلیدی of استفاده کردیم و آخر هم آرایه خودمون رو نوشتیم؛ نحوه کار به این شکله که حلقه for آرایه arr رو در نظر میگیره و هر عضو رو داخل ثابت element میریزه (هر اسم دیگه ایی هم میتونید بزارید)
                        اینجوری ما میتونیم از اعضای آرایه داخل حلقه استفاده کنیم به همین راحتی!این زیرو ببیند بیشتر متوجه میشید :
                    </p>
                    <pre>
                        <code>
                            const numbers = [1, 2, 3, 4, 5]

                            for (const num of numbers) {
                              console.log(num)
                            }

                            /*
                            الان ما یه آرایه 5 عضوی تعریف کردیم و داخل حلقه توی دور اول ، عضو اول توی ثابت
                            const
                            قرار میگیره و عضو اول هم که 1 ، پس یک چاپ میشه
                            توی دور دوم حلقه ، عضو دوم توی ثابت قرار میگره و دوباره چاپ میشه (عدد 2)
                            همینجوری حلقه ادامه پیدا میکنه تا برسه به آخرین عضو که 5 ، 5 هم چاپ میشه و میبینه وای دیگه عضوی نمونده
                            پس از حلقه خارج میشه
                            */


                            // اینم یه مثال دیگه از این نوع حلقه
                            const countries = ['Iran', 'Sweden', 'Norway', 'Denmark', 'Iceland']
                            const newArr = []
                            for(const country of countries){
                              newArr.push(country.toUpperCase())
                            }

                            console.log(newArr)  // ["IRAN", "SWEDEN", "NORWAY", "DENMARK", "ICELAND"]

                            // دستور پوش که یادتون نرفته به آرایه یه عضو اضافه میکنه
                            // توی دستور بالا عضو های آرایه تبدیل به حروف بزرگ میشن و به یه آرایه دیگه اضافه میشن به همین خوشمزگی
                        </code>
                    </pre>
                </div>
            <h2 id="break">دستور break</h2>
                <div>
                    <p>
                        تا الان در مورد حلقه ها فهمیدیم ، ولی شاید براتون سوال باشه اگه یه موقعه خواستیم وسط حلقه از حلقه خارج بشیم باید چیکار کنیم ؟ یه دستور داریم به نام break
                        که برای خروج از حلقه استفاده میشه (در زمانی که حلقه شرطش درسته اما ما نمیخوایم ادامه پیدا کنه) ، این زیر هم توی while و هم توی for مثالشو زدم لذت ببرید :
                    </p>
                    <pre>
                        <code>
                            let i = 1 ;
                            while(true) {
                                console.log(i)
                                if(i==5) {
                                    break;
                                }
                            }
                            /*
                            توی دستور بالا شرط همیشه درسته پس اگه جایی از حلقه خارج نشیم تا ابد ادامه پیدا میکنه
                            برای همین یه شرط گذاشتیم و گفتیم اگه متغیرمون برابر با 5 شد از حلقه بزن بیرون
                            دستور بالا دقیقا مثل دستور پایینه
                            */
                            let i = 1 ;
                            while(i <= 5) {
                                console.log(i)
                            }


                            // اینم توی حلقه فور
                            for(let i = 0; i <= 5; i++){
                              if(i == 3){
                                break
                              }
                              console.log(i)
                            }
                            /*
                            اینجا هم اعداد 0 1 2 رو چاپ میکنه و وقتی متغیر برابر با 3 شد از حلقه میپره بیرون
                            */
                        </code>
                    </pre>
                    <p>
                        <b>
                            شاید بگید خب نیازی به این دستور نیست ، و ما میتونیم از اول شرط درست حسابی بزاریم ، اما باید بگم همیشه اون ما نیستیم که شرط میزایم
                            ممکنه کاربر یه شرط بزاره ، ممکنه ما ورودیمون از یه جای دیگه باشه و هزاران شکل متفاوت که نمیتونیم پیش بینی کنیم ، برای همین داخل حلقه شرط میزاریم تا اگه همچین شرایطی پیش اومد
                            از حلقه قل بخوریم بریم بیرون!
                        </b>
                    </p>
                </div>
            <h2 id="continue">دستور continue</h2>
                <div>
                    <p>
                        یه دستور کنترلی دیگه مثل break داریم ولی کار این یکی دستور خروج از حلقه نیست بلکه رفتن به دور بعدیه حلقه است ، مثلا فرض کنید میخواید اعضای یه آرایه که اسم یه خانواده هستن رو چاپ کنید ، تا اینجا با حلقه میتونید این کارو انجام بدید ولی
                        بعدا یه نفر از اعضای خانواده کم شد و نخواستید اونو چاپ کنید (خانواده بجز فلانی) اونوقت نیازی که از روی اون یه عضو بپرید و بگید حلقه جونم این ینفرو چاپ نکن (این دور از حلقه رو اجرا نکن و برو دور بعدی) ، با مثال زیر بهتر میتونید درکش کنید :
                    </p>
                    <pre>
                        <code>
                            for(let i = 0; i <= 5; i++){
                              if(i == 3){
                                continue
                              }
                              console.log(i)
                            }
                            /*
                            توی دستور بالا شرط گذاشتیم که اگه متغیرمون برابر با 3 شد برو دور بعدی
                            (حواستون باشه که وقتی توی حلقه فور میره دور بعدی اول کاهش یا افزایش رو انجام میده و بعد شرط رو چک میکنه)
                            */

                            const arr = ['amir' , 'hadith' , 'mohammad' , 'yeganeh' ]
                            for(const elm of arr) {
                                if(elm == 'hadith') continue;
                                console.log(elm)
                            }
                            // اینجا همه رو چاپ میکنه جز حدیثو
                        </code>
                    </pre>
                    <p>
                        امروزم تموم شد! تمرین یادتون نره و حتما اگه چیزی رو خوب درک نکردید سرچ کنید تا مثال های بیشتری ببنید بیشتر یاد بگیرید و تمرینات روزانه ایی که براتون گذاشتمم فراموش نشه!
                    </p>
                </div>
        <h1 id="-exercises-day-6">💻 تمرینات روز ششم</h1>
            <h2 id="exercises-level-1">تمرینات: سطح 1</h2>
                <div>
                    <ol>
                        <li>اعداد 0 تا 100 رو با تمامی حلقه ها بنویسید</li>
                        <li>توی حلقه بالا اعداد 13 و 22 رو چاپ نکنید (دستور continue)</li>
                        <li>حلقه ایی بنویسید که کد زیرو چاپ کنه
                        <pre>
                            <code>
                                #
                                ##
                                ###
                                ####
                                #####
                                ######
                                #######
                            </code>
                        </pre>
                        </li>
                        <li>حلقه ایی بنویسید که فقط اعداد زوج بین 0 تا 100 رو چاپ کنه</li>
                        <li>همین کار بالا رو برای اعداد فرد هم بکنید</li>
                        <li>یکم سخت ترشم میکنم ، بین اعداد 0 تا 100 فقط اعداد اول رو چاپ کنید (اعدادی که فقط بر خودشون و یک بخش پذیرن)</li>
                    </ol>
                </div>
            <h2 id="exercises-level-2">تمرینات: سطح 2</h2>
                <div>
                    <ol>
                        <li>حلقه ایی بنویسید که 5 بار اعداد رندوم 6 رقمی چاپ کنه</li>
                        <li>حلقه بالا رو جوری تغییر بدید که یه شناسه 6 رقمی ایجاد کنه (3 رقم عدد - 3 رقم حروف)</li>
                        <li>آرایه ایی ایجاد کنید که توش 10 تا کشور باشه</li>
                        <li>با حلقه تمام کشور هارو چاپ کنید جز اونایی که کمتر از 6 کارکتر دارن</li>
                        <li>همون آرایه کشور هارو به صورت معکوس چاپ کنید</li>
                    </ol>
                </div>
            <h2 id="exercises-level-3">تمرینات: سطح 3</h2>
                <div>
                    <ol>
                        <li>همون آرایه کشور ها رو به شکل uppercase داخل یه آرایه دیگه ذخیره کنید</li>
                        <li>تو نت سرچ کنید و تمرینات مروبط به حلقه ها رو بررسی و حل کنید</li>
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