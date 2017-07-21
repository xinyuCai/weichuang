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
    <link rel="stylesheet" href="css/collect_detail.css">
    <script src="js/rem.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/collect_detail.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
    <title>我的收藏</title>
</head>
<body>
    <div id="header">
        <div id="left">
            <img src="img/left-arrow.png" alt="">
        </div>
        我的收藏
        <div id="home">
            <a href="javascript:;"
               class="ui-btn-inline ui-icon-home ui-btn-left ui-btn-icon-notext">
            </a>
        </div>
    </div>

    <div role="main" class="ui-content">
        <div id="guess">
            <h3>我的收藏</h3>
            <ul id="menu">
                <?php foreach ($results as $product) {?>
                    <li>
                        <input type="hidden" class="product-id" value=<?php echo $product->product_id;?>>
                        <img src="<?php echo $product->img;?>" alt="" class="brand">
                        <div class="detail">
                            <p class="detail-name"><?php echo $product->product_name;?></p>
                            <p class="detail-desc"><?php echo $product->description;?></p>
                            <div>
                                <span class="price"><?php echo $product->discount_price;?>元</span>
                                <span>门市价:<?php echo $product->price;?>元</span>
                                <span class="sold">已售2<?php /*echo $product->num==null ? 0:$product->num; */?></span>
                            </div>
                        </div>
                    </li>
                <?php }?>
            </ul>
        </div>
    </div>
</body>
</html>