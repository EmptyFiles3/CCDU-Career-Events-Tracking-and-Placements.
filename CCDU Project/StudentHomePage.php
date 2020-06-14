<?php
session_start();
require_once"config.php";

// initializing variables
$username = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("127.0.0.1","s1832667","boyka","d1832667");

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM registered_students WHERE username='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['username'] === $username) {
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO registered_students (username, email, password) 
  			  VALUES('$username', '$email', '$password')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: index1.php');
  }
}

// LOGIN USER
if (isset($_POST['login_user'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($username)) {
  	array_push($errors, "Username is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM registered_students WHERE username='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: index1.php');
  	}else {
  		array_push($errors, "Wrong username/password combination");
  	}
  }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
	    <meta charset="UTF-8">
<title>Students HomePage</title>
<style type="text/css">
p.two,b.one{
	color:rgb(255,255,255);}
</style>
</head>


<body>

<img src="ImagesCCDU/image009.jpg"/>

<fieldset style="background-color:Darkblue"> <a href="HomePage.php"><b class="one"><p align="center">Home<p></b></a></fieldset>
<p style="color:Darkblue;font-size:30">Welcome to the Student Career Service</p> 
<p>
<p>
<img src="ImagesCCDU/image005.png" align="right" height="100"/><br>
<p>Current Students can:<br><ul><li>Access and view profile</li>
			<li>Check Events</li>
			<li>Chat with Employer</li>
			<li>Apply for Events</li></p></p>

<h2>Please Sign In</h2>
<fieldset>
<form method="post" action="StudentHomePage.php">
<?php include('errors.php'); ?>
<div class="input-group">
<p>Username:
	<input type="text" name="username" size="15"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Password:
	<input type="password" name="password" size="15"
	maxlength="30" required="required" /></p></div>

<div class="input-group"><p align="center"><button type="submit" class="btn" name="login_user" >Login</button></div>

</p><a href="passwordReset.php"> Forgot your password?</a></p>
<p>Dont have account?<a href="StudentRegistration.php">Register</a></p>
</fieldset>
</form>
<br>

		<!-- Bottom OF Page Starts Here -->
<fieldset style="background-color:#8C5400">
<p class="two" align="right"><br>
<br> Copyright &copy 2000-2020<br>University of the Witwatersrand,Johannesburg.<br>
Privacy Policy | Disclaimer | Terms of Use | PAIA | ISPA | Admin</p>
<br></fieldset>
		<!-- Bottom OF Page Starts Here -->	
</body>
</html>
