/*文档就绪函数*/
$(function(){
    //click比tap慢300ms
    //$(this)[0]: $(this)转换为this（jQuery对象转换为原生对象）
    //$(this):    this转换为$(this)(原生对象转换为jQuery对象)
    var $navSpan = $("#nav span");
    var $guideUl=$("#guide ul");
    $navSpan.on("tap",function(){
        $(this).addClass("active").siblings().removeClass("active");
        $guideUl.css({
            left: -$(this).index() * $guideUl.width() / 2
        });
    });
    $guideUl.on("swipeleft",function(){
        $navSpan.eq(0).addClass("active").siblings().removeClass("active");
        $guideUl.css({
            left: -$guideUl.width() / 2
        });
    }).on("swiperight",function(){
        $navSpan.eq(1).addClass("active").siblings().removeClass("active");
        $guideUl.css({
            left: 0
        });
    });
});
