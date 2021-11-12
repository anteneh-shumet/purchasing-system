<!DOCTYPE html>

<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="text/javascript" src="date_time2.js"></script>
		<title>ግዥ በአማረኛ</title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="templatemo_wrapper">
				<?php include("head.php");?>
		
			<?php include("list.php");?>
			
		</div>
 		 <div id="templatemo_main">
         <div id="sidecon">
	     <div id="left">
	   
<form id="form" action="" method="post">
<fieldset>
	<legend align="center"><h2 class="style12">  Write Your Comment Here </h2> </legend>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="hidden" name="id" required="" style='width: 25%;
					height:15%; border-radius:4px;font-size:15px;box-sizing: border-box; 
					border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fname<input type="text" name="fname" required=""/><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;lname<input type="text" name="lname" required=""/><br><br><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Comment:
<textarea name="comment"></textarea><br />	<br><br>		
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date:
<input type="text" name="sdate" value="<?php echo date('Y-m-d');?>" required="" /><br><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="Register" value="Send">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="reset" value="reset"><br><br><br>
<?php
if(isset($_POST["Register"]))
{	
	//$sub=$_POST["sub"];
	$cont=$_POST["comment"];
	$id=$_POST["id"];
	$fname=$_POST["fname"];
	$lname=$_POST["lname"];
	if($con)
	{
		
			$sql="insert into comment(id,fname,lname,comment,date) values('identity(1,1)','$fname','$lname','$cont',Now())";
			$inserted=mysqli_query($con,$sql);
			if(mysqli_affected_rows($con))
				echo "comment send successfully!";
			else	
				echo "Unable to send feadback";
	
		
		}
	else
		echo "Connection Failed";
}
?>
</fieldset>
			 </form></div></div>
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
			<center><p><img src="images/up3.gif" width="300"></p></center>
			<marquee><b><i><p style="color:darkblue">please comment us! phone....... facebook..... email...... pobox.....</p></i></b></marquee>

</div>

</div>
		<center>
<div id="fotter">
<?php include("footer.php");?>
	</div></center>

</body>
</html>
