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
  <li><a href="logoutt4.php">ውጣ</a></li>
  </ul>
</div>
</div>
<div id="templatemo_main">

<div id="right">
  
    <center><button class="dropbtn1" font-size="200px">ኮሌጅ አድሚንስትሬተር</button></center><br
  <div class="dropdown-content1" style="down:0;"><hr>
<a href="purchaserequest2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ግዥ ትአዛዝ </a><br><hr><br><br>
 <a href="regmodel202.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮድ 10ን መዝግብ </a><br><hr><br>
  <a href="viewnoticecollegeadmin2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዳይሬክቶሬቱን ማስታዎቂያ እይ </a><br><hr><br>
    <a href="departmentrequests2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የዲፓርትመንት ጥያቄ እዩ </a><br><hr><br>
 <a href="collegeupdateaccount2.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><br><hr>   
  </div> 
 <div id="left"><center>
<h2>የዲፓርትመንት  የግዥ ጥያቄ </h2><br>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from request where sent_from='school dean' || sent_from='department head' ";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb'><tr><th>የጥያቄ-ቁጥር</th>";
echo "<th>እቃ</th><th>ብዛት</th><th>ሞዴል</th><th>የታዘዘበት ቀን</th><th> ቢሮ</th><th>ኮሌጅ</th><th>ዲፓርትመንት</th></tr>" ;
	While($row=mysqli_fetch_array($result))
  {     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
  echo "<td>".$row['item_quantity']."</td>";
  echo "<td>".$row['specification']."</td>";
    echo "<td>".$row['order_date']."</td>";
    echo "<td>".$row['officce_id']."</td>";
    echo "<td>".$row['colleg_name']."</td>";
    echo "<td>".$row['dept_name']."</td>";
        ?>
<script>
    var table=document.getElementById('tb');
    for(var i=1;i<table.rows.length;i++)
    {
      table.rows[i].onclick=function()
      {
        document.getElementById('request_no').value=this.cells[0].innerHTML;
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
    
    </td>
    <?php
    
    echo'<form action="departmentrequests.php" method="POST">';
echo'<td><input type="submit" name="send" value="ላክ"/></td>';
echo'<td><input type="submit" name="delete" value="አጥፋ"/></td><tr>';

  }
  
echo'<input type="hidden" name="request_no" id="request_no">';
echo'</form>';
  
  echo "</table>";
  }else
           die("Record Not Selected:".mysqli_error($connection));  
       }  else
                       die("Database not selected:".mysqli_error($connection));  
                    }else{
       die("Connection Failed:".mysqli_error($connection));
 }
 
 if(isset($_POST['send']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" UPDATE request set sent_from='college_director' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo " <font color='#00b300' size='3'>ትእዛዙ በትክክል ተልኳል!</font>";
     }
     else
           die("<font color='red' size='3'>ትእዛዙ አልተላከም:</font>".mysqli_error($connection));  
}
 if(isset($_POST['delete']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" update request set status='deleted' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='#00b300' size='3'>ትእዛዙ ጠፍቷል!</font>";
     }
     else
           die("<font color='red' size='3'>ትእዛዙ አልጠፋም</font>:".mysqli_error($connection));  
}
  ?>

</div></center></div></div>
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