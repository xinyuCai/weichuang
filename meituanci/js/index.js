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
            var $product_id=$(this).children(".product-id").val();
            location.href = "welcome/detail/"+$product_id;
        });

        $("#user_detail").on("tap",function(){
            location.href = "user/user_detail";
        });

        $("#user_collect").on("tap",function(){
            location.href = "user/collect_detail";
        });

        $("#logout").on("tap",function(){
            location.href = "user/logout";
        });

        $("#login").on("tap",function(){
            location.href="user/login_page";
        });
    });
});