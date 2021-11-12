<?php
session_start();
if(isset($_SESSION['prusername'])&& isset($_SESSION['prpassword']))
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

<?php
include("purchasing team menu.php");
?>
</div>
<div id="templatemo_main">

<div id="right">
 
    <button class="dropbtn1" font-size="200px">purchasing team</button>
 <br><br> <hr>
<a href="viewmarketdetail.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view market detail </a><br><hr><br>
 <a href="winner.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register winner </a><br><hr><br>
  <a href="viewrequest.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view approved requests </a><br><hr><br>
 <a href="posttendernotice.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post tender notice </a><br><hr><br>
   <a href="viewwinners.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view winner </a><br><hr><br>
   <a href="purchasingteamaccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><hr>
  </div>
<div id="left">
<form  id="email_form" action="takeagreement.php"  method="post">
<h2>register agreement with supplier</h2><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;agreement_id:<input type="text" name="id" placeholder="enter id"pattern="[A-Za-z0-9]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result id:<input type="text" name="result_id" placeholder="enter result id" required/><br><br>
date of suppliying:<input type="date" name="supplying_date" required /><br><br>	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register">register</button>
<button type="reset" name="reset" >reset</button><br><br>

</form>


<?php
		
if(isset($_POST['register']))
{
	$result_id=$_POST['id'];
		$result=$_POST['result_id'];
		$datee=$_POST['supplying_date'];
		
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO agreement(id,result_id,supplying_date) VALUES('$result_id','$result', '$datee')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>agreement registered successfully! </font>";
		else
 die("<font color='red' size='5'>agreement is not registered </font>");
		}  else
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  }else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

</div></div></div></center></div>
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