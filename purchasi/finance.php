
<html></html></head>
<style>
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:#B7E2F0; font-weight: bold; color: #0000FF;
}
</style>
</head>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;General annual reports</h2>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $result= mysqli_query($connection,"SELECT SUM(total_price) AS totalsum FROM model19");

$row = mysqli_fetch_assoc($result); 

$sum = $row['totalsum'];

echo ("the over all calculated budget to purchase different requests in this year is about: $sum birr only");
echo'<br><br>';
$result= mysqli_query($connection,"SELECT SUM(quantity) AS total FROM model19");

$row = mysqli_fetch_assoc($result); 

$sum = $row['total'];

echo ("total number of items that are purchased are: $sum only");


       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }
					else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

