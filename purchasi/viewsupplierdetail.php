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
<div id="left"><h2>view suppliers detail</h2><br>
 <table width="2%" id='tb' border="1" cellpadding="1">
 <thead>
 <tr>
 <th>sid</th>
  
	<th>item</th>
		<th>model</th>
		<th>Uprice</th>
   <th>t_number</th>
    <th></th>
    <th>license</th>
	 <th></th>
	 <th>
	    status</th>
		 <th></th>
 </tr>
 </thead>
 <?php
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"purchasi");
 $query="select *from supplier";
 $query_run=mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($query_run))
 {
	
	echo "<tr><td>".$row['id']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_model']."</td>";
	echo "<td>".$row['unit_price']."</td>";
	?>
	<?php
echo"<td><img src=../images/$row[11] width='50px' height='50px' >";
?>
		<td>
				<a href="viewsupplierdetail.php?UserID=<?php echo $row['tin_number'];?>">download</a></td>

<?php

if(isset($_GET['UserID']))
{
	$ID=$_GET['UserID'];
   
    $query=mysqli_query($connection,"select * from supplier where tin_number='$ID'");
	
   while($row=mysqli_fetch_assoc($query)){
$dir = "images";
$file= "images/".$row['tin_number'];

if (file_exists($file))
    {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment;  filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
    }}
} 
?>
<?php
echo"<td><img src=../images/$row[12] width='50px' height='50px' >";
?>
	<td>
				<a href="viewsupplierdetail.php?UsersID=<?php echo $row['trade_license'];?>">download</a></td>
<?php
if(isset($_GET['UsersID']))
{
	$ID=$_GET['UsersID'];
   
    $query=mysqli_query($connection,"select * from supplier where trade_license='$ID' order by registereddate desc");
	
   while($row=mysqli_fetch_assoc($query)){
$dir = "images";
$file= "images/".$row['trade_license'];

if (file_exists($file))
    {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment;  filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    ob_clean();
    flush();
    readfile($file);
    exit;
    }}
} 

?>




<script>
		var table=document.getElementById('tb');
		for(var i=1;i<table.rows.length;i++)
		{
			table.rows[i].onclick=function()
			{
				document.getElementById('id').value=this.cells[0].innerHTML;
				if(typeof index !== "undefined"){
                           table.rows[index].classList.toggle("selected");
                        }
                        console.log(typeof index);
                        // get the selected row index
                        index = this.rowIndex;
                        // add class selected to the row
                        this.classList.toggle("selected");
                        console.log(typeof index);
			};
		}
		</script>
<?php
echo'<form action="viewsupplierdetail.php" method="POST">';
echo'<td><input type="submit" name="approve" value="accept"/></td>';
echo'<td><input type="submit" name="reject" value="reject"/></td></tr>';?>
</tr>

	
	
<?php	
	 
 }
 echo'<input type="hidden" name="id" id="id">';
echo'</form>';
 if(isset($_POST['approve']))
{
	$id=$_POST['id'];
	 
 $sql3=" update supplier set status='accepted' where id='$id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>supplier detail is accepted! </font>";
		 }
		 else
           die("<font color='red' size='5'> supplier detail is not accepted </font>".mysqli_error($connection));  
}
if(isset($_POST['reject']))
{
	$id=$_POST['id'];
	 
 $sql3=" update supplier set status='rejected' where id='$id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>supplier detail is rejected! </font>";
		 }
		 else
           die("<font color='red' size='5'> supplier detail is not rejected  </font>".mysqli_error($connection)); 

	   
}



 ?>
 </table></div></div></center></div>
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