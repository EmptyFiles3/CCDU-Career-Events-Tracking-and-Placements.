<?php
include('session2.php')

// initializing variables
$username = "";
$email    = "";
$event_title="";
$errors = array();


$db = mysqli_connect("127.0.0.1","s1832667","boyka","d1832667");


// REGISTER USER
if (isset($_POST['reg_form'])) {
  // receive all input values from the form
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name = mysqli_real_escape_string($db, $_POST['name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $tell = mysqli_real_escape_string($db, $_POST['tell']);

   $event_location = mysqli_real_escape_string($db, $_POST['event_location']);
   $event_start_date = mysqli_real_escape_string($db, $_POST['event_start_date']);
   $start_time = mysqli_real_escape_string($db, $_POST['start_time']);
   $event_end_date = mysqli_real_escape_string($db, $_POST['event_end_date']);
   $end_time = mysqli_real_escape_string($db, $_POST['end_time']);
   $event_decription = mysqli_real_escape_string($db, $_POST['event_decription']);
   $event_speakers = mysqli_real_escape_string($db, $_POST['event_speakers']);

   $reg_link = mysqli_real_escape_string($db, $_POST['reg_link']);
   $reg_start = mysqli_real_escape_string($db, $_POST['reg_start']);
   $reg_close = mysqli_real_escape_string($db, $_POST['reg_close']);
   $target_fuculties = mysqli_real_escape_string($db, $_POST['target_fuculties']);
   $experience_level = mysqli_real_escape_string($db, $_POST['experience_level']);
   $event_language = mysqli_real_escape_string($db, $_POST['event_language']);

// form validation


  if (empty($username)) { array_push($errors, "Company name is required"); }
  if (empty($name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($tell)) { array_push($errors, "Contact is required"); }


  if (empty($event_title)) { array_push($errors, "Event title is required"); }
  if (empty($event_type)) { array_push($errors, "Event Type is required"); }
  if (empty($event_location)) { array_push($errors, "Event Location is required"); }
  if (empty($event_start_date)) { array_push($errors, "Event start date is required"); }
  if (empty($start_time)) { array_push($errors, "Event start time is required"); }
  if (empty($event_end_date)) { array_push($errors, "Event end date is required"); }
  if (empty($end_time)) { array_push($errors, "Event end time is required"); }
  if (empty($event_decription)) { array_push($errors, "Event description is required"); }
  if (empty($event_speakers)) { array_push($errors, "Event speaker is required"); }


  if (empty($reg_type)) { array_push($errors, "Registration type is required"); }
  if (empty($reg_link)) { array_push($errors, "Email/URL is required"); }
  if (empty($reg_start)) { array_push($errors, "Start of registration is required"); }
  if (empty($reg_close)) { array_push($errors, "end of registration is required"); }
  if (empty($target_fuculties)) { array_push($errors, "Target audience is required"); }
  if (empty($experience_level)) { array_push($errors, "Experience level is required"); }
  if (empty($event_language)) { array_push($errors, "Event Language is required"); }

 // first check the database to make sure
  //same event does not already exist with the same username and/or  event title
  $user_check_query = "SELECT * FROM event_form WHERE username='$username' AND event_title='$event_title' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if Event exists
    if ($user['event_title'] === $event_title) {
      array_push($errors, "Event already exists");
    }
   }

  // Finally, upload event if there are no errors in the form
  if (count($errors) == 0) {



        $query = "INSERT INTO event_form (username,name,email,tell,event_title,event_type,event_location,event_start_date,start_time,event_end_date,event_decription,event_speakers,reg_type,reg_start,reg_close,target_audience,experience_level,event_language,reg_link)
               VALUES('$username','$name','$email','$tell','$event_title','$event_type','$event_location','$event_start_date','$start_time','$event_end_date','$end_time','$event_decription','$event_speakers','$reg_type','$reg_start','$reg_close','$target_fuculties','$experience_level','$event_language','$reg_link')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: SuccessfulUpload.php');
  }
}
?>
