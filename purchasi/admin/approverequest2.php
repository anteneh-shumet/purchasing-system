<?php
session_start();
if(isset($_SESSION['apusername'])&& isset($_SESSION['appassword']))
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
<?php include("head2.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">

    <li><a href="help.php">አጋዥ</a></li>
  <li><a href="logoutt7.php">ውጣ</a></li>
    </ul></div>
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
<button class="dropbtn1" font-size="200px"> ገምጋሚ ቡድን</button><br><br
<div class="dropdown-content1" style="down:0;"><br>
<a href="approverequest2.php"> &nbsp;&nbsp;&nbsp;&nbsp;ጥያቄዎችን አጽድቅ/ጣል</a><br><hr> 
<a href="viewtenderresult2.php">&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ውጤት እይ </a><br><hr>
<a href="viewapprovedrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;የጸደቁ ጥያቄዎችን እይ
<?php
include("connection.php");
 $sql="select *from request where status='approved'";
$result=mysqli_query($con,$sql) ;
$res=mysqli_num_rows($result);
echo  "<h style=color:red>(</h>";
echo $res;
echo  "<h style=color:red>)</h>";
?>
</a><br><hr>
     <a href="approvalcommiteaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp; አካውንት አሻሽል</a>
  </div>

<div id="left"><div>
  <h2>ማጽደቂያ/መጣያ ገጽ</h2>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
            $sql2="select * from request where sent_from='college adminstrator' || sent_from='technical room'";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){	  
echo "<table  border=1 cellpadding=4 id='tb'><tr><th>መለያ</th>";
echo "<th>እቃ</th><th>ሞዴል</th><th> ብዛት</th><th> ቢሮ</th><th>ኮሌጅ</th><th>ዲፓርትመንት</th><th>ጸድቋል</th><th>አልጸደቀም</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['specification']."</td>";
	echo "<td>".$row['item_quantity']."</td>";
		echo "<td>".$row['officce_id']."</td>";
		echo "<td>".$row['colleg_name']."</td>";
		echo "<td>".$row['dept_name']."</td>";
		?>
     <script>
		var table=document.getElementById('tb');
		for(var i=1;i<table.rows.length;i++)
		{
			table.rows[i].onclick=function()
			{
				document.getElementById('request_no').value=this.cells[0].innerHTML;
				if(typeof index !== "undefined"){
                           table.rows[index].classList.toggle("selected");
                        }
                        console.log(typeof index);
                        // get the selected row index
                        index = this.rowIndex;
                        // add class selected to the row
                        this.classList.toggle("selected");
                        console.log(typeof index);
			};
		}
		</script>
		
		</td>
		<?php
		
		echo'<form action="approverequest2.php" method="POST">';
echo'<td><input type="submit" name="approve" value="approve"/></td>';
echo'<td><input type="submit" name="reject" value="reject"/></td><tr>';

	}
	
echo'<input type="hidden" name="request_no" id="request_no">';
echo'</form>';
	
	echo "</table>";
	}
	else
           die("Record Not Selected:".mysqli_error($connection));  
       }  else
                       die("ዳታቤዝ አልተመረጠም:".mysqli_error($connection));  
                    }else{
       die("ኮኔክሽን ተቋርጧል:".mysqli_error($connection));
 }
 
 if(isset($_POST['approve']))
{
	$request_id=$_POST['request_no'];
	 
 $sql3=" update request set status='approved' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "ጥያቄው ጸድቋል!";
		 }
		 else
           die("ጥያቄው አልጸደቀም:".mysqli_error($connection));  
}
 if(isset($_POST['reject']))
{
	$request_id=$_POST['request_no'];
	 
 $sql3=" update request set status='not approved' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "ጥያቄው ተዎግዷል!";
		 }
		 else
           die("ጥያቄው አልተዎገደም:".mysqli_error($connection));  
}
  ?>
</div></div></div></div></center></div>
  
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