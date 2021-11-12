
<?php  	  
session_start();
unset($_SESSION['pusername']);
unset($_SESSION['ppassword']);
if( !isset($_SESSION['pusername']) || !isset($_SESSION['ppassword']))
header("location:logina.php");

?>  