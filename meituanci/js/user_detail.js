$(document).on("pageinit", function(){
    $("#header #home").on("tap", function(){
        location.href = "welcome";
    });
    $("#user_detail").on("tap",function(){
        location.href = "user/user_detail";
    });

    $("#logout").on("tap",function(){
        location.href = "user/logout";
    });

    $("tr").on("tap",function(){
        var orderId=$(this).children(".order_id").val();
        location.href = "order/order_detail2/"+orderId;
    });
});
