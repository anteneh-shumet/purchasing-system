<?php
session_start();
if(isset($_SESSION['susername'])&& isset($_SESSION['spassword']))
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
    height:50px;
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
</style>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">

</head>
<div id="divWrapper">
<center>

<body bgcolor="#B0C4DE">

<div id="divWrapper">
<center>
 <div id="templatemo_wrapper">
<?php include("head.php");
?>
<?php
include("supplier menu.php");
?>
</div>
<div id="templatemo_main">

<div id="right">
  
<button class="dropbtn1" font-size="200px">suppliers</button><br
<div class="dropdown-content1" style="down:0;">
<a href="registersupplierdetail.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fill your detail </a><br><hr><br>
<a href="modifyyourdetail.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;modify your detail </a><br><hr><br>
<a href="viewbidresult.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view bid result </a><br><hr><br>
<a href="viewtendernotice.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view tender notice </a><br><hr><br>
<a href="supplieraccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update your account </a><br><hr>
</div>
<div id="divContentCenter">
<div id="left"><div><h2>Wellcome to suppliers page</h2>
<div>
<form  id="email_form" action="upload reciept.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post">
<input type="hidden" name="document_id"/><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="payment_id"/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;payment reciept:<input type="file" name="reciept" id="file"><br><br><br>
<button type="submit" name="app">upload</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" >reset</button>

</form>

<?php
if(isset($_POST['app']))
{
	include("connection.php");
	$payment_id=$_POST['payment_id'];
	$reciept=($_FILES['reciept']['name']);
	
	
						$target_dir ="../images/";
						$target_file = $target_dir . $_FILES["reciept"]["name"];
						
						if(move_uploaded_file($_FILES['reciept']['tmp_name'],$target_file))
						{			
$mysql=mysqli_query($con,"insert into payment values('$payment_id','$reciept')");
if($mysql)	
echo "<font color='green' size='5'>reciept is successfully uploaded </font>";					
}
		else 
		echo "<font color='red' size='5'>reciept is not uploaded </font>".mysqli_error($con);
						 
					   
						
						
		
}
?>
</div>
  </p> </td></div>

</div>
  <div id="fotter">
<?php include("footer.php");?>
</body>
</html>
<?php
}
else
header("location:login.php");

?>
