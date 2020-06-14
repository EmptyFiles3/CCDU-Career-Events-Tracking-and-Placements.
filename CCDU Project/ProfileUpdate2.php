<?php 
include('Session2.php');
require_once"Update2Server.php"
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
<form method="post" action="ProfileUpdate2.php">
        <?php include('errors.php'); ?>

<div class="input-group">
<p>Username :
	<input type="text" name="username" required="required"/></p></div>
<div class="input-group">
<p>Reference Name :
	<input type="text" name="name_one" required="required"/></p></div>
<div class="input-group">
<p>Reference Email :
	<input type="text" name="email_one" required="required"/></p></div>
<div class="input-group">
<p></p></div>
<div class="input-group">
<p>Spokes Person Position :
	<input type="text" name="pos_one" required="required"/></p></div>
<div class="input-group">
<p>Contact details :
	<input type="text" name="tell_one" required="required" /></p></div>

<br>
<div class="input-group">
<p align="center"><button type="submit" class="btn" name="reg_update">submit</button></p></div>
</form>
</fieldset>
<br>
<p><a href="index2_01.php">Back</a></p>
</body>
</html>
