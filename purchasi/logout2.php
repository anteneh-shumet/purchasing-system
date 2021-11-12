
<?php  	  
session_start();
unset($_SESSION['dusername']);
unset($_SESSION['dpassword']);
if( !isset($_SESSION['dusername']) || !isset($_SESSION['dpassword']))
header("location:login.php");

?>  
