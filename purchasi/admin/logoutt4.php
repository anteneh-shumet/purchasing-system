
<?php  	  
session_start();
unset($_SESSION['cusername']);
unset($_SESSION['cpassword']);
if( !isset($_SESSION['cusername']) || !isset($_SESSION['cpassword']))
header("location:logina.php");

?>  