<?php
include('Session.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <title>Profile</title>
     <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
<nav>
 <ul>
   <li><a href="index2.php">Home</a></li>
   <li><a href="index2_02.php">Post Event</a></li>
   <li><a href="index2_03.php">Messages</a></li>
   <li><a href="index2_04.php">About</a></li>
 </ul>
</nav>
<h2 align="center">My Profile</h2>
<!-- <?php if (isset($_SESSION['username'])) : ?>
        <p>Company Name         : <strong><?php echo $_SESSION['username']; ?></strong></p>
	<p>Reference Name       :</p>
	<p>Reference Email      :</p>
	<p>SpokePerson Position :</p>
	<p>Contacts		:</p>
 <?php endif ?> -->
<?php require_once"Profile2.php"; ?>
<p align="center"><a href="ProfileUpdate2.php">Update Profile</a></p>
</body>

</html>
