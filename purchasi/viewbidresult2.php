<?php
session_start();
if(isset($_SESSION['susername'])&& isset($_SESSION['spassword']))
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
include("supplier menu2.php");
?>
</div>
<div id="templatemo_main">

    <div id="right">
      
<button class="dropbtn1" font-size="200px">ተጫራች</button><br
<div class="dropdown-content1" style="down:0;">

<a href="modifyyourdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን አስተካክል </a><br><hr><br>
<a href="viewbidresult2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረቻ ውጤት እይ </a><br><hr><br>
<a href="viewtendernotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ማስታዎቂያ እይ </a><br><hr><br>
<a href="supplieraccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት አሻሽል </a><br><hr>
</div>
<div id="divContentCenter">
<div id="left"><div><h2> የጨረታው ውጤት ይሄን ይመስላል</h2><br>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			// when the minimum number of females is only one
$sql2="select *from supplier where status='accepted' && total_price =(SELECT MIN(total_price) 
FROM supplier where status='accepted') && supplier_sex='female'";
$result=mysqli_query($connection,$sql2);
$res=mysqli_num_rows($result);	
if($res>=1)
{	
echo "<table cellpadding=5 border=1 id='tb'><tr>";
echo "<th>መለያ</th><th>ስም</th><th>የአባት ስም</th><th>ጾታ</th><th>እቃ</th><th>ሞዴል</th><th>ክፍያ</th><th>ፈቃድ</th><th>ቀን</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{ 
echo "<tr>";
echo "<td>".$row['id']."</td>";
	echo "<td>".$row['supplier_fname']."</td>";
	echo "<td>".$row['supplier_lname']."</td>";
	echo "<td>".$row['supplier_sex']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_model']."</td>";
	echo "<td>".$row['total_price']."</td>";
		echo "<td>".$row['trade_license']."</td>";
			echo "<td>".$row['registereddate']."</td>";
			?>
		<script>
            
            function selectedRow(){
                
                var index,
                    table = document.getElementById("tb");
            
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         // remove the background from the previous selected row
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
                
            }
            selectedRow();
        </script>
		<?php
		
	echo "</tr>";
			  }
	echo "</table>";
		  
}
else{
$sql3="select *from supplier where status='accepted' && total_price =(SELECT MIN(total_price) 
FROM supplier where status='accepted') && supplier_sex='male'";
$rest=mysqli_query($connection,$sql3);
$re=mysqli_num_rows($rest);	
if($re>=1)
{	
echo "<table cellpadding=5 border=1 id='tb'><tr>";
echo "<th>መለያ</th><th>ስም</th><th>የአባት ስም</th><th>ጾታ</th><th>እቃ</th><th>ሞዴል</th><th>ክፍያ</th><th>ፈቃድ</th><th>ቀን</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($rest))
	{ 
echo "<tr>";
echo "<td>".$row['id']."</td>";
	echo "<td>".$row['supplier_fname']."</td>";
	echo "<td>".$row['supplier_lname']."</td>";
	echo "<td>".$row['supplier_sex']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_model']."</td>";
	echo "<td>".$row['total_price']."</td>";
		echo "<td>".$row['trade_license']."</td>";
			echo "<td>".$row['registereddate']."</td>";
			?>
		<script>
            
            function selectedRow(){
                
                var index,
                    table = document.getElementById("tb");
            
                for(var i = 1; i < table.rows.length; i++)
                {
                    table.rows[i].onclick = function()
                    {
                         // remove the background from the previous selected row
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
                
            }
            selectedRow();
        </script>
		<?php
		
	echo "</tr>";
			  }
	echo "</table>";
		  
}		
}}
else
die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  
}
else
die("<font color='red' size='5'>ኮኔክሽን የለም: </font>".mysqli_error($connection));
 
mysqli_close($connection);//closing connection
  ?>	

</div></div></div></center></div>
  <div id="fotter">
<?php include("foot.php");?>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>