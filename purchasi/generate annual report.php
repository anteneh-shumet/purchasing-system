
<html></html></head>
<style>
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:#008080; font-weight: bold; color: #0000FF;
}
</style>
</head>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;annual report of purchasing requestes that are accepted and purchasing is applied</h2>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $sql2="select * from request where status='approved'"; 
              $result=mysqli_query($connection,$sql2) ;
          If($result){
echo "<table border=1 id='tb' cellpadding=10><tr>";
echo "<th>id</th><th>item</th><th>quantity</th><th>specification</th><th>order_date</th><th>status</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{ 
echo "<tr>";
echo "<td>".$row['request_no']."</td>";
	echo "<td>".$row['item_type']."</td>";
	echo "<td>".$row['item_quantity']."</td>";
	echo "<td>".$row['specification']."</td>";
	echo "<td>".$row['order_date']."</td>";
		echo "<td>".$row['status']."</td>";
	echo "</tr>";
			  }
	echo "</table>";
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
		  }else
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }
					else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

