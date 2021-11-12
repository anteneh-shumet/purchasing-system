
<?php  	  
session_start();
unset($_SESSION['iusername']);
unset($_SESSION['ipassword']);
if( !isset($_SESSION['iusername']) || !isset($_SESSION['ipassword']))
header("location:logina.php");

?>  