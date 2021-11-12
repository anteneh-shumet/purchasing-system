<?php
session_start();
include("connection.php");
if(isset($_SESSION['pusername'])&& isset($_SESSION['ppassword']))
{	
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
<li><a href="#">report</a><ul class="b">
<li><a href="report.php">accepted requests</a></li>
<li><a href="reports.php">finance revenue</a></li></ul></li>
    <li><a href="logout6.php">logout</a></li>
    </ul></div></div>
<div id="templatemo_main">

<div id="right">
 
        <button class="dropbtn1" style="color:white;">purchasing_directorate</button><br><br
  <div class="dropdown-content1" style="down:0;"><hr>
 <a href="viewpurchasingrequest.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view purchasing request</a><br><hr><br>
 <a href="viewmodel19.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view model 19 </a><br><hr><br>
<a href="postnotice.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post notice</a><br><hr><br>
<a href="viewwinner.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view winner</a><br><hr><br>
<a href="resetpurchasingdirectorateaccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><br>
 </div>
<div id="left">
<div><br><br>
<form id="form" action="" method="post" form name="f1" align="center">
<fieldset>
<legend  > <h2>Change Your Password</h2></legend><br>
&nbsp;&nbsp;&nbsp;&nbsp;user name:<input type="text" name="username" pattern="[a-zA-Z0-9]+" required/><br><br>
old password:<input type="password"  name="password" required><br><br>
new password:<input type="password"  name="newpassword"required><br><br>
conformation:<input type="password"  name="confirmnewpassword"required><br><br>
<button type="submit" name="update">UPDATE</button>
<button type="reset" name="reset">CLEAR</button><br><br>
</fieldset>
</form>
<?php
if(isset($_POST['update']))
{
		$username=$_POST['username'];
        $password = md5($_POST['password']);
		$newpassword = md5($_POST['newpassword']);
		$confirmnewpassword = md5($_POST['confirmnewpassword']);
		$result = mysqli_query($con,"select * from account where username='$username'");
		$row=mysqli_fetch_assoc($result);
		$pass=$row['password'];
        $connection=mysqli_connect("localhost", "root", "");
        if($pass==$password)
		{
	    if($newpassword==$confirmnewpassword)
	    {
		$sql=mysqli_query($con,"UPDATE account SET password='$newpassword' where username='$username'");
		if($sql)
		{
		echo"<font color='green' size='5'><script> alert('your password is updated successfully!');</script> </font>";

		}}else
		 {
		echo"<font color='red' size='5'><script> alert('password does not match!');</script> </font>";

        }	
		}
		else
		echo"<font color='red' size='5'><script> alert('your old password!');</script> </font>";

}
  ?>
</div></div></div></center></div>
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