<html>
<head>
<title>SODAR - Manager Registration</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>Manager Registration Form</h3>

<form action="man_registration.php" method="POST">

<table align="center" width="350" border = "0">
<?php
if (isset ($_GET['msg']) && $_GET['msg'] == 'TRY') {
    echo "<font style ='color: red; font-family: georgia'>Registration failed!! Try again" . "</font>";
}
?>
    <tr>
        <td>Firstname:</td>
		<td><input type="text" size = "25" name="firstname" required /></td>
	</tr>
	<tr>
        <td>Lastname:</td>
		<td><input type="text" size = "25" name="lastname" required /></td>
	</tr>
	<tr>
        <td>Gender:</td>
		<td><select name="gender">
			<option value = "Not selected">--Choose sex--</option>
			<option value = "Male">Male</option>
			<option value = "Female">Female</option>
			</select>
		</td>
	</tr>
	<tr>
        <td>Phone No:</td>
		<td><input type="text" size = "25" name="phone" required /></td>
	</tr>
	<tr>
        <td>Email:</td>
		<td><input type="text" size = "25" name="email" required /></td>
	</tr>
	<tr>
        <td>National ID:</td>
		<td><input type="text" size = "25" name="nid" required /></td>
	</tr>
	<tr>
        <td>username:</td>
		<td><input type="text" size = "25" name="username" required /></td>
	</tr>
	<tr>
        <td>Password:</td>
		<td><input type="text" size = "25" name="password" required /></td>
	</tr>	
	<tr>
        <td>Salary:</td>
		<td><input type="text" size = "25" name="salary" required /></td>
	</tr>
	<tr>
        <td><input type="submit" value="Register"/></td>
        <td><input type = "reset" value = "Cancel"></td>
    </tr>
    </table>
	
</form>   
<a href = "welcome_admin.php">Back</a>
</div>

<?php

include "footer.php";

?>

</body>
</html>