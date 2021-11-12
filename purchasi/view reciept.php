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
<div id="left"><h2>download and view payment reciept </h2><br>
 <table width="2%" id='tb' border="1" cellpadding="35">
 <thead>
 <tr>
 <th>id</th>
   <th>reciept</th>
    <th>download</th>
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
    <td> <?php  echo"<a href='../images/$row[1]' style='border:1px solid;background:#cc3333;'>download</a>";?></td><?php
		
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
<?php include("footer.php");?>
</div>
</body>
</html>
<?php
}
else
header("location:login.php");

?>