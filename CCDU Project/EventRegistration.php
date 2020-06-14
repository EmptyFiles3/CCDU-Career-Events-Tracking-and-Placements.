<?php
session_start();

//initializing variables
 $username = "";
 $event_title = "";
 $errors = array();

//connect to the database
   $db = mysqli_connect("127.0.0.1","s1832667","boyka","d1832667");

//Registering a form
   if (isset($_POST['reg_form'])) {
   //receive all input from the form
           //about the event
 $username = mysqli_real_escape_string($db, $_POST['username']);
 $name = mysqli_real_escape_string($db, $_POST['name']);
 $email = mysqli_real_escape_string($db, $_POST['email']);
 $tell = mysqli_real_escape_string($db, $_POST['tell']);
          //about event
 $event_title = mysqli_real_escape_string($db, $_POST['event_title']);
 $event_type = mysqli_real_escape_string($db, $_POST['event_type']);
 $event_location = mysqli_real_escape_string($db, $_POST['event_location']);
 $event_start_date = mysqli_real_escape_string($db, $_POST['event_start_date']);
 $start_time = mysqli_real_escape_string($db, $_POST['start_time']);
 $event_end_date = mysqli_real_escape_string($db, $_POST['event_end_date']);
 $end_time = mysqli_real_escape_string($db, $_POST['end_time']);
 $event_decription = mysqli_real_escape_string($db, $_POST['event_decription']);
 $event_speakers = mysqli_real_escape_string($db, $_POST['event_speakers']);
   //Registration Configuration
 $reg_type = mysqli_real_escape_string($db, $_POST['reg_type']);
 $reg_link = mysqli_real_escape_string($db, $_POST['reg_link']);
 $reg_start = mysqli_real_escape_string($db, $_POST['reg_start']);
 $reg_close = mysqli_real_escape_string($db, $_POST['reg_close']);
 $target_fuculties = mysqli_real_escape_string($db, $_POST['target_fuculties']);
 $experience_level = mysqli_real_escape_string($db, $_POST['experience_level']);
 $event_language = mysqli_real_escape_string($db, $_POST['event_language']);


//form validation, ensure that the form is correctly filles.
  if(empty($username)) { array_push($errors, "Company name is required");}
  if(empty($name)) { array_push($errors, " Name is required");}
  if(empty($email)) { array_push($errors, "Email is required");}
  if(empty($tell)) { array_push($errors, "Tell is required");}

  if(empty($event_title)) { array_push($errors, "Event title is required");}
  if(empty($event_type)) { array_push($errors, "Event type is required");}
  if(empty($event_location)) { array_push($errors, "Event location name is required");}
  if(empty($event_start_date)) { array_push($errors, "Event start date is required");}
  if(empty($start_time)) { array_push($errors, "Event start time is required");}
  if(empty($event_end_date)) { array_push($errors, "Event end date is required");}
  if(empty($end_time)) { array_push($errors, "Event end time is required");}
  if(empty($event_decription)) { array_push($errors, "Event descriptin is required");}
  if(empty($event_speakers)){array_push($errors, "Event speaker is required");}

  if(empty($reg_type)){array_push($errors, "Registration type is required");}
  if(empty($reg_link)){array_push($errors, "Registration link is missing");}
  if(empty($reg_start)){array_push($errors, "Registration start time and date is required");}
  if(empty($reg_close)){array_push($errors, "Registration end time and date is required");}
//  if(empty($target_fuculties)){array_push($errors, "Target Audience is required");}
  if(empty($experience_level)){array_push($errors, "Experience level is required");}
  if(empty($event_language)){array_push($errors, "Event language is required");}

//first check if the same event exist in the database
 $user_check_query = "SELECT * FROM event_form WHERE username='$username' AND event_title='$event_title' LIMIT 1";
 $result = mysqli_query($db,$user_check_query);
 $user = mysqli_fetch_assoc($result);

  if($user){ //if event exist
   if($user['event_title'] === $event_title){
        array_push($errors, "This event already exists");
     }
   }

// finally upload form if there are no errors
 if(count($errors) == 0){

     $query = "INSERT INTO event_form (username,name,email,tell,event_title,event_type,event_location,event_start_date,start_time,event_end_date,end_time,event_decription,event_speakers,reg_type,reg_start,reg_close,target_fuculties,experience_level,event_language,reg_link)
        VALUES ('$username','$name','$email','$tell','$event_title','$event_type','$event_location','$event_start_date','$start_time','$event_end_date','$end_time','$event_decription','$event_speakers','$reg_type','$reg_start','$reg_close','$target_fuculties','$experience_level','$event_language','$reg_link')";
    mysqli_query($db,$query);
    $_SESSION['username'] = $username;
    $_SESSION['success'] = "You have successfuly uploaded the event";
    header('location:SuccessfulUpload.php');
   }
}
?>
