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
<form  id="email_form" action="winner.php"  method="post">
<fieldset>
<legend align="center"><h2>register winner here</h2></legend><br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;result_id:<input type="text" name="result_id" placeholder="enter result id"pattern="[A-Za-z0-9]+" required/><br><br>  
winner_fname:<input type="text" name="winner_fname" placeholder="enter winner fname" pattern="[a-zA-Z]+" required/><br><br> 
winner_lname:<input type="text" name="winner_lname" placeholder="enter winner lname" pattern="[a-zA-Z]+" required /><br>	<br> 
&nbsp;&nbsp;posted_date:<input type="date" name="posted_date" placeholder="enter posted date" required /><br> <br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;winner_id:<input type="text" name="winner_id" placeholder="enter winner id" pattern="[A-Za-z0-9]+" required /><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register">register</button>
<button type="reset" name="reset">reset</button><br>  <br>  
</fieldset>
</form>


<?php
		
if(isset($_POST['register']))
{
	$result_id=$_POST['result_id'];
		$winner_fname=$_POST['winner_fname'];
		$winner_lname=$_POST['winner_lname'];
		$posted_date=$_POST['posted_date'];
		$winner_id=$_POST['winner_id'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO tender_result(result_id,winner_fname,winner_lname,posted_date,winner_id) VALUES('$result_id','$winner_fname', '$winner_lname','$posted_date','$winner_id')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>winner registered successfully! </font>";
		else
 die("<font color='red' size='5'> winner is not registered </font>");
		}  else
die("<font color='red' size='5'> Database not selected:</font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'> Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

</div></div></center></div>
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