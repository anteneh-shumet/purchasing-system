
<?php  	  
session_start();
unset($_SESSION['musername']);
unset($_SESSION['mpassword']);
if( !isset($_SESSION['musername']) || !isset($_SESSION['mpassword']))
header("location:logina.php");

?>  