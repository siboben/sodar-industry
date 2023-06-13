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
</tr>

<?php

$counter = 1;

while ($row = mysql_fetch_array ($query)) {
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
</tr>

<?php

$counter++;

}

?>

</table>

<a href = "welcome_manager.php">Back</a>

</div>

<?php

include "footer.php";

?>

</body>
</html>