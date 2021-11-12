
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
</div>
<div id="divNav">
<?php
include("supplier menu2.php");
?>
<div id="templatemo_main">


    <div id="right">
      
<button class="dropbtn1" font-size="200px">ተጫራች</button><br
<div class="dropdown-content1" style="down:0;">
<a href="registersupplierdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን ሙላ </a><br><hr><br>
<a href="modifyyourdetail2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;መረጃህን አስተካክል </a><br><hr><br>
<a href="viewbidresult2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረቻ ውጤት እይ </a><br><hr><br>
<a href="viewtendernotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ማስታዎቂያ እይ </a><br><hr><br>
<a href="supplieraccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት አሻሽል </a><br><hr>
</div>
<td><div id="divContentCenter">
<div>
<h2>የጨረታ ሰነዱን አውርድ እና እይ </h2>
 <table width="2%" id='tb' border="1" cellpadding="25">
 <thead>
 <tr>
 <th>id</th>
  
	<th>date</th>
		
   <th>document</th>
    <th>download document</th>
 </tr>
 </thead>
 <?php
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"purchasi");
 $query="select *from document";
 $query_run=mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($query_run))
 {
	
	echo "<tr><td>".$row['document_id']."</td>";
	echo "<td>".$row['uploaded_date']."</td>";
	?>
	
        <td><?php echo $row[2]; ?></td>
    <td> <?php  echo"<a href='../images/$row[2]'>download</a>";?></td><?php
		
        echo"</tr>";
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
 }?> </table></div></div></td></div></div></center></div>
 <div id="fotter">
<div id="divFooter">
<?php include("foot.php");?>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>