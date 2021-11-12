
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
<link  href="css/LoginPageStyle.css" rel="stylesheet" type="text/css"/>
<style>
#email_form{
background-color:#A3CEDC;
padding: 10px;
}</style>
</head>

<body bgcolor="#B0C4DE">
<script type="text/javascript">

function validate(form_id,email)
{
var reg=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
var adress=document.forms[form_id].elements[email].value;	
	if(reg.test(adress)==false)
	{
	alert('please enter a valid email-address');	
	document.forms[form_id].elements[email].focus();
	return false;
	}
	
}



</script>
<div id="divWrapper">
<center>
<div id="templatemo_wrapper">
<?php include("list.php");?>
      
    </div>
     <div id="templatemo_main">
         <div id="sidecon">
       <div id="left">
<h2>register your detail and send to purchasing team</h2>
<div>
<form  id="email_form" action="registersupplierdetail.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post">
supplier_id<input type="text" name="id" id="acID" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quantity:<input type="text" name="quantity" pattern="[0-9]+" required/><br>
supfname<input type="text" name="supplier_fname" id="acID" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;unit_price:<input type="text" name="unit_price" pattern="[0-9]+" required/><br>
suplname<input type="text" name="supplier_lname" id="BdID" />&nbsp;&nbsp;&nbsp;vat-number:<input  type="text" name="vat_registration_number"required="" /><br>
supplier_sex<input type="radio" name="supplier_sex" value="male"/> Male
<input type="radio" name="supplier_sex"  value="female"/> Female 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;date:<input type="date" name="registereddate" value="<?php echo date('Y-m-d');?>"/><br>
Phone:<input type="text" name="supplier_phone" pattern="[09]{2}[0-9]{8}" required id="phone" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tin number<input type="file" name="tin_number" id="file" placeholder="file"/><br>
Email:<input type="text" id="email" name="email" required=""  />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;trade license:<input type="file" name="trade_license" id="trade_license"><br>
item_type:<input type="text" name="item_type" pattern="[A-Za-z]+"  required/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;item_model:<input type="text" name="item_model" pattern="[0-9A-Za-z]+" required/><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="apply" name="app" />
<input type="reset" >

</form>

<?php
if(isset($_POST['app']))
{
	include("connection.php");
	
	$supfname=$_POST['supplier_fname'];
	$suplname=$_POST['supplier_lname'];;
	$supplier_sex=$_POST['supplier_sex'];
	$phone=$_POST['supplier_phone'];
	$email=$_POST['email'];
	$item_type=$_POST['item_type'];
	$item_model=$_POST['item_model'];
	$quantity=$_POST['quantity'];
	$unit_price=$_POST['unit_price'];
$total_price=$quantity * $unit_price;
$vat_registration_no=$_POST['vat_registration_number'];
$registereddate=$_POST['registereddate'];
	$image=($_FILES['tin_number']['name']);
	$images=($_FILES['trade_license']['name']);
	$status="";
	
	
						$target_dir ="../images/";
						$target_file = $target_dir . $_FILES["tin_number"]["name"];
						$target_files = $target_dir . $_FILES["trade_license"]["name"];
						if(move_uploaded_file($_FILES['tin_number']['tmp_name'],$target_file))
						{	
               if(move_uploaded_file($_FILES['trade_license']['tmp_name'],$target_files))
						{					
						//$target_path=$target_path.basename($_FILES['image']['name']);
						
		$sql2="select * from tender";
		$matchfound1=mysqli_query($con,$sql2);
		While($row=mysqli_fetch_array($matchfound1))
		{
		   $p=$row['posted_date'];
	   
		   $c=$row['closing_date'];
		}	
		
		
		if(($registereddate>=$p) && $registereddate<=$c)
		
		{
			
$mysql=mysqli_query($con,"insert into supplier values('$supfname','$suplname','$supplier_sex','$phone','$email','$item_type','$item_model','$quantity','$unit_price','$total_price','$image','$images','$vat_registration_no','$registereddate','$status')");
if($mysql)	
echo "<font color='red' size='5'>you have sucessfully apply for the tender </font>";	
			}
		else
			echo "<font color='red' size='5'>submission date is passed </font>";
						}}
		else 
		echo "<font color='red' size='5'>applying is Not successfull </font>".mysqli_error($con);
						 
					   
						
						
		
}
?>
</div></div></div></div></div></div></div></center></div>
<div id="fotter">
<?php include("foot.php");?>
</div>
    
    </div></body>
</html>
