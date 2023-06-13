<?php

$id = $_GET['id'];

include "connect.php";

$delete = "DELETE FROM sold_product WHERE id = '$id'";
$query = mysql_query ($delete);

header ("Location: view_sold.php");
?>