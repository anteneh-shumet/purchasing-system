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
<p style="float:center;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;view users comment here</p>

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
echo "<th>id</th><th>fname</th><th>lname</th><th>comment</th><th>date</th>" ;
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
           die("Record Not Selected:".mysqli_error($connection));  
       }  else
                       die("Database not selected:".mysqli_error($connection));  
                    }
					else{
       die("Connection Failed:".mysqli_error($connection));
 }
 mysqli_close($connection);


  ?>
  </html>

