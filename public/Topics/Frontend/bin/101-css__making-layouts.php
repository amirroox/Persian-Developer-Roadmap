<div class="content-dialog">
    <h1>Making layouts</h1>
    <h2>مفاهیم layouts و ساختار</h2>
    <br>
    <p>
        وبسایتها اغلب محتوای صفحات را در چندین ستون نمایش میدهند(مانند یک روزنامه یا مجله). در این حالت ستونها در کنار یک دیگر قرار میگیرند و محتوای صفحه در داخل این ستون ها نمایش داده می شوند.
        Float ، grid ، flexbox ، display از جمله موضوعات کلیدی است که برای ساخت چیدمان (Layouts) استفاده می شود.
    </p>
    <br>


    <!-- Persian References -->
    <div class="row">
        <ul class="col-xs-12 col-md-6 links-reference right-link">
            <h4>منابع فارسی</h4>
            <li>
                <a href="#">
                    منابع فارسی 1
                </a>
            </li>
        </ul>


        <!-- English References -->
        <ul class="col-xs-12 col-md-6 links-reference left-link">
            <h4>English References</h4>
            <li>
                <a href="#">
                    English References 1
                </a>
            </li>
        </ul>

    </div>
    <br>
    <div class="row" id="image-slide">
        <swiper-container loop="true" pagination="true" scrollbar="true">
            <swiper-slide>
                <img src="#"
                     class="img-responsive" alt="Prettier">
            </swiper-slide>
            <swiper-slide>
                <img src="#"
                     class="img-responsive" alt="Prettier">
            </swiper-slide>
            <swiper-slide>
                <img src="#" class="img-responsive"
                     alt="Prettier">
            </swiper-slide>
        </swiper-container>
    </div>
</div>