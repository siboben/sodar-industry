<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include "connect.php";

    $select = "select * from administrator where username = '$username' and password = '$password'";
    $query = mysql_query($select);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: welcome_admin.php");
    }
   
    else {
        header ("Location: admin_login.php?msg=FAIL");
    }
?>
