<?php

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$sector = $_POST['sector'];
$district = $_POST['district'];
$nid = $_POST['nid'];
$salary = $_POST['salary'];

include 'connect.php';

$insert = "UPDATE employees SET firstname='$fname', lastname='$lname', gender='$gender', phone='$phone', email='$email', sector='$sector', district='$district', nid='$nid', salary='$salary' WHERE id = '$id'";
$result = mysql_query ($insert);

if ($result) {
   
header ("Location: emp_view.php");
}
?>
