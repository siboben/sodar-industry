<html>
<head>
<title>SODAR - Home Manager</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    //include "menu.php";
    include "left.php";
    ?>
<div id="content">
<h1>Welcome Manager</h1> 
<ul>
<table align="center" width = "800">  
 <tr><td>
	<li><a href = "product_buy.php">Product Buying</a></li>
	</td>
	<td>
	<li><a href = "product_sell.php">Product Selling</a></li>
	</td>
	</tr>
	<tr>
	<td>
	<li><a href = "bought_view.php">View of bought products</a></li>
	</td>
	<td>
	<li><a href = "employees_view.php">Registered employees</a></li>
	</td>
	</tr>
	<tr>
	<td>
	<li><a href = "sold_view.php">View of Sold Products</a></li>
	</td>
</tr>
  </table> 
</ul>

</div>

<?php

include "footer.php";

?>

</body>
</html>