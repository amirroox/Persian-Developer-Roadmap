<div class="content-dialog">
    <h1>PRPL Pattern</h1>
    <h2>الگو PRPL</h2>
    <br>
    <p>
        الگوی PRPL یک الگوی بهینه سازی عملکرد برای برنامه های کاربردی وب است که بر به حداقل رساندن زمان لازم برای رندر اولیه یک صفحه وب تمرکز دارد. مخفف Push، Render، Pre-cache و Lazy-load است و شامل مراحل زیر است:
    </p>
    <br>
    <ul>
        <li>Push :تحویل منابع مهم مانند HTML، CSS و JavaScript را در اسرع وقت به مشتری تحویل دهید.</li>
        <li>Render :به محض دریافت منابع مهم، شروع به رندر کردن صفحه وب کنید، حتی اگر برخی از منابع غیر مهم هنوز در حال دانلود هستند.</li>
        <li>Pre-cache : منابع غیر بحرانی را در پس زمینه از پیش ذخیره کنید تا در صورت نیاز در دسترس باشند.</li>
        <li>Lazy-load : بارگذاری منابع غیر حیاتی را تا زمانی که به آنها نیاز است، به تعویق بیاندازید، مانند زمانی که کاربر به آنها پیمایش می کند یا با آنها در تعامل است.</li>
    </ul>
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