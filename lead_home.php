<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}

if(isset($_POST['name'])){

	$name=$_POST['name'];
	$job_title=$_POST['job_title'];
	$source=$_POST['source'];
	$date=$_POST['date'];
	$company_name=$_POST['c_name'];
	$phone=$_POST['phone'];
	$e_id=$_POST['e_id'];
	$addr=$_POST['addr'];
	$industry=$_POST['industry'];	
	
	include 'server.php';
	$query="INSERT INTO lead values(null,'$name','$job_title','$source','$date','$company_name','$phone','$e_id','$addr','$industry')";
	$var=mysqli_query($abc,$query);
	if($var){
		echo "Account is created";
	}
	else{
		echo "Error".mysqli_error($abc);
	}
	
	
}

?>
<html>
<head>
<style type="text/css"> @import url("design.css"); 


</style>

</head>
<title>Sales Force Automation</title>
<body>
<form action="lead.php" method="POST">
<div class="logo" >
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>
<div class="topnav">
<a href="lead_add.php">Add</a>
<a href="lead_update.php">Update</a>
<a href="lead_home.php">Delete</a>

	<div class="topnav_right">
	<a href="logout.php" >Logout</a>
	<a href="user.php">Create User</a>
	<a href="dashbord.php" >Dashboard</a>
	</div>
</div>


</div>


<div class="option_box">

<a href="account_home.php">Account</a><br/>
<a href="lead_home.php">Lead</a><br/>
<a href="contact_home.php">Contact</a><br/>
<a href="service.php">Service Database</a><br/>
<a href="report.php">Report</a><br/>
<a href="forecast.php">Forecast</a>

</div>


</form>
</body>
</html>