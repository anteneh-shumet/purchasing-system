
<?php  	  
session_start();
unset($_SESSION['apusername']);
unset($_SESSION['appassword']);
if( !isset($_SESSION['apusername']) || !isset($_SESSION['appassword']))
header("location:logina.php");

?>  