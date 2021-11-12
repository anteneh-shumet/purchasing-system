
<?php  	  
session_start();
unset($_SESSION['tusername']);
unset($_SESSION['tpassword']);
if( !isset($_SESSION['tusername']) || !isset($_SESSION['tpassword']))
header("location:logina.php");

?>  