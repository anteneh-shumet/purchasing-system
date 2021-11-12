
<?php  	  
session_start();
unset($_SESSION['fusername']);
unset($_SESSION['fpassword']);
if( !isset($_SESSION['fusername']) || !isset($_SESSION['fpassword']))
header("location:login.php");

?>  