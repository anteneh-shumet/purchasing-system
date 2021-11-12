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

<a href="modifyyourdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን አስተካክል </a><br><hr><br>
<a href="viewbidresult2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረቻ ውጤት እይ </a><br><hr><br>
<a href="viewtendernotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ማስታዎቂያ እይ </a><br><hr><br>
<a href="supplieraccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት አሻሽል </a><br><hr>
</div>
<div id="divContentCenter">
<div id="left"><div>
<form  id="email_form" action="modifyyourdetail.php" onsubmit="javascript:return validate('email_form','email');" method="post">
<fieldset>
	<legend><h2>የተጫራች መረጃ ማስተካከያ ፎርም</h2></legend>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የተጫራች መለያ:<input type="text" name="id" pattern="[0-9]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የእቃ አይነት:<input type="text" name="item_type" pattern="[A-Za-z]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የእቃሞዴል:<input type="text" name="item_model" pattern="[0-9A-Za-z]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ብዛት:<input type="text" name="quantity" pattern="[0-9]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ያንዱ ዋጋ:<input type="text" name="unit_price" pattern="[0-9]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ቀን:<input type="text" name="registereddate" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="update">አሻሽል</button>
<button type="reset" name="reset">ሰርዝ</button><br><br>
</fieldset>
</form>

<?php
		
if(isset($_POST['update']))
{
	$supplier_id=$_POST['id'];
	$quantity=$_POST['quantity'];
	$unit_price=$_POST['unit_price'];
	$total_price=$quantity * $unit_price;
	$item_type=$_POST['item_type'];
	$item_model=$_POST['item_model'];
	$registereddate=$_POST['registereddate'];
	$connection=mysqli_connect("localhost", "root", "");
If($connection){
    $sql=mysqli_select_db($connection,"purchasi");
         If($sql){
//  Updating record

$sql2=" update supplier set item_type='$item_type',item_model='$item_model',quantity='$quantity',unit_price='$unit_price',total_price='$total_price',registereddate='$registereddate' where id='$supplier_id'";                                     
              $result=mysqli_query($connection,$sql2) ;
          If($result){
           echo "<font color='green' size='5'> የተጫራቹ ዝርዝር ተሻሽሏል</font";
		 }else
           die("<font color='red' size='5'>የተጫራቹ ዝርዝር አልተሻሻለም:</font>".mysqli_error($connection));  
       }  else
die("<font color='red' size='5'> Database not selected: </font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
}

?>



  </div></div></div></center></div>
  <div id="fotter">
<?php include("foot.php");?>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>