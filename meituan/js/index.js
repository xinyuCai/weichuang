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

    /*$("#go-top").on("tap",function(){
        if($(window).scrollTop() <= 1){
            return false;
        }
        $("body").animate({
            scrollTop : 0
        }, 500);
        var top = $(this).css("top");
        $(this).animate({
            top: 0
        }, 500, function(){
            $(this).css("top", top);
        });
    });*/

    var bShow = false;
    $(window).on('scroll', function(){
        console.log(1);
        var scrollTop = document.documentElement.scrollTop
            || document.body.scrollTop;
        var top=$(window).height();
        if(scrollTop >= top && bShow == false){
            $('#go-top').fadeIn();
            bShow = true;
            console.log(Math.random());
        }else if(scrollTop < top && bShow == true){
            $('#go-top').fadeOut();
            bShow = false;
            console.log('--' + Math.random());
        }
    });
    /*$('#go-top').on('click', function(){
        $('body').animate({
            scrollTop: 0
        });
    });*/
});
