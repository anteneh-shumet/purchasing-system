
<?php  	  
session_start();
unset($_SESSION['qusername']);
unset($_SESSION['qpassword']);
if( !isset($_SESSION['qusername']) || !isset($_SESSION['qpassword']))
header("location:login.php");

?>  