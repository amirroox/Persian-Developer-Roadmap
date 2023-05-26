<?php include "../Constants.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../assets/css/SeedStyle.css">
    <?php include "../public/main/meta-main.php" ?>
    <title>Documentation</title>
    <style>
        body {
            background-color: #4c4c4c;
            color: white;
            overflow-x: hidden;
        }

        div.fa {
            border-left: 2px solid indianred;
            padding: 0 1rem;
        }

        div.en {
            border-right: 2px solid indianred;
            padding: 0 1rem;
        }

        div.en ul li, div.en ol li {
            padding-left: 2rem;
            padding-top: 1rem;
        }

        div.fa ul li, div.fa ol li {
            padding-right: 2rem;
            padding-top: 1rem;
        }

        div ul li::before {
            content: '> ';
            color: yellow;
            font-weight: bolder;
        }

        div ol li {
            counter-increment: li
        }

        div ol li::before {
            content: counter(li) "- ";
            color: indianred;
            font-weight: bolder;
            /*margin-right: .5rem;*/
        }

        div ul {
            padding-bottom: .5rem;
        }

        .h-menu :not(ul)::before {
            content: '>> ';
            color: red;
        }

        .s-menu :not(ul)::before {
            content: '>>> ';
            color: aqua;
        }

        .s2-menu :not(ul)::before {
            content: '# ';
            color: orange;
        }

        #images {
            text-align: center;
            text-align: -webkit-center;
        }

        #images div div div {
            width: 20rem;
            height: 20rem;
            margin: 1rem 0;
            border-radius: 50%;
            overflow: hidden;
        }

        #images img {
            height: 100%;
            object-fit: cover;
        }

        #images hr {
            border-color: black;
        }

        .myImg {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
        }

        .myImg:hover {
            opacity: 0.7;
        }

        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            padding-top: 100px;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.9);
        }

        .modal-content {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
        }

        #caption {
            margin: auto;
            display: block;
            width: 80%;
            max-width: 700px;
            text-align: center;
            color: #ccc;
            padding: 10px 0;
            height: 150px;
        }

        .modal-content, #caption {
            animation-name: zoom;
            animation-duration: 0.6s;
        }

        @keyframes zoom {
            from {
                transform: scale(0.1)
            }
            to {
                transform: scale(1)
            }
        }

        .close {
            position: absolute;
            top: 15px;
            right: 35px;
            color: #f1f1f1;
            font-size: 40px;
            font-weight: bold;
            transition: 0.3s;
        }

        .close:hover,
        .close:focus {
            color: #bbb;
            text-decoration: none;
            cursor: pointer;
        }

        @media only screen and (max-width: 700px) {
            .modal-content {
                width: 100%;
            }
        }

        a:hover li {
            color: indianred;
            transition: all 500ms;
        }
    </style>
</head>
<body>
<div class="row">
    <h1 style="text-align: center">Documentation</h1>
    <div class="col-md-6" style="direction: rtl">
        <h2 style="margin-right: 2rem">پوشه بندی</h2>
        <div class="fa" style="border: none">
            <ul>
                <li class="h-menu">
                    assets (فایل های استایل)
                    <ul>
                        <li>css (استایل های اصلی)</li>
                        <li>fonts (تمام فونت ها)</li>
                        <li>img (عکس های اصلی)</li>
                        <li>js (فانکشن های پر استفاده)</li>
                        <li>vendor (کتابخوانه ها و هلپر ها)</li>
                    </ul>
                </li>
                <li class="h-menu">
                    public (تمام صفحات)
                    <ul>
                        <li>Main (هدر ، فوتر ، متالینک ها)</li>
                        <li class="s-menu">
                            Pages (صفحات اصلی نقشه راه ها)
                            <ul>
                                <li class="s2-menu">
                                    NameRoadMap (اسم نقشه راه)
                                    <ul>
                                        <li>bin (فایل های svg و pdf برای نقشه راه)</li>
                                        <li>practice</li>
                                        <li>index.php (صفحه اصلی نقشه راه)</li>
                                    </ul>
                                </li>
                                <li>style.css (استایل برای تمام نقشه راه ها)</li>
                            </ul>
                        </li>
                        <li class="s-menu">
                            Topics (توضیحات بخش های مختلف نقشه راه)
                            <ul>
                                <li class="s2-menu">
                                    NameTopics
                                    <ul>
                                        <li>bin (تمام توضیحات نقشه راه (برای هر نقشه راه جدا))</li>
                                        <li>images (عکس های مورد نیاز برای موضوعات)</li>
                                        <li>index.php (صفحه اصلی موضوعات برای هر نقشه راه)</li>
                                    </ul>
                                </li>
                                <li>livesearch.php (فایل آیجکس برای سرچ موضوعات)</li>
                                <li>MakeTopics.php (فایل ایجاد قالب از موضوعات به صورت خودکار)</li>
                                <li>templateTopics.php (قالب آماده برای موضوعات)</li>
                                <li>style.css (استایل برای همه موضوعات)</li>
                            </ul>
                        </li>
                        <li>AjaxHandler.php (آیجکس برای باز کردن موضوعات از طریق نقشه راه)</li>
                    </ul>
                </li>
                <li>HelpForContributors (راهنمای توسعه)</li>
                <li>Constants.php (مقادیر اولیه و ثابت سایت)</li>
                <li>index.php (خانه)</li>
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <h2 style="margin-left: 2rem">Directory</h2>
        <div class="en" style="border: none">
            <ul>
                <li class="h-menu">
                    assets (File Of Styles)
                    <ul>
                        <li>css (Style All Main)</li>
                        <li>fonts (All Fonts)</li>
                        <li>img (Main Images)</li>
                        <li>js (Main Js)</li>
                        <li>vendor (Helper and vendors)</li>
                    </ul>
                </li>
                <li class="h-menu">
                    public (All Pages)
                    <ul>
                        <li>Main (Header , Footer , MetaLink)</li>
                        <li class="s-menu">
                            Pages (Main Road Maps)
                            <ul>
                                <li class="s2-menu">
                                    NameRoadMap
                                    <ul>
                                        <li>bin (RoadMap.svg And RoadMap.pdf For Download)</li>
                                        <li>practice</li>
                                        <li>index.php (Main page)</li>
                                    </ul>
                                </li>
                                <li>style.css (Style For All RoadMaps)</li>
                            </ul>
                        </li>
                        <li class="s-menu">
                            Topics (Description of different parts of the road map)
                            <ul>
                                <li class="s2-menu">
                                    NameTopics
                                    <ul>
                                        <li>bin (Topics)</li>
                                        <li>images (images For Topics(bin))</li>
                                        <li>index.php (Main Page Of Topics)</li>
                                    </ul>
                                </li>
                                <li>livesearch.php (Search Ajax For All Topics)</li>
                                <li>MakeTopics.php (Faker Template For Topics in RoadMaps - Run)</li>
                                <li>templateTopics.php (Faker Template For Topics in RoadMaps - content)</li>
                                <li>style.css (Style For all Topics)</li>
                            </ul>
                        </li>
                        <li>AjaxHandler.php (Ajax Open Box For Road Map Topics)</li>
                    </ul>
                </li>
                <li>HelpForContributors (Helper Doc)</li>
                <li>Constants.php (Constant and Initial Site)</li>
                <li>index.php (Home Page)</li>
            </ul>
        </div>
    </div>
</div>

<br>
<hr>
<br>
<hr>
<br>

<div class="row">
    <h1 style="text-align: center">Use and Make</h1>
    <div class="col-md-6 " style="direction: rtl">
        <h2 style="margin-right: 2rem">راهنمای توسعه</h2>
        <div class="fa">
            <ol>
                <li>نیازی به تغییر استایل ها ندارید (الزامی در تغییر پوشه assets وجود ندارد)</li>
                <li>نیازی به تغییر کلیات و فانکشن های نوشته شده نیست !</li>
                <li>
                    پوشه public دارای 3 بخش مجزا است
                    <ul>
                        <li>Main (نیازی به تغییر این بخش نیست)</li>
                        <li>
                            pages (تمامی نقشه راه ها در اینجا تعریف میشود)
                            <ul>
                                <a href="#directory-road">
                                    <li>
                                        پوشه ایی ایجاد کنید به نام نقشه راه مورد نظر (مثال : Frontend) (میتوانید از پوشه
                                        Frontend یک کپی بگیرید و اسم آن را تغییر دهید)
                                        <ul>
                                            <li>bin (فایل svg و pdf نقشه راه را در اینجا بگذارید (دقیقا با نام نقشه راه
                                                (پوشه) یکسان باشد))
                                            </li>
                                            <li>practices</li>
                                            <li>index.php (نیازی به تغییر و ویرایش ندارید ، به طور خودکار svg شما را لود
                                                میکند)
                                            </li>
                                        </ul>
                                    </li>
                                </a>
                                <li>style.css (این استایل برای تمامی صفحات اصلی نقشه راه است)</li>
                            </ul>
                        </li>
                        <li>
                            توضیحات هر نقشه راه (Topics)
                            <ul>
                                <a href="#directory-road">
                                    <li>
                                        پوشه ایی ایجاد کنید به نام نقشه مورد نظر (مثال : Frontend) (میتوانید از پوشه
                                        Frontend یک کپی بگیرید و اسم آن را تغییر دهید)
                                        <ul>
                                            <li>bin (موضوعات مختلف هر نقشه راه در این قسمت قرار میگیرد)</li>
                                            <li>images (عکس های مورد نیاز هر یک از فایل های داخل پوشه bin)</li>
                                            <li>index.php نیازی به تغییر ندارد و به طور خودکار لود میشود</li>
                                        </ul>
                                    </li>
                                </a>
                                <li>livesearch.php فایلی برای قسمت سرچ میباشد و نیازی به تغییر ندارد</li>
                                <li>MakeTopics.php فایلی برای ایجاد قالب تاپیک ها میباشد (توضیحات مربوط در بخش پایین)
                                </li>
                                <li>style.css استایل همه ی توضیحات میباشد و نیاز به تغییر ندارد</li>
                                <li>templateTopics.php قالب اولیه موضوعات میباشد</li>
                            </ul>
                        </li>
                        <li>AjaxHandler.php فایلی برای باز کردن توضیحات در نقشه راه ها میباشد و نیازی به تغییر ندارد
                        </li>
                    </ul>
                </li>
                <li>Constants.php فایل اولیه و ثابت های را شامل میشود</li>
                <li>index.php صفحه خانه است</li>
            </ol>
        </div>
    </div>
    <div class="col-md-6">
        <h2 style="margin-left: 2rem">Development guide</h2>
        <div class="en">
            <ol>
                <li>You don't need to change the styles (there is no need to change the assets folder)</li>
                <li>There is no need to change the written generalities and functions!</li>
                <li>
                    The public folder has 3 separate sections
                    <ul>
                        <li>Main (no need to change this part)</li>
                        <li>
                            pages (all roadmaps are defined here)
                            <ul>
                                <a href="#directory-road">
                                    <li>
                                        Create a folder with the name of the desired roadmap (example: Frontend) (you
                                        can
                                        take a copy of the Frontend folder and change its name)
                                        <ul>
                                            <li>bin (put the svg and pdf file of the road map here (exactly the same as
                                                the
                                                road map (folder) name))
                                            </li>
                                            <li>practices</li>
                                            <li>index.php (no need to change or edit, it will automatically load your
                                                svg)
                                            </li>
                                        </ul>
                                    </li>
                                </a>
                                <li>style.css (this style is for all main pages of the roadmap)</li>
                            </ul>
                        </li>
                        <li>
                            Description of each roadmap (Topics)
                            <ul>
                                <a href="#directory-road">
                                    <li>
                                        Create a folder with the name of the desired map (example: Frontend) (you can
                                        take a
                                        copy of the Frontend folder and change its name)
                                        <ul>
                                            <li>bin (various topics of each road map are placed in this section)</li>
                                            <li>images (required photos of each of the files in the bin folder)</li>
                                            <li>index.php does not need to be changed and will be loaded automatically
                                            </li>
                                        </ul>
                                    </li>
                                </a>
                                <li>livesearch.php is a file for the search part and does not need to be changed</li>
                                <li>MakeTopics.php is a file for creating topic templates (related details in the
                                    section below)
                                </li>
                                <li>style.css is the style of all descriptions and does not need to be changed</li>
                                <li>templateTopics.php is the initial topic template</li>
                            </ul>
                        </li>
                        <li>AjaxHandler.php is a file to open the description in the road map and does not need to be
                            changed
                        </li>
                    </ul>
                </li>
                <li>Constants.php contains the initial file and constants</li>
                <li>index.php is the home page</li>
            </ol>
        </div>
    </div>
</div>

<br>
<hr>
<br>
<hr>
<br>

<div class="row">
    <h1 style="text-align: center">Make SVG</h1>
    <div class="col-md-6 " style="direction: rtl">
        <div class="fa">
            <ol>
                <li>میتوانید svg آماده را از سایت roadmap.sh تهیه و آن را فارسی کنید (فقط جملات را ترجمه کنید ، نیاز به
                    ویرایش ما بقیه اطلاعات نیست)
                </li>
                <li>
                    اگر میخواهید خودتان نقشه راه بسازید به موارد زیر دقت کنید
                    <ol>
                        <li>فایل svg شما باید کاملا طراحی شده باشد (به صورت image embed نباشد) (به عنوان مثال میتوانید
                            فایل Frontend.svg را مشاهده کنید)
                        </li>
                        <li>حتما بعد از فارسی سازی هر بخش مکان مناسبی برای متن انتخاب کنید (x, y)</li>
                        <a href="#roadmap-sh">
                            <li>به قسمت هایی که قابلیت کلیک دارند کلاس clickable-group و همچنین پراپرتی data-group-id
                                میدهید
                                (در نقشه راه تمامی موارد قابل کلیک هستند و تاپیک مورد نظر خود را باز میکنند)
                            </li>
                            <li>پراپرتی data-group-id همان متصل کننده svg شما به تاپیک مورد نظر میباشد</li>
                            <li>به عنوان مثال ("data-group-id="100-desktop-applications:electron) به موضوع desktop
                                applications قسمت electron اشاره میکند
                            </li>
                            <li>بعد از ساخت svg مورد نظر ، در قسمت Topics/YourRoadMaps/bin میتوانید موضوعاتی که در
                                data-group-id انتخاب نمودید را با استفاده از template آماده (templateTopics.php) بسازید
                            </li>
                            <li>حتما در ساخت فایل در پوشه bin ( : ) را تبدیل به ( __ ) کنید
                                (100-desktop-applications:electron > 100-desktop-applications__electron)
                            </li>
                        </a>
                    </ol>
                </li>
                <li>در فایل Constants.php ثابت GET_ALL_TOPICS را برابر 1 قرار دهید و صفحه نقشه راه خود را ریفرش کنید (به
                    طور خودکار تمامیه data-group-id ها به فایل تبدیل میشوند و فقط باید آن ها را ویرایش کنید)
                </li>
                <li>در فایل Constants.php ثابت CHECK_SVG را برابر 1 قرار دهید و صفحه نقشه راه خود را ریفرش کنید (به طور
                    خودکار تمامیه رنگ ها ویرایش میشوند (اگر از سایت roadmap.sh تهیه نمودید))
                </li>
                <li>بعد از موارد بالا ثابت ها را بر روی 0 قرار دهید تا بار سیستم افزایش پیدا نکند</li>
            </ol>
        </div>
    </div>
    <div class="col-md-6">
        <div class="en">
            <ol>
                <li>You can get the ready svg from the roadmap.sh site and translate it into Farsi (just translate the
                    sentences, we don't need to edit the rest of the information)
                </li>
                <li>
                    If you want to make your own road map, pay attention to the following points
                    <ol>
                        <li>Your svg file must be fully designed (not as an image embed) (for example, you can see the
                            Frontend.svg file)
                        </li>
                        <li>Be sure to choose a suitable place for the text (x, y) after Persianization of each
                            section.
                        </li>
                        <a href="#roadmap-sh">
                            <li>Give clickable-group class and data-group-id property to the parts that can be clicked
                                (on
                                the road map, all items are clickable and open the desired topic)
                            </li>
                            <li>The data-group-id property is the one that connects your svg to the desired topic</li>
                            <li>For example ("data-group-id="100-desktop-applications:electron) refers to the desktop
                                applications topic of the electron section
                            </li>
                            <li>After creating the desired svg, in the Topics/YourRoadMaps/bin section, you can create
                                the
                                topics you selected in the data-group-id using the ready template (templateTopics.php)
                            </li>
                            <li> Be sure to convert (:) to (__) when creating the file in the bin folder (example:
                                100-desktop-applications:electron > 100-desktop-applications__electron)
                            </li>
                        </a>
                    </ol>
                </li>
                <li>In the Constants.php file, set the GET_ALL_TOPICS constant to 1 and refresh your roadmap page
                    (automatically all data-group-ids will be converted into a file, and you only need to edit them)
                </li>
                <li>In the Constants.php file, set the CHECK_SVG constant to 1 and refresh your roadmap page (all colors
                    will be automatically edited (if you get it from the roadmap.sh site))
                </li>
                <li>After the above, set the constants to 0 so that the system load does not increase</li>
            </ol>
        </div>
    </div>
</div>

<br>
<hr>
<br>
<hr>
<br>

<div>
    <h1 style="text-align: center">Help images</h1>
    <div class="row" id="images">
        <div id="directory-road" class="row">
            <div class="col-xs-12 col-md-4">The contents of the pages folder
                <div>
                    <img src="images/pages1.png" alt="pages1" class="myImg img-responsive">
                </div>
                محتویات پوشه pages
            </div>
            <hr class="s-hidden">
            <div class="col-xs-12 col-md-4">The contents of the Topics folder
                <div>
                    <img src="images/pages2.png" alt="pages2" class="myImg img-responsive">
                </div>
                محتویات پوشه Topics
            </div>
            <hr class="s-hidden">
            <div class="col-xs-12 col-md-4">The contents of the Topics/YourRoadMap/bin folder
                <div>
                    <img src="images/pages3.png" alt="pages3" class="myImg img-responsive">

                </div>
                محتویات پوشه Topics/YourRoadMap/bin
            </div>
        </div>

        <hr class="xs-hidden">

        <div id="roadmap-sh">
            <div class="col-xs-12 col-md-4">Translate
                <div>
                    <img src="images/svg1.jpg" alt="svg1" class="myImg img-responsive">
                </div>
                ترجمه
            </div>
            <hr class="s-hidden">
            <div class="col-xs-12 col-md-4">add class and data-group-id
                <div>
                    <img src="images/svg2.png" alt="svg2" class="myImg img-responsive">
                </div>
                اضافه کردن کلاس و پراپرتی
            </div>
            <hr class="s-hidden">
            <div class="col-xs-12 col-md-4">Create a file in the bin folder with the name data-group-id
                <div>
                    <img src="images/svg3.jpg" alt="svg3" class="myImg img-responsive">
                </div>
                ساخت فایل در پوشه bin با نام data-group-id
            </div>
        </div>
    </div>
</div>

<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <a href="" id="imglink" target="_blank"><img class="modal-content" id="img01" alt="image" src=""></a>
    <div id="caption"></div>
</div>
<script>
    let modal = document.getElementById('myModal');
    let img = document.querySelectorAll('.myImg');
    let imglink = document.getElementById('imglink');
    let modalImg = document.getElementById("img01");
    let captionText = document.getElementById("caption");
    for (let i = 0; i < img.length; i++) {
        img[i].onclick = function () {
            modal.style.display = "block";
            imglink.href = modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }
    }
    let span = document.getElementsByClassName("close")[0];
    span.onclick = function () {
        modal.style.display = "none";
    }
</script>
</body>
</html>