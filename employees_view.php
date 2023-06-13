<html>
<head>
<title>SODAR - Employees List</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>List of registered Employees</h3>

<?php

include "connect.php";

$select = "SELECT * FROM employees";
$query = mysql_query ($select);

?>

<table border = 1 align = "center">

<tr>
<th>N<sup>o</sup></th>
<th>Firstname</th>
<th>Lastname</th>
<th>Gender</th>
<th>Phone</th>
<th>Email</th>
<th>Sector</th>
<th>District</th>
<th>National ID</th>
<th>Salary</th>
</tr>

<?php

$counter = 1;

while ($row = mysql_fetch_array ($query)) {
?>

<tr>
<td><?php echo $counter; ?></td>
<td><?php echo $row['firstname']; ?></td>
<td><?php echo $row['lastname']; ?></td>
<td><?php echo $row['gender']; ?></td>
<td><?php echo $row['phone']; ?></td>
<td><?php echo $row['email']; ?></td>
<td><?php echo $row['sector']; ?></td>
<td><?php echo $row['district']; ?></td>
<td><?php echo $row['nid']; ?></td>
<td><?php echo $row['salary']; ?>Rwf</td>
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