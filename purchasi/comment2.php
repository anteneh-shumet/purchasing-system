
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="text/javascript" src="date_time2.js"></script>
		<title>ግዥ በአማረኛ</title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
	</head>
<body bgcolor="#B0C4DE">
		<div id="templatemo_wrapper">
				<?php include("head2.php");?>
        <div  id="toptabmenu">
      
			<?php include("listt.php");?>
		</div>
<div style="background-color: white;"><center>
	   
<form id="form" action="" method="post">

<h2 class="style12"> አስተያየት መስጫ </h2> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="id" required="" style='width: 25%;
					height:15%; border-radius:4px;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ስም：<input type="text" name="fname" placeholder="አስገዳጅ አደለም" /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የአባት ስም：<input type="text" name="lname" placeholder="አስገዳጅ አደለም" /><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አስተያየት：
<textarea name="comment"></textarea><br />	<br><br>		
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ቀን：
<input type="text" name="sdate" value="<?php echo date('Y-m-d');?>" required="" /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="Register" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;">ላክ</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button  type="reset" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;">ሰርዝ</button><br><br><br>
<?php
if(isset($_POST["Register"]))
{	
	//$sub=$_POST["sub"];
	$cont=$_POST["comment"];
	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	if($con)
	{
		
			$sql="insert into comment(id,fname,lname,comment,date) values('identity(1,1)','$fname','$lname','$cont',Now())";
			$inserted=mysqli_query($con,$sql);
			if(mysqli_affected_rows($con))
				echo "<font color='green' size='5'>comment send successfully!</font>";
			else	
				echo "<font color='red' size='5'>Unable to send feadback</font>";
	
		
		}
	else
		echo "<font color='red' size='5'>Connection Failed</font></font>";
}
?>

			 </form></div></div>
			 		



</div>
<center>
<div id="fotter">
<?php include("foot.php");?>
	</div></center>


		

</body>
</html>
