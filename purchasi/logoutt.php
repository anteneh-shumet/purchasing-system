
<?php  	  
session_start();
unset($_SESSION['adminusername']);
unset($_SESSION['adminpassword']);
if( !isset($_SESSION['adminusername']) || !isset($_SESSION['adminpassword']))
header("location:logina.php");

?>  
