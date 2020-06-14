<?php
 include('EventRegistration.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	    <meta charset="UTF-8">
	<title>Event Form</title>
</head>

<body>
<p><img src="ImagesCCDU/image009.jpg"/></p><br>
<p align="center"><b><i>Event Form</i></b></p>
<img src="ImagesCCDU/image001.jpg"  width="100%"/>


		<!-- Form Starts Here-->
<form method="post" action="EventForm.php">
     <?php include('errors.php'); ?>

<fieldset style="background-color:lightblue"> <!--outer border start here-->
<fieldset>
<legend><h2>About the organization</h2></legend>
<div class="input-group">
<p>Company name<br>
	<input type="text" name="username" size="20"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Name Contact Person<br>
	<input type="text" name="name" size="20"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>E-mail address of contact person<br>
	<input type="email" name="email" size="20"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Phone number contact person<br>
	<input type="text" name="tell" size="20"
	maxlength="30" required="required"/></p></div>
</fieldset>

<fieldset><legend><h2>About the event</h2></legend>
<div class="input-group">
<p>Title event<br>
	<input type="text" name="event_title" size="20"
	maxlength="30" required="required" /></p></div>
<div class="input-group">
<p>Event type:<br>
	<input type="radio"  name="event_type" value="Coaching" checked="checked"/>Coaching
	<input type="radio"  name="event_type" value="Conference/Presentation" checked="checked"/>Conference/Presentation
	<input type="radio"  name="event_type" value="Contest" checked="checked"/>Contest
	<input type="radio"  name="event_type" value="Job fair" checked="checked"/>Job fair
	<input type="radio"  name="event_type" value="Live chat/Webinar" checked="checked"/>Live chat/Webinar<br>
	<input type="radio"  name="event_type" value="Networking" checked="checked"/>Networking
	<input type="radio"  name="event_type" value="Recruitment session" checked="checked"/>Recruitment session
	<input type="radio"  name="event_type" value="Student club" checked="checked"/>Student club
	<input type="radio"  name="event_type" value="Visit" checked="checked"/>Visit
	<input type="radio"  name="event_type" value="Workshop" checked="checked"/>Workshop</p></div><br>
<div class="input-group">
<p>Location of the event:<br>
	<input type="radio" name="event_location" value="Campus" checked="checked"/>Campus
	<input type="radio" name="event_location" value="Address" checked="checked"/>Address
	<input type="radio" name="event_location" value="Online" checked="checked"/>Online
 </p></div>
<div class="input-group">
<p>Start of the event:<br>
<p>Date	<input type="date" name="event_start_date" required="required"/></p></div>
<div class="input-group">
<p> Time:
	<input type="time" name="start_time" required="required"/></p></div>
<div class="input-group">
<p>End of the event:<br>
<p>Date:<input type="date" name="event_end_date" required="required"/></p></div>
<div class="input-group">
<p>Time:<input type="time" name="end_time" required="required"/></p></div>
<div class="input-group">
<p>Event description<br>
	<input type="" name="event_decription" required="required"/><p></div>
<div class="input-group">
<p>Speakers<br>
	<input type="" name="event_speakers"/></p></div>
</fieldset>

<fieldset><legend><h2>Registration configuration</h2></legend>
<div class="input-group">
<p>How to register<br>
	<input type="radio" name="reg_type" value="Event without registration" required="required"
checked="checked"/>Event without registration
	<input type="radio" name="reg_type" value="Register via an external website" required="required"
checked="checked"/>Register via an external website
	<input type="radio" name="reg_type" value="Registration by e-mail" required="required"
checked="checked"/>Registration by e-mail</p></div>
<div class="input-group">
<p>URL of the website or the e-mail where you can register<br>
	<input type="text" name="reg_link" /></p></div>
<div class="input-group">
<p>Start registration:date and time<br>
	<input type="" name="reg_start" required="required"/></p></div>

<div class="input-group">
<p>End of registration:date and time<br>
	<input type="" name="reg_close" required="required"/></p></div>

<div class="input-group">
<p><b>Target audience(If you do not choose anything here,the event will be shown to everyone)</b>:<br>
Faculties<br>
	<input type="checkbox" name="target_fuculties" value="All faculties"/>All faculties
	<input type="checkbox" name="target_fuculties" value="Wits Humanities"/>Wits Humanities
	<input type="checkbox" name="target_fuculties" value="Wits Commerce,Law and Management "/>Wits Commerce,Law and Management
	<input type="checkbox" name="target_fuculties" value="Wits Health Sciences"/>Health Sciences
	<input type="checkbox" name="target_fuculties" value="Wits Science"/>Wits Science
	<input type="checkbox" name="target_fuculties" value="Wits Engineering and the built Environment"/>Wits Egineering and the built Environment
</p></div>
<div class="input-group">
<p>Experience levels<br>
	<input type="checkbox" name="experience_level" value="Everyone"/>Everyone
	<input type="checkbox" name="experience_level" value="Students"/>Students
	<input type="checkbox" name="experience_level" value="Recent graduates"/>Recent graduates
	<input type="checkbox" name="experience_level" value="Undergraduate students"/>Undergraduate students
	<input type="checkbox" name="experience_level" value="(pre-)Materstudent"/>(pre-)Masterstudent
	<input type="checkbox" name="experience_level" value="Research Master"/>Research Master
</p></div>
<div class="input-group">
<p>Language during the event<br>
	<input type="checkbox" name="event_language" value="English"/>English
	<input type="checkbox" name="event_language" value="Other"/>Other
</p></div>
</filedset> <br>
<div class="input-group">
<p><button type="submit" class="btn" name="reg_form">submit</button></p>
</div>
</fieldset> <!--outer border end here-->

</form>
		<!-- Form End Here -->
<br>
<p><a href="index2_02.php">Back</a></p>

</body>
</html>
