   <?php
   include("connection.php");
 if(isset($_POST['view']))
  {
  
   $user_id=$_POST['user_id'];
   $lname=$_POST['lname'];
   $sql="SELECT * FROM  account where empl_id='$user_id' AND username='$lname';"; 
   $result_set=mysqli_query($con,$sql);
   if(!$result_set)
   {
   die("Query failed".mysql_error());
   }
if(mysqli_num_rows($result_set)>0)
{
while($row=mysqli_fetch_array($result_set))
{
$fname=$row[1];
$password=md5($row['password']);
} 
echo"<p class='success'>&nbsp;"."Hi"."&nbsp; &nbsp;".$lname."&nbsp; &nbsp;"."your password is:".$password."</p>";


}
else
{
echo"<p class='wrong'>&nbsp;&nbsp;Incorrect Input</p>";
echo'<meta content="5;forgate.php" http-equiv="refresh" />';
}
}
mysqli_close($con);
?>
  
  <script type='text/javascript'>
function formValidation(){
var lastname= document.getElementById('lname');
var user_id = document.getElementById('user_id');	
if(isAlphabet(lastname, "please enter Your Last Name in letters only")){
if(lengthRestriction(lastname, 3, 30,"for your Last Name")){
if(isAlphanumeric(user_id,"Please Enter the Correct ID No (!@#$%^&*()*+=~`) Not allowed")){
if(lengthRestriction(user_id, 2, 15,"for your ID No")){

	return true;
	}}}}}
return false;		
}	
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

function emailValidator(elem, helperMsg){
	var emailExp = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
	if(elem.value.match(emailExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function madeSelection(elem, helperMsg){
	if(elem.value =="-select-"){
	alert(helperMsg);
		elem.focus();
		return false;
		}
	else{
		return true;
		
	}
}
function isNumeric(elem, helperMsg){
	var numericExpression = /^[0-9]+$/;
	if(elem.value.match(numericExpression)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function lengthRestriction(elem, min, max, helperMsg){
	var uInput = elem.value;
	if(uInput.length >= min && uInput.length <= max){
		return true;
	}else{
		alert("Please enter Above " +min+ " characters" +helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphanumeric(elem, helperMsg){
	var alphaExp = /^[0-9a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}
function isAlphabet(elem, helperMsg){
	var alphaExp = /^[a-zA-Z]+$/;
	if(elem.value.match(alphaExp)){
		return true;
	}else{
		alert(helperMsg);
		elem.focus();
		return false;
	}
}

	</script>
<!--End of PHP-->

<html>

<head>
<title>login</title>
<link  href="css/LoginPageStyle.css" rel="stylesheet" type="text/css"/>
		
</head>
<body bgcolor="#B0C4DE">

<center>
	<div id="templatemo_wrapper">
<?php include("head.php");
?>

<?php
include("list.php");
?>
</div>

	     <h2 style="color:#006080">Forget Password</h2>
<form action="forgot password.php" method="POST" onsubmit='return formValidation()'>
<br><br>
<table class="log_table" align="center">

<tr>

<tr>
<td>
<label>Emp ID</label>
</td>
<td>
<input type="text" name="user_id" title="user id" id="user_id" required/>
</td>
</tr>
<tr>
<td>
<label>User Name.</label>
</td>
<td>
<input type="text" onKeyPress="return isNumberKey(event)" name="lname" title="User Name" id="lname" required/>
</td>
</tr>
<tr>
<td>
</td>
<td>
<input type="submit" name="view" value="View" class="button_example"/>&nbsp;&nbsp;
<input type="reset" value="Clear" class="button_example"/>
</td>
</tr>
</table>
</form>
<div id="fotter">
<?php include("footer.php");?>
		</div>
</body>
</html>
