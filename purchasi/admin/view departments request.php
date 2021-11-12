<?php
session_start();
if(isset($_SESSION['susername'])&& isset($_SESSION['spassword']))
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
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:#B7E2F0; font-weight: bold; color: #0000FF;
}
</style>
<title>home page</title>
<link  href="css/mystyle.css" rel="stylesheet" type="text/css"/>
</head>

<body bgcolor="#B0C4DE">
<div id="divWrapper">
<center>

<table border=0>
<tr><td colspan=6>
<div id="divheader">
<?php include("header.php");
?>
</div>
<div id="divNav">
<ul>
	<li><a href="index.php">Home</a></li>
	<li><a href="help.php">help</a></li>
	<li><a href="logout3.php">logout</a></li>
	</ul><br>
<?php
require("date_time.php");
?>
</div>
</td>
</tr>
<tr><td colspan=6>&nbsp;</td></tr>
<tr><td>
<div id="divSideContentLeft">
<div class="dropdown1" style="float:left;">
  	<button class="dropbtn1" font-size="200px">School Dean</button><br><br
  <div class="dropdown-content1" style="down:0;">
<a href="request purchasing.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;request purchasing </a><br><br><hr>
 <a href="fill withdraw form.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register model20 </a><br><br><hr>
  <a href="view purchasing directorate notices.php"> &nbsp;&nbsp;&nbsp;&nbsp;view directorate notices </a><br><br><hr>
	<a href="view departments request.php">&nbsp;&nbsp; view departments request </a><br><br><hr><br>
 <a href="school dean account.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; update your account </a>	   
  </div>
</div>
</td>
<!--td><b><font color="green"><h1>Wellcome to home page</h1></font></b></td-->

<td>&nbsp;</td><td><div id="divContentCenter">
<br>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasing");
		If($sql){
             $sql2="select * from request where sent_from='department head'";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table border=1 id='tb' cellpadding=5><tr><th>id</th>";
echo "<th>item</th><th>quantity</th><th>model</th><th>order-date</th><th> office</th><th>college</th><th>department</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     echo "<tr><td>".$row['request_no']."</td>";
echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_quantity']."</td>";
	echo "<td>".$row['specification']."</td>";
		echo "<td>".$row['order_date']."</td>";
		echo "<td>".$row['officce_id']."</td>";
		echo "<td>".$row['colleg_name']."</td>";
		echo "<td>".$row['dept_name']."</td></tr>";
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
           die("Record Not Selected:".mysqli_error($connection));  
       }  else
                       die("Database not selected:".mysqli_error($connection));  
                    }else{
       die("Connection Failed:".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


  ?>


</div>
  </p> </td></div>

</div>
</tr>

<tr><td colspan=6>
<div id="divFooter"><br>
<?php include("footer.php");?>
</div></td></tr>
</center>
</div></table>
</body>
</html>
<?php
}
else
header("location:login.php");

?>
