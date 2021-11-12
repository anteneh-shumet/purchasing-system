
<?php
$con=mysqli_connect("localhost","root","","purchasi");
if(!$con){
die("connection failed".mysqli_connect_error());
}
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$role=$_POST['role'];
	
	$sql="INSERT INTO account (username,password,role) VALUES('$username','$password','$role')";
	if(mysqli_query($con,$sql)){
	echo "<font color='green' size='5'>data inserted</font>";}
	else{
	echo "<font color='red' size='5'>data not inserted</font>".$sql."<br>".mysqli_error($con);
	}
	}
//mysqli_close();
?>
<html>
<head>
</head><body>
<form method="post"action="#">
የተጠቃሚ_ስም:
<input type ="text"name="username"><br>
የይለፍ_ቃል:
<input type ="password"name="password"><br>
ሚና:
<input type ="text"name="role"><br>
<input type="submit"name="submit"value="create">
</form>
</body>
</html>