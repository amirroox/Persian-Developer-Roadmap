<div class="content-dialog">
    <h1>Server Sent Events</h1>
    <h2>پیام های یک طرفه</h2>
    <br>
    <p>
        SSE قابلیت جدیدی در Html5 است که به مرورگر این امکان را می دهد تا Updateهای ارسالی از طرف سرور را دریافت کند.
        این قابلیت در گذشته بصورت دیگری وجود داشته است، هر زمان که Updateی ایجاد می شد صفحه وب برای دریافت Update مجبور
        بود آنرا درخواست نماید. اما با SSE این کار بصورت اتوماتیک و پشت پرده صورت می گیرد.
        رویدادهای ارسال شده از سرور (SSE) فناوری است که به سرور وب اجازه می‌دهد تا داده‌ها را در زمان واقعی به مشتری
        ارسال کند. از یک اتصال HTTP برای ارسال جریانی از داده ها از سرور به مشتری استفاده می کند و مشتری می تواند به این
        رویدادها گوش دهد و هنگام دریافت آنها اقدام کند.
        SSE برای برنامه‌هایی که نیاز به به‌روزرسانی‌های هم‌زمان دارند، مانند سیستم‌های چت، نمادهای سهام و فید رسانه‌های
        اجتماعی مفید است. این یک راه ساده و کارآمد برای ایجاد یک ارتباط طولانی مدت بین یک کلاینت و یک سرور است و توسط
        اکثر مرورگرهای وب مدرن پشتیبانی می شود.
        برای استفاده از SSE، کلاینت باید یک شی EventSource ایجاد کند و URL اسکریپت سمت سرور را که رویدادها را ارسال می
        کند، مشخص کند. سپس سرور می تواند رویدادها را با نوشتن آنها در جریان پاسخ با قالب بندی مناسب ارسال کند.
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
            <li><a href="https://developer.mozilla.org/en-US/docs/Web/API/Server-sent_events" 
                 >Server-Sent Events - MDN</a></li>
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