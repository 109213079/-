<?php
    require_once("connMysql.php");

    $id = $_POST['id'];
    $delC = "DELETE FROM `shopping cart` WHERE ID={$id}";
    mysqli_query($db_link, $delC);

    $dropID = "ALTER TABLE `shopping cart` DROP ID";
    $createID = "ALTER TABLE `shopping cart` ADD ID SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT FIRST, ADD PRIMARY KEY(ID)";
    mysqli_query($db_link, $dropID);
    mysqli_query($db_link, $createID);
?>

<script type="text/javascript">
    alert('已刪除商品!');
    window.location.href='commodity.php';
</script>

