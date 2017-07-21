$(document).on("pageinit", function(){
    $("#left").on("tap", function(){
        history.go(-1);
    });
    $("#header #home").on("tap", function(){
        location.href = "welcome";
    });

    var path1="img/star-gray.png";
    var path2="img/star-yellow.png";
    $('.score1 .star #img1').on('tap',function(){
        $(".score1 .star img").attr('src',path1);
        $(this).attr('src',path2);
        $('#comment .score').val(1);
        $('.score1 .star .grade').html("非常不满意");
    });
    $('.score1 .star #img2').on('tap',function(){
        $(".score1 .star img").attr('src',path1);
        $(".score1 .star #img1").attr('src',path2);
        $(".score1 .star #img2").attr('src',path2);
        $('#comment .score').val(2);
        $('.score1 .star .grade').html("不满意");
    });
    $('.score1 .star #img3').on('tap',function(){
        $(".score1 .star img").attr('src',path1);
        $(".score1 .star #img1").attr('src',path2);
        $(".score1 .star #img2").attr('src',path2);
        $(".score1 .star #img3").attr('src',path2);
        $('#comment .score').val(3);
        $('.score1 .star .grade').html("一般");
    });
    $('.score1 .star #img4').on('tap',function(){
        $(".score1 .star img").attr('src',path1);
        $(".score1 .star #img1").attr('src',path2);
        $(".score1 .star #img2").attr('src',path2);
        $(".score1 .star #img3").attr('src',path2);
        $(".score1 .star #img4").attr('src',path2);
        $('#comment .score').val(4);
        $('.score1 .star .grade').html("满意");
    });
    $('.score1 .star #img5').on('tap',function(){
        $(".score1 .star img").attr('src',path2);
        $('#comment .score').val(5);
        $('.score1 .star .grade').html("非常满意");
    });

    $('.score2 .star #img1').on('tap',function(){
        $(".score2 .star img").attr('src',path1);
        $(this).attr('src',path2);
        $('.score2 .star .grade').html("非常不满意");
    });
    $('.score2 .star #img2').on('tap',function(){
        $(".score2 .star img").attr('src',path1);
        $(".score2 .star #img1").attr('src',path2);
        $(".score2 .star #img2").attr('src',path2);
        $('.score2 .star .grade').html("不满意");
    });
    $('.score2 .star #img3').on('tap',function(){
        $(".score2 .star img").attr('src',path1);
        $(".score2 .star #img1").attr('src',path2);
        $(".score2 .star #img2").attr('src',path2);
        $(".score2 .star #img3").attr('src',path2);
        $('.score2 .star .grade').html("一般");
    });
    $('.score2 .star #img4').on('tap',function(){
        $(".score2 .star img").attr('src',path1);
        $(".score2 .star #img1").attr('src',path2);
        $(".score2 .star #img2").attr('src',path2);
        $(".score2 .star #img3").attr('src',path2);
        $(".score2 .star #img4").attr('src',path2);
        $('.score2 .star .grade').html("满意");
    });
    $('.score2 .star #img5').on('tap',function(){
        $(".score2 .star img").attr('src',path2);
        $('.score2 .star .grade').html("非常满意");
    });

    $('.score3 .star #img1').on('tap',function(){
        $(".score3 .star img").attr('src',path1);
        $(this).attr('src',path2);
        $('.score3 .star .grade').html("非常不满意");
    });
    $('.score3 .star #img2').on('tap',function(){
        $(".score3 .star img").attr('src',path1);
        $(".score3 .star #img1").attr('src',path2);
        $(".score3 .star #img2").attr('src',path2);
        $('.score3 .star .grade').html("不满意");
    });
    $('.score3 .star #img3').on('tap',function(){
        $(".score3 .star img").attr('src',path1);
        $(".score3 .star #img1").attr('src',path2);
        $(".score3 .star #img2").attr('src',path2);
        $(".score3 .star #img3").attr('src',path2);
        $('.score3 .star .grade').html("一般");
    });
    $('.score3 .star #img4').on('tap',function(){
        $(".score3 .star img").attr('src',path1);
        $(".score3 .star #img1").attr('src',path2);
        $(".score3 .star #img2").attr('src',path2);
        $(".score3 .star #img3").attr('src',path2);
        $(".score3 .star #img4").attr('src',path2);
        $('.score3 .star .grade').html("满意");
    });
    $('.score3 .star #img5').on('tap',function(){
        $(".score3 .star img").attr('src',path2);
        $('.score3 .star .grade').html("非常满意");
    });

    $('.score4 .star #img1').on('tap',function(){
        $(".score4 .star img").attr('src',path1);
        $(this).attr('src',path2);
        $('.score4 .star .grade').html("非常不满意");
    });
    $('.score4 .star #img2').on('tap',function(){
        $(".score4 .star img").attr('src',path1);
        $(".score4 .star #img1").attr('src',path2);
        $(".score4 .star #img2").attr('src',path2);
        $('.score4 .star .grade').html("不满意");
    });
    $('.score4 .star #img3').on('tap',function(){
        $(".score4 .star img").attr('src',path1);
        $(".score4 .star #img1").attr('src',path2);
        $(".score4 .star #img2").attr('src',path2);
        $(".score4 .star #img3").attr('src',path2);
        $('.score4 .star .grade').html("一般");
    });
    $('.score4 .star #img4').on('tap',function(){
        $(".score4 .star img").attr('src',path1);
        $(".score4 .star #img1").attr('src',path2);
        $(".score4 .star #img2").attr('src',path2);
        $(".score4 .star #img3").attr('src',path2);
        $(".score4 .star #img4").attr('src',path2);
        $('.score4 .star .grade').html("满意");
    });
    $('.score4 .star #img5').on('tap',function(){
        $(".score4 .star img").attr('src',path2);
        $('.score4 .star .grade').html("非常满意");
    });

    $('#submit').on('tap',function(){
        var productId=$('#comment .product_id').val();
        var orderId=$('#comment .order_id').val();
        var score=$('#comment .score').val();
        var content=$('#comment .content').val();
        $.post('user/add_comment',{
            "product_id":productId,
            "order_id":orderId,
            "score":score,
            "content":content
        },function(data){
            if(data == 'success'){
                alert("评价成功");
                location.href="welcome";
            }
            else alert("评价失败");
        },'text');
        //location.href="user/add_comment/"+productId+'/'+orderId+'/'+score+'/'+content;
    });
});
