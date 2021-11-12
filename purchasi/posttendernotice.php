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
<br>
<div>
<form  id="email_form" action="posttendernotice.php"  method="post">
<fieldset>
<legend align="center"> <h2>register the tender here and post it</h2></legend><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tender_id:<input type="text" name="tender_id" pattern="[A-Za-z0-9]+" required/><br><br> 
poste_date:<input type="date" name="post_date"  value="<?php echo date('Y-m-d');?>" required /><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;subject:<input type="text" name="subject" pattern="[a-zA-Z0-9]+" required/><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Content:<textarea name="content" pattern="[a-zA-Z0-9]+" style='width: 30%;height:15%; border-radius:4px;font-size:15px;box-sizing: border-box; 
border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/> </textarea><br /><br> 
&nbsp;&nbsp;&nbsp;&nbsp;start_date:<input type="date" name="start_date" required /><br><br>  	
&nbsp;&nbsp;&nbsp;&nbsp;closing_date:<input type="date" name="closing_date" required /><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="post">post</button>
<button type="reset" name="reset">reset</button><br>  <br>  
</fieldset>
</form>


<?php
		
if(isset($_POST['post']))
{
	$tender_id=$_POST['tender_id'];
  $post_date=$_POST['post_date'];
		$subject=$_POST['subject'];
		$content=$_POST['content'];
		$posted_date=$_POST['start_date'];
		$d=$_POST['closing_date'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO tender(tender_id,post_date,subject,content,start_date,closing_date) VALUES('$tender_id','$post_date','$subject', '$content','$posted_date','$d')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo " <font color='green' size='5'>tender posted successfully! </font>";
		else
 die("<font color='red' size='5'>tender is not post </font>".mysqli_error($connection));
		}  else
die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
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