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
<?php include("head2.php");
?>

<?php
include("purchasing team menu2.php");
?>
</div>
<div id="templatemo_main">

<div id="right">
 
    <button class="dropbtn1" font-size="200px">የግዥ ቡድን</button>
 <br><br> <hr>
<a href="viewmarketdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የገባያውን ዝርዝር እይ</a><br><hr><br>
 <a href="winner2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አሸናፊውን መዝግብ </a><br><hr><br>
  <a href="viewrequest2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የተገመገመ ጥያቄ እይ </a><br><hr><br>
 <a href="posttendernotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ማስታዎቂያ ለጥፍ </a><br><hr><br>
   <a href="viewwinners2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አሸናፊውን እይ </a><br><hr><br>
   <a href="purchasingteamaccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><hr>
  </div>
<div id="left">
<form  id="email_form" action="winner2.php"  method="post">
<fieldset>
<legend align="center"><h2>አሸናፊውን እዚህ መዝግብ</h2></legend><br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የውጠት መለያ:<input type="text" name="result_id" placeholder="enter result id"pattern="[A-Za-z0-9]+" required/><br><br>  
የአሸናፊ ስም:<input type="text" name="winner_fname" placeholder="enter winner fname" pattern="[a-zA-Z]+" required/><br><br> 
የአሸናፊ አባት ስም:<input type="text" name="winner_lname" placeholder="enter winner lname" pattern="[a-zA-Z]+" required /><br>	<br> 
&nbsp;&nbsp;የተለጠፈበት ቀን:<input type="date" name="posted_date" placeholder="enter posted date" required /><br> <br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ያሸናፊ መለያ:<input type="text" name="winner_id" placeholder="enter winner id" pattern="[A-Za-z0-9]+" required /><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register">መዝግብ</button>
<button type="reset" name="reset">ሰርዝ</button><br>  <br>  
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
			echo "<font color='green' size='5'> አሸናፊው ተመዝግቧል! </font>";
		else
 die("<font color='red' size='5'> አሸናፊው አልተመዘገም </font>");
		}  else
die("<font color='red' size='5'> ዳታበዝ አልተመረጠም: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'> ኮነክሽን ተቋርቷል: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

</div></div></center></div>
<div id="fotter">
<?php include("foot.php");?>
</div>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>