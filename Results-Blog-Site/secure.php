<?php

$username = "admin"; 
$password = "admin"; 

if ($_POST['txtUsername'] != $username || $_POST['txtPassword'] != $password) { 

?> 

<h1>Login</h1> 

<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"> 
    <p><label for="txtUsername">Username: (try admin)</label> 
    <br /><input type="text" title="Enter your Username" name="txtUsername" />
	</p> 

    <p><label for="txtpassword">Password: (try admin)</label> 
    <br /><input type="password" title="Enter your password" name="txtPassword" />
	</p> 

    <p><input type="submit" name="Submit" value="Login" /></p> 

</form> 

<?php 

} 
else { 

include("insert.php");

} 

?> 
