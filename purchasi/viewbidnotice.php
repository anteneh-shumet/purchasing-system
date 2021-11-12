<br><br>
<html></html></head>
<style>
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:#B7E2F0; font-weight: bold; color: #0000FF;
}
</style>
</head>
<p style="float:center;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchasing Tender Notices</p>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $sql2="select * from tender where closing_date>=now() ORDER BY post_date DESC"; 
              $result=mysqli_query($connection,$sql2) ;
			         $res=mysqli_num_rows($result) ;
          If($res>0){
echo "<table border=1 id='tb' cellpadding=10><tr>";
echo "<th>tender-id</th><th>post_date</th><th>subject</th><th>content</th><th>start-on</th><th>end_date</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{ 
echo "<tr>";
echo "<td>".$row['tender_id']."</td>";
echo"<td>".$row['post_date'];
	echo "<td>".$row['subject']."</td>";
	echo "<td>".$row['content']."</td>";
	echo "<td>".$row['start_date']."</td>";
	echo "<td>".$row['closing_date']."</td>";
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
                       die("<font color='red' size='5'>Database not selected: </font>".mysqli_error($connection));  
                    }
					else{
       die("<font color='red' size='5'>Connection Failed: </font>".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

