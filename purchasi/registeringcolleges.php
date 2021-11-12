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
<?php include("head.php");
?>

<?php
include("adminmenu.php");?>
</div>
</div>

<div id="templatemo_main">

<div id="right">
    
<button class="dropbtn1">adminstrator</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register employe</a><sbr><hr><br>
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
<form  id="form" action="registeringcolleges.php"  method="post">
<h2 class="style12">
       <center>college registering form</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;college name:<input type="text" name="college_name"required="true"  pattern="[A-Z a-z]+" ><br>

<br><br>
college_admin_fname:<input type="text" name="college_admin_fname" pattern="[A-Za-z]+" required/><br><br>
college_admin_lname:<input type="text" name="college_admin_lname" pattern="[a-zA-Z]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register"> register</button>
<button type="reset" name="reset">reset</button>
</form>
<?php
		
if(isset($_POST['register']))
{
	$college_name=$_POST['college_name'];
		$college_admin_fname=$_POST['college_admin_fname'];
		$college_admin_lname=$_POST['college_admin_lname'];
		$connection=mysqli_connect("localhost", "root", "","purchasing");
If($connection){
	$sql="select * from colleges where college_name='$college_name'";
		$userexist=mysqli_query($connection,$sql);
		if(mysqli_affected_rows($connection))
			echo "college already exist!";
		else{
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	
$sql2="INSERT INTO colleges(college_name,college_admin_fname,college_admin_lname) VALUES('$college_name','$college_admin_fname', '$college_admin_lname')";                            
$result=mysqli_query($connection,$sql2);
If($result){
			echo "<font color='green' size='5'>college is registered successfully! </font>";
	}
	else
 echo "<font color='red' size='5'>college is not registered </font>".mysqli_error($connection);
		}  
		else
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  

}}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>


</div>
  </div>

</div>
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