<html>   
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> </title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
					<title>content of system</title>
	</head>
	<body>
		<div  id="toptabmenu">
     <ul class="a">
   <b>
		 <li><a href="index.php">Home</a></li>
			<li><a href="vision.php">Mission/Vision</a></li>
			<li><a href="new1.php">Bidder-Rgistration</a></li>
	 <li> <a href="login.php">Login</li> 
		<li> <a>About-Us....</a>
					<ul class="b">
					<li><a href="us.php" >developer-team</a></li>
					<li><a href="system.php" >about-system</a></li>
					<li><a href="about_uog.php">about-uog</a></li></ul>
				</li>
<li><a href="comment.php">Comment</a></li>
			<li><a>view....</a>
			  <ul class="b">
				  <li><a href="viewnotice.php">view notice<?php
				  include("connection.php");
 $sql="select *from tender where closing_date>=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href= "feedback.php">view director notice
				  <?php
include("connection.php");
 $sql="select *from notice where end_date<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="itemsupplier.php">view winner
				  	<?php
				  include("connection.php");
 $sql="select *from supplier where registereddate<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="commented.php">view comment
				  <?php
				  include("connection.php");
 $sql="select *from comment where date<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				
				  
			</ul>
			
	   </li>	</b>
			</ul>
    
</div>
	</body>
</html>