<html>
<head>
<title>SODAR - Product Selling</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<?php

$date = $_POST['date'];
$name = $_POST['product_name'];
$category = $_POST['product_category'];
$quantity = $_POST['quantity'];
$price1 = $_POST['cost_price'];
$price2 = $_POST['sold_price'];
$total1 = $quantity * $price1;
$total2 = $quantity * $price2;
$profit = $total2 - $total1;

include 'connect.php';

$sql=mysql_query("select * from product_store where product_name = '$name' and product_category = '$category'");
$row=mysql_fetch_array($sql);
$quantity_in_store = $row['quantity'];

$price_stored = $row['price'];
$quantity_ordered=$quantity;
$remaining_quantity=$quantity_in_store-$quantity_ordered;
$total_stored = $remaining_quantity * $price_stored;

if($quantity_ordered>$quantity_in_store){
	header("Location: product_sell.php?msg=TOO");
}

else {

$insert = "UPDATE product_store SET product_category='$category', quantity='$remaining_quantity', total='$total_stored' where product_name = '$name' and product_category = '$category'";
$result = mysql_query ($insert);

$insert = "INSERT INTO sold_product SET date='$date', product_name='$name', product_category='$category', quantity='$quantity', cost_price='$price1', sold_price='$price2', total_cost='$total1', total_sold='$total2', profit='$profit'";
$result = mysql_query ($insert);
?>
<h1>Rice Selling successful!</h1>
<table align="center">
<tr>
<td>
<b>Date: </b><?php echo $date; ?><br><br>
<b>Name of product: </b><?php echo $name; ?><br><br>
<b>Category of product: </b><?php echo $category; ?><br><br>
<b>Quantity of product bought: </b><?php echo $quantity; ?>Kg<br><br>
<b>Price of product per Kg: </b><?php echo $price2; ?>Rwf<br><br>
<b>Total Money to be paid: </b><?php echo $total2; ?>Rwf<br><br>
<b>Profit of this product: </b><?php echo $profit; ?>Rwf<br><br>
</td>
</tr>
</table>
<a href = "welcome_manager.php">Back</a>

<?php
if ($result) {
   
//header ("Location: sold_view.php");
}
else {
    //header ("Location: product_sell.php?msg=TRY");
}
}
?>
</div>

<?php

include "footer.php";

?>

</body>
</html>