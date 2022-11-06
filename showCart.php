<?php 
    require_once("connMysql.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>client</title>
        <style type="text/css">
            body {
                width:600px;
                margin:10px auto;
                text-align:center;
            }
            #content {
                margin:20px auto;
                border:2px solid ivory;
                font-size: 14pt;
            }
        </style>
    </head>
    <body>
        <div id="content">
            <h2>購物車</h2>
            <table align=center border="2" cellpadding="5">
                <tr><th>編號</th><th>名稱</th><th>價格</th><th>購買數量</th><th>刪除</th></tr>
                <?php
                    echo "<form action='delCart.php' method='post'>";
                    $sql = "SELECT ID, commodity, price, cart FROM `shopping cart`";
                    $result = mysqli_query($db_link, $sql);
                    while($row = $result -> fetch_assoc()){
                        if($row['cart'] != 0)
                            echo "<tr><td name='ID{$row['ID']}'>{$row['ID']}</td>
                            <td name='commodity{$row['ID']}'>{$row['commodity']}</td><td name='price{$row['ID']}'>\${$row['price']}</td>
                            <td name='cart{$row['ID']}'>{$row['cart']}個</td><td>數量：<input type='text' name='number{$row['ID']}' size='7'> </td></tr>";
                    }

                    echo "<tr><td colspan='5'><input type='submit' value='退出購物車'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <table align=center border="1" cellpadding="3">
                <tr><th><a href="checkout.php">結帳</a></th>
                <th><a href="client.php">回商品頁面</a></th>
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>