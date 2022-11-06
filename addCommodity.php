<?php
    require_once("connMysql.php");

    $c = $_POST['c'];
    $p = $_POST['p'];
    $addC = "INSERT INTO `shopping cart`(`commodity`, `price`, `inventory`, `cart`, `checkout`) VALUES ('{$c}', {$p}, 0, 0, 0)";
    mysqli_query($db_link, $addC);
?>

<script type="text/javascript">
    alert('已增加商品!');
    window.location.href='commodity.php';
</script>

