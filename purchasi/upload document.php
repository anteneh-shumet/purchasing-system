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
<div id="left"><h2>upload tender document  here</h2><br>

<form  id="email_form" action="upload document.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post">
<input type="hidden" name="document_id"/><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;uploaded_date:<input type="date" name="uploaded_date" value="<?php echo date('Y-m-d');?>"/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;document:<input type="file" name="document" id="file"><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="app">upload</button> 
<button type="reset" >reset</button>

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
echo "<font color='green' size='5'>you have sucessfully upload the document </font>";					
}
		else 
		echo "<font color='red' size='5'>applying is Not successfull </font>".mysqli_error($con);
						 
					   
						
						
		
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
