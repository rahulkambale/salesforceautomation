<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}

if(isset($_POST['submit'])){

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
<form action=" " method="POST">
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

<div class="font_style">
<h2> Account</h2>
Full Name	:<input type="text" name="name" required><br/>
Address		:<input type="text" name="addr" required><br/>
Contact Number	:<input type="text" name="c_no" required><br/>
Email ID	:<input type="text" name="e_id" required><br/>


<div class="form-group">
  <label>Industry</label>
  <?php
	include 'server.php';
	$sql = "SELECT * FROM industry";
	$result = mysqli_query($abc, $sql);
  ?>
  <select class="select_custom" name="industry" >
	<?php while($row=mysqli_fetch_array($result)) { ?>
	  <option value="<?php echo $row['indus_type'] ?>"><?php echo $row['indus_type']?></option>
	<?php } ?>
  </select>
</div>

Type		:<select name="type" class="select_custom">
				<option>(None)</option>
				<option>Prospect</option>
				<option>Customer</option>
				<option>Vendor</option>
			</select><br/>
Number of Employees		:<input type="text" name="no_emp" required><br/>
Annual Revenue		:<input type="text" name="revenue" required><br/>
<input type="submit" name="submit" value="Add">
</div>

</form>
</body>
</html>