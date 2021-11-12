<?php
session_start();
include("connection.php");
if(isset($_SESSION['adminusername'])&& isset($_SESSION['adminpassword']))
{	?>
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
    color: white;
  }
.dropbtn1 {
    background-color: #424766;
    color: white;
    width:260px;
    height60px;
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
</head>

<body bgcolor="#B0C4DE">

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
<?php
function restoreDatabaseTables($dbHost, $dbUsername, $dbPassword, $dbName, $filePath)
	{
    // Connect & select the database
    $db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 

    // Temporary variable, used to store current query
    $templine = '';
    
    // Read in entire file
    $lines = file($filePath);
    
    $error = '';
    
    // Loop through each line
    foreach ($lines as $line){
        // Skip it if it's a comment
        if(substr($line, 0, 2) == '--' || $line == ''){
            continue;
        }
        
        // Add this line to the current segment
        $templine .= $line;
        
        // If it has a semicolon at the end, it's the end of the query
        if (substr(trim($line), -1, 1) == ';'){
            // Perform the query
            if(!$db->query($templine)){
                $error .= 'Error performing query "<b>' . $templine . '</b>": ' . $db->error . '<br /><br />';
            }
            
            // Reset temp variable to empty
            $templine = '';
        }
    }
    return !empty($error)?$error:true;
 
}	
?>

  	



 
 <?php
 $domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="purchasi";
 $x=0;
mysql_connect($domain,$dbuser,$dbpass) or die(mysql_error());
if(mysql_select_db($dbname))
$x=1;
else
$x=2;
if($x==2)
{
	
mysql_query("create database purchasi") or die(mysql_error());
		echo "<font color='green' size='5'><br>Your Database is Successfully created </font>";
}else if($x==1)

{ 
$output = "C:/wamp/www/images/purchasi.sql";
$filePath  = 'C:/wamp/www/images/purchasi.sql';
$restore=restoreDatabaseTables($domain, $dbuser, $dbpass, $dbname, $filePath);
if($restore)
 echo"<font color='green' size='5'><br>Database Is restored Successfully </font>";
 else
 echo"<font color='red' size='5'><br>Database Is not restored Successfully </font>";
}




 ?>

</div></div></div></center></div>

<div id="fotter">
<?php include("footer.php");?>
</div>
</body>
</html>
<?php
}

	
else{
header("location:login.php");
}
?>

