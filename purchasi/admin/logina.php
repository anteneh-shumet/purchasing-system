<?php 
session_start();
if(isset($_POST["ግባ"]))
{
$un=$_POST["username"];
$password=md5($_POST['password']);
$server="localhost";
$dbuser="root";
$dbpass="";
$dbname="purchasi";
$con=mysqli_connect($server,$dbuser,$dbpass,$dbname) or mysqli_error($con);
  if($con)
  {
    $sql="select * from account where username='$un' and Password='$password'";
    $matchfound=mysqli_query($con,$sql);
    if(mysqli_num_rows($matchfound)>0)
    {
      
    $row=mysqli_fetch_assoc($matchfound);
       $role=$row['role'];
      $un=$row['username'];
      $pw=$row['password'];
      $status=$row['status'];
    $_SESSION['username']=$un;
    $_SESSION['password']=$pw;
    $_SESSION['role']=$role;
    $_SESSION['status']=$status;
      
    if($role=="adminstrator" && $status=="active")
    {
    $_SESSION['adminusername']=$un;
    $_SESSION['adminpassword']=$pw;
      header("location:admin2.php");
    }
    else if($role=="department head"&& $status=="active")
    {
      $_SESSION['dusername']=$un;
        $_SESSION['dpassword']=$pw;
      header("location:departmenthead.php");
    }
    else if($role=="purchasing directorate"&& $status=="active")
    {
      $_SESSION['pusername']=$un;
        $_SESSION['ppassword']=$pw;
      header("location:purchasingdirectorate2.php");
    }
    else if($role=="marketstudy team"&& $status=="active")
    {
        $_SESSION['musername']=$un;
             $_SESSION['mpassword']=$pw;
      header("location:marketstudy.php");
    }
    else if($role=="inventory"&& $status=="active")
    {
      $_SESSION['iusername']=$un;
        $_SESSION['ipassword']=$pw;
      header("location:inventory.php");
    }
    else if($role=="quality assurer"&& $status=="active")
    {
      $_SESSION['qusername']=$un;
        $_SESSION['qpassword']=$pw;
      header("location:qualityassurer.php");
    }
    else if($role=="purchasing team"&& $status=="active")
    {
      $_SESSION['prusername']=$un;
        $_SESSION['prpassword']=$pw;
      header("location:purchasingteam2.php");
    }
    else if($role=="finance officer"&& $status=="active")
    {
      $_SESSION['fusername']=$un;
        $_SESSION['fpassword']=$pw;
      header("location:financeofficer.php");
    }
    else if($role=="college adminstrator"&& $status=="active")
    {
      $_SESSION['cusername']=$un;
        $_SESSION['cpassword']=$pw;
      header("location:collegeadminstrator2.php");
    }
    else if($role=="technical room"&& $status=="active")
    {
      
      $_SESSION['tusername']=$un;
        $_SESSION['tpassword']=$pw;
      header("location:technicalroom.php");
    }
    else if($role=="approval commite"&& $status=="active")
    {
      $_SESSION['apusername']=$un;
        $_SESSION['appassword']=$pw;
      header("location:approvalcommite2.php");
    }
    else if($role=="purchasing worker"&& $status=="active")
    {
      $_SESSION['wusername']=$un;
        $_SESSION['wpassword']=$pw;
      header("location:purchasingworkers.php");
    }
    else if($role=="supplier"&& $status=="active")
    {
      $_SESSION['susername']=$un;
        $_SESSION['spassword']=$pw;
      header("location:supplier.php");
    }
    else if($role=="offices"&& $status=="active")
    {
      $_SESSION['ousername']=$un;
        $_SESSION['opassword']=$pw;
      header("location:offices.php");
    }
    else if($role=="school dean"&& $status=="active")
    {
      $_SESSION['susername']=$un;
        $_SESSION['spassword']=$pw;
      header("location:school dean.php");
    }
          else
            echo '<script type="text/javascript">alert("አካውንቱ
           ተዘግቷል");</script>';
    
  }
    
    else
  {
  echo '<script type="text/javascript">alert("ትክክለኛውን ስም እና የይለፍ_ቃል ያስገቡ");</script>';
}

  
  
  }
  else
    echo "Connection Failed";
}

include("connection.php");
$sql="select * from employee";
    $matchfound=mysqli_query($con,$sql);
    if(mysqli_num_rows($matchfound)>0)
    {
      
    $row=mysqli_fetch_assoc($matchfound);
       $empl_id=$row['emp_id'];
      
    


$cname=gethostbyaddr($_SERVER['REMOTE_ADDR']);
        // $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
        $ip=$_SERVER['REMOTE_ADDR'];
        $myFile = "admin2/log.txt";
                $fh = fopen($myFile, 'a+');
        fwrite($fh,nl2br("\r\n",false)." employee ".$empl_id."  has been logged in using ".$cname." pc with in IP of('-----------------')  at ".date('d-m-Y h:i:s A'));
        fclose($fh);

    }

?>
<html>

<head>
<title>ግባ</title>
<link  href="css/LoginPageStyle.css" rel="stylesheet" type="text/css"/>
    
</head>
<body bgcolor="#B0C4DE">

<center>
  <div id="templatemo_wrapper">
<?php include("head2.php");
?>

<?php
include("listt.php");
?>
</div>
<div id="templatemo_main">
         <div id="sidecon">
<form id="form"action="logina.php" method="post" form name="f1" align="center">
<div id="left">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/admin.png"  style=" border-radius: 50%;" width="300px" height="160px"/>
       <h2 class="style12">
       <center>መግቢያ ገጽ</center></h2>
  <br>&nbsp;<h style="font-size:15px;">የተጠቃሚ ስም:</h>
<input type="text" name="username" required="" placeholder="          enter username"style='width: 35%;
          height:40px; background-color:#FFF8C6;border-radius:4px;font-size:15px;box-sizing: border-box; 
          border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br><br>
&nbsp;&nbsp;የዪለፍ_ቃል:
<input type="password" name="password" required=""placeholder="       **********" style='width: 35%;
          height:40px; background-color:#FFF8C6;border-radius:4px;font-size:15px;box-sizing: border-box; 
          border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="ግባ">ግባ</button>&nbsp;
<button type="reset" name="reset">ሰርዝ</button><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot password.php">ሚስጥር ቁጥር ረሳሁ?  </a> </div></form></div>
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
    <ul >
      <li>1.&nbsp; &nbsp;እንኳን ደህና መጡ &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</li><hr>
      <li>2.&nbsp;&nbsp; ስም ያስገቡ&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; </li><hr>
      <li>3.&nbsp; &nbsp;የይለፍ_ቃል ያስገቡ&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</li><hr>
      <li>4.&nbsp; &nbsp; ግባን ተጫን&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;</li><hr>
      <li>5.&nbsp; &nbsp;   ስራዎትን ይስሩ&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;  </li><hr>
      <li>6.&nbsp; &nbsp;  ስትጨርስ ውጣ&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; </li>
      <hr>
          <li>
        <a href="https://www.gmail.com/" target='blank'>
      <marquee id='scroll_news' direction="" style="font-family:Book Antiqua; color: blue" onMouseOver="document.getElementById('scroll_news').stop(); " onMouseOut="document.getElementById('scroll_news').start();"><img src="images/gmail.png" alt="gmail" /> አግኙን"anteshu123@gmail.com"</marquee>
        </a>
    </li>
    </ul>
    

       </div>
</div>
<div id="contents">
  <h4><center>እባክዎ ስም እና የይለፍ_ቃል  በትክክል አስገቡ!</center></h4>
</div>

</fieldset></div></td>
<div id="fotter">
<?php include("foot.php");?>
    </div>

</body>
</html>
