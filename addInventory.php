<?php
    require_once("connMysql.php");

    $data = "SELECT ID, inventory FROM `shopping cart`";
    $result = mysqli_query($db_link, $data);
    while($inca = $result -> fetch_assoc()){
        $num = $_POST["number{$inca['ID']}"];
        $number = (int)$num;
        $inventory = $inca['inventory'];
        $addInventory = $inventory + $number;

        $updateSql = "UPDATE `shopping cart` SET inventory='$addInventory' WHERE ID={$inca['ID']}";
        mysqli_query($db_link, $updateSql);
    }
?>

<script type="text/javascript">
    alert('已增加庫存!');
    window.location.href='manager.php';
</script>

