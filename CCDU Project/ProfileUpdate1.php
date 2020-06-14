<?php 
include('Session.php');
require_once"Update1Server.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Profile Update</title>

</head>
<body>
 <?php if (isset($_SESSION['username'])) : ?>
	<h1 align="center"> <strong><?php echo $_SESSION['username']; ?></strong> Profile</h1>
 <?php endif ?>
<fieldset>

<form method="post" action="ProfileUpdate1.php">
        <?php include('errors.php'); ?>

<div class="input-group">
<p>First Name :
	<input type="text" name="first_name" required="required" /></p></div>

<div class="input-group">
<p>Last Name :
	<input type="text" name="last_name" required="required"  /></p></div>

<div class="input-group">
<p>Email :
        <input type="text" name="email" required="required"  /></p></div>

<div class="input-group">
<p>Contacts :
	        <input type="text" name="tell" required="required"  /></p></div>

<div class="input-group">
<p>Gender :
        <input type="text" name="gender" required="required"  /></p></div>

<div class="input-group">
<p>Faculty :
        <input type="text" name="fuculty" required="required"  /></p></div>

<div class="input-group">
<p>Qualification :
        <input type="text" name="qualification" required="required"  /></p></div>

<div class="input-group">
<p>Skills and Interests :
        <input type="text" name="skills_interest" required="required"  /></p></div>

<br>
<div class="input-group">
<button class="btn" name="reg_update">Update</button></div>
</form>
</fieldset>
<br><a href="index1_01.php">Back</a>
</body>
</html>
