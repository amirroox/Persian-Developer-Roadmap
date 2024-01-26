<!DOCTYPE html>
<html lang="fa">

<head>
    <?php include MAIN_DIR . "public/Main/meta-main.php" ?>
    <link rel="stylesheet" href="<?= MAIN_SERVER . 'assets/css/FullStyle.css' ?>">  <!-- Style Main seed -->

    <title>404 Not Found</title>

    <style>

        body {
            padding: 0;
            margin: 0;
        }

        #notfound {
            position: relative;
            height: 100vh;
            background: #030005;
        }

        #notfound .notfound {
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .notfound {
            max-width: 767px;
            width: 100%;
            line-height: 1.4;
            text-align: center;
        }

        .notfound .notfound-404 {
            position: relative;
            height: 180px;
            margin-bottom: 20px;
            z-index: -1;
        }

        .notfound .notfound-404 h1 {
            font-family: 'Montserrat', sans-serif;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50% , -50%);
            -ms-transform: translate(-50% , -50%);
            transform: translate(-50% , -50%);
            font-size: 224px;
            font-weight: 900;
            margin-top: 0;
            margin-bottom: 0;
            margin-left: -12px;
            color: #030005;
            text-transform: uppercase;
            text-shadow: -1px -1px 0 #8400ff, 1px 1px 0 #ff005a;
            letter-spacing: -20px;
        }


        .notfound .notfound-404 h2 {
            position: absolute;
            left: 0;
            right: 0;
            top: 140px;
            font-size: 42px;
            font-weight: 700;
            color: #fff;
            text-transform: uppercase;
            text-shadow: 0 2px 0 #8400ff;
            letter-spacing: 1px;
            margin: 0;
        }

        .notfound a {
            display: inline-block;
            text-transform: uppercase;
            color: #ff005a;
            text-decoration: none;
            border: 2px solid;
            background: transparent;
            padding: 10px 40px;
            font-size: 14px;
            font-weight: 700;
            -webkit-transition: 0.2s all;
            transition: 0.2s all;
        }

        .notfound a:hover {
            color: #8400ff;
        }

        @media only screen and (max-width: 767px) {
            .notfound .notfound-404 h2 {
                font-size: 24px;
            }
        }

        @media only screen and (max-width: 480px) {
            .notfound .notfound-404 h1 {
                font-size: 182px;
            }
        }

    </style>
</head>

<body>

<div id="notfound">
    <div class="notfound">
        <div class="notfound-404">
            <h1>404</h1>
            <h2>صفحه مورد نظرتون پیدا نشد</h2>
        </div>
        <a href="<?= MAIN_SERVER?>">صفحه اصلی</a>
    </div>
</div>

</body>

</html>
