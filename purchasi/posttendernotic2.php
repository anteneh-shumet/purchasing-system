<?php error_reporting(0);
include("connection.php");
//include("seassion.php");

?>

<?php
$pos = strpos($_SERVER['HTTP_REFERER'],getenv('HTTP_HOST'));
if($pos===false)
  die(' Restricted access!! you should be Login first to access this page!!');

?>
 <?php
 
 if(isset($_POST['post']))
 { 
 $adate=date("Y-m-d"); 
	$tender_id=$_POST['tender_id'];
  $post_date=$_POST['post_date'];
		$subject=$_POST['subject'];
		$content=$_POST['content'];
		$posted_date=$_POST['start_date'];
		$d=$_POST['closing_date'];
 

 if( strtotime($adate)>strtotime($d)){
 echo '<script type="text/javascript"> alert("ምዝገባ ቀን አልፏል");window:location=\'new1.php\';</script>';
 }
 elseif ( strtotime($adate)<strtotime($posted_date)){
 echo '<script type="text/javascript"> alert("ምዝገባው ዎደ ፊት ነው");window:location=\'new1.php\';</script>';
 }
 else{
echo '<script type="text/javascript">  window:location=\'supreg2.php\';</script>';

	//include('applicant_Login.php');
 }
 } 

mysql_close($con);
?>