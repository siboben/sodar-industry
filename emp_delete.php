<?php

$id = $_GET['id'];

include "connect.php";

$delete = "DELETE FROM employees WHERE id = '$id'";
$query = mysql_query ($delete);

header ("Location: emp_view.php");
?>