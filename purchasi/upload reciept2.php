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
<?php include("head2.php");
?>
<?php
include("supplier menu2.php");
?>
</div>
<div id="templatemo_main">

<div id="right">
  
<button class="dropbtn1" font-size="200px">ተጫራች</button><br
<div class="dropdown-content1" style="down:0;">
<a href="registersupplierdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን ሙላ </a><br><hr><br>
<a href="modifyyourdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን አስተካክል </a><br><hr><br>
<a href="viewbidresult2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረቻ ውጤት እይ </a><br><hr><br>
<a href="viewtendernotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ማስታዎቂያ እይ </a><br><hr><br>
<a href="supplieraccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት አሻሽል </a><br><hr>
</div>
<div id="left"><div><h2>ዎደ ተጫራች ገጽ እንኳን ደህና መጡ</h2></div>
<div>
<form  id="email_form" action="upload reciept.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post">
<input type="hidden" name="document_id"/><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="hidden" name="payment_id"/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የክፍያ ደረሰኝ:<input type="file" name="reciept" id="file"><br><br><br>
<button type="submit" name="app">ስቀል</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button type="reset" >ሰርዝ</button>

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
echo "<font color='green' size='5'>ደረሰኙ ተሰቅሏል </font>";					
}
		else 
		echo "<font color='red' size='5'>ደረሰኙ አልተሰቀለም </font>".mysqli_error($con);
						 
					   
						
						
		
}
?>
</div>
  </p> </td></div>

</div>
  <div id="fotter">
<?php include("foot.php");?>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>
