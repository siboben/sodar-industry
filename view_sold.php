<html>
<head>
<title>SODAR - List of sold products</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>List of sold products</h3>

<?php

include "connect.php";

$select = "SELECT * FROM sold_product";
$query = mysql_query ($select);

?>

<table border = 1 align = "center">

<tr>
<th>N<sup>o</sup></th>
<th>Date</th>
<th>Product Name</th>
<th>Product Category</th>
<th>Quantity(Kg)</th>
<th>Price/Kg</th>
<th>Total</th>
<th>Profit</th>
<th>Action</th>
</tr>

<?php

$counter = 1;
$count = 0;
while ($row = mysql_fetch_array ($query)) {
$count += $row['profit'];
?>

<tr>
<td><?php echo $counter; ?></td>
<td><?php echo $row['date']; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['product_category']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['sold_price']; ?>Rwf</td>
<td><?php echo $row['total_sold']; ?>Rwf</td>
<td><?php echo $row['profit']; ?>Rwf</td>
<td>
<a href = "sold_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php

$counter++;

}

?>
<tr>
	<td colspan = 10><b>The total profit gained is: &nbsp;<?php echo $count; ?>Rwf</b></td>
</tr>
</table>

<a href = "welcome_admin.php">Back</a>

</div>

<?php

include "footer.php";

?>

</body>
</html>