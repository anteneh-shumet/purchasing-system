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
<br>
<div>
<form  id="email_form" action="posttendernotice2.php"  method="post">
<fieldset>
<legend align="center"> <h2>የጨረታውን ማስታዎቂያ እዚህ መዝግብ እ ና ለጥፍ</h2></legend><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ መለያ:<input type="text" name="tender_id" pattern="[A-Za-z0-9]+" required/><br><br> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሰነድ:<input type="text" name="subject" pattern="[a-zA-Z]+" required/><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ዝርዝር:<textarea name="content"  style='width: 30%;height:15%; border-radius:4px;font-size:15px;box-sizing: border-box; 
border: 1px solid #060907; box-sizing: border-box; padding: 0px;'/> </textarea><br /><br> 
&nbsp;&nbsp;&nbsp;&nbsp;የተለጠፈበት ቀን:<input type="date" name="posted_date"  value="<?php echo date('Y-m-d');?>" required /><br><br>  	
&nbsp;&nbsp;&nbsp;&nbsp;መጨረሻ ቀን:<input type="date" name="closing_date" value="<?php $d=strtotime("today+ 10 days");
 echo date("Y-m-d",$d);?>" required /><br><br>  
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="post">ለጥፍ</button>
<button type="reset" name="reset">ሰርዝ</button><br>  <br>  
</fieldset>
</form>


<?php
		
if(isset($_POST['post']))
{
	$tender_id=$_POST['tender_id'];
		$subject=$_POST['subject'];
		$content=$_POST['content'];
		$posted_date=$_POST['posted_date'];
		$d=$_POST['closing_date'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
	// Insert a row of information into the table
$sql2="INSERT INTO tender(tender_id,subject,content,posted_date,closing_date) VALUES('$tender_id','$subject', '$content',Now(),'$d')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>ጨረታው ተለጥፏል!</font>";
		else
 die("<font color='red' size='5'>ጨረታው አልተለጠፈም </font>".mysqli_error($connection));
		}  else
die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል:</font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

?>

</div></div></div></center></div>
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