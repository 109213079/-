<?php
    require_once("connMysql.php");

    $data = "SELECT ID, cart FROM `shopping cart`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $cart = $inca['cart'];
        if($number > $cart) {
            $decCart = 0;
        }
        else {
            $decCart = $cart - $number;
        }

        $updateSql = "UPDATE `shopping cart` SET cart='$decCart' WHERE ID={$inca['ID']}";
        mysqli_query($db_link, $updateSql);
    }

    
?>

<script type="text/javascript">
    alert('已退出購物車!');
    window.location.href='showCart.php';
</script>

