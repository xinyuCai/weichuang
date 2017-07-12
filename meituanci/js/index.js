/*文档就绪函数*/
$(document).on("pageinit",function(event){
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

        $("#guess #menu li").on("tap",function(){
            location.href = "welcome/detail";
        });

        $("#mine div:last-child").on("tap",function(){
            location.href="user/login_page";
        });
    });
});