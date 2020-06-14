<?php
include('Session.php')
?>
<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
  <title>Post Event</title>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>

<body>
<nav>
 <ul>
   <li><a href="index2.php">Home</a></li>
   <li><a href="index2_01.php">Profile</a></li>
   <li><a href="index2_03.php">Messages</a></li>
   <li><a href="index2_04.php">About</a></li>
 </ul>
</nav>
<p>Please note in order to post an event you have to fill the form bellow.<p><br> 
<p>Click here: <a href="EventForm.php"><b>Event Form</b></a></p>
<br>
<?php require_once"notification2.php"; ?>
</body>

</html>
