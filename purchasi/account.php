
<?php
$con=mysqli_connect("localhost","root","","purchasi");
if(!$con){
die("<font color='red' size='5'>connection failed</font>".mysqli_connect_error());
}
	if(isset($_POST['submit'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$role=$_POST['role'];
	
	$sql="INSERT INTO account (username,password,role) VALUES('$username','$password','$role')";
	if(mysqli_query($con,$sql)){
	echo "<font color='green' size='5'>data inserted </font>";}
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
username
<input type ="text"name="username"><br>
password:
<input type ="password"name="password"><br>
role:
<input type ="text"name="role"><br>
<input type="submit"name="submit"value="create">
</form>
</body>
</html>