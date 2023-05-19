<?php
include "../../../Constants.php" ;
$Name_Page = str_replace('.php' , '' ,basename(__FILE__)) ;
?>
<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?=MAIN_SERVER . 'assets/css/FullStyle.css'?>">
    <link rel="stylesheet" href="<?=MAIN_SERVER . 'public/Pages/style.css'?>">
    <title> <?=$Name_Page?> </title>
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
            <a href="<?=MAIN_SERVER?>">تمامی نقشه راه ها</a>
            <a id="DownloadFile" href="bin/<?=$Name_Page.'.pdf'?>">دانلود به صورت PDF</a>
        </div>
        <div class="col-xs-12 col-s-12 col-l-6" style="text-align: left">
            <a href='<?=MAIN_GITHUB . "/issues/new?title=[Suggestion] $Name_Page Developer"?>' target="_blank">پیشنهاد تغییر - نقشه راه بهتر</a>
        </div>
    </div>
    <section class="between">
        <hr class="between">
        <h2><a href="<?=MAIN_SITE?>" target="_blank">Subscribe</a></h2>
        <h2>Road Map</h2>
    </section>
</section>

    <!-- Summery DATA - Data Content -->
<dialog id="Data_Content" open>
    <button>X</button>
    <div></div>
</dialog>

    <!-- Main RoadMap -->
<section class="container RoadMap" style="direction: ltr">
    <?php include "bin/$Name_Page.svg" ?>
</section>

    <!-- Simple RoadMap -->
<section class="container RoadMapBeginner" style="direction: ltr; display: none">
    <?php include "bin/$Name_Page"."Beginner.svg" ?>
</section>

<!-- END MAIN -->



<!-- FOOTER -->
<?php require MAIN_DIR . "public/Main/Footer.php" ?>
<!-- END FOOTER -->


<!-- MAIN SCRIPT -->
<script src="<?=MAIN_SERVER . 'assets/js/jquery-3.7.0.min.js'?>"></script>
<script>
    $('.clickable-group').on('click',function (){
        let data = $(this).attr('data-group-id');
        let name_page = "<?=$Name_Page?>" ;
        let DownloadBtn = $('#DownloadFile');
        $.ajax({
            method: "POST",
            url: "<?=MAIN_SERVER . 'public/AjaxHandler.php' ?>",
            data: { name: name_page , data_result: data } ,
            success : function(result) {
                if (result === "Beginner") {
                    $('.RoadMap').fadeOut();
                    $('.RoadMapBeginner').fadeIn();
                    <?php
                    $check = 'bin/' . $Name_Page . "Beginner.pdf" ;
                    # Check Existed File
                    if(file_exists($check)) :
                    ?>
                    DownloadBtn.attr('href' , 'bin/' + name_page + "Beginner.pdf");
                    <?php endif; ?>
                }
                else if (result === "Pro") {
                    $('.RoadMapBeginner').fadeOut();
                    $('.RoadMap').fadeIn();
                    DownloadBtn.attr('href' , 'bin/' + name_page + ".pdf");
                }
                else {
                    $('#Data_Content').fadeIn();
                    $('#Data_Content div').html(result)
                }
            }
        })
    });
    $("#Data_Content button").on('click' , function (){
        $('#Data_Content').fadeOut();
    });
</script>
<!-- END MAIN SCRIPT -->
</body>
</html>