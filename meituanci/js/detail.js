$(document).on("pageinit", function(){
    $("#left img").on("tap", function(){
        location.href = "welcome/index";
    });

    $("#header #collect .collect").on('tap',function(){
        var _that = $(this);
        var productId = $('.product_id').val();
        if(!_that.hasClass('collected')){
            $.get('user/collect',{'product_id':productId},function(data){
                if(data == 'success'){
                    _that.children('span').html("取消");
                    _that.addClass('collected');
                }
                else if(data == 'fail'){
                    location.href="user/login_page";
                }
            },'text');
        }
        else{
            $.get('user/cancel_collect',{'product_id':productId},function(data){
                if(data == "success") {
                    _that.children('span').html("收藏");
                    _that.removeClass('collected');
                }
            },'text');
        }
    });

    $('#price button').on('tap',function(){
        $.get('user/check_logined',{},function(data){
            if(data == 'yes'){
                var productId = $('.product_id').val();
                location.href="user/submit_order/"+productId;
            }
            else{
                location.href="user/login_page";
            }
        },'text');
    });
});
