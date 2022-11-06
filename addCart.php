<?php
    require_once("connMysql.php");

    $data = "SELECT ID, inventory, cart FROM `shopping cart`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $inventory = $inca['inventory'];
        $cart = $inca['cart'];
        if(($inca['cart']+$number) > $inventory) {
            $addCart = $inventory;
        }
        else {
            $addCart = $cart + $number;
        }

        $updateSql = "UPDATE `shopping cart` SET cart='$addCart' WHERE ID={$inca['ID']}";
        mysqli_query($db_link, $updateSql);
    }
?>

<script type="text/javascript">
    alert('已加入購物車!');
    window.location.href='client.php';
</script>

