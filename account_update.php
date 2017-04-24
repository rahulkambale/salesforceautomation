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
<form action="account_update" method="POST">
<div class="logo" >
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>
	<div class="topnav">
		<div class="topnav_right">
		<a href="logout.php" >Logout</a>
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

<?php
include 'server.php';
$query="select * from account";
$result=mysqli_query($abc,$query);
if($result){
	while($row=mysqli_fetch_array($result)){
		echo "<table border='1'  cellpadding='10px'><tr>";
		echo "<input type='radio' align='center	' name='radio' value='".$row['id']."'> ".$row['id']."";
		echo "<td>".$row['name']."</td>";
		echo "<td>".$row['address']."</td>";
		echo "<td>".$row['contact_no']."</td>";
		echo "<td>".$row['email_id']."</td>";
		echo "<td>".$row['industry']."</td>";
		echo "<td>".$row['type']."</td>";
		echo "<td>".$row['employee']."</td>";
		echo "<td>".$row['annual_revenue']."</tr></table>";
	}
}
?>

<form action="account_update.php" method="POST">
<input type="submit" name="update" value="update"/>
<?php
if($_POST['update']){
if(!$_POST['radio']){
	echo "select anyone";
}
else{
	echo"selected";
}
}

?>


</body>
</html>