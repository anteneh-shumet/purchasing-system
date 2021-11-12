<?php
session_start();
if(isset($_SESSION['iusername'])&& isset($_SESSION['ipassword']))
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
    ?><div  id="toptabmenu">
         <ul class="a" style="float: right;">
  <li><a href="help.php">help</a></li>
  <li><a href="logout13.php">logout</a></li>
  </ul></div></div>
<div id="templatemo_main">

    <div id="right">
     
    <button class="dropbtn1" >Inventory </button><br
  <div class="dropdown-content1"> 
 <a href="registermodel19.php"> &nbsp;&nbsp;&nbsp;register model19</a><br><hr><br>
  <a href="view model 20.php"> &nbsp;&nbsp;&nbsp;view model20</a><br><hr><br>
    <a href="modify model 19.php"> &nbsp;&nbsp;&nbsp;&nbsp;modify model19</a><br><hr><br>
 <a href="registermodel22.php"> &nbsp;&nbsp;&nbsp;&nbsp;register model22</a><br><hr><br>
 <a href="inventorypurchaseditem.php"> &nbsp;view purchased product</a><br><hr><br>
   <a href="inventoryaccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><br>
  </div>

<div id="left"><div><h2>purchased items in inventory</h2><br>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from model19";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb' cellpadding=25><tr>";
echo "<th>item name</th><th>model</th><th>quantity</th><th>unit price</th><th>total price</th></tr>";
	While($row=mysqli_fetch_array($result))
	{     
echo "<tr><td>".$row['item_type']."</td>";
echo "<td>".$row['model']."</td>";
	echo "<td>".$row['quantity']."</td>";
	echo "<td>".$row['unit_price']."</td>";
		echo "<td>".$row['total_price']."</td></tr>";
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
		
	}
	echo "</table>";
	}else
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


  ?>



    </div></div></div></center></div>
  <div id="fotter">
<?php include("footer.php");?></div>
</body>
</html>
<?php
}
else
header("location:login.php");

?>