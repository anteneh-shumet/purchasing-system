<?php
session_start();
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
{	
?>
<html>

<head>
  <meta charset="utf-8">
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
    height60px;
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
#email_form{
padding: 10px;
}
</style>
</head>
<body bgcolor="#B0C4DE">
<script type="text/javascript">

function validate(form_id,email)
{
var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var adress=document.forms[form_id].elements[email].value;	
	if(reg.test(adress)==false)
	{
	alert('please enter a valid email-address');	
	document.forms[form_id].elements[email].focus();
	return false;
	}
	
}



</script>



<div id="divWrapper">
<center>
 <div id="templatemo_wrapper">
<?php include("head.php");
?>

<?php
include("adminmenu.php");?>
</div>


<div id="templatemo_main">

<div id="right">
 
<button class="dropbtn1">adminstrator</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register employe</a><br><hr><br>
<a href="createacount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;create account </a><br><hr><br>
<a href="registeringcolleges.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering colleges </a><br><hr><br>
<a href="registeringdepartments.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register department </a><br><hr><br>
<a href="registeringoffices.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering offices </a><hr>
  </div>
       <div id="left">

      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="https://www.gmail.com/" target='blank'>
        <h>click here to send user accounts via gmail</h>
		   
        </a>
<div>
<form  id="email_form" action="registeringemployee.php" onsubmit="javascript:return validate('email_form','email');" method="post">
<h2 class="style12">
       <center>employee registering form</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;employee_id:<input type="text" name="emp_id" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;employee_fname:<input type="text" name="empfname" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;employee_lname:<input type="text" name="emplname" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;employee_phone<input type="text" id="phone" name="emp_phone"  pattern="[09]{2}[0-9]{8}" required /><br>	<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email-adress:<input type="text" id="email" name="email" required="" /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register">register</button>
<button type="reset" name="reset">reset</button>
</fieldset>
</form>
</form>
<?php
		
if(isset($_POST['register']))
{
	$emp_id=$_POST['emp_id'];
		$empfname=$_POST['empfname'];
		$emplname=$_POST['emplname'];
		$emp_phone=$_POST['emp_phone'];
		$email=$_POST['email'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "","purchasi");
If($connection){
	$sql="select * from employee where emp_id='$emp_id'";
		$userexist=mysqli_query($connection,$sql);
		if(mysqli_affected_rows($connection))
			echo "<font color='red' size='5'>employee id already exist!</font>";
		else{
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
$sql2="INSERT INTO employee(emp_id,empfname,emplname,emp_phone,email) VALUES('$emp_id','$empfname', '$emplname','$emp_phone','$email')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>employee registered successfully! </font>";
	else
 echo "<font color='red' size='5'>employee is not registered </font>".mysqli_error($connection);
		}  else
die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  

}}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?></div></div></div></center>
<div id="fotter">
<?php include("footer.php");?>
</div>
</body>
</html>
<?php
}
else
header("location:login.php");

?>