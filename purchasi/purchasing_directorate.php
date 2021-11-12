
<html></html></head>
<p style="float:center;font-size:30px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Purchasing Directorate Notices</p>
<style>
tr{
cursor: pointer; transition: all .25s ease-in-out
 }
.selected{
background-color:white; font-weight: bold; color: #0000FF;
}
</style>
</head>
<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
             $sql2="select * from notice where end_date>=now();";                            
              $result=mysqli_query($connection,$sql2) ;
          If($result){//Displaying the values using a table
echo "<table id='tb' cellpadding=10 border=1><tr><th>notice_id</th>";
echo "<th>subject</th><th>content</th><th>start_date</th><th>end_date</th></tr>" ;
	While($row=mysqli_fetch_array($result))
	{     
    echo "<tr><td>".$row['notice_id']."</td>";
	echo "<td>".$row['subject']."</td>";
	echo "<td>".$row['content']."</td>";
	echo "<td>".$row['start_date']."</td>";
	echo "<td>".$row['end_date']."</td></tr>";
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
                       die(" <font color='red' size='5'>Database not selected:</font>".mysqli_error($connection));  
                    }else{
       die("<font color='red' size='5'>Connection Failed:</font>".mysqli_error($connection));
 }
 mysqli_close($connection);//closing connection


  ?>