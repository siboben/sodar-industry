<?php

$id = $_GET['id'];

include "connect.php";

$delete = "DELETE FROM product_store WHERE id = '$id'";
$query = mysql_query ($delete);

header ("Location: view_bought.php");
?>