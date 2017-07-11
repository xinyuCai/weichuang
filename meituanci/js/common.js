$(document).on("pageinit", function(){
    var bShow = false;
    $(document).on('scroll', function(){
        var scrollTop = document.documentElement.scrollTop
            || document.body.scrollTop;
        if(scrollTop >= 200 && bShow == false){
            $('#go-top').fadeIn();
            /*$('#go-top').css("display","block");*/
            bShow = true;
            console.log("显示");
        }else if(scrollTop < 200 && bShow == true){
            $('#go-top').fadeOut();
            /*$('#go-top').css("display","none");*/
            bShow = false;
            console.log("消失");
        }
    });
    $('#go-top').on('tap', function(){
        /*var bottom = $(this).css("bottom");
         $(this).animate({
         top: 0
         }, 500, function(){
         $(this).css("bottom", bottom);
         });*/
        $('body').animate({
            scrollTop: 0
        },500);
    });
});