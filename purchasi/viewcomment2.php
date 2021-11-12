<br><br>
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
<p style="float:center;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;የተጠቃሚ አስተያየት እይ</p>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $sql2="select * from comment;"; 
              $result=mysqli_query($connection,$sql2) ;
			         $res=mysqli_num_rows($result) ;
          If($res>0){
echo "<table border=1 id='tb' cellpadding=10><tr>";
echo "<th>መለያ</th><th>ስም</th><th>ያባት ስም</th><th>አስተያየት</th><th>ቀን</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{ 
echo "<tr>";
echo "<td>".$row['id']."</td>";
	echo "<td>".$row['fname']."</td>";
	echo "<td>".$row['lname']."</td>";
	echo "<td>".$row['comment']."</td>";
	echo "<td>".$row['date']."</td>";
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
           die("<font color='red' size='5'>Record Not Selected: </font>".mysqli_error($connection));  
       }  else
                       die("<font color='red' size='5'>ዳታቤዙ አልተመረጠም: </font>".mysqli_error($connection));  
                    }
					else{
       die("<font color='red' size='5'>ኮኔክሽን ተቋርጧል: </font>".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

