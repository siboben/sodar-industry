<html>
<head>

<title>SODAR - Admin Login</title>

<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

<?php
    include "header.php";
    
	//include "menu.php";
    
	include "left.php";
    
?>

<div id="content">            

<h1>This is Administrator Login Form</h1>
            
            
<?php
                
if (isset ($_GET['msg']) && $_GET['msg'] == 'FAIL'){
                
echo "<font color = 'red' face = 'georgia'>Incorrect Username or Password!! Try again correctly!</font>";
  
}
            
?>

<form method="POST" action="admin_log.php">
                
<table border="0" align="center">
                    
<tr>
                        
<th>Username:</th>
                        
<th>
                            
<input type ="text" name ="username" placeholder="Username" required>
                        
</th>
                        
<tr>
<th>Password:</th>
<th>
<input type ="password" name ="password" placeholder="Password" required>
</th>
</tr>
<tr>
<th colspan="2" align="center">
                                
<input type ="submit" value="Login" style="display: inline; background: grey;border-radius: 5px" />
<input type ="reset" value="Cancel" style="display: inline; background: grey;border-radius: 5px" />
</th>
</tr>
</table>
</form>

</div>
<?php

	include "footer.php";

?>
</body>
</html>