<?php
session_start();
if(isset($_SESSION['cusername'])&& isset($_SESSION['cpassword']))
{	echo "<i><h3>እንኳን ደህና መጡ".$_SESSION['apusername']." </h3></i>";
?>
<html>
<body>
<head>
<style>
    a{
    text-decoration: none;
    font-family: "Times New Roman";
    font-weight: bold;
    font-size: 20px;
    color: black;
    
  }
  a:hover{
    color: pink;
  }
.dropbtn1 {
    background-color: #424766;
    color: white;
    width:260px;
    height:50px;
    margin-top:5px;
    border-radius:15px;
    border-color: 15px #0ea524;
    font-family: times new roman;
    font-size: 25px;
    transition: all 0.5s;
    cursor: pointer;
    border-radius: 4px;
   cursor: pointer;
}
.dropdown1:hover .dropdown-content1 {
    display: block;
    background-color:#d6e4e3; 
    text-shadow:0px;
    color: #2b060a;
    margin-left:10px;
}

.dropdown-content1 a:hover {
	background-color: #8B4513;
	color: #110000;

	}
	.dropdown1 {
    position: relative;
    display: block;
}
.dropdown-content1 {
    position: absolute;
    right:5px;
    font-size: 18px;
    background-color: #cadadf;
    border-radius:30px;
    color: #ffffff;
    width:190px;
    line-height: 20px;
    //box-shadow: 3px 8px 16px 4px rgba(12,6,35,9.2);
    z-index: 1;
}
</style>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>

<body bgcolor="#B0C4DE">
 <div id="templatemo_wrapper">
<?php include("head2.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">

	<li><a href="help.php">አጋዥ</a></li>
	<li><a href="logoutt4.php">ውጣ</a></li>
	</ul>
</div>
</div>
<div id="templatemo_main">

<div id="right">
 
  	<center><button class="dropbtn1" font-size="200px">ኮሌጅ አድሚንስትሬተር</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ግዥ ትአዛዝ </a><br><hr><br>
 <a href="regmodel202.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮድ 10ን መዝግብ </a><br><hr><br>
  <a href="viewnoticecollegeadmin2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዳይሬክቶሬቱን ማስታዎቂያ እይ </a><br><hr><br>
    <a href="departmentrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዲፓርትመንት ጥያቄ እዩ </a><br><hr><br>
 <a href="collegeupdateaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><br><hr>	   
  </div>
 <div id="left"><center>
<h2 class="style12"> ዎደ ኮሌጅ አስተዳዳሪ ገጽ እንኳን ደህና መጡ</h2>
	<img src="images/b.jpg" width="600px" height="300px"/></center>

</div></div>
  <div id="fotter">
<?php include("foot.php");?>
</div>

</body>
</html>
<?php
}
else
header("location:logina.php");

?>