<?php
session_start();
if(isset($_SESSION['cusername'])&& isset($_SESSION['cpassword']))
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
</style>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>

<body bgcolor="#B0C4DE">
 <div id="templatemo_wrapper">
<?php include("head.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">
	<li><a href="help.php">help</a></li>
	<li><a href="logout4.php">logout</a></li>
	</ul>
</div>
</div>
<div id="templatemo_main">

<div id="right">
  
  	<center><button class="dropbtn1" font-size="200px">college director</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request purchasing </a><br><hr><br>
 <a href="regmodel20.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register model20 </a><br><hr><br>
  <a href="viewnoticecollegeadmin.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view directorate notices </a><br><hr><br>
    <a href="departmentrequests.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view departments request </a><br><hr><br>
 <a href="collegeupdateaccount.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;update your account </a><br><hr>	   
  </div>
 <div id="left"><center>
<br>
<div>
<form id="form"action="regmodel20.php" method="post" form name="f1" align="center">
<fieldset>
	<legend align="center"><h2>requesting to withdraw item from the inventory</h2></legend><br>
withdraw_id:<input type="text" name="withdraw_requistion_no" required=""/>&nbsp;&nbsp;requested_date:<input type="date" name="request_date" required="" /><br><br>	
&nbsp;request_id:<input type="text" name="request_num" required=""/>&nbsp;&nbsp;&nbsp;requester_body:<input type="text" name="requester_body" required="" /><br><br>	
&nbsp;&nbsp;item type:<input type="text" name="item_type" required="" />&nbsp;&nbsp;&nbsp;deliverer_name:<input type="text" name="officers_name" required="" /><br><br>			
&nbsp;&nbsp;&nbsp;&nbsp;quantity:<input type="text" name="quantity" required="" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;model:<input type="text" name="model" required="" /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="insert"> register</button>
<button type="reset" name="reset">reset</button><br>	<br>	
</fieldset>
</form>
<?php
		
if(isset($_POST['insert']))
{
	$withdraw_requistion_no=$_POST['withdraw_requistion_no'];
		$request_no=$_POST['request_num'];
		$quantity=$_POST['quantity'];
		$request_date=$_POST['request_date'];
		$requester_body=$_POST['requester_body'];
		$item_type=$_POST['item_type'];
		$model=$_POST['model'];
		$officers_name=$_POST['officers_name'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	
	
	
	$sql1="select * from request where $request_no=request_no";
		$matchfound=mysqli_query($connection,$sql1);
		$res=mysqli_num_rows($matchfound);	
		While($row=mysqli_fetch_array($matchfound))
		{
		   $r=$row['request_no'];
	   
		   $q=$row['item_quantity'];
		   $i=$row['item_type'];
		   $st=$row['status'];
		  
		}
	
	
	
	if($st=="approved")
	{
	
	if((($request_no==$r) && $quantity==$q) && $item_type==$i)
	{
	
$sql2="INSERT INTO model20(withdraw_requistion_no,request_num,request_date,requester_body,officers_name,item_type,model,quantity) VALUES('$withdraw_requistion_no','$request_no', '$request_date','$requester_body','$officers_name','$item_type','$model','$quantity')";                            
$result=mysqli_query($connection,$sql2) ;
If($result){
	
	echo "<font color='green' size='5'>item withdraw requistion is  sent successfully! </font>";
}
	else
		echo"<font color='red' size='5'>item withdraw requistion is  not sent </font>";
	}
	
	else
 die("<font color='red' size='5'>at first you request &nbsp;&nbsp;&nbsp;".$q."&nbsp;&nbsp;&nbsp;". $i."&nbsp;&nbsp;items <br>please request that you submit while you request purchasing </font>".mysqli_error($connection));

		}
		else
	echo "vthe purchasing request you sent previous was rejected by approval commite </font>";
	}
		
		  else
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>




</div></div></center></div></div>
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