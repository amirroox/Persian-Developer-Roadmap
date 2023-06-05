<div class="content-dialog">
    <h1>Making layouts</h1>
    <h2>مفاهیم layouts و ساختار</h2>
    <br>
    <p>
        وبسایتها اغلب محتوای صفحات را در چندین ستون نمایش میدهند(مانند یک روزنامه یا مجله). در این حالت ستونها در کنار
        یک دیگر قرار میگیرند و محتوای صفحه در داخل این ستون ها نمایش داده می شوند.
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
            <li><a href="https://flexboxfroggy.com/">Learn and
                    Practice Flexbox</a></li>
            <li><a href="https://cssgridgarden.com/">Game for
                    learning CSS Grid</a></li>
            <li><a href="https://css-tricks.com/all-about-floats/">All
                    about Floats</a></li>
            <li><a href="https://css-tricks.com/absolute-relative-fixed-positioining-how-do-they-differ/"
                  >Positioning Types: How Do They Differ?</a></li>
            <li><a href="https://developer.mozilla.org/en-US/docs/Learn/CSS/Building_blocks/The_box_model"
                  >The Box Model</a></li>
            <li>
                <a href="https://www.freecodecamp.org/news/the-css-display-property-display-none-display-table-inline-block-and-more/"
                  >The CSS Display Property</a></li>
            <li><a href="https://css-tricks.com/snippets/css/a-guide-to-flexbox" 
                 >A Complete Guide to Flexbox</a></li>
            <li><a href="https://css-tricks.com/snippets/css/complete-guide-grid" 
                 >A Complete Guide to Grid</a></li>
            <li><a href="https://cssgrid.io/">Learn CSS Grid -
                    Course</a></li>
            <li><a href="https://scrimba.com/learn/cssgrid">Learn CSS
                    Grid for free</a></li>
            <li><a href="https://thenewstack.io/get-grid-last-css-grid-template-markup/" >Get on the Grid
                    at Last with the CSS Grid Layout Module</a></li>
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