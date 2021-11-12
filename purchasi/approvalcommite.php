<?php
session_start();
if(isset($_SESSION['apusername'])&& isset($_SESSION['appassword']))
	
    
{echo "<i><h3>welcome  ".$_SESSION['apusername']." do better</h3></i>";  
?>

<html>
<body>
<head>
<style>
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
#a{
color:red;	
}
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
</style>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>

<body bgcolor="#B0C4DE">
<div id="divWrapper">
<center>
<div id="templatemo_wrapper">
<?php include("head.php");
?>

<div  id="toptabmenu">
     <ul class="a" style="float: right;">

	<li><a href="help.php">help</a></li>
	<li><a href="logout7.php">logout</a></li>
	</ul></div>
<div id="templatemo_main">

<div id="right">

<button class="dropbtn1" font-size="200px"> Approvalcommitee</button><br><br
<div class="dropdown-content1" style="down:0;"><br>
<a href="approverequest.php"> &nbsp;&nbsp;&nbsp;&nbsp;approve/reject requests</a><br><hr><br>	
<a href="viewtenderresult.php">&nbsp;&nbsp;&nbsp;&nbsp;view tender result </a><br><hr><br>
<a href="viewapprovedrequests.php">&nbsp;&nbsp;&nbsp;&nbsp;view appproved requests

</a><br><hr><br>

 	   <a href="approvalcommiteaccount.php">&nbsp;&nbsp;&nbsp;&nbsp; update account</a>
  </div>

<div id="left">
<h2>Wellcome to approval commites page</h2>
	<img src="images/a1.jpg" width="600px" height="300px"/>
</div></div></div></div></center></div>

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