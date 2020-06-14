<?php
// Include config file and server.php file for data processing
include('server.php')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
<title>Registration Page</title>
<style type="text/css">
p.two{
	color:rgb(255,255,255);}
h2{
	color:blue}
</style>
</head>

<body>
<img src="ImagesCCDU/image009.jpg"/>
<img src="ImagesCCDU/image003.png" /><br>
<img src="ImagesCCDU/image001.jpg"  width="100%"/>
<a href="HomePage.php"><b class="one"><p align="center">Home</p></b></a>
<hr length="100%" color="Darkblue" >
<p style="color:Darkblue;">Welcome to the Student Career Service Registration Page</p>
<p><b>Fill in all details required below:</b></p>

<form method="post" action="RegistrationPage.php">
	<?php include('errors.php'); ?>
<fieldset style="background-color:silver">
<div class="input-group">
<p>Company Name	     :		
		<input type="text" name="username" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Company Registration Number:
	<input type="text" name="reg_no" size="20"
maxlength="30" required="required"/></p></div>
<fieldset>
<legend><h3>COMPANY SPOKE PERSON/REFERENCE</h3></legend>
<div class="input-group">
<p>Name	     :		
		<input type="text" name="name_one" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Email	     :		
		<input type="email" name="email_one" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Position in Company   :		
		<input type="text" name="pos_one" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Tell/Contact Number   :		
		<input type="text" name="tell_one" size="30"
	maxlength="30" required="required" /></p></div>
</fieldset>
<fieldset>
<legend><h3>DETAILS FOR PERSON REGISTERING</h3></legend>
<div class="input-group">
<p>Name	     :		
		<input type="text" name="name_two" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Email	     :		
		<input type="email" name="email_two" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Position in Company	     :		
		<input type="text" name="pos_two" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Tell/Contact Number     :		
		<input type="text" name="tell_two" size="30"
	maxlength="30" required="required" /></p></div>
</fieldset>
<p>Provide a strong password below</p>
<div class="input-group">
<p>Password	     :		
		<input type="password" name="password_1" size="30"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Confirm Password    :		
		<input type="password" name="password_2" size="30"
	maxlength="30" required="required" /></p></div>

<div class="input-group">
<p><button type="submit" class="btn" name="reg_user">submit</button></p></div>
</fieldset>
</form>
<p>Other questions? Please contact Student Career Services via studentscareerservices@wits.ac.za</p>
<p>Please note that registration verification may take max,up to 3 working days to process.</p>
<p>Already have an account? <a href="EmployerLogin.php">Sign In</a>.</p>
<p align="right"><a href="EmployerHomePage.php"><b>Back</b></a></p>

<fieldset style="background-color:#8C5400">
<p class="two" align="right"><br>
<br> Copyright &copy 2000-2020<br>University of the Witwatersrand,Johannesburg.<br>
Privacy Policy | Disclaimer | Terms of Use | PAIA | ISPA | Admin</p>
<br></fieldset>
</body>

</html>
