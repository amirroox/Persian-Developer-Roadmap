<?php include "../../../Constants.php" ?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../../assets/css/FullStyle.css">
    <link rel="stylesheet" href="style.css">
    <title>Frontend</title>
</head>
<body>

<!-- HEADER -->
<?php require MAIN_DIR . "public/Main/Header.php" ?>
<!-- END HEADER -->



<!-- MAIN -->

    <!-- Subject -->
<section class="container subject">
    <h1>Frontend Developer (توسعه دهنده سمت کاربر)</h1>
    <p>راهنمای قدم به قدم برای تبدیل شدن به توسعه دهنده سمت کاربر در سال 1402</p>
    <br>
    <div class="row options">
        <div class="col-xs-12 col-s-12 col-l-6">
            <a href="../../../index.php">تمامی نقشه راه ها</a>
            <a href="#">دانلود به صورت PDF</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href="#">پیشنهاد تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2>Road Map</h2>
    </section>
</section>

    <!-- Summery DATA - Data Content -->
<dialog id="Data_Content" open></dialog>

    <!-- Main RoadMap -->
<section class="container RoadMap" style="direction: ltr">
    <?php include "Frontend.svg" ?>
</section>

    <!-- Simple RoadMap -->
<section class="container RoadMapBeginner" style="direction: ltr; display: none">
    <?php include "FrontendBeginner.svg" ?>
</section>

<!-- END MAIN -->



<!-- FOOTER -->
<?php require MAIN_DIR . "Public/Main/Footer.php" ?>
<!-- END FOOTER -->


<!-- MAIN SCRIPT -->
<script src="../../../assets/js/jquery-3.7.0.min.js"></script>
<script>
    $('.clickable-group').on('click',function (){
        let data = $(this).attr('data-group-id');
        $('#Data_Content').val('');
        $.ajax({
            method: "POST",
            url: "../../AjaxHandler.php",
            data: { name:"Frontend" , data_result: data } ,
            success : function(result) {
                if (result === "Beginner") {
                    $('.RoadMap').fadeOut();
                    $('.RoadMapBeginner').fadeIn();
                }
                else if (result === "Pro") {
                    $('.RoadMapBeginner').fadeOut();
                    $('.RoadMap').fadeIn();
                }
                else {
                    $('#Data_Content').fadeIn().html(result);
                    $("body").css("overflow","hidden");
                }
            }
        })
    });
    $("body").on('click' , function (){
        $('#Data_Content').fadeOut();
        $("body").css("overflow","unset");
    })
</script>
<!-- END MAIN SCRIPT -->
</body>
</html>