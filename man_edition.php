<?php

$id = $_POST['id'];
$fname = $_POST['firstname'];
$lname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$user = $_POST['username'];
$pass = $_POST['password'];
$nid = $_POST['nid'];
$salary = $_POST['salary'];

include 'connect.php';

$insert = "UPDATE manager SET firstname='$fname', lastname='$lname', gender='$gender', phone='$phone', email='$email', username='$user', password='$pass', nid='$nid', salary='$salary' WHERE id = '$id'";
$result = mysql_query ($insert);

if ($result) {
   
header ("Location: man_view.php");
}
?>
