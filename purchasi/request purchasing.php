<?php
session_start();
include("connection.php");
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
</style>
<title>home page</title>
<link  href="css/mystyle.css" rel="stylesheet" type="text/css"/>
<style>
#form{
background-color:#A3CEDC;
padding: 10px;
}</style>
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
<form id="form"action="request purchasing.php" method="post" form name="f1" align="center">
<fieldset>
<legend align="center">purchasing request submission form</legend>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item_type:<input type="text" name="item_type" placeholder="enter item type"pattern="[a-zA-Z0-9]+" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;status:<select name="sent_from"required="true"  style="width:33%;" pattern="[A-Z a-z]+" >
<option value="school dean">school dean</option>
</select><br>
&nbsp;&nbsp;specification:<input type="text" name="specification" placeholder="enter  items specification"pattern="[a-zA-Z0-9]+" required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;office_id:<input type="text" name="officce_id" placeholder="enter office number" style="width:33%;" pattern="[a-zA-Z0-9]+" required /><br>
item_quantity:<input type="text" name="item_quantity" placeholder="enter item quantity"pattern="[0-9]+" required />
&nbsp;&nbsp;&nbsp;dept name:<select name="dept_name"required="true" style="width:33%;" pattern="[A-Z a-z]+" ><br>
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
<option value="animal science">animal science</option>
<option value="plant science">plant science</option>
<option value="agro economics">agro economics</option>
<option value="rural development">rural development</option>
<option value="public health officer">public health officer</option>
</select><br>	
&nbsp;&nbsp;&nbsp;&nbsp;order_date:<input type="date" name="order_date" value="<?php echo date('Y-m-d');?>" required />
&nbsp;college name:<select name="colleg_name"required="true"  pattern="[A-Z a-z]+" ><br>
					<option>choose</option>
<option value="technology">technology</option>
<option value="business and economics">business and economics</option>
<option value="medicine">medicine</option>
<option value="social science and humanities">social science and humanities</option>
<option value="agriculture">agriculture</option>
<option value="computational science">computational science</option>
<option value="behaivoral">behaivoral</option>
</select><br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="insert" value="request"/>
<input type="reset" name="reset" value="reset"/>
</fieldset>
</form>
<?php
		
if(isset($_POST['insert']))
{
		$item_type=$_POST['item_type'];
		$specification=$_POST['specification'];
		$office_id=$_POST['officce_id'];
		$college_name=$_POST['colleg_name'];
		$department_name=$_POST['dept_name'];
		$item_quantity=$_POST['item_quantity'];
		$order_date=$_POST['order_date'];
		$sent_from=$_POST['sent_from'];
	// Make a MySQL Connection
		$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasing");
		If($sql){
	 //validating from the inventory
$sql1="select * from model19 where  item_type='$item_type'";
		$matchfound=mysqli_query($con,$sql1);
		$res=mysqli_num_rows($matchfound);	
		While($row=mysqli_fetch_array($matchfound))
		{
		   $item_nam=$row['item_type'];
	   
		   $item_quant=$row['quantity'];
		    
		   $item_mod=$row['model'];
		  
		}
		
	$sql2="select * from notice";
		$matchfound1=mysqli_query($con,$sql2);
		While($row=mysqli_fetch_array($matchfound1))
		{
		   $s=$row['start_date'];
	   
		   $e=$row['end_date'];
		}	
		
		
		if(($order_date>=$s) && $order_date<=$e)
		
		{
if(($res<1)||($item_nam=="$item_type" && $item_quant<"$item_quantity" && $item_mod=="$specification")||($item_nam!="$item_type")|| ($item_mod!="$specification"))
{
	if((((((((((($department_name=="it" && $college_name=="technology")||($department_name=="software enginering" && $college_name=="technology")||($department_name=="civil enginering" && $college_name=="technology")||($department_name=="electrical enginering" && $college_name=="technology")
		||($department_name=="haydrualic enginering" && $college_name=="technology")||($department_name=="mechanical enginering" && $college_name=="technology")||($department_name=="construction enginering" && $college_name=="technology")) || 
	($department_name=="management" && $college_name=="business and economics")||($department_name=="accounting" && $college_name=="business and economics")||($department_name=="economics" && $college_name=="business and economics")||($department_name=="banking" && $college_name=="business and economics"))
	|| ($department_name=="physics" && $college_name=="computational science")||($department_name=="english" && $college_name=="computational science")||($department_name=="chemistry" && $college_name=="computational science")||($department_name=="maths" && $college_name=="computational science")||($department_name=="sport" && $college_name=="computational science")||($department_name=="civics" && $college_name=="computational science")||($department_name=="biology" && $college_name=="computational science")||($department_name=="biotechnology" && $college_name=="computational science"))
	||($department_name=="midwifery" && $college_name=="medicine")||($department_name=="nursing" && $college_name=="medicine")||($department_name=="public health officer" && $college_name=="medicine"))|| ($department_name=="law" && $college_name=="social science and humanities")|| ($department_name=="art" && $college_name=="social science and humanities")||($department_name=="journalism" && $college_name=="social science and humanities"))|| ($department_name=="psycology" && $college_name=="behaivoral"))
	||($department_name=="plant science" && $college_name=="agriculture"))||($department_name=="animal science" && $college_name=="agriculture"))||($department_name=="agro economics" && $college_name=="agriculture"))||($department_name=="rural development" && $college_name=="agriculture"))
	{
$sql2="INSERT INTO request(item_type,item_quantity,specification,order_date,officce_id,colleg_name,dept_name,sent_from) VALUES('$item_type','$item_quantity','$specification',now(
),'$office_id','$college_name','$department_name','$sent_from')";                            
$result=mysqli_query($connection,$sql2) ;
If($result)
			echo "<font color='green' size='5'>purchasing request is submitted! </font>";
		
		}
		else
		{
		echo "<font color='red' size='5'>purchasing request is not submited! </font>".mysqli_error($connection);
}
		}	
else
{
		echo "<font color='red' size='5'>This item is already present in the inventory department with sufficient amount </font>";}}
		
		else
			echo "<font color='red' size='5'>submission date is passed </font>";
		}else{
die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  

		}}else{
 die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
}
mysqli_close($connection);//closing connection
}

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
