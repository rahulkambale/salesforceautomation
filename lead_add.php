<?php
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}

if(isset($_POST['name'])){

	$name=$_POST['name'];
	$job_title=$_POST['job_title'];
	$source=$_POST['source'];
	$status=$_POST['status'];
	$company_name=$_POST['c_name'];
	$phone=$_POST['phone'];
	$e_id=$_POST['e_id'];
	$addr=$_POST['addr'];
	$industry=$_POST['industry'];	
	
	include 'server.php';
	$query="INSERT INTO lead values(null,'$name','$status','$job_title','$source','$company_name','$phone','$e_id','$addr','$industry')";
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
<form action="lead_add.php" method="POST">
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

<div class="font_style">
<h2>Lead</h2>
Name	:<input type="text" name="name" required><br/>
Status	:<select name="status" class="select_custom">
				<option value="New">New</option>
				<option value="In Progress">In Progress</option>
				<option value="Recycled">Recycled</option>
				<option value="Dead">Dead</option>
			</select><br/>
Job title		:<input type="text" name="job_title" required><br/>
Source	:<select name="source" class="select_custom">
				<option value="(None)">(None)</option>
				<option value="Self Generated">Self Generated</option>
				<option value="Inbound Call">Inbound Call</option>
				<option value="Tradeshow">Tradeshow</option>
				<option value="Word of Mouth">Word of Mouth</option>
			</select><br/>

Company Name	:<input type="text" name="c_name" required><br/>
Contact Number	:<input type="text" name="phone" required><br/>
E-Mail ID	:<input type="text" name="e_id" required><br/>
Address		:<input type="text" name="addr" required><br/>
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
<input type="submit" value="Add">

</div>

</form>
</body>
</html>