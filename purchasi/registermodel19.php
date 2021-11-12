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
    <?php include("head.php");
    ?><div  id="toptabmenu">
         <ul class="a" style="float: right;">
    <li><a href="help.php">help</a></li>
    <li><a href="logout13.php">logout</a></li>
    </ul></div></div>
<div id="templatemo_main">

    <div id="right">
     
    <button class="dropbtn1" >Inventory </button><br
  <div class="dropdown-content1">   
 <a href="registermodel19.php"> &nbsp;&nbsp;&nbsp;register model19</a><br><hr><br>
  <a href="view model 20.php"> &nbsp;&nbsp;&nbsp;view model20</a><br><hr><br>
    <a href="modify model 19.php"> &nbsp;&nbsp;&nbsp;&nbsp;modify model19</a><br><hr><br>
 <a href="registermodel22.php"> &nbsp;&nbsp;&nbsp;&nbsp;register model22</a><br><hr><br>
 <a href="inventorypurchaseditem.php"> &nbsp;view purchased product</a><br><hr><br>
   <a href="inventoryaccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><br>
  </div>

<div id="left"><div>
<form id="form"action="" method="post" form name="f1" align="center">
<fieldset>
	<legend align="center"><h2>registering model19</h2></legend><br>
	reciept number:<input type="text" name="recieving_reciept_no" required=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;model:<input type="text" name="model" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;deliverer:<input type="text" name="deliverer" required=""/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quantity:<input type="text" name="quantity" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reciepant:<input type="text" name="reciepant" required="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unit price:<input type="text" name="unit_price" required="" />	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item type:<input type="text" name="item_type" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="insert">register</button>
<button type="reset" name="reset">reset</button><br><br>
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
			echo "<font color='green' size='5'>model19 is registered successfully! </font>";
		else
 die("<font color='red' size='5'>Data not inserted </font>".mysqli_error($connection));
		}  else
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

  </div></div></div></center></div>
  <div id="fotter">
<?php include("footer.php");?></div>
</body>
</html>
<?php
}
else
header("location:login.php");

?>