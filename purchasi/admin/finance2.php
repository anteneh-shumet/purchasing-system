
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
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;አጠቃላይ የአመቱ ጥንቅር</h2>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $result= mysqli_query($connection,"SELECT SUM(total_price) AS totalsum FROM model19");

$row = mysqli_fetch_assoc($result); 

$sum = $row['totalsum'];

echo ("በዚህ አመት የተለያዩ እቃዎችን ለመግዛት የተበጀተው ገንዘብ: $sum birr only");
echo'<br><br>';
$result= mysqli_query($connection,"SELECT SUM(quantity) AS total FROM model19");

$row = mysqli_fetch_assoc($result); 

$sum = $row['total'];

echo ("የተገዙት እቃዎች ብዛት: $sum only");


       }  else
                       die("ዳታበዝ አልተመረጠም:".mysqli_error($connection));  
                    }
					else{
       die("ኮኔክሽን ተቋርጧል:".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

