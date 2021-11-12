<?php
session_start();
if(isset($_SESSION['pusername'])&& isset($_SESSION['ppassword']))
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
<div  id="toptabmenu">
     <ul class="a" style="float: right;">


  <li><a href="help.php">help</a></li>
<li><a href="#">report</a><ul class="b">
<li><a href="report.php">accepted requests</a></li>
<li><a href="reports.php">finance revenue</a></li></ul></li>
  <li><a href="logout6.php">logout</a></li>
  </ul></div></div>
<div id="templatemo_main">

<div id="right">
 
      <button class="dropbtn1" style="color:white;">purchasing_directorate</button><br><br
  <div class="dropdown-content1" style="down:0;"><hr>
 <a href="viewpurchasingrequest.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view purchasing request</a><br><hr><br>
 <a href="viewmodel19.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view model 19 </a><br><hr><br>
<a href="postnotice.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;post notice</a><br><hr><br>
<a href="viewwinner.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view winner</a><br><hr><br>
<a href="resetpurchasingdirectorateaccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><br>
 </div>
<div id="left"><h2>
purchased items that are stored in inventory</h2>
<div>



<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from model19";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb' cellpadding=8><tr>";
echo "<th>reciept no</th> <th>deliverer</th> <th>recipient</th><th>item type</th> <th>model</th> <th>quantity</th><th>unit price</th><th>total price</th></tr>";
	While($row=mysqli_fetch_array($result))
	{   echo "<tr><td>".$row['recieving_reciept_no']."</td>";
        echo "<td>".$row['deliverer']."</td>";
	    echo "<td>".$row['reciepant']."</td>";
		echo "<td>".$row['item_type']."</td>";
		echo "<td>".$row['model']."</td>";
		echo "<td>".$row['quantity']."</td>";
		echo "<td>".$row['unit_price']."</td>";
		echo "<td>".$row['total_price']."</td></tr>";
	}
	echo "</table>";
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
		  
	}else
           die("<font color='red' size='4'><i>Record Not Selected:</i></font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='4'><i>Database not selected:</font></i>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='4'><i>Connection Failed:</i></font>".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


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