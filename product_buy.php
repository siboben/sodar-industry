<html>
<head>
<title>SODAR - Product buying</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>Product Buying Form</h3>

<form action="product_buying.php" method="POST">

<table align="center" width="350" border = "0">

<?php
if (isset ($_GET['msg']) && $_GET['msg'] == 'TRY') {
    echo "<font style ='color: red; font-family: georgia'>Saving failed!! Try again" . "</font>";
}
?>

	<tr>
        <td>Product name:</td>
		<td><input type="text" size = "25" name="product_name" required /></td>
	</tr>
	<tr>
        <td>Product category:</td>
		<td><input type="text" size = "25" name="product_category" required /></td>
	</tr>

	<tr>
        <td>Quantity (Kg):</td>
		<td><input type="text" size = "25" name="quantity" required /></td>
	</tr>
	<tr>
        <td>Price/Kg:</td>
		<td><input type="text" size = "25" name="price" required /></td>
	</tr>	

	<tr>
        <td><input type="submit" value="Save"/></td>
        <td><input type = "reset" value = "Cancel"></td>
    </tr>
    </table>
	
</form>   
<a href = "welcome_manager.php">Back</a>
</div>

<?php

include "footer.php";

?>

</body>
</html>