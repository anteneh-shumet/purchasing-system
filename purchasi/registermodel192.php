<?php
session_start();
if(isset($_SESSION['iusername'])&& isset($_SESSION['ipassword']))
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
    ?><div  id="toptabmenu">
         <ul class="a" style="float: right;">
    <li><a href="help.php">አጋዥ</a></li>
    <li><a href="logout131.php">ውጣ</a></li>
    </ul></div></div>
<div id="templatemo_main">

    <div id="right">
     
    <button class="dropbtn1" >የቃ መጋዘን</button><br
  <div class="dropdown-content1">   
 <a href="registermodel192.php"> &nbsp;&nbsp;&nbsp;ሞዴል19ን መዝግብ</a><br><hr><br>
  <a href="view model 202.php"> &nbsp;&nbsp;&nbsp;ሞዴል20ን እይ</a><br><hr><br>
    <a href="modify model 192.php"> &nbsp;&nbsp;&nbsp;&nbsp;ሞዴል19ን ቀይር</a><br><hr><br>
 <a href="registermodel222.php"> &nbsp;&nbsp;&nbsp;&nbsp;ሞዴል22ን መዝግብ</a><br><hr><br>
 <a href="inventorypurchaseditem2.php"> &nbsp;የተገዙ እቃዎችን እይ</a><br><hr><br>
   <a href="inventoryaccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት ኧሻሽል</a><br>
  </div>

<div id="left"><div>
<form id="form"action="" method="post" form name="f1" align="center">
<fieldset>
	<legend align="center"><h2>ሞዴል 19ን መመዝገብ</h2></legend><br>
	ደረሰኝ:<input type="text" name="recieving_reciept_no" required=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሞዴል:<input type="text" name="model" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አድራሽ:<input type="text" name="deliverer" required=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ብዛት:<input type="text" name="quantity" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ተቀባይ:<input type="text" name="reciepant" required="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ያንዱ ዋጋ:<input type="text" name="unit_price" required="" />	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የእቃ አይነት:<input type="text" name="item_type" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="insert">መዝግብ</button>
<button type="reset" name="reset">ሰርዝ</button><br><br>
</fieldset>
</form>
<?php
		
if(isset($_POST['insert']))
{
	$recieving_reciept_no=$_POST['recieving_reciept_no'];
		$deliverer=$_POST['deliverer'];
		$reciepant=$_POST['reciepant'];
		$item_type=$_POST['item_type'];
		$model=$_POST['model'];
		$quantity=$_POST['quantity'];
		$unit_price=$_POST['unit_price'];
		$total_price=$quantity * $unit_price;
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO model19(recieving_reciept_no,deliverer,reciepant,item_type,model,quantity,unit_price,total_price) VALUES('$recieving_reciept_no','$deliverer','$reciepant','$item_type','$model','$quantity','$unit_price','$total_price')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>ሞዴል 19 በተሳካ ሁኔታ ተመዝግቧል! </font>";
		else
 die("<font color='red' size='5'>ሞዴል 19  አልተመዘገበም </font>".mysqli_error($connection));
		}  else
die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

  </div></div></div></center></div>
  <div id="fotter">
<?php include("foot.php");?></div>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>