/*文档就绪函数*/
$(function(){
    //click比tap慢300ms
    //$(this)[0]: $(this)转换为this（jQuery对象转换为原生对象）
    //$(this):    this转换为$(this)(原生对象转换为jQuery对象)
    var $navSpan = $("#nav span");
    var $guideUl=$("#guide ul");
    function swipeGuide(index){
        $navSpan.eq(index).addClass("active").siblings().removeClass("active");
        $guideUl.css({
            left: -index * $guideUl.width() / 2
        });
    }
    $navSpan.on("tap",function(){
        swipeGuide($(this).index());
    });
    $guideUl.on("swipeleft",function(){
        swipeGuide(1);
    }).on("swiperight",function(){
        swipeGuide(0)
    });

    var bShow = false;
    $(document).on('scroll', function(){
        var scrollTop = document.documentElement.scrollTop
            || document.body.scrollTop;
        if(scrollTop >= 200 && bShow == false){
            /*$('#go-top').fadeIn();*/
            $('#go-top').css("display","block");
            bShow = true;
            console.log("显示");
        }else if(scrollTop < 200 && bShow == true){
            /*$('#go-top').fadeOut();*/
            $('#go-top').css("display","none");
            bShow = false;
            console.log("消失");
        }
    });
    $('#go-top').on('tap', function(){
        var bottom = $(this).css("bottom");
        $(this).animate({
            top: 0
        }, 500, function(){
            $(this).css("bottom", bottom);
        });
        $('body').animate({
            scrollTop: 0
        },500);
    });
});
