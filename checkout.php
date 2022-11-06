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
            <h2>結帳</h2>
            <table align=center border="2" cellpadding="5">
                <tr><th>編號</th><th>名稱</th><th>價格</th><th>購買數量</th><th>金額</th></tr>
                <?php
                    $sql = "SELECT ID, commodity, price, cart, checkout FROM `shopping cart`";
                    $result = mysqli_query($db_link, $sql);
                    $allTotal = 0;
                    while($row = $result -> fetch_assoc()){
                        if($row['cart'] != 0) {
                            $total = $row['price'] * $row['cart'];
                            $allTotal += $total;
                            echo "<tr><td name='ID{$row['ID']}'>{$row['ID']}</td>
                            <td name='commodity{$row['ID']}'>{$row['commodity']}</td><td name='price{$row['ID']}'>\${$row['price']}</td>
                            <td name='cart{$row['ID']}'>{$row['cart']}個</td><td>\${$total}</td></tr>";
                        }

                        $checkout = $row['checkout'] + $row['cart'];
                        $updateSql = "UPDATE `shopping cart` SET checkout={$checkout} WHERE ID={$row['ID']}";
                        mysqli_query($db_link, $updateSql);
                    }

                    echo "</table><br>";
                    echo "<table align=center border='2' cellpadding='2' width='300'><tr><td>總金額</td><td>\${$allTotal}</td></tr></table>";
                    
                    $clear = "UPDATE `shopping cart` SET cart=0";
                    mysqli_query($db_link, $clear);
                ?>
            <hr>
            <table align=center border="1" cellpadding="3">
                <th><a href="client.php">回商品頁面</a></th>
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>