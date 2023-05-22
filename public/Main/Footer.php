<Footer id="Foot-Sec" class="container-flut">
    <div class="container row">
        <ul>
            <li class="col-xs-4 col-md-4"><a href="<?= MAIN_SERVER ?>">نقشه راه</a></li>
            <li class="col-xs-4 col-md-4"><a href="<?= MAIN_GITHUB ?>" target="_blank">گیت هاب</a></li>
            <li class="col-xs-4 col-md-4"><a href="
            <?php
                # Redirect Guide (Main and etc)
                if (strpos($_SERVER['PHP_SELF'], "index.php")) echo "#Guide";
                else echo "#";
                ?>
            " id="Guide-Btn-Up">راهنما</a></li>
        </ul>
    </div>
    <div class="container row text-footer">
        <div class="col-md-5 menu">
            <h4>
                <span></span>
                <span><a href="<?= MAIN_SITE ?>" target="_blank"><?php include MAIN_DIR . 'assets/img/MyLogo.svg' ?></a></span>
            </h4>
            <p>
                اگر این نقشه راه به شما کمک کرده و توان مالی دارید خوشحال میشم
                مارو حمایت کنید تا بروز باشیم
            </p>
            <ul>
                <li><a href="https://zarinp.al/roox">حمایت مالی</a></li>
                .
                <li><a href="https://daramet.com/amirroox">دونیت</a></li>
                .
                <li><a href="https://github.com/amirroox">گیت هاب من</a></li>
            </ul>
        </div>
        <div class="col-md-2"></div>
        <div class="col-md-5 menu">
            <h4>
                <span>Persian RoadMap By
                    <span>Amir Roox</span>
                </span>
                <span><a href="<?= MAIN_SERVER ?>"><?php include MAIN_DIR . 'assets/img/Logo.svg' ?></a></span>
            </h4>
            <p>
                ما سعی میکنیم با استفاده از این نقشه راه ها ، راهی برای موفقیت شما باز کنیم
                یا در کار خود حرفه ایی تر عمل کنید.
            </p>
            <ul>
                <li><a href="<?= MAIN_SITE ?>">Roox Team</a></li>
                .
                <li><a href="https://roadmap.sh/">Based On roadmap.sh</a></li>
            </ul>
        </div>
    </div>
    <script>
        let links = document.querySelectorAll('.text-footer a');
        for (let i = 0; i < links.length; i++) {
            links[i].setAttribute('target', '_blank');
        }
    </script>
</Footer>

