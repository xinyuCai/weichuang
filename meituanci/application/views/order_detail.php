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
    <link rel="stylesheet" href="css/order_detail.css">
    <script src="js/rem.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/order_detail.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
    <title>订单详情</title>
</head>
<body>
    <div id="header">
        <div id="left">
            <img src="img/left-arrow.png" alt="">
        </div>
        订单详情
        <div id="home">
            <a href="javascript:;"
               class="ui-btn-inline ui-icon-home ui-btn-left ui-btn-icon-notext">
            </a>
        </div>
    </div>
    <div role="main" class="ui-content">
        <ul id="menu">
            <li>
                <input type="hidden" class="product_id" value=<?php echo $row->product_id;?>>
                <input type="hidden" class="order_id" value=<?php echo $row2->order_id;?>>
                <img src="<?php echo $row->img;?>" alt="" class="brand">
                <div class="detail">
                    <p class="detail-name"><?php echo $row->product_name;?></p>
                    <p class="detail-desc"><?php echo $row->description;?></p>
                    <div>
                        <span class="price"><?php echo $row->discount_price;?>元</span>
                        <span>门市价:<?php echo $row->price;?>元</span>
                        <span class="sold">已售<?php echo $row->num==null ? 0:$row->num; ?></span>
                    </div>
                </div>
                <div class="arrow"></div>
            </li>
        </ul>
        <div id="explain">
            <span class="refund">不支持随时退款</span>
            <span class="refund">支持过期自动退</span>
        </div>
        <div id="grade">
            <div class="score_star1">
                <div class="score_star2" style="width: <?php echo isset($row3) ? $row3->score*20:0;?>%;"></div>
            </div>
            <div class="score"><?php echo isset($row3) ? $row3->score:0;?>分</div>
            <?php echo isset($row3) ? "":"<div class='comment'>去评价</div>";?>
        </div>
        <div id="detail">
            <h3>订单详情</h3>
            <ul>
                <li>订单编号：<?php echo $row->num==null ? 0:$row2->order_id; ?></li>
                <li>产品名称：<?php echo $row->num==null ? 0:$row->product_name; ?></li>
                <li>下单顾客：<?php echo $row->num==null ? 0:$row2->username; ?></li>
                <li>下单时间：2017-07-19 </li>
                <li>手机号：<?php echo $row->num==null ? 0:$row2->mobile; ?></li>
                <li>单价：<?php echo $row->num==null ? 0:$row2->order_price; ?>元</li>
                <li>数量：<?php echo $row->num==null ? 0:$row2->num; ?>份</li>
                <li>总价：<?php echo $row->num==null ? 0:$row2->total; ?>元</li>
            </ul>
        </div>
    </div>
</body>
</html>