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
      header("location:departmenthead2.php");
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
      header("location:marketstudy2.php");
    }
    else if($role=="inventory"&& $status=="active")
    {
      $_SESSION['iusername']=$un;
        $_SESSION['ipassword']=$pw;
      header("location:inventory2.php");
    }
    else if($role=="quality assurer"&& $status=="active")
    {
      $_SESSION['qusername']=$un;
        $_SESSION['qpassword']=$pw;
      header("location:qualityassurer2.php");
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
      header("location:financeofficer2.php");
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
      header("location:technicalroom2.php");
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
      header("location:purchasingworkers2.php");
    }
    else if($role=="supplier"&& $status=="active")
    {
      $_SESSION['susername']=$un;
        $_SESSION['spassword']=$pw;
      header("location:supplier2.php");
    }
    else if($role=="offices"&& $status=="active")
    {
      $_SESSION['ousername']=$un;
        $_SESSION['opassword']=$pw;
      header("location:offices2.php");
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
<body>
<center>
  <div id="templatemo_wrapper">
<?php include("head2.php");
?>

<?php
include("listt.php");
?>
</div>
<div style="background: white;">
      <center>
<form id="form"action="logina.php" method="post" form name="f1" align="center" style="float: center">

       <h2 class="style12">
       <h2 class="style12">
       <center>መግቢያ ገጽ</center></h2>
  <br>&nbsp;<h style="font-size:17px;">የተጠቃሚ ስም:&nbsp;&nbsp;</h>
<input type="text" name="username" required="" placeholder="         ስምዎትን ያስገቡ"style='width: 30%;
          height:40px; background-color:#FFF8C6;border-radius:4px;font-size:17px;box-sizing: border-box; 
          border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br><br>
&nbsp;&nbsp;<h style="font-size:17px;"> የዪለፍ ቃል:&nbsp;&nbsp;</h>
<input type="password" name="password" required=""placeholder="       **********" style='width: 30%;
          height:40px; background-color:#FFF8C6;border-radius:4px;font-size:15px;box-sizing: border-box; 
          border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/><br> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="ግባ" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;">ግባ</button>&nbsp;
<button type="reset" name="reset" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;">ሰርዝ</button><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="forgot password.php">ሚስጥር ቁጥር ረሳሁ?  </a> </div></form></div>

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
