
<html>
	<head>
		
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <script type="text/javascript" src="date_time2.js">
     
     </script>
     <style type="text/css">
     #read{color: red; 
	outline: none;
	border:none; 
	font-size: 18px;
	font-weight: bold;
background-color:Gainsboro;
width:6%;}</style>
		<title>purchasing system</title>
		<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
	</head>
	<body>
	 <div id="templatemo_wrapper">
				<?php include("head.php");?>
		
			<?php include("list.php");?>
			
		</div>
 		 <div style="background-color: white;"><center>
	     <h2 class="style12">
			 <center>WELCOME TO UNIVERSITY OF GONDAR PURCHASING WEBSITE</center></h2>  
         <center><div id="content-slider" class="b">
    	<div id="slider" style="float:left">
        	<div id="mask">
            <ul>
           	<li id="first" class="firstanimation">
            
            <img src="images/usefull.jpg"height="300" width="1150"/>
            
            </li>

            <li id="second" class="secondanimation">
            
            <img src="images/agreement.jfif"height="300" width="1150"/>
            
            </li>
            
            <li id="third" class="thirdanimation">
           
            <img src="images/logo.png"height="300" width="1150"/>
            
            </li>
                        
            <li id="fourth" class="fourthanimation">
            <img src="images/ram.jpg"height="300" width="1150"/>
            </li>
                        
            <li id="fifth" class="fifthanimation">
            <img src="images/dell.jpeg"height="300" width="1150"/>
            </li>
            </ul>
           
		</div></div></center>
			 <center><form action="second.php">
    <button type="submit">አማረኛ</button>
  </form></center></div></center></center></div>

</div>
<div id="contents">
<p style="margin-left: 40px"><b>A purchasing system is a process for buying products and services encompassing purchase from requisition and purchase order through product receipt and payment. Purchasing systems are a key component of effective inventory management in that they monitor existing stock and help companies determine what to buy, how much to buy and when to buy <span id="h" style="color: red">....</span><span id="more" style="display: none;">it.Purchasing systems may be based on economic order quantity models.<br><br>
Purchasing systems play an essential role in controlling a company's cash outflows in that they ensure that only necessary purchases are made and that they are made at reasonable prices.<br><br> Purchasing is the organized acquisition of goods and services on behalf of the buying entity. Purchasing activities are needed to ensure that needed items are obtained in a timely manner and at a reasonable cost. A purchasing department is especially necessary in a manufacturing business, where large amounts of raw materials and components must be obtained on a recurring basis.

</span>	<button  type="button" id="read" onclick="read()">see-more </button></p>

	<script type="text/javascript">
		var i=0;
		function read(){
			if(!i){

				document.getElementById("more").style.
				display="inline";
				document.getElementById("h").style.
				display="none";
				document.getElementById("read").innerHTML='back';
						i=1;	}
			else{document.getElementById("more").style.
				display="none";
				document.getElementById("h").style.
				display="inline";
				document.getElementById("read").innerHTML='see-more';
				i=0;
			}
		}
	</script>
</p>
</div>
<div id="fotter">
<?php include("footer.php");?>
</div>
	
	
</body>
</html>
