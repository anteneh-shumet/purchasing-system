<?php
session_start();
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
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
    color: red;
  }
.dropbtn1 {
    background-color: #424766;
    color: white;
    width:260px;
    height50px;
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
background-color:violet; font-weight: bold; color: white;
}
      
</style>
<title>home page</title>
<link  href="css/LoginPageStyle.css" rel="stylesheet" type="text/css"/>
<style>
#form{
background-color:#A3CEDC;
padding: 10px;
}</style>
</head>

<body bgcolor="#B0C4DE">

<?php
include("connection.php");
?>
<div id="divWrapper">
<center>
<div id="templatemo_wrapper">
<?php include("head2.php");
?>
<?php
include("adminmenu2.php");?>
</div>

<div id="templatemo_main">
    <div id="right">
  <button class="dropbtn1">አስተዳደር</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ሰራተኛ መዝግብ</a><br><hr><br>
<a href="createacount2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አካውንት ክፈት </a><br><hr><br>
<a href="registeringcolleges2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ኮሌጆችን መዝግብ </a><br><hr><br>
<a href="registeringdepartments2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ዲፓርትመንት መዝግብ</a><br><hr>
<br><a href="registeringoffices2.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ቢሮዎችን መዝግብ </a><hr>
  </div>
<div id="left">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <?php
include("sendaccount1.php");
?>
    </li>
<div>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
            $sql2="select * from account where status='inactive'";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){	  
echo "<table  border=1 cellpadding=10 id='tb'><tr><th>emp_id</th>";
echo "<th>username</th><th>role</th><th>status</th><th>action</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     echo "<tr><td>".$row['empl_id']."</td>";
echo "<td>".$row['username']."</td>";
	echo "<td>".$row['role']."</td>";
	echo "<td>".$row['status']."</td>";
		?>
     <script>
		var table=document.getElementById('tb');
		for(var i=1;i<table.rows.length;i++)
		{
			table.rows[i].onclick=function()
			{
				document.getElementById('empl_id').value=this.cells[0].innerHTML;
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
		
		echo'<form action="reactivateaccount2.php" method="POST">';
echo'<td><input type="submit" name="reactivate" value="reactivate"/></td><tr>';

	}
	
echo'<input type="hidden" name="empl_id" id="empl_id">';
echo'</form>';
	
	echo "</table>";
	}
	else
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 
 if(isset($_POST['reactivate']))
{
	$empl_id=$_POST['empl_id'];
	 
 $sql3=" update account set status='active' where empl_id='$empl_id'";  
              $result=mysqli_query($connection,$sql3) ;
          If($result){
           echo "አካውንቱ ስርቷል!";
		 }
		 else
           die("<font color='red' size='5'>አካውንቱ አልሰራም:font</>".mysqli_error($connection));  
}
  ?>

</div>
  </div></div></center></div>s
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
