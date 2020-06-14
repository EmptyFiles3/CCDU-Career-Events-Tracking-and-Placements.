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
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $name_one = mysqli_real_escape_string($db, $_POST['name_one']);
  $email_one = mysqli_real_escape_string($db, $_POST['email_one']);
  $pos_one = mysqli_real_escape_string($db, $_POST['pos_one']);
  $tell_one = mysqli_real_escape_string($db, $_POST['tell_one']);
  // form validation: ensure that the form is correctly filled ...
 // by adding (array_push()) corresponding error unto $errors array
  if (empty($username)) { array_push($errors, "Company name is required"); }
  if (empty($name_one)){array_push($errors,"Reference  name is required");}
  if (empty($email_one)){array_push($errors,"Reference email is required");}
  if (empty($pos_one)) { array_push($errors, "Spoke Person position field is required"); }
  if (empty($tell_one)) {array_push($errors, "Contact details missing ");}

 // Finally, Update Company Profile if there are no errors in the form
  if (count($errors) == 0) {
        $query = "UPDATE Employer_Reg SET username='$username',name_one='$name_one',email_one='$email_one',pos_one='$pos_one',tell_one='$tell_one' WHERE username='$Session_name'";
	mysqli_query($db, $query);
	$query_2 = "UPDATE event_form SET username='$username',name='$name_one',email='$email_one',tell='$tell_one' WHERE username = '$Session_name'";
	mysqli_query($db, $query_2);
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You have successuly updated your profile";
        header('location: index2_01.php');
                 }
        }

}


?>
