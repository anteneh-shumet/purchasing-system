<?php
session_start();
if(isset($_SESSION['fusername'])&& isset($_SESSION['fpassword']))
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
<link rel="stylesheet" type="text/css" href="css/LoginPageStyle.css">
</head>

<body bgcolor="#B0C4DE">
<div id="divWrapper">
<center>
<div id="templatemo_wrapper">
<?php include("head.php");
?>

<div  id="toptabmenu">
     <ul class="a" style="float: right;">
    <li><a href="help.php">help</a></li>
    <li><a href="logout12.php">logout</a></li>
    </ul></div></div>
<div id="templatemo_main">

<div id="right">
  <center><canvas id="canvas" width="140" height="140">
</canvas>

<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'cyan';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, 'green');
  grad.addColorStop(0.5, 'yellow');
  grad.addColorStop(1, 'red');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = 'red';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>
</center>
  <button class="dropbtn1" font-size="200px">finance officer</button><br><br
  <div class="dropdown-content1" style="down:0;"><hr>
  <a href="financeofficerpurchaseditem.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view model19</a><br><hr>  
 <a href="viewtenderwinners.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; view tender result</a><br><hr>
  <a href="financeofficeraccount.php"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;update account</a><br><hr>
  </div>
<div id="left"><div>
<h2>Wellcome to finance officers  page</h4></b></h1>
<div>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			// when the minimum number of females is only one
$sql2="select *from supplier where status='accepted' && total_price =(SELECT MIN(total_price) 
FROM supplier where status='accepted') && supplier_sex='female'";
$result=mysqli_query($connection,$sql2);
$res=mysqli_num_rows($result);	
if($res>=1)
{	
echo "<table border=1 cellpadding=5 id='tb'><tr>";
echo "<th>id</th><th>fname</th><th>lname</th><th>sex</th><th>item</th><th>model</th><th>price</th><th>license</th><th>date</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{ 
echo "<tr>";
echo "<td>".$row['id']."</td>";
	echo "<td>".$row['supplier_fname']."</td>";
	echo "<td>".$row['supplier_lname']."</td>";
	echo "<td>".$row['supplier_sex']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_model']."</td>";
	echo "<td>".$row['total_price']."</td>";
		echo "<td>".$row['trade_license']."</td>";
			echo "<td>".$row['registereddate']."</td>";
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
		
	echo "</tr>";
			  }
	echo "</table>";
		  
}
else{
$sql3="select *from supplier where status='accepted' && total_price =(SELECT MIN(total_price) 
FROM supplier where status='accepted') && supplier_sex='male'";
$rest=mysqli_query($connection,$sql3);
$re=mysqli_num_rows($rest);	
if($re>=1)
{	
echo "<table border=1 cellpadding=5 id='tb'><tr>";
echo "<th>id</th><th>fname</th><th>lname</th><th>sex</th><th>item</th><th>model</th><th>price</th><th>license</th><th>date</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($rest))
	{ 
echo "<tr>";
echo "<td>".$row['id']."</td>";
	echo "<td>".$row['supplier_fname']."</td>";
	echo "<td>".$row['supplier_lname']."</td>";
	echo "<td>".$row['supplier_sex']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_model']."</td>";
	echo "<td>".$row['total_price']."</td>";
		echo "<td>".$row['trade_license']."</td>";
			echo "<td>".$row['registereddate']."</td>";
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
		
	echo "</tr>";
			  }
	echo "</table>";
		  
}		
}}
else
die("Database not selected:".mysqli_error($connection));  
}
else
die("Connection Failed:".mysqli_error($connection));
 
mysqli_close($connection);//closing connection
  ?>	


</div></div></div></center></div>

  <div id="fotter">
<?php include("footer.php");?>
</body>
</html>
<?php
}
else
header("location:login.php");

?>