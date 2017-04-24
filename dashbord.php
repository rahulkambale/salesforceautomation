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

<div class="logo">
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>

<div class="topnav">
	<div class="topnav_right">
	<a href="logout.php" >Logout</a>
	<a href="user.php">Create User</a>
	</div>
</div>

</div>

<div class="option_box">
<h1 align="center" >Dashboard</h1>
<a href="account_home.php">Account</a><br/>
<a href="lead_home.php">Lead</a><br/>
<a href="contact_home.php">Contact</a><br/>
<a href="service.php">Service Database</a><br/>
<a href="report.php">Report</a><br/>
<a href="forecast.php">Forecast</a>
</div>
<div>

</div>
</body>
</html>