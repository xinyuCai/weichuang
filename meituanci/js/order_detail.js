$(document).on("pageinit", function(){
    $("#left").on("tap", function(){
        history.go(-1);
    });
    $("#header #home").on("tap", function(){
        location.href = "welcome";
    });

    $('.arrow').on('tap',function(){
        var productId=$("#menu .product_id").val();
        location.href = "welcome/detail/"+productId;
    });

    $('#grade .comment').on('tap',function(){
        var productId=$("#menu .product_id").val();
        var orderId=$("#menu .order_id").val();
        location.href = "user/comment/"+productId+'/'+orderId;
    });
});
