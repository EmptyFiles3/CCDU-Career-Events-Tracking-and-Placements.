<?php 
  include('Session2.php')
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<!-- <script src="navbar.js"></script> -->
</head>
<body>
<nav>
 <ul>
  <li><a href="index2_01.php">Profile</a></li>
  <li><a href="index2_02.php">Post Event</a></li>
  <li><a href="index2_03.php">Messages</a></li>
  <li><a href="index2_04.php">About</a></li>
 </ul>
</nav>
<div class="header">
	<h2>Home Page</h2>
</div>
<div class="content">
  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php 
          	echo $_SESSION['success']; 
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p><br>
    	<p> <a href="EmployerLogin.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
