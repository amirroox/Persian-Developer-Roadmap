<header id="Head-Sec" class="container-flut">
    <div class="container row">
        <!-- Windows Response -->
        <div id="Wrapper" class="xs-hidden">

            <div id="Win" class="xs-hidden col-md-6">
                <ul>
                    <li><a href="<?= MAIN_SERVER ?>">نقشه راه</a></li>
                    <li><a href="<?= MAIN_GITHUB ?>" target="_blank">گیت هاب</a></li>
                    <li><a href="#">راهنما</a></li>
                </ul>
            </div>


            <div class="xs-hidden col-md-3"></div>


            <div class="xs-hidden col-s-12 col-md-3" style="direction: ltr">
                <a href="<?= MAIN_SERVER ?>" style="display: flex;align-items: center;">
                    <span><?php include MAIN_DIR . 'assets/img/Logo.svg' ?></span>
                    <span class="xs-hidden" style="margin-left: .5rem;color:#C4005B;font-weight:600 ">ROADMAP</span>
                </a>
            </div>
        </div>

        <!-- Phone Response -->
        <div id="Wrapper-Phone" class="s-hidden">
            <span class="s-hidden" id="list_btn" style="cursor: pointer"><?php include MAIN_DIR . 'assets/img/menu-bar.svg' ?></span>
            <div id="list-phone" class="s-hidden">
                <ul>
                    <li id="smile" class="s-hidden" style="display: none ; z-index: 1000;cursor: pointer"> &#10149;</li>
                    <li><a href="<?= MAIN_SERVER ?>">نقشه راه</a></li>
                    <li><a href="<?= MAIN_GITHUB ?>" target="_blank">گیت هاب</a></li>
                    <li><a href="#">راهنما</a></li>
                    <li><a href="#" id="Close-Wrapper">برگشت</a></li>
                </ul>
            </div>
            <div class="s-hidden" style="float: left">
                <a href="<?= MAIN_SERVER ?>">
                    <span><?php include MAIN_DIR . 'assets/img/Logo.svg' ?></span>
                </a>
            </div>
        </div>
    </div>
</header>

