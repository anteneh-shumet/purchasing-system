
<?php  	  
session_start();
unset($_SESSION['susername']);
unset($_SESSION['spassword']);
if( !isset($_SESSION['susername']) || !isset($_SESSION['spassword']))
header("location:login.php");

?>  