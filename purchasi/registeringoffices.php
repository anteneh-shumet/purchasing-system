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
    color: pink;
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
</style>
<title>home page</title>

<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
<style>
#form{
padding: 10px;
}</style>
</head>

<body bgcolor="#B0C4DE">
<script type="text/javascript">




</script>


<div id="divWrapper">
<center>
 <div id="templatemo_wrapper">
<?php include("head.php");
?>

<?php
include("adminmenu.php");
?>
</div>
<div id="templatemo_main">

<div id="right">
    
<button class="dropbtn1">adminstrator</button><br
  <div class="dropdown-content1"  style="down:0;"><br>
  <a href="registeringemployee.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register employe</a><br><hr><br>
<a href="createacount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;create account </a><br><hr><br>
<a href="registeringcolleges.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering colleges </a><br><hr><br>
<a href="registeringdepartments.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;register department </a><br><hr><br>
<a href="registeringoffices.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;registering offices </a><hr>
  </div>

<div id="left">
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="https://www.gmail.com/" target='blank'>
        <h>click here to send user accounts via gmail</h>
		   
        </a>
<div>
<form   id="form"action="registeringoffices.php"  method="post">
<h2 class="style12">
       <center>office registering form</center></h2><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;office_id:<input type="text" name="office_id" pattern="[0-9a-zA-Z]+" required/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;college name:<select name="colege_name"required="true"  pattern="[A-Z a-z]+" ><br>
<option>choose</option>
<option value="technology">technology</option>
<option value="business and economics">business and economics</option>
<option value="medicine">medicine</option>
<option value="social science and humanities">social science and humanities</option>
<option value="agriculture">agriculture</option>
<option value="computational science">computational science</option>
<option value="behaivoral">behaivoral</option>
</select><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;department name:<select name="department_name"required="true"  pattern="[A-Z a-z]+" ><br>
					<option>choose</option>
<option value="it">it</option>
<option value="software enginering">software enginering</option>
<option value="mechanical enginering">mechanical enginering</option>
<option value="civil enginering"> civil enginering</option>
<option value="construction enginering">construction enginering </option>
<option value="electrical enginering">electrical enginering</option>
<option value="haydrualic enginering">haydrualic enginering </option>
<option value="accounting">accounting</option>
<option value="management">management</option>
<option value="banking">banking</option>
<option value="economics">economics</option>
<option value="psycology">psycology</option>
<option value="journalism">journalism</option>
<option value="art">art</option>
<option value="physics">physics</option>
<option value="maths">maths</option>
<option value="chemistry">chemistry</option>
<option value="biology">biology</option>
<option value="english">english</option>
<option value="sport">sport</option>
<option value="civics">civics</option>
<option value="biotechnology">biotechnology</option>
<option value="midwifery">midwifery</option>
<option value="nursing">nursing</option>
<option value="law">law</option>
<option value="public health officer">public health officer</option>
</select><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="register" >register</button>
<button type="reset" name="reset">reset</button>

</form>
<?php
		
if(isset($_POST['register']))
{
  $office_id=$_POST['office_id'];
    $college_name=$_POST['colege_name'];
    $department_name=$_POST['department_name'];
    $connection=mysqli_connect("localhost", "root", "");
If($connection){
    $sql=mysqli_select_db($connection,"purchasi");
    If($sql){

  if((((((($department_name=="it" && $college_name=="technology")||($department_name=="software enginering" && $college_name=="technology")||($department_name=="civil enginering" && $college_name=="technology")||($department_name=="electrical enginering" && $college_name=="technology")
    ||($department_name=="haydrualic enginering" && $college_name=="technology")||($department_name=="mechanical enginering" && $college_name=="technology")||($department_name=="construction enginering" && $college_name=="technology")) || 
  ($department_name=="management" && $college_name=="business and economics")||($department_name=="accounting" && $college_name=="business and economics")||($department_name=="economics" && $college_name=="business and economics")||($department_name=="banking" && $college_name=="business and economics"))
  || ($department_name=="physics" && $college_name=="computational science")||($department_name=="english" && $college_name=="computational science")||($department_name=="chemistry" && $college_name=="computational science")||($department_name=="maths" && $college_name=="computational science")||($department_name=="sport" && $college_name=="computational science")||($department_name=="civics" && $college_name=="computational science")||($department_name=="biology" && $college_name=="computational science")||($department_name=="biotechnology" && $college_name=="computational science"))
  ||($department_name=="midwifery" && $college_name=="medicine")||($department_name=="nursing" && $college_name=="medicine")||($department_name=="public health officer" && $college_name=="medicine"))|| ($department_name=="law" && $college_name=="social science and humanities")|| ($department_name=="art" && $college_name=="social science and humanities")||($department_name=="journalism" && $college_name=="social science and humanities"))|| ($department_name=="psycology" && $college_name=="behaivoral"))
    {
$sql2="INSERT INTO offices(office_id,colege_name,department_name) VALUES('$office_id','$college_name', '$department_name')";                            
$result=mysqli_query($connection,$sql2) ;
If($result){
			echo "<font color='green' size='5'>office is registered successfully!</font>";
		}}
		else{
 echo "<font color='red' size='5'>college and departments do not matched </font>";
		}} else
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  

}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection

}
?>
</div></div></div></center>
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