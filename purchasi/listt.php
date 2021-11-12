
<html>   
	<head>
	
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title> </title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<title>content of system</title>
	</head>
	<body>
		<div  id="toptabmenu">
     <ul class="a">
   <b>
		 <li><a href="second.php">ዋና ገጽ</a></li>
			<li><a href="vis.php">ራዕይ/ተልዕኮ</a></li>
			<li><a href="new2.php">የተጫራች ምዝገባ</a></li>
	 <li><a href="logina.php">ግባ</li> 

		 <li> <a>ስለ እኛ....</a>
					<ul class="b">
					<li><a href="uss.php" >ሲስተሙን የሰራው</a></li>
					<li><a href="system1.php" >ስለ ሲስተሙ</a></li>
					<li><a href="about_ug.php">ስለ ዩኒቨርሲቲው</a></li></ul>
					
				</li>
			<li><a href="comment2.php">አስተያየት</a></li>
	         <li><a>እዩ....</a>
			  <ul class="b">
				  <li><a href="viewnotice2.php">የጫረታ ማስታዎቂያ እዩ
				  	<?php 
				  	include("connection.php");
 $sql="select *from tender where closing_date>=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a>
				  <li><a href="feedback2.php">የዳይሬክተ ማስታዎቂያ እዩ<?php
include("connection.php");
 $sql="select *from notice where end_date<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="itemsupplier2.php">አሽናፊውን እዩ
				  	<?php
				  	include("connection.php");
 $sql="select *from supplier where registereddate<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="commented2.php">አስተያየት እዩ
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