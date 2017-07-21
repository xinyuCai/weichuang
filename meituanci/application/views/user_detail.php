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
    <link rel="stylesheet" href="css/user_detail.css">
    <script src="js/rem.js"></script>
    <script src="js/jquery-1.12.4.js"></script>
    <script src="js/user_detail.js"></script>
    <script src="js/jquery.mobile-1.4.5.js"></script>
    <title>Document</title>
</head>
<body>
    <div data-role="popup" id="popupMenu" data-theme="a">
    <ul data-role="listview" data-inset="true" style="min-width:1rem;">
      <li><a id="user_detail" href="javascript:;">个人信息</a></li>
      <li><a id="logout" href="javascript:;">退出登录</a></li>
    </ul>
    </div>
    <div id="header">
        <a id="home" href="javascript:;"
           class="ui-btn-inline ui-icon-home ui-btn-left ui-btn-icon-notext">
        </a>
        用户详情
        <div id="username">
            <a href='#popupMenu' data-rel='popup' data-transition='slideup' style='color: #fff;'>
                <?php echo $this->session->userinfo->username; ?>
            </a>
        </div>
    </div>
    <div id="clear"></div>
    <h2 style="float: left;">订单列表</h2>
    <table data-role="table" data-mode="columntoggle" class="table-stripe ui-responsive"
           data-column-btn-theme="a" data-column-popup-theme="a" data-column-btn-text="选择显示的列">
        <thead>
            <tr class="ui-bar-a">
                <th data-priority="1">订单ID</th>
                <th data-priority="1">产品名称</th>
                <th data-priority="1">产品原单价</th>
                <th data-priority="1">数量</th>
                <th data-priority="1">订单单价</th>
                <th data-priority="1">订单总价</th>
            </tr>        
        </thead>        
        <tbody>
          <?php foreach ($order_list as $order): ?>
                <tr>
                    <input type="hidden" class="order_id" value=<?php echo $order->order_id; ?>>
                    <td><?php echo $order->order_id; ?></td>
                    <td><?php echo $order->product_name; ?></td>
                    <td><?php echo $order->price; ?></td>
                    <td><?php echo $order->num; ?></td>
                    <td><?php echo $order->order_price; ?></td>
                    <td><?php echo $order->total; ?></td>
                </tr>
            <?php endforeach; ?>         
        </tbody>       
    </table>
</body>
</html>