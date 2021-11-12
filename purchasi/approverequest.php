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
<?php include("head.php");
?>
<div  id="toptabmenu">
     <ul class="a" style="float: right;">

    <li><a href="help.php">help</a></li>
    <li><a href="logout7.php">logout</a></li>
    </ul></div>
<div id="templatemo_main">

<div id="right">
 
<button class="dropbtn1" font-size="200px"> Approvalcommitee</button><br><br
<div class="dropdown-content1" style="down:0;"><br>
<a href="approverequest.php"> &nbsp;&nbsp;&nbsp;&nbsp;approve/reject requests</a><br><hr><br>   
<a href="viewtenderresult.php">&nbsp;&nbsp;&nbsp;&nbsp;view tender result </a><br><hr><br>
<a href="viewapprovedrequests.php">&nbsp;&nbsp;&nbsp;&nbsp;view appproved requests
</a><br><hr><br>
       <a href="approvalcommiteaccount.php">&nbsp;&nbsp;&nbsp;&nbsp; update account</a>
  </div>

<div id="left"><div>
  <h2> approve or reject page</h2>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
            $sql2="select * from request where sent_from='purchasing_director'and status='send'";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){	  
echo "<table  border=1 cellpadding=4 id='tb'><tr><th>id</th>";
echo "<th>item</th><th>specification</th><th> quantity</th><th> office</th><th>college</th><th>department</th><th>action</th><th>reaction</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['specification']."</td>";
	echo "<td>".$row['item_quantity']."</td>";
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
		
		echo'<form action="approverequest.php" method="POST">';
echo'<td><input type="submit" name="approve" value="approve"/></td>';
echo'<td><input type="submit" name="reject" value="reject"/></td><tr>';

	}
	
echo'<input type="hidden" name="request_no" id="request_no">';
echo'</form>';
	
	echo "</table>";
	}
	else
           die("<font color='red' size='5'><font >Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }else{
       die("C<font color='red' size='5'>onnection Failed:</font>".mysqli_error($connection));
 }
 
 if(isset($_POST['approve']))
{
	$request_id=$_POST['request_no'];
	 
 $sql3=" update request set status='approved' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>request is approved successfully!</font>";}
		 else
           die("<font color='red' size='5'>request is not approved:</font>".mysqli_error($connection));  
}
 if(isset($_POST['reject']))
{
	$request_id=$_POST['request_no'];
	 
 $sql3=" update request set status='not approved' where request_no='$request_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "<font color='green' size='5'>request rejected successfully!</font>";
		 }
		 else
           die("<font color='red' size='5'>request is not rejected:</font>".mysqli_error($connection));  
}
  ?>
</div></div></div></div></center></div>
  
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