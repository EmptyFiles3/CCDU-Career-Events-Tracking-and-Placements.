<?php
include('Session.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Profile</title>
      <link rel="stylesheet" href="navbar.css">
</head>
<body>
<nav>
  <ul>
     <li><a href="index1.php">Home</a> </li>
     <li><a href="index1_02.php">Notifications</a></li>
     <li><a href="index1_03.php">Messages</a></li>
     <li><a href="index1_04.php">About</a></li>
  </ul>
</nav>
<h2 align="center">MY PROFILE</h2>

<div class="content">
	<!-- User Profile displayed -->
	<?php if (isset($_SESSION['success'])) : ?>
      <div class = "error success">
	   <?php
 		echo $_SESSION['success'];
		unset($_SESSION['success']);
	   ?>
 	</div>
		<?php endif ?>

	<!-- loggeg in user information -->
<!--
	<?php if(isset($_SESSION['username'])) :?>
	<p>Username   : <strong><?php echo $_SESSION['username']; ?></strong></p>
	<p>First Name :</p>
	<p>Last Name  : </p>
	<p>Email      : </p>
	<p>Contact    : </p>
	<p>Gender     : </p>
	<p>Fuculty    : </p>
	<p>Qualification :</p>
	<p>Skills/Interests :</p>
	<?php endif ?>   -->

<?php require_once"Profile1.php"; ?>
<br>
</div>
<br>
<p align="center"><a href="ProfileUpdate1.php">Update Profile</a></p>
</body>
</html>
