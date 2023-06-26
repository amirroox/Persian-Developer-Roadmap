<?php
include "../../../Constants.php";
$Name_Page = basename(__DIR__);
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main -->
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'public/Topics/style.css' ?>">   <!-- Style Topic -->
    <script src="<?= MAIN_SERVER . 'assets/vendor/swiper-element-bundle.min.js'?>"></script> <!-- Script Slider -->
    <title> <?= $Name_Page ?> Topic </title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->


<!-- MAIN -->
<!-- SUBJECT -->
<section class="container subject">
    <h1> موضوعات بک اند <?= "($Name_Page Topic)" ?> </h1>
    <p>
        موضوعاتی که در مورد بک اند (توسعه دهنده سمت سرور) نیاز دارید و در نقشه راه ها
        آورده شده است و میخواهید به صورت جدا آن ها را مشاهده و مطالعه کنید.
    </p>
    <br>
    <div class="row options">
        <div class="col-xs-12 col-s-12 col-l-6">
            <a href="<?= MAIN_SERVER ?>">تمامی نقشه راه ها</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href='<?= MAIN_GITHUB . "/issues/new?title=[Suggestion] $Name_Page Developer" ?>' target="_blank">پیشنهاد
                تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2><a href="<?= MAIN_SITE ?>" target="_blank">Subscribe</a></h2>
        <h2>Topics</h2>
        <h2><a href="<?= MAIN_SERVER . 'public/Pages/' . $Name_Page ?>"><?= $Name_Page ?></a></h2>
    </section>
    <section class="between">
        <hr class="between">
        <form id="search_topic">
            <label>
                <input id="search_input" type="text" onkeyup="showResult(this.value)" placeholder="دنبال چی میگردی ؟">
            </label>
            <div id="live_search"><p> انگلیسی سرچ کن لطفا :) </p></div>
        </form>
    </section>
    <dialog id="Data_Content" open>
        <button class="close_up_btn">X</button>
        <div></div>
        <button class="close_down_btn">بازگشت</button>
    </dialog>
    <!-- Show All Category  -->
    <section id="all_category">
        <h1>Topics <?= $Name_Page ?> </h1>
        <?php GetAllTopics($Name_Page); ?>
    </section>
</section>
<div id="Overlay-dark"></div>
<!-- END SUBJECT -->


<!-- END MAIN -->

<!-- Community -->
<?php require MAIN_DIR . "public/Main/Community.php"?>
<!-- End Community -->
<!-- FOOTER -->
<?php require MAIN_DIR . "public/Main/Footer.php" ?>
<!-- END FOOTER -->

<!-- MAIN SCRIPT -->
<script src="<?= MAIN_SERVER . 'assets/vendor/jquery-3.7.0.min.js' ?>"></script>
<!-- Script For Response Menu -->
<script src="<?= MAIN_SERVER . 'assets/js/Response-Menu.js' ?>"></script>

<script>

    //Search Box Ajax
    function ajax_box_open_close() {
        $('.clickable-group').on('click', function () {
            let data = $(this).attr('data-group-id');
            let name_page = "<?=$Name_Page?>";
            //Open Modal
            $.ajax({
                method: "POST",
                url: "<?=MAIN_SERVER . 'public/AjaxHandler.php' ?>",
                data: {name: name_page, data_result: data},
                success: function (result) {
                    $('#Data_Content').fadeIn();
                    $('#Data_Content div').html(result);
                    $('#Overlay-dark').fadeIn();
                    /* Blank Link */
                    let links_ref = document.querySelectorAll('.links-reference a');
                    for (let i = 0; i < links_ref.length; i++) {
                        links_ref[i].setAttribute('rel', 'noopener noreferrer nofollow');
                        links_ref[i].setAttribute('target', '_blank');
                    }
                    /* Blank Img */
                    let NoPic = document.querySelectorAll('#image-slide img') ;
                    for (let i = 0; i < NoPic.length; i++) {
                        if(NoPic[i].getAttribute("src").indexOf("#") !== -1) {
                            NoPic[i].setAttribute("src" , "<?=MAIN_SERVER.'assets/img/Empty-img.jpg'?>");
                        }
                    }
                }
            })
        });
        $("#Data_Content button , body").on('click', function () {
            $('#Data_Content').fadeOut();
            $('#Overlay-dark').fadeOut();
        });
    }
    ajax_box_open_close();
    function showResult(str) {
        if (str.length === 0) {
            document.getElementById("live_search").innerHTML = "";
            document.getElementById("live_search").style.border = "0px";
            return;
        }
        $.ajax({
            method: "POST",
            url: "<?=MAIN_SERVER . 'public/Topics/livesearch.php' ?>",
            data: {data: $("#search_input").val(), name: "<?=$Name_Page?>"},
            success: function (result) {
                document.getElementById("live_search").innerHTML = result;
                ajax_box_open_close();
            }
        });

    }

</script>
</body>
