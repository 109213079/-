<?php
    require_once("connMysql.php");

    $ID = $_POST['ID'];
    $chName = $_POST['chName'];
    $chPrice = $_POST['chPrice'];
    if($chName == '') {
        $chC = "UPDATE `shopping cart` SET price={$chPrice} WHERE ID={$ID}";
        mysqli_query($db_link, $chC);
    }
    elseif($chPrice == '') {
        $chC = "UPDATE `shopping cart` SET commodity='{$chName}' WHERE ID={$ID}";
        mysqli_query($db_link, $chC);
    }
    else{
        $chC = "UPDATE `shopping cart` SET commodity='{$chName}', price={$chPrice} WHERE ID={$ID}";
        mysqli_query($db_link, $chC);
    }
?>

<script type="text/javascript">
    alert('已修改商品!');
    window.location.href='commodity.php';
</script>

