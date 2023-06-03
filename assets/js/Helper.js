function scroll_down(tar ,speed = 1000 ,  help = null ) { /* Tar is Target Click - Help is go to */
    $(tar).on("click", function (event) {
        event.preventDefault();
        if (help == null) {
            let target = $(this).attr("href") ;
            $("html, body").animate({
                scrollTop:  $(target).offset().top
            }, 1000);
        }
        else {
            $("html, body").animate({
                scrollTop:  $(help).offset().top
            }, speed);
        }
        return false;
    });
}