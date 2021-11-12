
<?php  	  
session_start();
unset($_SESSION['wusername']);
unset($_SESSION['wpassword']);
if( !isset($_SESSION['wusername']) || !isset($_SESSION['wpassword']))
header("location:login.php");

?>  