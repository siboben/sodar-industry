<html>
<head>
<title>SODAR - Product Buying</title>
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

$name = $_POST['product_name'];
$category = $_POST['product_category'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$total = $quantity * $price;

include 'connect.php';

$sql=mysql_query("select * from product_store where product_name = '$name' and product_category = '$category'");
$row=mysql_fetch_array($sql);
$quantity_in_store = $row['quantity'];

$price_stored = $row['price'];
$quantity_ordered=$quantity;
$total_quantity=$quantity_in_store+$quantity_ordered;
$total_stored = $total_quantity * $price_stored;

$insert = "INSERT INTO product_store SET product_name='$name', product_category='$category', quantity='$quantity', price='$price', total='$total'";
$result = mysql_query ($insert);

?>
<h1>Rice buying successful!</h1>
<table align="center">
<tr>
<td>
<b>Name of product: </b><?php echo $name; ?><br><br>
<b>Category of product: </b><?php echo $category; ?><br><br>
<b>Quantity of product bought: </b><?php echo $quantity; ?>Kg<br><br>
<b>Price of product per Kg: </b><?php echo $price; ?>Rwf<br><br>
<b>Total Money to be paid: </b><?php echo $total; ?>Rwf<br><br>
</td>
</tr>
</table>
<a href = "welcome_manager.php">Back</a>
<?php

if ($result) {
   
//header ("Location: bought_view.php");
}
else {
    //header ("Location: product_buy.php?msg=TRY");
	$update = "UPDATE product_store SET product_name='$name', product_category='$category', quantity='$total_quantity', price='$price', total='$total_stored' where product_name = '$name' and product_category = '$category'";
	$result = mysql_query ($update);
	//header ("Location: bought_view.php");
}
?>
</div>

<?php

include "footer.php";

?>

</body>
</html>