<?php
    require_once("connMysql.php");

    $data = "SELECT ID, inventory, checkout FROM `shopping cart`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $inventory = $inca['inventory'];
        $checkout = $inca['checkout'];
        if($number > $checkout) {
            $delInventory = $inventory - $checkout;
            $delCheckout = 0;
        }
        else {
            $delInventory = $inventory - $number;
            $delCheckout = $checkout - $number;
        }

        $updateSql = "UPDATE `shopping cart` SET inventory='$delInventory', checkout='$delCheckout' WHERE ID={$inca['ID']}";
        mysqli_query($db_link, $updateSql);
    }
?>

<script type="text/javascript">
    alert('已出貨!');
    window.location.href='shipping.php';
</script>

