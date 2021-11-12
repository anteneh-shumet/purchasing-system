<html>

<head>

<title>notice</title>
<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
<style type="text/css"> #g{
 	width: 100%;
	height:30px; 
	font-weight:bold;
	font-family:"times newroman"; 
	border-radius:10px;
	font-size:20px;
	box-sizing: border-box; 
	border:2px solid #cccccc; 
	box-sizing:border-box; 
	padding: 0px; 
	background-color:#005580;
     color: white;
 }
     #g:hover{
     	  box-shadow:1px 1px 4px 2px #fbaf00;

     }
 #f{
 	align-self: :center;
 	background-color: white;
 }</style>
  </head>
  <body>
    <div id="templatemo_wrapper">
      <?php include("head2.php");?>
<?php include("listt.php");?>
      
    </div><center>
   
         <div id="f" >
      
     <h2>የጨረታ ማስታዎቂያ</h2>

<?php		
$connection=mysqli_connect("localhost", "root", "");
If($connection){
		$sql=mysqli_select_db($connection,"purchasi");
		If($sql){
			
             $sql2="select * from tender ORDER BY post_date DESC"; 
              $result=mysqli_query($connection,$sql2) ;
			         $res=mysqli_num_rows($result) ;
          If($res>0){
echo "<table width='1100px' align='center' border=1>";
echo "<th>የጨረታ መለያ</th>
<th>ቀን</th>
<th>ርእስ</th>
<th>ዝርዝር</th>
<th>መጀመሪያ ቀን</th>
<th>መጨረሻ ቀን</th> <th>action</th>" ;
echo"</tr>";
	While($row=mysqli_fetch_array($result))
	{
			$tender_id=$row['tender_id'];
  $post_date=$row['post_date'];
		$subject=$row['subject'];
		$content=$row['content'];
		$posted_date=$row['start_date'];
		$d=$row['closing_date'];
 
echo "<tr>";
echo "<td>".$row['tender_id']."</td>";
echo"<td>".$row['post_date'];
	echo "<td>".$row['subject']."</td>";
	echo "<td>".$row['content']."</td>";
	echo "<td>".$row['start_date']."</td>";
	echo "<td>".$row['closing_date']."</td>";?>
	<form  id="email_form" action="posttendernotic2.php"  method="post" style="align-items: center;"> <td>
<input type="hidden" name="tender_id" pattern="[A-Za-z0-9]+" required value="<?php echo $tender_id ;?>"/> 
<input type="hidden" name="post_date"  value="<?php echo $post_date;?>" required />
<input type="hidden" name="subject" pattern="[a-zA-Z0-9]+" required value="<?php echo $subject; ?>"/> 
<input type="hidden"name="content" pattern="[a-zA-Z0-9]+"  value="<?php echo 	$content; ?>"/>
<input type="hidden" name="start_date" required value="<?php echo $posted_date ;?>"/>  	
<input type="hidden" name="closing_date" required value="<?php echo $d; ?>" />  
	<button type="submit" id="g" name="post">ለመመዝገብ የሄን ይጫኑ </button></td></form><?php
	echo "</tr>";}
	echo "</table>";
	?>
			  
			  <?php
		  }else
           die("<font color='red' size='5'>Record Not Selected:</font>".mysqli_error($connection));  
       }  }


  ?></center>

</div>
<div id="fotter">
<?php include("footer.php");?>
</div>
</body></html>