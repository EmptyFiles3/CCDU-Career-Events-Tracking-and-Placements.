<?php

// initializing variables
$username = "";
$reg_no    = "";
$errors = array();

// connect to the database
$db = mysqli_connect("127.0.0.1","s1832667" ,"boyka" , "d1832667");


if (isset($_SESSION['username'])) {
        $Session_name= $_SESSION['username'];
$errors = array();
// REGISTER USER
if (isset($_POST['reg_update'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $email   = mysqli_real_escape_string($db, $_POST['email']);
  $tell = mysqli_real_escape_string($db, $_POST['tell']);
  $gender = mysqli_real_escape_string($db, $_POST['gender']);
  $fuculty = mysqli_real_escape_string($db, $_POST['fuculty']);
  $qualification = mysqli_real_escape_string($db, $_POST['qualification']);
  $skills_interest = mysqli_real_escape_string($db, $_POST['skills_interest']); 

 // form validation: ensure that the form is correctly filled ...
 // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "First name is required"); }
  if (empty($last_name)){array_push($errors,"Last  name is required");}
  if (empty($email)){array_push($errors,"Email is required");}
  if (empty($tell)) { array_push($errors, "Contact details required"); }
  if (empty($gender)) {array_push($errors, "Gender is missing ");}
  if (empty($fuculty)) {array_push($errors, "Fuculty is required ");}
  if (empty($qualification)) {array_push($errors, "Qualification is missing ");}
  if (empty($skills_interest)) {array_push($errors, "Skills/Interest  missing ");}


// Finally, update user  Profile if there are no errors in the form
  if (count($errors) == 0) {
        $query = "UPDATE students_profile SET first_name='$first_name',last_name='$last_name',email='$email',tell='$tell',gender='$gender',fuculty='$fuculty',qualification='$qualification',skills_interest='$skills_interest' WHERE username='$Session_name'";
        mysqli_query($db, $query);
	$query_2 ="UPDATE registered_students SET email='$email' WHERE username='$Session_name'";
	mysqli_query($db, $query_2);
        $_SESSION['username'] = $Session_name;
        $_SESSION['success'] = "You have successuly updated your profile";
        header('location: index1_01.php');
                 }
        }

}
?>
