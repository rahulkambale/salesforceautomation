<?php 
session_start();
if(!isset($_SESSION['id'])){
	header('location:login.php');
}


if(isset($_POST['login_name'])){
	
		$log_name=$_POST['login_name'];
		$password=$_POST['password'];
		$fullname=$_POST['full_name'];
		$email_id=$_POST['e_id'];
		$role_id=$_POST['role_id'];
		
		$connection=mysqli_connect('localhost','root','','sfa');
		if(!$connection){
			die("connection failed".mysqli.connect.error());
		}
		
		$query="INSERT INTO users VALUES(null,'$log_name','$password','$fullname','$email_id','$role_id')";
	//	$var=$connection->query($query);
		$var=mysqli_query($connection,$query);
		
		if($var){
			echo "the data is inserted into database";
		}
		else{
			echo "Error: <br>" . mysqli_error($connection);
		}
		
		//echo"hello you are in right way".$password;
	
}

?>
<html>
<head>
<style type="text/css"> @import url("design.css"); 


</style>

</head>
<title>Sales Force Automation</title>
<body>
<form action="user.php" method="POST">
<div class="logo">
<img src="SFA_2.png" alt="SFA logo" >
<h1>Force Automation Application</h1>
</div>

<div class="option_box">
<a href="account.php">Account</a><br/>
<a href="dashbord.php">Lead</a><br/>
<a href="dashbord.php">Contact</a><br/>
<a href="dashbord.php">Service Database</a><br/>
<a href="dashbord.php">Report</a><br/>
<a href="dashbord.php">Forecast</a>
</div>
<div class="font_style">

Login Name	:<input type="text" name="login_name" required><br/>
Password	:<input type="text" name="password" required><br/>
Full Name	:<input type="text" name="full_name" required><br/>
Email ID	:<input type="text" name="e_id" required><br/>
Role ID		:<input type="text" name="role_id" required><br/>
<input type="submit" value="Add">
</div>
</form>

</body>
</html>