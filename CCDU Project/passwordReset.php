<?php
session_start();

// initializing variables
$username = "";
$reg_no    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect("127.0.0.1","s1832667" ,"boyka" , "d1832667");


// Reset Password
if (isset($_POST['pw_reset'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);

// form validation: ensure that the form is correctly filled ...
  if (empty($username)) { array_push($errors, "Username is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
        array_push($errors, "The two passwords do not match");  }


  // update user password if there are no errors in the form
  if (count($errors) == 0) {
        $password = md5($password_1);//encrypt the password before saving in the database

        $query = "UPDATE registered_students SET password='$password' WHERE username='$username'";
        mysqli_query($db, $query);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have successfuly updated your password";
        header('location: StudentHomePage.php');
 	 }
}

?>
<!DOCTYPE html>
<html lang="en">

<fieldset>
<form method="post" action="passwordReset.php">
	<?php include('errors.php'); ?>

<div class="input-group">
<p>Username:	<input type="text" name="username"></p></div>
<div class="input-group">
<p>Enter New Password : <input type="text" name="password_1"></p></div>
<div class="input-group">
<p>Confirm Password : <input type="text" name="password_2"></p></div>
<div class="input-group">
<p><button type="submit" class="btn" name="pw_reset">Submit</button></p></div>
</form>
</fieldset>
<p><a href="StudentHomePage.php">Back</a></p>
<html>
