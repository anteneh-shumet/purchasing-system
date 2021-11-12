
<html>
<body>
<head>
<style>

<title>home page</title>
<link  href="css/navigation.css" rel="stylesheet" type="text/css"/>
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

<link href="css/LoginPageStyle.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <div id="templatemo_wrapper">
      <?php include("head.php");?>
<?php include("list.php");?>
      
    </div>
     <div id="templatemo_main">
         <div id="sidecon">
       <div id="left">
       <h2>Suplier Registration Form</h2>
         

<form  id="email_form" action="supreg.php" enctype="multipart/form-data" onsubmit="javascript:return validate('email_form','email');" method="post"><br><br>
<b>tender_id:</b><input type="text" name="id">
      <b>fname：</b><input type="text" value="" name="supplier_fname" required id="" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <b>lname ：</b><input type="text" value="" name="supplier_lname" required id="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      
        <br><br>
<b>company：</b><input type="text"  name="company" required id="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
            
                 <b> country：</b><select name="country"required="true">
                <option value="Afghanistan" >Afghanistan</option><option value="Albania" >Albania</option><option value="Algeria" >Algeria</option><option value="American Samoa" >American Samoa</option><option value="Andorra" >Andorra</option><option value="Angola" >Angola</option><option value="Anguilla" >Anguilla</option><option value="Antarctica" >Antarctica</option><option value="Antigua and Barbuda" >Antigua and Barbuda</option><option value="Argentina" >Argentina</option><option value="Armenia" >Armenia</option><option value="Aruba" >Aruba</option><option value="Australia" >Australia</option><option value="Austria" >Austria</option><option value="Azerbaijan" >Azerbaijan</option><option value="Bahamas" >Bahamas</option><option value="Bahrain" >Bahrain</option><option value="Bangladesh" >Bangladesh</option><option value="Barbados" >Barbados</option><option value="Belarus" >Belarus</option><option value="Belgium" >Belgium</option><option value="Belize" >Belize</option><option value="Benin" >Benin</option><option value="Bermuda" >Bermuda</option><option value="Bhutan" >Bhutan</option><option value="Bolivia" >Bolivia</option><option value="Bosnia" >Bosnia</option><option value="Botswana" >Botswana</option><option value="Bouvet Island" >Bouvet Island</option><option value="Brazil" >Brazil</option><option value="British Virgin Is." >British Virgin Is.</option><option value="Brunei" >Brunei</option><option value="Bulgaria" >Bulgaria</option><option value="Burkina Faso" >Burkina Faso</option><option value="Burundi" >Burundi</option><option value="Cambodia" >Cambodia</option><option value="Cameroon" >Cameroon</option><option value="Canada" >Canada</option><option value="Cape Verde Is." >Cape Verde Is.</option><option value="Cayman Islands" >Cayman Islands</option><option value="Central African" >Central African</option><option value="Chad" >Chad</option><option value="Chile" >Chile</option><option value="China" >China</option><option value="Cocos (Keeling) Is." >Cocos (Keeling) Is.</option><option value="Colombia" >Colombia</option><option value="Comoros" >Comoros</option><option value="Congo" >Congo</option><option value="Cook Islands" >Cook Islands</option><option value="Costa Rica" >Costa Rica</option><option value="Cote DIvoire" >Cote DIvoire</option><option value="Croatia" >Croatia</option><option value="Cyprus" >Cyprus</option><option value="Czech Rep." >Czech Rep.</option><option value="Denmark" >Denmark</option><option value="Diego Garcia" >Diego Garcia</option><option value="Djibouti" >Djibouti</option><option value="Dominica" >Dominica</option><option value="Dominican Rep." >Dominican Rep.</option><option value="East Timor" >East Timor</option><option value="Ecuador" >Ecuador</option><option value="Egypt" >Egypt</option><option value="El Salvador" >El Salvador</option><option value="Equatorial Guinea" >Equatorial Guinea</option><option value="Eritrea" >Eritrea</option><option value="Estonia" >Estonia</option><option value="Ethiopia"  selected="selected">Ethiopia</option><option value="Falkland Islands" >Falkland Islands</option><option value="France" >France</option><option value="French Antilles" >French Antilles</option><option value="French Guiana" >French Guiana</option><option value="French Polynesia" >French Polynesia</option><option value="Gabon Rep." >Gabon Rep.</option><option value="Gambia" >Gambia</option><option value="Georgia" >Georgia</option><option value="Germany" >Germany</option><option value="Ghana" >Ghana</option><option value="Gibraltar" >Gibraltar</option><option value="Greece" >Greece</option><option value="Greenland" >Greenland</option><option value="Grenada" >Grenada</option><option value="Guadeloupe" >Guadeloupe</option><option value="Guam" >Guam</option><option value="Guantanamo Bay" >Guantanamo Bay</option><option value="Guatemala" >Guatemala</option><option value="Guinea" >Guinea</option><option value="GuineaBissau" >GuineaBissau</option><option value="Guyana" >Guyana</option><option value="Haiti" >Haiti</option><option value="Honduras" >Honduras</option><option value="Hong Kong, SAR" >Hong Kong, SAR</option><option value="Hungary" >Hungary</option><option value="Iceland" >Iceland</option><option value="India" >India</option><option value="Indonesia" >Indonesia</option><option value="Iran" >Iran</option><option value="Iraq" >Iraq</option><option value="Ireland" >Ireland</option><option value="Israel" >Israel</option><option value="Italy" >Italy</option><option value="Jamaica" >Jamaica</option><option value="Japan" >Japan</option><option value="Jordan" >Jordan</option><option value="Kazakhstan" >Kazakhstan</option><option value="Kenya" >Kenya</option><option value="Kiribati" >Kiribati</option><option value="Korea, North" >Korea, North</option><option value="Korea, South" >Korea, South</option><option value="Kuwait" >Kuwait</option><option value="Kyrgyzstan" >Kyrgyzstan</option><option value="Lao" >Lao</option><option value="Latvia" >Latvia</option><option value="Lebanon" >Lebanon</option><option value="Lesotho" >Lesotho</option><option value="Liberia" >Liberia</option><option value="Libya" >Libya</option><option value="Liechtenstein" >Liechtenstein</option><option value="Lithuania" >Lithuania</option><option value="Luxembourg" >Luxembourg</option><option value="Macau" >Macau</option><option value="Macedonia" >Macedonia</option><option value="Madagascar" >Madagascar</option><option value="Malawi" >Malawi</option><option value="Malaysia" >Malaysia</option><option value="Maldives" >Maldives</option><option value="Mali Republic" >Mali Republic</option><option value="Malta" >Malta</option><option value="Marshall Islands" >Marshall Islands</option><option value="Martinique" >Martinique</option><option value="Mauritania" >Mauritania</option><option value="Mauritius" >Mauritius</option><option value="Mayotte Island" >Mayotte Island</option><option value="Mexico" >Mexico</option><option value="Micronesia" >Micronesia</option><option value="Moldova" >Moldova</option><option value="Monaco" >Monaco</option><option value="Mongolia" >Mongolia</option><option value="Montserrat" >Montserrat</option><option value="Morocco" >Morocco</option><option value="Mozambique" >Mozambique</option><option value="Myanmar" >Myanmar</option><option value="Namibia" >Namibia</option><option value="Nauru" >Nauru</option><option value="Nepal" >Nepal</option><option value="Netherlands" >Netherlands</option><option value="Netherlands Antilles" >Netherlands Antilles</option><option value="New Caledonia" >New Caledonia</option><option value="New Zealand" >New Zealand</option><option value="Nicaragua" >Nicaragua</option><option value="Niger Republic" >Niger Republic</option><option value="Nigeria" >Nigeria</option><option value="Niue" >Niue</option><option value="Norfolk Island" >Norfolk Island</option><option value="Norway" >Norway</option><option value="Oman" >Oman</option><option value="Pakistan" >Pakistan</option><option value="Palau" >Palau</option><option value="Panama" >Panama</option><option value="Papua New Guinea" >Papua New Guinea</option><option value="Paraguay" >Paraguay</option><option value="Peru" >Peru</option><option value="Philippines" >Philippines</option><option value="Pitcairin" >Pitcairin</option><option value="Poland" >Poland</option><option value="Portugal" >Portugal</option><option value="Puerto Rico" >Puerto Rico</option><option value="Qatar" >Qatar</option><option value="Reunion Island" >Reunion Island</option><option value="Romania" >Romania</option><option value="Russian Federation" >Russian Federation</option><option value="Rwanda" >Rwanda</option><option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option><option value="Saint Lucia" >Saint Lucia</option><option value="Samoa" >Samoa</option><option value="San Marino" >San Marino</option><option value="Sao Tome and Principe" >Sao Tome and Principe</option><option value="Saudi Arabia" >Saudi Arabia</option><option value="Senegal Republic" >Senegal Republic</option><option value="Serbia and Montenegro" >Serbia and Montenegro</option><option value="Seychelles Islands" >Seychelles Islands</option><option value="Sierra Leone" >Sierra Leone</option><option value="Singapore" >Singapore</option><option value="Slovakia" >Slovakia</option><option value="Slovenia" >Slovenia</option><option value="Solomon Islands" >Solomon Islands</option><option value="Somalia" >Somalia</option><option value="South Africa" >South Africa</option><option value="Spain" >Spain</option><option value="Sri Lanka" >Sri Lanka</option><option value="St. Helena" >St. Helena</option><option value="Sudan" >Sudan</option><option value="Suriname" >Suriname</option><option value="Swaziland" >Swaziland</option><option value="Sweden" >Sweden</option><option value="Switzerland" >Switzerland</option><option value="Syrian Arab Republic" >Syrian Arab Republic</option><option value="Taiwan" >Taiwan</option><option value="Tajikistan" >Tajikistan</option><option value="Tanzania" >Tanzania</option><option value="Thailand" >Thailand</option><option value="Togo" >Togo</option><option value="Tokelau" >Tokelau</option><option value="Tonga Islands" >Tonga Islands</option><option value="Trinidad and Tobago" >Trinidad and Tobago</option><option value="Tunisia" >Tunisia</option><option value="Turkey" >Turkey</option><option value="Turkmenistan" >Turkmenistan</option><option value="Tuvalu" >Tuvalu</option><option value="Uganda" >Uganda</option><option value="Ukrainian SSR" >Ukrainian SSR</option><option value="United Arab Emirates" >United Arab Emirates</option><option value="United Kingdom" >United Kingdom</option><option value="United States" >United States</option><option value="United States Minor" >United States Minor</option><option value="Outlying Islands" >Outlying Islands</option><option value="Uruguay" >Uruguay</option><option value="Uzbekistan" >Uzbekistan</option><option value="Vanuatu" >Vanuatu</option><option value="Vatican City" >Vatican City</option><option value="Venezuela" >Venezuela</option><option value="Vietnam" >Vietnam</option><option value="Virgin Islands(British)" >Virgin Islands(British)</option><option value="Virgin Islands(U.S.)" >Virgin Islands(U.S.)</option><option value="Western Sahara" >Western Sahara</option><option value="Yemen" >Yemen</option><option value="Yugoslavia" >Yugoslavia</option><option value="Zaire" >Zaire</option><option value="Zambia" >Zambia</option><option value="Zimbabwe" >Zimbabwe</option><option value="Cuba" >Cuba</option><option value="Finland" >Finland</option></select></select>
                
           
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>city：</b><input type="text" name="city" value="" required id=""/> <br><br>

         <b>phone：</b><input type="text" name="supplier_phone" pattern="[09]{2}[0-9]{8}" required id="phone" />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <B>email：</B><input type="text" id="email" name="email" required=""  /> 
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>vat-number:<input  type="text" name="vat_registration_number"required="" />
        <br><br>  <b>sex：</b><select type="text" name="supplier_sex"><option>male</option>  
                 <option>female</option></select>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tin number<input type="file" name="tin_number" id="file" placeholder="file"/>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>trade license:<input type="file" name="trade_license" id="trade_license">
          <br><br><b>CPO：</b><input type="file" name="cpo" id="file" placeholder="file" required id=""/>
         item_type:<input type="text" name="item_type" pattern="[A-Za-z]+"  required/>  &nbsp;&nbsp;&nbsp;  date:<input type="date" name="registereddate" value="<?php echo date('Y-m-d');?>"/> <br><br >item_model:<input type="text" name="item_model" pattern="[0-9A-Za-z]+" required/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>unit_price:<input type="text" name="unit_price" pattern="[0-9]+" required/> quantity:<input type="text" name="quantity" pattern="[0-9]+" required/><br><br>
            
             <center> <button type="submit" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;" name="app">register</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <button type="submit" style="background-color: #005580;  border:2px solid #cccccc; box-sizing: border-box; padding: 0px;" >reset</button></center>

        </form>

<?php
if(isset($_POST['app']))
{
  include("connection.php");
  $id=$_POST['id'];
  $supfname=$_POST['supplier_fname'];
  $suplname=$_POST['supplier_lname'];
  $supplier_sex=$_POST['supplier_sex'];
  $company=$_POST['company'];
  $country=$_POST['country'];
  $city=$_POST['city'];
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
  $imagees=($_FILES['cpo']['name']);
  $status="";
  
  
            $target_dir ="../images/";
            $target_file = $target_dir . $_FILES["tin_number"]["name"];
            $target_files = $target_dir . $_FILES["trade_license"]["name"];
            $target_filles = $target_dir . $_FILES["cpo"]["name"];
            //$target_path=$target_path.basename($_FILES['image']['name']);
$mysql=mysqli_query($con,"INSERT into supplier(id,supplier_fname,supplier_lname,supplier_sex,campany,country,city,supplier_phone,email,item_type,item_model,quantity,unit_price,total_price,tin_number,trade_license,vat_registration_number,cpo,registereddate,status)values('$id','$supfname','$suplname','$supplier_sex','$company','$country','$city','$phone','$email','$item_type','$item_model','$quantity','$unit_price','$total_price','$image','$images','$vat_registration_no','$imagees','$registereddate', '$status')");
if($mysql) {
if(move_uploaded_file($_FILES['tin_number']['tmp_name'],$target_file))
            { 
               if(move_uploaded_file($_FILES['trade_license']['tmp_name'],$target_files))
            {
            if(move_uploaded_file($_FILES['cpo']['tmp_name'],$target_filles)){   
echo "<font color='green' size='5'>you have sucessfully apply for the tender</font>"; 
      

            }}}}
    else 
    echo "<font color='red' size='5'>applying is Not successfull </font>".mysqli_error($con);
             
             
            
            
    
}
?>
  
      


     
  </div>
      </div >

      
       
       
<div id="right">
  
  <h3>Instruction</h3><HR>
    <ul>
      <li>1.&nbsp; &nbsp;trade license is mandatory</li><hr><br>
      <li>2.&nbsp; &nbsp;vat number is mandatory</li><hr><br>
      <li>3.&nbsp; &nbsp; tin number is mandatory<li><hr><br>
      <li>4.&nbsp; &nbsp; CPO is mandatory &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  </li><hr><br>
          
    </ul>
    

       </div>
       </div>
<div id="contents">
  <center><p style="margin-left: 40px "><b><i>disclaimer:-any suplier can register with in a gven time<i></p><center>
</div>
<div id="fotter">
<?php include("footer.php");?>
</div>
    
    </div>
</body>
</html>
