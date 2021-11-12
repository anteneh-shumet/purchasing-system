<html>
<head>
<br>
<p style="float:center;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የጫረታውን አሸናፊ እይ</p>
<style>
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:#B7E2F0; font-weight: bold; color: #0000FF;
}
</style>
</head>

</html>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			// when the minimum number of females is only one
$sql2="select *from supplier where status='accepted'";
$result=mysqli_query($connection,$sql2);
$res=mysqli_num_rows($result);	
if($res>=1)
{	
echo "<table id='tb' border=1 cellpadding=5 ><tr>";
echo "<th>መለያ</th><th>ስም</th><th>ያባት ስም</th><th>ጾታ</th><th>እቃ</th><th>ሞዴል</th><th>ዋጋ</th><th>ንግድ ፈቃድ</th><th>ቀን</th>";
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
echo "<table cellpadding=5 id='tb'><tr>";
echo "<th>መለያ</th><th>ስም</th><th>ያባት ስም</th><th>ጾታ</th><th>እቃ</th><th>ሞዴል</th><th>ዋጋ</th><th>ንግድ ፈቃድ</th><th>ቀን</th>" ;
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
die("<font color='red' size='5'>ዳታበዙ አልተመረጠም: </font>".mysqli_error($connection));  
}
else
die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል: </font>".mysqli_error($connection));
 
mysqli_close($connection);//closing connection
  ?>	