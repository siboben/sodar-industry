<html>
<head>
<title>SODAR - Manager Edition</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>Manger Edition Form</h3>

<?php

$id = $_GET['id'];

include "connect.php";

$select = "SELECT * FROM manager WHERE id = '$id'";
$query = mysql_query ($select);
$fetch = mysql_fetch_array ($query);

?>

<form action="man_edition.php" method="POST">

<table align="center" width="350" border = "0">

    <tr>
        <td>Firstname:</td>
		<td><input type="text" size = "25" name="firstname" value = "<?php echo $fetch['firstname']; ?>" /></td>
	</tr>
	<tr>
        <td>Lastname:</td>
		<td><input type="text" size = "25" name="lastname" value = "<?php echo $fetch['lastname']; ?>" /></td>
	</tr>
	<tr>
        <td>Gender:</td>
		<td><select name="gender">
			<option value = "Not selected">--Choose sex--</option>
			<option value = "Male" <?php echo $fetch['gender'] == "Male" ? "SELECTED" : ""; ?>>Male</option>
			<option value = "Female" <?php echo $fetch['gender'] == "Female" ? "SELECTED" : ""; ?>>Female</option>
			</select>
		</td>
	</tr>
	<tr>
        <td>Phone No:</td>
		<td><input type="text" size = "25" name="phone" value = "<?php echo $fetch['phone']; ?>" /></td>
	</tr>
	<tr>
        <td>Email:</td>
		<td><input type="text" size = "25" name="email" value = "<?php echo $fetch['email']; ?>" /></td>
	</tr>
	<tr>
        <td>National ID:</td>
		<td><input type="text" size = "25" name="nid" value = "<?php echo $fetch['nid']; ?>" /></td>
	</tr>
	<tr>
	<tr>
        <td>Username:</td>
		<td><input type="text" size = "25" name="username" value = "<?php echo $fetch['username']; ?>" /></td>
	</tr>
	<tr>
        <td>Password:</td>
		<td><input type="text" size = "25" name="password" value = "<?php echo $fetch['password']; ?>" /></td>
	</tr>	
        <td>Salary:</td>
		<td><input type="text" size = "25" name="salary" value = "<?php echo $fetch['salary']; ?>" /></td>
	</tr>
	<tr>
	
		<input type = "hidden" name = "id" value = "<?php echo $fetch['id']; ?>">
		
        <td><input type="submit" value="Save"/></td>
        <td><input type = "reset" value = "Cancel"></td>
    </tr>
    </table>
	
</form>   


<a href = "man_view.php">Back</a>

</div>

<?php

include "footer.php";

?>

</body>
</html>