<?php
session_start();
if(isset($_SESSION['dusername'])&& isset($_SESSION['dpassword']))
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
  <li><a href="logout2.php">logout</a></li>
  </ul>
  </div></div>
<div id="templatemo_main">

<div id="right">
  
    <button class="dropbtn1" font-size="200px">department head</button><br
  <div class="dropdown-content1" style="down:0;">
<a href="purchasingrequest.php">&nbsp;&nbsp;&nbsp;request purchasing </a><br><hr><br>
 <a href="registermodel20.php">&nbsp;&nbsp; register model20 </a><br><hr><br>
  <a href="viewdirectoratenotices.php"> view directorate notices </a><br><hr><br>
    <a href="viewofficesrequest.php"> &nbsp;&nbsp;view offices request </a><br><hr><br>
 <a href="deptupdateaccount.php">&nbsp;&nbsp; update your account </a>

       
  </div>
<div id="left"><div>
  <h2>view office request</h2><br>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="SELECT * from request where sent_from='offices' and status='send'";                           
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb' cellpadding=5><tr><th>id</th>";
echo "<th>item</th><th>quantity</th><th>model</th><th>order-date</th><th> office</th><th>college</th><th>department</th><th>action</th><th>reaction</></tr>" ;
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
    
    echo'<form action="viewofficesrequest.php" method="POST">';
echo'<td><input type="submit" name="send" value="send"/></td>';
echo'<td><input type="submit" name="delete" value="delete"/></td><tr>';

  }
  
echo'<input type="hidden" name="request_no" id="request_no">';
echo'</form>';
  
  echo "</table>";
  }else
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 
 if(isset($_POST['send']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" UPDATE request set sent_from='department head'where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>request is send successfully!</font>";
     }
     else
           die("<font color='red' size='5'>request is not send:</font>".mysqli_error($connection));  
}
 if(isset($_POST['delete']))
{
  $request_id=$_POST['request_no'];
   
 $sql3=" update request set status='deleted' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='red' size='5'>ትእዛዙ ተዎግዷ!</font>";
     }
     else
           die("<font color='red' size='5'>ትእዛዙ አልተዎገደም:</font>".mysqli_error($connection));  
}
  ?>
</div></div></div></center></div>
  <div id="fotter">
<?php include("foot.php");?></div>
</body>
</html>
<?php
}
else
header("location:logina.php");

?>