<div class="content-dialog">
    <h1>Template</h1>
    <h2>قالب</h2>
    <br>
    <p>
       پر کنید ...
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
</div>
<script>
    //Add Attribute target and rel
    let links_ref = document.querySelectorAll('.links-reference a');
    for (let i = 0; i < links_ref.length; i++) {
        links_ref[i].setAttribute('target', '_blank');
        links_ref[i].setAttribute('rel', 'noopener noreferrer nofollow');
    }
</script>