
<?php  	  
session_start();
unset($_SESSION['prusername']);
unset($_SESSION['prpassword']);
if( !isset($_SESSION['prusername']) || !isset($_SESSION['prpassword']))
header("location:logina.php");

?>  