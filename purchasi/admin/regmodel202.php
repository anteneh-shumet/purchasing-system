<?php
session_start();
if(isset($_SESSION['cusername'])&& isset($_SESSION['cpassword']))
{	
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
  	<center><button class="dropbtn1" font-size="200px">ኮሌጅ አድሚንስትሬተር</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ግዥ ትአዛዝ </a><br><hr>
 <a href="regmodel202.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮድ 10ን መዝግብ </a><br><hr>
  <a href="viewnoticecollegeadmin2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዳይሬክቶሬቱን ማስታዎቂያ እይ </a><br><hr>
    <a href="departmentrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዲፓርትመንት ጥያቄ እዩ </a><br><hr>
 <a href="collegeupdateaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><br><hr>        
  </div>
 <div id="left"><center>
<br>
<div>
<form id="form"action="regmodel202.php" method="post" form name="f1" align="center">
<fieldset>
	<legend align="center"><h2>የእቃ ማስለቀቂያ ቅጽ</h2></legend><br>
የመልቀቂያ መለያ:<input type="text" name="withdraw_requistion_no" required=""/>&nbsp;&nbsp;የተጠየቀበት ቀን:<input type="date" name="request_date" required="" /><br><br>	
&nbsp;የጥያቄ መለያ:<input type="text" name="request_num" required=""/>&nbsp;&nbsp;&nbsp;ጠያቂ አካል:<input type="text" name="requester_body" required="" /><br><br>	
&nbsp;&nbsp;የእቃ አይነት:<input type="text" name="item_type" required="" />&nbsp;&nbsp;&nbsp;የአቅራቢ ስም:<input type="text" name="officers_name" required="" /><br><br>			
&nbsp;&nbsp;&nbsp;&nbsp;ብዛት:<input type="text" name="quantity" required="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሞዴል:<input type="text" name="model" required="" /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="insert"> ጠይቅ</button>
<button type="reset" name="reset">ሰርዝ</button><br>	<br>	
</fieldset>
</form>
<?php
		
if(isset($_POST['insert']))
{
	$withdraw_requistion_no=$_POST['withdraw_requistion_no'];
		$request_no=$_POST['request_num'];
		$quantity=$_POST['quantity'];
		$request_date=$_POST['request_date'];
		$requester_body=$_POST['requester_body'];
		$item_type=$_POST['item_type'];
		$model=$_POST['model'];
		$officers_name=$_POST['officers_name'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	
	
	
	$sql1="select * from request where $request_no=request_no";
		$matchfound=mysqli_query($connection,$sql1);
		$res=mysqli_num_rows($matchfound);	
		While($row=mysqli_fetch_array($matchfound))
		{
		   $r=$row['request_no'];
	   
		   $q=$row['item_quantity'];
		   $i=$row['item_type'];
		   $st=$row['status'];
		  
		}
	
	
	
	if($st=="approved")
	{
	
	if((($request_no==$r) && $quantity==$q) && $item_type==$i)
	{
	
$sql2="INSERT INTO model20(withdraw_requistion_no,request_num,request_date,requester_body,officers_name,item_type,model,quantity) VALUES('$withdraw_requistion_no','$request_no', '$request_date','$requester_body','$officers_name','$item_type','$model','$quantity')";                            
$result=mysqli_query($connection,$sql2) ;
If($result){
	
	echo "እቃ የማስለቀቅ ጥያቄው በትክክል ተልኳል";
}
	else
		echo"እቃ የማስለቀቅ ጥያቄው አልተላከም";
	}
	
	else
 die("at first you request &nbsp;&nbsp;&nbsp;".$q."&nbsp;&nbsp;&nbsp;". $i."&nbsp;&nbsp;items <br>please request that you submit while you request purchasing".mysqli_error($connection));

		}
		else
	echo "ቅድም የላኩት የግዥ ጥያቄ በገምጋሚ ቡድኑ ተቀባይነት አላገኘም ";
	}
		
		  else
die("ዳታቤዝ አልተመረጠም:".mysqli_error($connection));  

}else{
 die("ኮኔክሽን ተቋርጧል:".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>




</div></div></center></div></div>
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