<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>提交订单</title>
    <base href="<?php echo site_url(); ?>">
    <link rel="shortcut icon" href="img/favicon.ico" />
    <link rel="stylesheet" href="css/jquery.mobile-1.4.5.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/submit_order.css">
    <script src="js/rem.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/submit_order.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
</head>
<body>
<div data-role="page">
    <div data-role="header" id="header">
        <div id="left">
            <img src="img/left-arrow.png" alt="">
        </div>
        <div id="group">
            提交订单
        </div>
    </div>

    <div role="main" class="ui-content">
        <input type="hidden" class="product_id" value=<?php echo $product->product_id;?>>
        <div id="title">
            <?php echo $product->product_name;?>
        </div>
        <div class="order-form">
            单价：
            <span><i class="price"><?php echo $product->discount_price;?></i> 元</span>
        </div>
        <div class="order-form">
            数量：
            <div id="num">
                <button class="control minus" data-inline="true">-</button>
                <input type="text" class='count' data-inline="true" value="1">
                <button class="control add" data-inline="true">+</button>
            </div>
        </div>
        <div class="clear"></div>
        <div class="order-form">
            总价：
            <span><i class="total-price"><?php echo $product->discount_price;?></i> 元</span>
        </div>
        <button id="submit">提交订单</button>
    </div>

</div>

</body>
</html>