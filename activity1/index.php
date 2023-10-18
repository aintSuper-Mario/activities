

<!DOCTYPE html>
<html>

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles.css">
<title>Registration Form</title>
</head>

<body>
<h1 class="heading">REGISTRATION FORM</h1>
<div class="form-container">
<form class="login-box" onsubmit="return storeDataLocally();" method="POST">
<input class="nameForm" type="text" placeholder="Username" name="username">
<input type="text" placeholder="Email Address" name="email">
<input type="text" placeholder="First Name" name="fname">
<input type="text" placeholder="Last Name" name="lname">
<input type="password" placeholder="Enter Password" name="pwd">
</div>


<p><a href="index.php" id="mini">Already have an account?</a><br></p>

<button class="btn" type="submit" name="submit">Create Account</button>
</form>

<script>
function storeDataLocally() {
var usernameInput = document.querySelector('input[name="username"]');
var emailInput = document.querySelector('input[name="email"]');
var fnameInput = document.querySelector('input[name="fname"]');
var lnameInput = document.querySelector('input[name="lname"]');
var pwdInput = document.querySelector('input[name="pwd');

var username = usernameInput.value;
var email = emailInput.value;
var fname = fnameInput.value;
var lname = lnameInput.value;
var pwd = pwdInput.value;

var userObject = {
username: username,
email: email,
fname: fname,
lname: lname,
pwd: pwd
};

localStorage.setItem('userData', JSON.stringify(userObject));


usernameInput.value = '';
emailInput.value = '';
fnameInput.value = '';
lnameInput.value = '';
pwdInput.value = '';


return false;
}
</script>
</body>
</html>
