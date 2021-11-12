

<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="text/javascript" src="date_time2.js"></script>
		<title>purchasing</title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
	</head>
<body bgcolor="#B0C4DE">
		<div id="templatemo_wrapper">
				<?php include("head.php");?>
        <div  id="toptabmenu">
      
			<?php include("list.php");?>
		</div>
<div style="background-color: white;"><center>
	  
	   
<form id="form" action="" method="post">
<h2 class="style12"> <center> Write Your Comment Here</center> </h2>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="id" required="" style='width: 25%;
					height:15%; border-radius:4px;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fname<input type="text" name="fname" placeholder="not mandatory" /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lname<input type="text" name="lname" placeholder="not mandatory"  /><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comment:
<textarea name="comment" required=""></textarea><br />	<br><br>		
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:
<input type="text" name="sdate" value="<?php echo date('Y-m-d');?>" required="" /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="submit" name="Register">Send</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button  type="reset" >reset</button><br><br><br>
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
		echo "<font color='red' size='5'>Connection Failed</font>";
}
?>
</form></center></div>
			 </div></div>
		
</div>

</div>
		<center>
<div id="fotter">
<?php include("footer.php");?>
	</div></center>

</body>
</html>
