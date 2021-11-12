
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>
<body>
	<div  id="toptabmenu">
     <ul class="a">

<li><a href="blockaccount2.php">ዝጋ</a></li>
<li><a href="backup2.php">መልስ</a></li>
<li><a href="restore2.php">ዎደቦታውመልስ</a></li>
<li><a href="reactivateaccount2.php">አካውንት_ስራ</a></li>

<div class="dropdown">
<li><a href="#">ተመልከት....</a>
<ul class="b">
<li><a href="viewcolleges2.php">ኮሌጅ_እይ</a></li>
<li><a href="viewdepartments2.php"> ዲፓርትመንት_እይ</a></li>
<li><a href="viewoffices2.php">ቢሮ_እይ</a></li>
<li><a href="viewuseraccount2.php"> የተጠቃሚ_አካውንት_እይ</a></li></ul></li>
</div>
<li><a href="logoutt.php">ውጣ</a></li>
 <li><a href="help.php">ማስታዎቂያ....</a>
			  <ul class="b">
				  <li><a href="viewnotice.php">ማስታዎቂያ እይ
				  	<?php
				  include("connection.php");
 $sql="select *from tender where closing_date>=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href= "feedback.php">ዳይሬክተር ማስታዎቂያ እይ
				  <?php
include("connection.php");
 $sql="select *from notice where end_date>=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="itemsupplier.php">አሸናፊ እይ
				  <?php
				  include("connection.php");
 $sql="select *from supplier where registereddate<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="commented.php">አስተያየት እይ
				  <?php
				  include("connection.php");
 $sql="select *from comment where date<=now();";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?></a></li>
				  <li><a href="e.php">ልዩ ልዩ</a></li>
				  
			</ul>
			
	   </li>
</ul></div>
</body>
</html>


