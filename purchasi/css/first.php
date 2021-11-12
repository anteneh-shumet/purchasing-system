
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
	     <h2 class="style12">
			 <center>WELCOME TO UNIVERSITY OF GONDAR PURCHASING WEBSITE</center></h2>   
         <div id="content-slider" class="b">
    	<div id="slider" style="float:left">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            
            <img src="images/usefull.jpg"height="300" width="750"/>
            
            </li>

            <li id="second" class="secondanimation">
            
            <img src="images/agreement.jfif"height="300" width="750"/>
            
            </li>
            
            <li id="third" class="thirdanimation">
           
            <img src="images/logo.png"height="300" width="750"/>
            
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <img src="images/ram.jpg"height="300" width="750"/>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <img src="images/dell.jpeg"height="300" width="750"/>
            </li>
            </ul>
           
		</div>
		</div >

    
		</div>	
			 
			 </div><center><form action="index.php"><input type="submit" value="back"></form></center></div>
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
	<h3>Help</h3>
		<ul>
			<li>1.&nbsp; &nbsp;To use this system the suplier must be register and win</li><hr>
			<li>2.&nbsp; &nbsp;To knowe the system click tages in the above</li><hr>
			<li>3.&nbsp; &nbsp; To login to the system users must enter correct information</li><hr>
			<li>4.&nbsp; &nbsp; To use the system users and employees must registered</li><hr>
			<li>5.&nbsp; &nbsp;  Any user can change its user name and password</li>
			<hr>
			    <li>
        <a href="https://www.gmail.com/" target='blank'>
			<marquee id='scroll_news' direction="" style="font-family:Book Antiqua; color: blue" onMouseOver="document.getElementById('scroll_news').stop(); " onMouseOut="document.getElementById('scroll_news').start();"><img src="images/gmail.png" alt="gmail" /> contact-us "anteshu123@gmail.com"</marquee>
        </a>
    </li>
		</ul>
		

			 </div>
</div>
<div id="contents">
<p style="margin-left: 40px"><b>A purchasing system is a process for buying products and services encompassing purchase from requisition and purchase order through product receipt and payment. Purchasing systems are a key component of effective inventory management in that they monitor existing stock and help companies determine what to buy, how much to buy and when to buy it.<a href="https://www.investopedia.com/terms/p/purchasing-system.asp" target="_blank" style="color:red">more...</a></p>
</p>
</div>
<div id="fotter">
<?php include("footer.php");?>
</div>
	
	
</body>
</html>
