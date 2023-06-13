<html>
<head>
<title>SODAR - Home Admin</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include "header.php";
    //include "menu.php";
    include "left.php";
    ?>
<div id="content">
<h1>Welcome Administrator!</h1>   
<ul>
<table align="center" width = "800">  
 <tr><td>
	<li><a href = "emp_register.php">Employees registration</a></li>
	</td>
	<td>
	<li><a href = "man_register.php">Managers registration</a></li>
	</td>
	</tr>
	<tr>
	<td>
	<li><a href = "view_bought.php">View of bought products</a></li>
	</td>
	<td>
	<li><a href = "emp_view.php">View of registered employees</a></li>
	</td>
	</tr>
	<tr>
	<td>
	<li><a href = "man_view.php">View of registered managers</a></li>
	</td>
	<td>
	<li><a href = "view_sold.php">View of sold products</a></li>
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