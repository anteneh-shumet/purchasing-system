<?php
session_start();
if(isset($_SESSION['cusername'])&& isset($_SESSION['cpassword']))
{	echo "<i><h3>welcome  ".$_SESSION['cusername']." do better</h3></i>";
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
<?php include("head.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">

	<li><a href="help.php">help</a></li>
	<li><a href="logout4.php">logout</a></li>
	</ul>
</div>
</div>
<div id="templatemo_main">

<div id="right">
 
  	<center><button class="dropbtn1" font-size="200px">college director</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request purchasing </a><br><hr><br>
 <a href="regmodel20.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register code10 </a><br><hr><br>
  <a href="viewnoticecollegeadmin.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view directorate notices </a><br><hr><br>
    <a href="departmentrequests.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view departments request </a><br><hr><br>
 <a href="collegeupdateaccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;update your account </a><br><hr>	   
  </div>
 <div id="left"><center>
<h2 class="style12"> Wellcome to college adminstrator page</h2>
	<img src="images/b.jpg" width="600px" height="300px"/></center>

</div></div>
  <div id="fotter">
<?php include("footer.php");?>
</div>

</body>
</html>
<?php
}
else
header("location:login.php");

?>