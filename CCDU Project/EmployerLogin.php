
<?php
// include server.php file for data processing
include('server.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="UTF-8">
<title>Login Page</title>
<style type="text/css">
p.two,b.one{
	color:rgb(255,255,255);}
</style>
</head>

<body>
<img src="ImagesCCDU/image009.jpg"/>
<!--<hr length="100%" color="Darkblue" ></hr>-->
<fieldset style="background-color:Darkblue"> <a href="HomePage.php"><b class="one"><p align="center">Home<p></b></a></fieldset>
<p style="color:Darkblue;font-size:30">Welcome to the Student Career Service</p> 
<h2>Please Sign In</h2>

<form method="post" action="EmployerLogin.php">
<fieldset style="background-color:">
<div class="input-group">
<p>Username:
	<input type="text" name="username" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Password:
	<input type="password" name="password" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
	<p align="center"><button type="submit" class="btn" name="login_user">Login</button></div></p>
</form>
</p><a href="passwordReset2.php">Forgot your password?</a></p></fieldset><br>
<p>Note: Username is Company Name!</p>
<p>Don't have an account?<br>Click <a href="RegistrationPage.php">here</a> to create a free account where Employers give career services to students.</p>

<p align="right"><a href="EmployerHomePage.php"><b>Back</b></a></p>

<fieldset style="background-color:#8C5400">
<p class="two" align="right"><br>
<br> Copyright &copy 2000-2020<br>University of the Witwatersrand,Johannesburg.<br>
Privacy Policy | Disclaimer | Terms of Use | PAIA | ISPA | Admin</p>
<br></fieldset>
</body>

</html>
