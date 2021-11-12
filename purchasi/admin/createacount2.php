<?php
session_start();
include("connection.php");
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
{	
?>

<html>
<body>
<head>
  <link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
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
<style>
#form{
padding:10px;
}
</style>
</head>

<body>

<?php
include("connection.php");
?>
<center>
 <div id="templatemo_wrapper">
<?php include("head2.php");
?>
<?php
include("adminmenu2.php");
?>
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
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  
        <?php
include("sendaccount1.php");
?>  
<form id="form" action="" method="post" form name="f1" align="center">
	<h2 class="style12">
       <center>የሰራተኛ አካውንት ክፈት</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የሰራተኛ መለያ<select name="empl_id">
	<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from employee";                            
              $result=mysqli_query($connection,$sql2) ;
	While($row=mysqli_fetch_array($result))
	{  
echo "<option>".$row['emp_id']."</option>";

	}?>
</select><br> 
<?php
	}
       } 
                    else{
       die("Connection Failed:".mysqli_error($connection));
 }
 mysqli_close($connection);
	?><br>
የተጠቃሚ ስም:<input type="text" name="username"  required/><br><br>
የይለፍ ቃል:<input type="password" name="password" pattern="[a-zA-Z0-9]+" required /><br><br>
የተጠቃሚ አይነት:
<select name="role"required="true"><br>
<option value=" "> ይምረጡ</option>
<option value="adminstrator">አስተዳደር</option>
<option value="college adminstrator">ኮሌጅ አስተዳደር</option>
<option value="department head">ዲፓርትመንት አስተዳደር</option>
<option value="purchasing directorate">ግዥ አስተዳደር</option>
<option value="purchasing team">ግዥ ቡድን</option>
<option value="marketstudy team">ገበያ የሚያጠና</option>
<option value="purchasing worker">ግዥ ሰራተኛ</option>
<option value="finance officer">ገንዘብ ባለስልጣን</option>
<option value="inventory">የቃ ዝርዝር</option>
<option value="quality assurer">ጥራት አረጋጋጭ</option>
<option value="supplier">ተጫራች</option>
<option value="offices">ቢሮዎች</option>
<option value="technical room">የእቃ ክፍል</option>
<option value="approval commite">ገምጋሚ ቡድን</option>
</select> <br>
<br>ሁኔታ<select name="status">
<option value="active">የሚሰራ</option>
<option value="inactive">የማይሰራ</option>
</select>
<br>	<br>
<button type="submit" name="register">አካውንት_ክፈት</button>
<button type="reset" name="reset" >ሰርዝ</button>
</form>
<?php
		function encryptpassword($password ) 
{
$cryptKey='qJB0rGtIn5UB1xG03$oldpefyCp';
$passwordEncoded= base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
return( $passwordEncoded );
}	
if(isset($_POST['register']))
{
	
	$empl_id=$_POST['empl_id'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$role=$_POST['role'];
		$status=$_POST['status'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			if(((((((((((((((($role=="adminstrator"))|| ($role=="college adminstrator")) ||($role=="department head"))||
	($role=="purchasing team"))||($role=="marketstudy team"))
		||($role=="quality assurer"))||($role=="inventory"))||($role=="finance officer"))
		||($role=="purchasing directorate"))||($role=="purchasing worker"))||($role=="supplier"))||($role=="offices"))||($role=="technical room"))||($role=="approval commite"))
		||($role=="school dean"))
		{
			
$sql2="INSERT INTO account(empl_id,username,password,role,status) VALUES('$empl_id','$username', '$password','$role','$status')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "የተጠቃሚ አካውንት ተከፍቷል!";
		}else
 die("አካውንት መክፈት አይቻልም");
		}  else
die("ዳታቤዙ አልተመረጠም:".mysqli_error($connection));  

}else{
 die("ግንኙነት ተቋርጧል:".mysqli_error($connection));
}
mysqli_close($connection);}

?></div></div></div></center></div>
<div id="fotter">
<?php include("foot.php");?>
</div>

</body>
</html>
<?php
}

	
else{
header("location:logina.php");
}
?>