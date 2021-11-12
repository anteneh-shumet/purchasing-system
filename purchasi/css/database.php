<?php
$domain="localhost";
$dbuser="root";
$dbpass="";
$dbname="purchasing";
$x=0;
$con=mysqli_connect($domain,$dbuser,$dbpass);
if(mysqli_select_db($con,$dbname))
$x=1; 
else
$x=2;
if($x==2)
{
	$sql="create database purchasing";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
		echo "<br>Database Successfully created";
	}else
		echo " database is exist";
}else if($x==1)
{ 

$sql="create table tender(tender_id varchar(20) not null,subject varchar(20) not null,content varchar(2000) not null,posted_date date ,closing_date date,primary key(tender_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>tender  table created". mysqli_error($con);
	}
$sql="create table colleges(college_name varchar(50),college_admin_fname varchar(20)not null,college_admin_lname varchar(20) Not null,primary key(college_name))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>colleges table is created". mysqli_error($con);
	}

	$sql="create table departments(department_name varchar(50),department_head_fname varchar(20)not null,department_head_lname varchar(20) Not null,college_name varchar(50),foreign key(college_name)references colleges(college_name), primary key(department_name))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>departments table is created". mysqli_error($con);
	}

$sql="create table offices(office_id varchar(20),colege_name varchar(50),department_name varchar(50),foreign key(colege_name)references colleges(college_name),foreign key(department_name)references departments(department_name), primary key(office_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>offices table is created". mysqli_error($con);
	}	
	$sql="create table request(request_no int AUTO_INCREMENT   not null,item_type varchar(20),item_quantity varchar(20),specification varchar(20),order_date date,officce_id varchar(20),colleg_name varchar(50),dept_name varchar(50),sent_from varchar(50),status varchar(50), foreign key(colleg_name)references colleges(college_name),foreign key(dept_name)references departments(department_name),foreign key(officce_id)references offices(office_id),primary key(request_no))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>request table created". mysqli_error($con);
	}
$sql="create table employee(emp_id varchar(20) not null,empfname varchar(20) ,emplname varchar(20),emp_phone varchar(20),email varchar(30),primary key(emp_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>employee table created". mysqli_error($con);
	}
$sql="create table notice(notice_id varchar(20),subject varchar(80)not null,content varchar(15000) Not null,start_date date,end_date date,primary key(notice_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>notice table created". mysqli_error($con);
	}	
$sql="create table supplier(id int not null,supplier_fname varchar(20),supplier_lname varchar(20),supplier_sex varchar(20),supplier_phone varchar(20),email varchar(50),item_type varchar(20),item_model varchar(20),quantity int,unit_price int,total_price int,tin_number varchar(500) not null,trade_license varchar(500) not null,vat_registration_number varchar(20),registereddate date,status varchar(50),primary key(id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>supplier table created". mysqli_error($con);
	}
	
	$sql="create table document(document_id int AUTO_INCREMENT not null,uploaded_date date,document varchar(500) not null,primary key(document_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>document table created". mysqli_error($con);
	}
	$sql="create table payment(payment_id int AUTO_INCREMENT not null,reciept varchar(500) not null,primary key(payment_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>payment table created". mysqli_error($con);
	}
	
	
	
	
	
	$sql="create table item_quality(item_quality_id varchar(20) not null,item_type varchar(20) ,model varchar(20),quality varchar(20),primary key(item_quality_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>item_quality table created". mysqli_error($con);
	}
	
$sql="create table account(empl_id varchar(20)not null,username varchar(15) Not null,password longtext,role varchar(30),status varchar(15),foreign key(empl_id)references employee(emp_id),primary key(username))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>account table created". mysqli_error($con);
	}	
$sql="create table tender_result(result_id int not null,winner_fname varchar(20),winner_lname varchar(20),posted_date date,winner_id int not null,foreign key(winner_id)references supplier(id),primary key(result_id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>tender-result table created". mysqli_error($con);
	}
	$sql="create table Agreement(id int AUTO_INCREMENT,result_id int Not null,supplying_date date,foreign key(result_id)references tender_result(result_id),primary key(id))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>agreement table created". mysqli_error($con);
}
$sql="create table marketdetail(marketdetail_id varchar(20) not null primary key,request_id int AUTO_INCREMENT not null,unit_price varchar(20),studied_date date,foreign key(request_id)references request(request_no))";
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>market detail  table created". mysqli_error($con);
	}
$sql="create table model19(recieving_reciept_no varchar(20) Not null, deliverer varchar(20),reciepant varchar(20),item_type varchar(20),model varchar(30),quantity int, unit_price int,total_price int,primary key(recieving_reciept_no ))" ;
   $sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>model19 table created". mysqli_error($con);
	}
	
$sql="create table model20(withdraw_requistion_no varchar(20) Not null, request_num int AUTO_INCREMENT,request_date date,requester_body varchar(20),officers_name varchar(20),item_type varchar(30),model varchar(20), quantity int,foreign key(request_num) references request(request_no) ,primary key(withdraw_requistion_no ))" ;
   $sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>model20 table created". mysqli_error($con);
	}
	$sql="create table comment(id int AUTO_INCREMENT ,fname varchar(20),lname varchar(20),comment LONGTEXT,date Date,primary key(id))";	
	$sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>comment table created". mysqli_error($con);
	}	
$sql="create table model22(reciept_no varchar(20) Not null, request_number int AUTO_INCREMENT,reciepant varchar(20),donor varchar(20),item_type varchar(20),model varchar(30), quantity int,unit_price int,total_price int,foreign key(request_number) references request(request_no) ,primary key(reciept_no ))" ;
   $sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>model22 table created". mysqli_error($con);
	}
	
	
$sql="create table logfile(logid int AUTO_INCREMENT, employ_id varchar(20) not null,username varchar(15) Not null,starttime time,endtime time,activity varchar(50),foreign key(employ_id) references employee(emp_id),primary key(logid))" ;
   $sql1=mysqli_query($con,$sql);
	if($sql1){
	echo "<br>logfile is  created". mysqli_error($con);
	}	
	
	
	
	
	}else
		echo " tables are exists";
?>