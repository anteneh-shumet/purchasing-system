
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="text/javascript" src="date_time2.js"></script>
		<title>ግዥ በአማረኛ</title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
		<div id="templatemo_wrapper">
				<?php include("head2.php");?>
		
			<?php include("listt.php");?>
			
		</div>
 		 <div id="templatemo_main">
         <div id="sidecon">
	     <div id="left">
	     <h2 class="style12">
			 <center>ዎደ ጎንደር ዩኒቨርሲቲ ግዥ ሲስተም እንኳን ደህና መጡ</center></h2>   
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
			 
			 </div><center><form action="index.php"><input type="submit" value="ተመለስ"></form></center></div>
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
	<h3>አጋዥ</h3>
		<ul>
			<li>1.&nbsp; &nbsp;አቅራቢው ሲስተሙን ለመጠቀም መጀመሪያ መመዝገብ እና ማሸነፍ አለበት</li><hr>
			<li>2.&nbsp; &nbsp;ሲስተሙን ማዎቅ ከፈለጋችሁ ከላይ ያሉትን ምልክቶች ተጫኑ </li><hr>
			<li>3.&nbsp; &nbsp; ዎደ ሲስተሙ ለመግባት ትክክለኛ መረጃ ያስገቡ</li><hr>
			<li>4.&nbsp; &nbsp; ማንኛዉም ሰራተኛ ሲስተሙን ለመጠቀም መመዝገብ አለበት</li><hr>
			<li>5.&nbsp; &nbsp;  ማንኛዉም ተጠቃሚ ስሙን እና ሚስጥር ቁጥሩን መቀየር ይችላል</li>
			<hr>
			    <li>
        <a href="https://www.gmail.com/" target='blank'>
			<marquee id='scroll_news' direction="" style="font-family:Book Antiqua; color: blue" onMouseOver="document.getElementById('scroll_news').stop(); " onMouseOut="document.getElementById('scroll_news').start();"><img src="images/gmail.png" alt="gmail" /> አግኙን "anteshu123@gmail.com"</marquee>
        </a>
    </li>
		</ul>
		

			 </div>
</div>
<div id="contents">
	<p style="margin-left: 40px"><b>የግዥ ስርዓት በፍላጎት እና በግዥ ቅደም ተከተል ግዥን የሚመለከቱ ምርቶችን እና አገልግሎቶችን በመግዛቱ ሂደት ላይ ያጠነጠነ ነው ፡፡ የግዥ ስርዓቶች ውጤታማ የሆነ የንብረት አስተዳደር ቁልፍ አካል ናቸው ፣ ምክንያቱም ነባር አክሲዮኖችን በመቆጣጠር እና ኩባንያዎች ምን እንደሚገዙ ፣ ምን ያህል እንደሚገዙ እና መቼ እንደሚገዙ እንዲወስኑ ይረዳቸዋል።<a href="amharic.pdf" target="_blank" style="color:red">ተጨማሪ...</a></b></p>
</div>
<div id="fotter">
<?php include("foot.php");?>
</div>
    
		</div>
</body>
</html>
