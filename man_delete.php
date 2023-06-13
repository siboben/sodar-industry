<?php

$id = $_GET['id'];

include "connect.php";

$delete = "DELETE FROM manager WHERE id = '$id'";
$query = mysql_query ($delete);

header ("Location: man_view.php");
?>