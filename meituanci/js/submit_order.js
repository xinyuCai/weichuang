$(document).on("pageinit", function(){
    $("#left img").on("tap", function(){
        history.go(-1);//也是返回当前页的上一页
        //history.back(-1);//直接返回当前页的上一页，数据全部消息，是个新页面
    });

    $('.add').on('tap',function(){
        if($('.minus').attr("disabled") == "true"){
            $('.minus').attr("disabled", false);
        }
        $('.minus').attr("disabled", false);
        var val = $('.count').val();
        var price = $('.price').text();
        $('.count').val(parseInt(val) + 1);
        $('.total-price').text((price * $('.count').val()).toFixed(2));
    });

    $('.minus').on('tap',function(){
        var val = $('.count').val();
        if(val > 1){
            var price = $('.price').text();
            $('.count').val(parseInt(val) - 1);
            $('.total-price').text((price * $('.count').val()).toFixed(2));
        }
        if(val < 3){
            $(this).attr("disabled", true);
        }
    });

    $('.order-form #num input').on('blur',function(){
        var val = $('.count').val();
        var price = $('.price').text();
        if(val > 1){
            $('.total-price').text((price * $('.count').val()).toFixed(2));
        }
        else{
            $('.count').val(1);
            $('.total-price').text(price);
        }
    });

    $('#submit').on('tap',function(){
        var productId = $('.product_id').val();
        var price = $('.price').text();
        var num = $('.count').val();
        $.get('user/add_order',{
            "product_id":productId,
            "price":price,
            "num":num
        },function(data){
            if(data == "success") {
                alert("下单成功");
                location.href="order/order_detail/"+productId;
            }
            else alert("下单失败");
        },'text');
    });
});
