
<?php  	  
session_start();
unset($_SESSION['ousername']);
unset($_SESSION['opassword']);
if( !isset($_SESSION['ousername']) || !isset($_SESSION['opassword']))
header("location:logina.php");

?>  
