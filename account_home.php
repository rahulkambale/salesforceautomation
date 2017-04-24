<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}

if(isset($_POST['name'])){

	$name=$_POST['name'];
	$addr=$_POST['addr'];
	$c_no=$_POST['c_no'];
	$e_id=$_POST['e_id'];
	$industry=$_POST['industry'];
	$type=$_POST['type'];
	$emp=$_POST['no_emp'];
	$ann_rev=$_POST['revenue'];
	
	include 'server.php';
	$query="INSERT INTO account values(null,'$name','$addr','$c_no','$e_id','$industry','$type','$emp','$ann_rev')";
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
<form action="account.php" method="POST">
<div class="logo" >
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>


<div class="topnav">
<a href="account_add.php">Add</a>


<a href="account_update.php">Update</a>
<a href="account_home.php">Delete</a>

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