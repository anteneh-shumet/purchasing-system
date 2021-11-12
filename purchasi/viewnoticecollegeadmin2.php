<?php
session_start();
if(isset($_SESSION['cusername'])&& isset($_SESSION['cpassword']))
{	
?>
<html>
<body>
<head>
<style>
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
</style>
<title>home page</title>
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>

<body bgcolor="#B0C4DE">
 <div id="templatemo_wrapper">
<?php include("head2.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">
  <li><a href="help.php">አጋዥ</a></li>
  <li><a href="logoutt4.php">ውጣ</a></li></ul>
</div>
</div>
<div id="templatemo_main">

<div id="right">
  
    <center><button class="dropbtn1" font-size="200px">ኮሌጅ አድሚንስትሬተር</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ግዥ ትአዛዝ </a><br><hr><br>
 <a href="regmodel202.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮድ 10ን መዝግብ </a><br><hr><br>
  <a href="viewnoticecollegeadmin2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዳይሬክቶሬቱን ማስታዎቂያ እይ </a><br><hr><br>
    <a href="departmentrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዲፓርትመንት ጥያቄ እዩ </a><br><hr><br>
 <a href="collegeupdateaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><br><hr>    
  </div>
 <div id="left"><center>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<h2>የዳይሬክቶሬቱን ማስታዎቂያ </h2><br>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from notice where end_date>=now();";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table cellpadding=20 border=1 id='tb'><tr><th>የማስታዎቂያ መለያ</th>";
echo "<th>ርእስ</th><th>ዝርዝር</th><th>መነሻ ቀን</th><th>መጨረሻ ቀን</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     
   echo "<tr><td>".$row['notice_id']."</td>";
  echo "<td>".$row['subject']."</td>";
  echo "<td>".$row['content']."</td>";
  echo "<td>".$row['start_date']."</td>";
  echo "<td>".$row['end_date']."</td></tr>";
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
           die("<font color='red' size='5'>Record Not Selected: </font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል: </font>".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


  ?>
</center></div></div>
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