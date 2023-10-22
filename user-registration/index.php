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