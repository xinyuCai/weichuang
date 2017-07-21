<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="img/favicon.ico"/>
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/comment.css">
    <script src="js/rem.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/comment.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
    <title>订单详情</title>
</head>
<body>
    <div id="header">
        <div id="left">
            <img src="img/left-arrow.png" alt="">
        </div>
        订单评价
        <div id="home">
            <a href="javascript:;"
               class="ui-btn-inline ui-icon-home ui-btn-left ui-btn-icon-notext">
            </a>
        </div>
    </div>

    <div role="main" class="ui-content">
        <div class="score score1">
            总评
            <div class="star">
                <img src="img/star-gray.png" alt="" id="img1">
                <img src="img/star-gray.png" alt="" id="img2">
                <img src="img/star-gray.png" alt="" id="img3">
                <img src="img/star-gray.png" alt="" id="img4">
                <img src="img/star-gray.png" alt="" id="img5">
                <span class="grade"></span>
            </div>
        </div>
        <div class="score score2">
            环境
            <div class="star">
                <img src="img/star-gray.png" alt="" id="img1">
                <img src="img/star-gray.png" alt="" id="img2">
                <img src="img/star-gray.png" alt="" id="img3">
                <img src="img/star-gray.png" alt="" id="img4">
                <img src="img/star-gray.png" alt="" id="img5">
                <span class="grade"></span>
            </div>
        </div>
        <div class="score score3">
            服务
            <div class="star">
                <img src="img/star-gray.png" alt="" id="img1">
                <img src="img/star-gray.png" alt="" id="img2">
                <img src="img/star-gray.png" alt="" id="img3">
                <img src="img/star-gray.png" alt="" id="img4">
                <img src="img/star-gray.png" alt="" id="img5">
                <span class="grade"></span>
            </div>
        </div>
        <div class="score score4">
            口味
            <div class="star">
                <img src="img/star-gray.png" alt="" id="img1">
                <img src="img/star-gray.png" alt="" id="img2">
                <img src="img/star-gray.png" alt="" id="img3">
                <img src="img/star-gray.png" alt="" id="img4">
                <img src="img/star-gray.png" alt="" id="img5">
                <span class="grade"></span>
            </div>
        </div>
        <div id="comment">
            <input type="hidden" class="product_id" value="<?php echo $product_id;?>">
            <input type="hidden" class="order_id" value="<?php echo $order_id;?>">
            <input type="hidden" class="score" value=0>
            <textarea class="content" placeholder="说说本次团购的亮点和不足吧！（写够15字，才是好同志～）"></textarea>
        </div>
        <button id="submit">发布</button>
    </div>
</body>
</html>