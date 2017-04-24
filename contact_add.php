<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}

if(isset($_POST['name'])){

	$name=$_POST['name'];
	$status=$_POST['status'];
	$job_title=$_POST['job_title'];
	$a_id=$_POST['a_id'];
	$e_id=$_POST['e_id'];
	$c_no=$_POST['c_no'];
	$addr=$_POST['addr'];

	include 'server.php';
	$query="INSERT INTO contact values(null,'$name','$status','$job_title','$a_id','$e_id','$c_no','$addr')";
	$var=mysqli_query($abc,$query);
	if($var){
		echo "<p>Account is created</p>";
	}
	else{
		echo "<p>Error".mysqli_error($abc)."</p>";
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
<form action="contact_add.php" method="POST">
<div class="logo" >
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>


	<div class="topnav">

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

<div class="datas">
	<h2>Contact</h2>
	Name	:<input type="text" name="name" required><br/>
	Status		:<select name="status" class="select_custom">
				<option value="qualified">Qualified</option>
				<option value="customer">Customer</option>
				</select><br/>
	Job title	:<input type="text" name="job_title" required><br/>
	Account ID	:<input type="text" name="a_id" required><br/>
	
	<div class="form-group">
  <label>Account ID</label>
  <?php
	include 'server.php';
	$sql = "SELECT * FROM account";
	$result = mysqli_query($abc, $sql);
  ?>
  <select class="select_custom" name="industry" >
	<?php while($row=mysqli_fetch_array($result)) { ?>
	  <option value="<?php echo $row['id'] ?>"><?php echo $row['id']?></option>
	<?php } ?>
  </select>
</div>

	
	Email ID	:<input type="text" name="e_id" required><br/>
	Contact Number	:<input type="text" name="c_no" required><br/>
	Address		:<input type="text" name="addr" required><br/>
	<input type="submit" value="Add">
</div>


</form>
</body>
</html>