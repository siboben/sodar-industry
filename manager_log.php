<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    include "connect.php";

    $select = "select username, password from manager where username = '$username' and password = '$password'";
    $query = mysql_query($select);
    $fetch = mysql_fetch_array($query);
    if ($fetch){
        session_start();
        $_SESSION['login_successful'] = 'YES';
        $_SESSION['username'] = $username;

        header ("Location: welcome_manager.php");
    }
   
    else {
        header ("Location: manager_login.php?msg=FAIL");
    }
?>
