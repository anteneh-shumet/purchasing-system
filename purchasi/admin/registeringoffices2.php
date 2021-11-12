<?php
session_start();
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
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
    height50px;
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
#form{
padding: 10px;
}</style>
</head>

<body bgcolor="#B0C4DE">
<script type="text/javascript">




</script>


<div id="divWrapper">
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
 
<div>
<form   id="form"action="registeringoffices2.php"  method="post">
<h2 class="style12">
       <center>የቢሮ መመዝገቢያ ቅጽ</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የቢሮ መለያ:<input type="text" name="office_id" pattern="[0-9a-zA-Z]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የኮሌጁ ስም:<select name="colege_name"required="true"  pattern="[A-Z a-z]+" ><br>
<option>ይምረጡ</option>
<option value="technology">technology</option>
<option value="business and economics">business and economics</option>
<option value="medicine">medicine</option>
<option value="social science and humanities">social science and humanities</option>
<option value="agriculture">agriculture</option>
<option value="computational science">computational science</option>
<option value="behaivoral">behaivoral</option>
</select><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የድፓርትመንቱ ስም:<select name="department_name"required="true"  pattern="[A-Z a-z]+" ><br>
					<option>ይምረጡ</option>
<option value="it">it</option>
<option value="software enginering">software enginering</option>
<option value="mechanical enginering">mechanical enginering</option>
<option value="civil enginering"> civil enginering</option>
<option value="construction enginering">construction enginering </option>
<option value="electrical enginering">electrical enginering</option>
<option value="haydrualic enginering">haydrualic enginering </option>
<option value="accounting">accounting</option>
<option value="management">management</option>
<option value="banking">banking</option>
<option value="economics">economics</option>
<option value="psycology">psycology</option>
<option value="journalism">journalism</option>
<option value="art">art</option>
<option value="physics">physics</option>
<option value="maths">maths</option>
<option value="chemistry">chemistry</option>
<option value="biology">biology</option>
<option value="english">english</option>
<option value="sport">sport</option>
<option value="civics">civics</option>
<option value="biotechnology">biotechnology</option>
<option value="midwifery">midwifery</option>
<option value="nursing">nursing</option>
<option value="law">law</option>
<option value="public health officer">public health officer</option>
</select><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register" >መዝግብ</button>
<button type="reset" name="reset">ሰርዝ</button>

</form>
<?php
		
if(isset($_POST['register']))
{
	$office_id=$_POST['office_id'];
		$college_name=$_POST['colege_name'];
		$department_name=$_POST['department_name'];
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
$sql1="select * from departments,colleges where college_name==colege_name && department_name==department_name";
		$matchfound=mysqli_query($connection,$sql1);
		While($row=mysqli_fetch_row($matchfound))
		{
		   $college_name=$row['college_name'];
		    $department_name=$row['department_name'];
		  
		}
	if((((((($department_name=="it" && $college_name=="technology")||($department_name=="software enginering" && $college_name=="technology")||($department_name=="civil enginering" && $college_name=="technology")||($department_name=="electrical enginering" && $college_name=="technology")
		||($department_name=="haydrualic enginering" && $college_name=="technology")||($department_name=="mechanical enginering" && $college_name=="technology")||($department_name=="construction enginering" && $college_name=="technology")) || 
	($department_name=="management" && $college_name=="business and economics")||($department_name=="accounting" && $college_name=="business and economics")||($department_name=="economics" && $college_name=="business and economics")||($department_name=="banking" && $college_name=="business and economics"))
	|| ($department_name=="physics" && $college_name=="computational science")||($department_name=="english" && $college_name=="computational science")||($department_name=="chemistry" && $college_name=="computational science")||($department_name=="maths" && $college_name=="computational science")||($department_name=="sport" && $college_name=="computational science")||($department_name=="civics" && $college_name=="computational science")||($department_name=="biology" && $college_name=="computational science")||($department_name=="biotechnology" && $college_name=="computational science"))
	||($department_name=="midwifery" && $college_name=="medicine")||($department_name=="nursing" && $college_name=="medicine")||($department_name=="public health officer" && $college_name=="medicine"))|| ($department_name=="law" && $college_name=="social science and humanities")|| ($department_name=="art" && $college_name=="social science and humanities")||($department_name=="journalism" && $college_name=="social science and humanities"))|| ($department_name=="psycology" && $college_name=="behaivoral"))
		{
$sql2="INSERT INTO offices(office_id,colege_name,department_name) VALUES('$office_id','$college_name', '$department_name')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "ቢሮው በትክክል ተመዝግቧል!";
		}
		else
 die("ኮሌጁ እና ዲፓርትመንቱ አልተዛመደም");
		}  else
die("ዳታበዙ አልተመረጠም:".mysqli_error($connection));  

}else{
 die("ኮኔክሽን ተቋርጧል:".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>
</div></div></div></center>
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