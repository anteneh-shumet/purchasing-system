<?php
session_start();
if(isset($_SESSION['apusername'])&& isset($_SESSION['appassword']))
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
#a{
color:red;  
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

<div  id="toptabmenu">
     <ul class="a" style="float: right;">

    <li><a href="help.php">አጋዥ</a></li>
  <li><a href="logoutt7.php">ውጣ</a></li>
    </ul></div>
<div id="templatemo_main">

<div id="right">
  
<button class="dropbtn1" font-size="200px"> ገምጋሚ ቡድን</button><br><br
<div class="dropdown-content1" style="down:0;"><br>
<a href="approverequest2.php"> &nbsp;&nbsp;&nbsp;&nbsp;ጥያቄዎችን አጽድቅ/ጣል</a><br><hr><br> 
<a href="viewtenderresult2.php">&nbsp;&nbsp;&nbsp;&nbsp;የጨረታ ውጤት እይ </a><br><hr><br>
<a href="viewapprovedrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;የጸደቁ ጥያቄዎችን እይ

</a><br><hr>
     <a href="approvalcommiteaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp; አካውንት አሻሽል</a>
  </div>

<div id="left"><h2>የጸደቁ ጥያቄዎች ዝርዝር</h2>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from request where status='approved'";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb'><tr><th>መለያ</th>";
echo "<th>እቃ</th><th>ሞዴል</th><th>ብዛት</th><th> ቢሮ</th><th>ኮሌጅ</th><th>ደፓርትመንት</th><th>የታዘዘበት ቀን</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['specification']."</td>";
		echo "<td>".$row['item_quantity']."</td>";
		echo "<td>".$row['officce_id']."</td>";
		echo "<td>".$row['colleg_name']."</td>";
		echo "<td>".$row['dept_name']."</td>";
				echo "<td>".$row['order_date']."</td>";
		
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
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  
}
else{
die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል:</font>".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


  ?>


</div></div></div></div></center></div>
  
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