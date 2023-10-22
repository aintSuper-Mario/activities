<?php
include 'connection.php';
?>

<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<title>Create an Account</title>
</head>

<body>
	<h1 class="heading">Create an Account</h1>
	<form class="login-box" method="POST">
		<br><br><br><br><br><br>
		<div class="textbox">
			<input class="nameForm" type="text" placeholder="Create Username" name="username">
		</div>
		<div class="textbox">
			<input type="text" placeholder="Create Email Address" name="email">
		</div>
		<div class="textbox">
			<input type="text" placeholder="First Name" name="firstname">
		</div>
		<div class="textbox">
			<input type="text" placeholder="Last Name" name="lastname">
		</div>
		<div class="textbox">
			<input type="password" placeholder="Enter Password" name="password">
		</div>

		<p><a href="index.php" id="mini">Already have an account?</a><br></p>

		<button onclick="return confirm('Added Successfully')" class="btn" type="submit" name="submit">Create
			Account</button>
	</form>
</body>
<?php

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$pwd = $_POST['password'];
	mysqli_query($conn, "INSERT INTO users( username, email, firstname, lastname, password) 
				VALUES( '$username', '$email', '$fname', '$lname', '$pwd')");
}
?>

</html>