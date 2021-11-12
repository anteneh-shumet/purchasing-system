<?php
session_start();
if(isset($_SESSION['qusername'])&& isset($_SESSION['qpassword']))
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
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">
    <li><a href="help.php">help</a></li>
    <li><a href="logout11.php">logout</a></li>
    </ul></div></div>
<div id="templatemo_main">

<div id="right">

  <button class="dropbtn1" font-size="200px">quality assurer</button><br><br
  <div class="dropdown-content1" style="down:0;">
<a href="registeritemquality.php">&nbsp;&nbsp;&nbsp;register item quality </a><br><hr><br>
 <a href="qualityassuredpurchaseditem.php">&nbsp;&nbsp;&nbsp;view supplied items </a><br><hr><br>
   <a href="qualityassuranceaccount.php"> &nbsp;&nbsp;&nbsp;update account</a><br><hr>
  </div>

<div id="left"><div>
<div>
<form id="form"action="" method="post" form name="f1" align="center">
<fieldset>
	<legend><h2>register supplied items quality</h2></legend><br>
item_quality_id:<input type="text" name="item_quality_id" required=""/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item_type:<input type="text" name="item_type" required=""/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;model:<input type="text" name="model" required="" /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quality:<input type="text" name="quality" required="" /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="insert" style="width:230px">register item quality</button>
<button type="reset" name="reset">reset</button><br><br>
</fieldset>
</form>
<?php
		
if(isset($_POST['insert']))
{
	$item_quality_id=$_POST['item_quality_id'];
		$item_type=$_POST['item_type'];
		$model=$_POST['model'];
		$quality=$_POST['quality'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO item_quality(item_quality_id,item_type,model,quality) VALUES('$item_quality_id','$item_type', '$model','$quality')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>item quality is registered successfully!</font>";
		else
 die("<font color='red' size='5'>item quality is not registered </font>");
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