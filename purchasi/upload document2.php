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
<div id="left"><h2>የጨረታ ሰነድ እዚህ ስቀል</h2><br>

<form  id="email_form" action="upload document.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post">
<input type="hidden" name="document_id"/><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የተሰቀለበት ቀን:<input type="date" name="uploaded_date" value="<?php echo date('Y-m-d');?>"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሰነድ:<input type="file" name="document" id="file"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="app">ስቀል</button> 
<button type="reset" >ሰርዝ</button>

</form>

<?php
if(isset($_POST['app']))
{
	include("connection.php");
	$document_id=$_POST['document_id'];
	$uploaded_date=$_POST['uploaded_date'];
	$image=($_FILES['document']['name']);
	
	
						$target_dir ="../images/";
						$target_file = $target_dir . $_FILES["document"]["name"];
						
						if(move_uploaded_file($_FILES['document']['tmp_name'],$target_file))
						{			
$mysql=mysqli_query($con,"insert into document values('$document_id','$uploaded_date','$image')");
if($mysql)	
echo "<font color='green' size='5'>ሰነዱ ተሰቅሏል </font>";					
}
		else 
		echo "<font color='red' size='5'>ሰነዱ አልተሰቀለም </font>".mysqli_error($con);
						 
					   
						
						
		
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
