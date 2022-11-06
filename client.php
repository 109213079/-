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
            <h2>商品清單</h2>
            <table align=center border="2" cellpadding="5">
                <tr><th>編號</th><th>名稱</th><th>價格</th><th>庫存</th><th>購物</th></tr>
                <?php
                    echo "<form action='addCart.php' method='post'>";
                    $sql = "SELECT ID, commodity, price, inventory FROM `shopping cart`";
                    $result = mysqli_query($db_link, $sql);
                    while($row = $result -> fetch_assoc()){
                        if($row['inventory'] != 0)
                            echo "<tr><td name='ID{$row['ID']}'>{$row['ID']}</td>
                            <td name='commodity{$row['ID']}'>{$row['commodity']}</td><td name='price{$row['ID']}'>\${$row['price']}</td>
                            <td name='inventory{$row['ID']}'>{$row['inventory']}個</td><td>數量：<input type='text' name='number{$row['ID']}' size='7'> </td></tr>";
                    }

                    echo "<tr><td colspan='5'><input type='submit' value='加入購物車'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <table align=center border="1" cellpadding="2">
                <tr><th><a href="showCart.php">購物車內容</a></th>
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>