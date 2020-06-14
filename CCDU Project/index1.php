<?php 
  include('Session.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="navbar.css">
	<script src="jquery-3.4.0.min.js"></script> 
	<script src="navbar.js"></script>
</head>
<body>
<!-- Navigation bar starts here -->
<nav>
<ul>
	   <button> 🞬 </button>

  <li><a href="index1_01.php""><b>Profile</b></a></li>
  <li> <a href="index1_02.php"><b>Notifications</b></a></li>
  <li> <a href="index1_03.php"><b>Messages</b></a></li>
  <li> <a href="index1_04.php"><b>About</b></a></li>
</ul>
</nav>

<div class="header">
	<h1>Welcome</h1>
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
    	<p>Welcome <strong><?php echo $_SESSION['username']; ?></strong>,</p>
	<p>Here you can check and update your profile,apply and get notified on posts.</p><br>
    	<p> <a href="StudentHomePage.php?logout='1'" style="color: red;">logout</a> </p>
    <?php endif ?>
</div>
		
</body>
</html>
