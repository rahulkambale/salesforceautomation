<?php
session_start();
if(isset($_session['id'])){
	header('location:dashbord.php');
}

if(isset($_POST['username'])){
include 'server.php';

$name=$_POST['username'];
print_r($_POST);
$password=$_POST['pass'];
$result=mysqli_query($abc,"select * from users where login_name='$name' AND password='$password'");
if (mysqli_num_rows($result) == 1) {
		$user = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $user['id'];
		$_SESSION['role_id'] = $user['role_id'];
		header('Location: dashbord.php');
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
<form method="post">
<div class="menu_bar">
<img src="SFA_IMG/SFA_2.png" alt="SFA logo" height="100" width="200">
<h1>Welcome to Sales Force Automation Application</h1>
</div>

<div class="font_style" align="center">

Login Name<br/><input type="text" name="username"/><br/>
Password<br/><input type="password" name="pass"/><br/>

<input type="submit" value="Login"/>
</div>

</form>
</body>
</html>