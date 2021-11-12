<?php
session_start();
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
{	
?>
<html>

<head>
  <meta charset="utf-8">
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
    height60px;
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
<style>
#email_form{
padding: 10px;
}
</style>
</head>
<body bgcolor="#B0C4DE">
<script type="text/javascript">

function validate(form_id,email)
{
var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var adress=document.forms[form_id].elements[email].value;	
	if(reg.test(adress)==false)
	{
	alert('please enter a valid email-address');	
	document.forms[form_id].elements[email].focus();
	return false;
	}
	
}



</script>



<div id="divWrapper">
<center>
 <div id="templatemo_wrapper">
<?php include("head2.php");
?>

<?php
include("adminmenu2.php");?>
</div>


<div id="templatemo_main">

<div id="right">
  <center><canvas id="canvas" width="140" height="140">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'cyan';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, 'green');
  grad.addColorStop(0.5, 'yellow');
  grad.addColorStop(1, 'red');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'red';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</center>
<button class="dropbtn1">አስተዳደር</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሰራተኛ መዝግብ</a><br><hr>
<a href="createacount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት ክፈት </a><br><hr>
<a href="registeringcolleges2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮሌጆችን መዝግብ </a><br><hr>
<a href="registeringdepartments2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ዲፓርትመንት መዝግብ</a><br><hr>
<a href="registeringoffices2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ቢሮዎችን መዝግብ </a><hr>
  </div>
<div id="left">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<?php
include("sendaccount1.php");
?>
<div>
<form  id="email_form" action="registeringemployee.php" onsubmit="javascript:return validate('email_form','email');" method="post">
<h2 class="style12">
       <center>የሰራተኛ መመዝገቢያ ቅጽ</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የሰራተኛ መለያ:<input type="text" name="emp_id" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የሰራተኛ ስም:<input type="text" name="empfname" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የአባትስም:<input type="text" name="emplname" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሰልክ ቁጥር<input type="text" id="phone" name="emp_phone"  pattern="[09]{2}[0-9]{8}" required /><br>	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
ኢሜል:<input type="text" id="email" name="email" required="" /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register">መዝግብ</button>
<button type="reset" name="reset">ሰርዝ</button>
</fieldset>
</form>
</form>
<?php
		
if(isset($_POST['register']))
{
	$emp_id=$_POST['emp_id'];
		$empfname=$_POST['empfname'];
		$emplname=$_POST['emplname'];
		$emp_phone=$_POST['emp_phone'];
		$email=$_POST['email'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "","purchasi");
If($connection){
	$sql="select * from employee where emp_id='$emp_id'";
		$userexist=mysqli_query($connection,$sql);
		if(mysqli_affected_rows($connection))
			echo "employee id already exist!";
		else{
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
$sql2="INSERT INTO employee(emp_id,empfname,emplname,emp_phone,email) VALUES('$emp_id','$empfname', '$emplname','$emp_phone','$email')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "ሰራተኛው ተመዝግቧል!";
	else
 echo "ሰራተኛው አልተመዘገበም".mysqli_error($connection);
		}  else
die("Database not selected:".mysqli_error($connection));  

}}else{
 die("Connection Failed:".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?></div></div></div></center>
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