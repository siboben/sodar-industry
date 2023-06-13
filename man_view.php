<html>
<head>
<title>SODAR - Managers List</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
    include "header.php";
    //include "menu.php";
    include "left.php";
?>

<div id="content">

<h3 style = 'float: center; font-family: georgia'>List of registered Managers</h3>

<?php

include "connect.php";

$select = "SELECT * FROM manager";
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
<th>National ID</th>
<th>Username</th>
<th>Password</th>
<th>Salary</th>
<th colspan = 2>Actions</th>
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
<td><?php echo $row['nid']; ?></td>
<td><?php echo $row['username']; ?></td>
<td><?php echo $row['password']; ?></td>
<td><?php echo $row['salary']; ?>Rwf</td>
<td>
<a href = "man_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
</td>
<td>
<a href = "man_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
</td>
</tr>

<?php

$counter++;

}

?>

</table>

<a href = "welcome_admin.php">Back</a>

</div>

<?php

include "footer.php";

?>

</body>
</html>