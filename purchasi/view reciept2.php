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
   <a href="viewwinners2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኧሸናፊውን እይ </a><br><hr><br>
   <a href="purchasingteamaccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><hr>
  </div>
<div id="left"><h2>የተከፈለበትን ደረሰኝ አውርድና እይ</h2><br>
 <table width="2%" id='tb' border="1" cellpadding="35">
 <thead>
 <tr>
 <th>መለያ</th>
   <th>ደረሰኝ</th>
    <th>አውርድ</th>
 </tr>
 </thead>
 <?php
 $connection=mysqli_connect("localhost","root","");
 $db=mysqli_select_db($connection,"purchasi");
 $query="select *from payment";
 $query_run=mysqli_query($connection,$query);
 while($row=mysqli_fetch_array($query_run))
 {
	
	echo "<tr><td>".$row['payment_id']."</td>";
	?>
	
        <td><?php echo $row[1]; ?></td>
    <td> <?php  echo"<a href='../images/$row[1]' style='border:1px solid;background:#cc3333;'>አውርድ</a>";?></td><?php
		
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
 }?>



	 
 </table></div></div></center></div>
 
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