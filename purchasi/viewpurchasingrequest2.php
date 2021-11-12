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
<style type="text/css">
  #t{
    width: 40px;

  }
</style>
<body bgcolor="#B0C4DE">
<div id="divWrapper">
<center>

<div id="templatemo_wrapper">
<?php include("head2.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">


  <li><a href="help.php">አጋዥ</a></li>
<li><a href="#">ዘገባ</a><ul class="b">
<li><a href="report2.php">ተቀባይነት ያገኙ ጥያቄዎች</a></li>
<li><a href="reports2.php">የገንዘብ መጠን</a></li></ul></li>
  <li><a href="logoutt6.php">ውጣ</a></li>
  </ul></div></div>
<div id="templatemo_main">

<div id="right">
  
      <button class="dropbtn1" style="color:white;">ግዥ ዳይሬክቶሬት</button><br><br
  <div class="dropdown-content1" style="down:0;"><hr>
 <a href="viewpurchasingrequest2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የግዥ ጥያቄ እይ</a><br><hr><br>
 <a href="viewmodel192.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሞዴል 19 እይ</a><br><hr><br>
<a href="postnotice2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ማስታዎቂያ ለጥፍ</a><br><hr><br>
<a href="viewwinner2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አሸናፊውን እይ</a><br><hr><br>
<a href="resetpurchasingdirectorateaccount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንትዎን ያሻሽሉ</a><br>
 </div>
<div id="left"><h2>ከኮሌጅ እና ከአገልግሎት መስጫ ክፍሎች የተላኩ የግዥ ጥያቄዎች</h2>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
            $sql2="select * from request where sent_from='technical room'and status='send' || sent_from='college_director'and status='send' ";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){
echo "<table border=1 id='tb' cellpadding=1><tr><th>የጥያቄ ቁጥር</th>";
echo "<th>እቃ</th><th>ብዛት</th><th>ሞዴል</th><th>የታዘዘበት ቀን</th><th> ቢሮ</th><th>ደፓርትመንት</th><th>የተለከው</th><th>አስተናግድ</th><th>አጥፋ</th></tr>" ;
	While($row=mysqli_fetch_array($result))
  {     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
  echo "<td>".$row['item_quantity']."</td>";
  echo "<td>".$row['specification']."</td>";
    echo "<td>".$row['order_date']."</td>";
    echo "<td>".$row['officce_id']."</td>";
    echo "<td>".$row['dept_name']."</td>";
        echo "<td>".$row['sent_from']."</td>";    ?>
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
    
    echo'<form action="viewpurchasingrequest2.php" method="POST">';
echo'<td><input id="t" type="submit" name="send" value="ላክ"/></td>';
echo'<td><input id="t" type="submit" name="delete" value="አጥፋ"/></td><tr>';

  }
  
echo'<input type="hidden" name="request_no" id="request_no">';
echo'</form>';
  
  echo "</table>";
  }else
           die("<font color='red' size='5'>Record Not Selected: </font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>ዳታቤዝ አልተመረጠም: </font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል: </font>".mysqli_error($connection));
 }
 
 if(isset($_POST['send']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" UPDATE request set sent_from='purchasing_director' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>ጥያቄው በትክክል ተልኳል!</font>";
     }
     else
           die("<font color='red' size='5'>ጥያቄው አልተላከም:</font>".mysqli_error($connection));  
}
 if(isset($_POST['delete']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" update request set status='deleted' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>ጥያቄው ጠፍቷል!</font>";
     }
     else
           die("<font color='red' size='3'>ጥያቄው አልጠፋም:</font>".mysqli_error($connection));  
}?>
</div></div></div></center></div>
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