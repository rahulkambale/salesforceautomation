<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
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
	
	<a href="contact_add.php">Add</a>
	<a href="contact_update.php">Update</a>
	<a href="contact_home.php">Delete</a>

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