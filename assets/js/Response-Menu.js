// Response List Menu Header
$("#list_btn").on('click' , function (){
    $("div#list-phone").css('top','0');
    $("#smile").css('display','block');
});
$("#Close-Wrapper , #smile").on('click' , function (){
    $("div#list-phone").css('top','-50rem');
    $("#smile").css('display','none');
});