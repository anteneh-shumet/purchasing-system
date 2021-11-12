<?php
session_start();
error_reporting(0);
include("dbconnection.php");


 if(($_REQUEST['error'])=='forgetpass')
$loginfo='<div align="center"><strong><font color="#FF0000">እባክዎ ያለዎትን መለያ እና የይለፍ ቃል ያስታዉሱ፡፡</font></Strong></div>';	 
   

if(isset($_SESSION['adminid']))
{
    header("Location: home.php");
}
if ((isset($_REQUEST['login'])))
{
$password = md5(mysql_real_escape_string($_REQUEST['password']));
$logid= mysql_real_escape_string($_REQUEST['login']);

	$res = mysql_query("SELECT * FROM employees WHERE loginid='$logid' AND password='$password'");


	if(mysql_num_rows($res) == 1)
	{
		$date=date('y-m-d');
		$time=time();
		$_SESSION["adminid"] =$_POST["login"];
		$_SESSION["password"] =md5($_POST["password"]);
		mysql_query("insert into login_status (login_date,login_time,login_username,login_password) values(curdate(),curtime(),'".$_SESSION["adminid"]."','".$_SESSION["password"]."')");
            
		header("Location: home.php");
	}
	else
	{
		 $loginfo='<div align="center"><strong><font color="#FF0000"> የተሳሳተ መለያ እና የይለፍ ቃል አስገብተዋል፡፡</font></Strong></div>';

	}
}

?>
<html>
<head>
<link href="images/favicon.ico" rel="shortcut icon">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ONLINE AUCTION SYSTEM IN AMHARIC </title>
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
   
        <form action="indexx.php" method="POST">
		 <h2 class="style12">

	<center>መግቢያ ገጽ</h2></center>
						<?php if(isset($loginfo))
    {  echo"<h3>$loginfo</h3>"; } ?>   
           <center>
            <div class="loginset">
             የተጠቃሚ ስም:
                    <input type type="text" name="login" placeholder="enter username"title="please enter your username"><br><br>
			የይለፍ ቃል:</label>
                    <input type="password" name="password"  placeholder="******"title="please enter your password">
               
            </div>
            <p class="p-container">
                <a href="login.php?error=forgetpass"><h3>Forgot password ?</h3></a><br/>
                <input type="submit" name="go" id="go" value="ግባ" class="loginput"><br>
            </p><br>
        </form>
		</table>
    </div></div>
	<div id="right">
	<center><br>
	<img src="image/adminlog.jpg" height="200" width="250"><br>
1st.......choose login link<br>
2nd....enter your username <br>
3rd…..enter your password<br>
4th…..click on login buton<br>

 </div></div>
	<div id="fotter">
<?php include("foot.php");?>

</body>
</html>
