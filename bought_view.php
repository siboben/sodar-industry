<html>
<head>
<title>SODAR - List of bought products</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>List of bought products</h3>

<?php

include "connect.php";

$select = "SELECT * FROM product_store";
$query = mysql_query ($select);

?>

<table border = 1 align = "center">

<tr>
<th>N<sup>o</sup></th>
<th>Product Name</th>
<th>Product Category</th>
<th>Quantity(Kg)</th>
<th>Price/Kg</th>
<th>Total</th>
</tr>

<?php

$counter = 1;
$count = 0;
while ($row = mysql_fetch_array ($query)) {
$count += $row['total'];
?>

<tr>
<td><?php echo $counter; ?></td>
<td><?php echo $row['product_name']; ?></td>
<td><?php echo $row['product_category']; ?></td>
<td><?php echo $row['quantity']; ?></td>
<td><?php echo $row['price']; ?>Rwf</td>
<td><?php echo $row['total']; ?>Rwf</td>
</tr>

<?php

$counter++;

}

?>
<tr>
<td colspan = "6"><b>The total money spent in buying is: </b><?php echo $count; ?>Rwf</td>
</tr>
</table>

<a href = "welcome_manager.php">Back</a>

</div>

<?php

include "footer.php";

?>

</body>
</html>