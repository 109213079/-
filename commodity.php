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
            <h2>目前商品項目</h2>
            <table align=center border="2" cellpadding="3">
                <tr><th>編號</th><th>名稱</th><th>價格</th></tr>
                <?php
                    $sql = "SELECT ID, commodity, price FROM `shopping cart`";
                    $result = mysqli_query($db_link, $sql);
                    while($row = $result -> fetch_assoc()){
                        echo "<tr><td name='ID{$row['ID']}'>{$row['ID']}</td>
                        <td name='commodity{$row['ID']}'>{$row['commodity']}</td><td name='price{$row['ID']}'>\${$row['price']}</td></tr>";
                    }
                ?>
            </table>
            <hr>
            <h3>增加商品項目</h3>
            <table align=center border="2" cellpadding="2">
                <tr><th>名稱</th><th>價格</th></tr>
                <?php
                    echo "<form action='addCommodity.php' method='post'>";
                    echo "<tr><td><input type='text' name='c' size='7'></td>
                    <td><input type='text' name='p' size='7'></td></tr>";

                    echo "<tr><td colspan='2'><input type='submit' value='增加商品'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <h3>刪除商品項目</h3>
            <table align=center border="2" cellpadding="1">
                <tr><th>編號</th></tr>
                <?php
                    echo "<form action='delCommodity.php' method='post'>";
                    echo "<tr><td><input type='text' name='id' size='7'></td></tr>";

                    echo "<tr><td colspan='1'><input type='submit' value='刪除商品'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <h3>修改商品項目</h3>
            <table align=center border="2" cellpadding="2">
                <tr><th>編號<th>修改名稱</th><th>修改價格</th></tr>
                <?php
                    echo "<form action='changeCommodity.php' method='post'>";
                    echo "<tr><td><input type='text' name='ID' size='7'></td>
                    <td><input type='text' name='chName' size='7'></td>
                    <td><input type='text' name='chPrice' size='7'></td></tr>";

                    echo "<tr><td colspan='3'><input type='submit' value='修改商品'/></td></tr></form>";
                ?>
            </table>
            <hr>
            <table align=center border="1" cellpadding="2">
                <tr><th><a href="manager.php">商品庫存</a></th>
                <th><a href="shipping.php">已結帳購物車出貨</a></th>
                <th><a href="function.php">回功能選單</a></th></tr>
            </table>
        </div>
    </body>
</html>