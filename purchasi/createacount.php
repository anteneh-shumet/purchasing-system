+<?php
session_start();
include("connection.php");
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
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
<link  href="css/stylist.css" rel="stylesheet" type="text/css"/>
<style>
#form{
background-color:#A3CEDC;
padding: 10px;
}</style>
</head>

<body bgcolor="#B0C4DE">

<?php
include("connection.php");
?>
<div id="divWrapper">
<center>

<table border=0>
<tr><td colspan=6>
<div id="divheader">
<?php include("header.php");
?>
</div>
<div id="divNav">
<?php
include("adminmenu.php");
require("date_time.php");
?>
</div>
</td>
</tr>
<tr><td colspan=6>&nbsp;</td></tr>
<tr><td>
<div id="divSideContentLeft">
<div class="dropdown1" style="float:left;">
<button class="dropbtn1">adminstrator</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register employe</a><br><br><hr>
<a href="createacount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;create account </a><br><br><br><hr>
<a href="registeringcolleges.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering colleges </a><br><br><br><hr>
<a href="registeringdepartments.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register department </a><br><br><hr>
<a href="registeringoffices.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering offices </a><hr>
  </div>

</div>
</td>
<!--td><b><font color="green"><h1>Wellcome to home page</h1></font></b></td-->

<td>&nbsp;</td><td><div id="divContentCenter">
<li>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="https://www.gmail.com/" target='blank'>
        <h>click here to send user accounts via gmail</h>
		   
        </a>
    </li>
<div>
<form id="form" action="" method="post" form name="f1" align="center">
<fieldset>
	<legend align="center">create employees acount</legend>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;emp_id<select name="empl_id">
	<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasing");
		If($sql){
             $sql2="select * from employee";                            
              $result=mysqli_query($connection,$sql2) ;
	While($row=mysqli_fetch_array($result))
	{  
echo "<option>".$row['emp_id']."</option>";

	}?>
</select><br> 
<?php
	}
       } 
                    else{
       die("Connection Failed:".mysqli_error($connection));
 }
 mysqli_close($connection);
	?>
user name:<input type="text" name="username" pattern="[a-zA-Z0-9]+" required/><br>
password:<input type="password" name="password" pattern="[a-zA-Z0-9]+" required /><br>
user type:
<select name="role"required="true"><br>
<option value=" "> choose</option>
<option value="adminstrator">adminstrator</option>
<option value="college adminstrator">college adminstrator</option>
<option value="department head">department head</option>
<option value="purchasing directorate">purchasing directorate</option>
<option value="purchasing team">purchasing team</option>
<option value="marketstudy team">marketstudy team</option>
<option value="purchasing worker">purchasing worker</option>
<option value="finance officer">finance officer</option>
<option value="inventory">inventory</option>
<option value="quality assurer">quality assurer</option>
<option value="supplier">supplier</option>
<option value="offices">offices</option>
<option value="technical room">technical room</option>
<option value="approval commite">approval commite</option>
<option value="school dean">school dean</option>

</select> <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status<select name="status">
<option value="active">active</option>
<option value="inactive">inactive</option>
</select>
<br>	
<input type="submit" name="register" value="create account"/>
<input type="reset" name="reset" value="reset"/>
</fieldset>
</form>
<?php
		function encryptpassword($password ) 
{
$cryptKey='qJB0rGtIn5UB1xG03$oldpefyCp';
$passwordEncoded= base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $password, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
return( $passwordEncoded );
}	
if(isset($_POST['register']))
{
	
	$empl_id=$_POST['empl_id'];
		$username=$_POST['username'];
		$password=md5($_POST['password']);
		$role=$_POST['role'];
		$status=$_POST['status'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasing");
		If($sql){
			if(((((((((((((((($role=="adminstrator"))|| ($role=="college adminstrator")) ||($role=="department head"))||
	($role=="purchasing team"))||($role=="marketstudy team"))
		||($role=="quality assurer"))||($role=="inventory"))||($role=="finance officer"))
		||($role=="purchasing directorate"))||($role=="purchasing worker"))||($role=="supplier"))||($role=="offices"))||($role=="technical room"))||($role=="approval commite"))
		||($role=="school dean"))
		{
			
$sql2="INSERT INTO account(empl_id,username,password,role,status) VALUES('$empl_id','$username', '$password','$role','$status')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "user acount is created successfully!";
		}else
 die("unable to create user account");
		}  else
die("Database not selected:".mysqli_error($connection));  

}else{
 die("Connection Failed:".mysqli_error($connection));
}
mysqli_close($connection);}

?>


</div>
  </p> </td></div>

</div>
</tr>

<tr><td colspan=6>
<div id="divFooter"><br>
<?php include("footer.php");?>
</div></td></tr>
</center>
</div></table>
</body>
</html>
<?php
}

	
else{
header("location:login.php");
}
?>
