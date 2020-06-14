<?php
$mysqli =new mysqli("127.0.0.1","s1832667","boyka","d1832667");

 if (isset($_SESSION['username'])) {
        $username= $_SESSION['username'];

$query = "SELECT * FROM students_profile WHERE username='$username'";
//echo "<b><center>New Notification</center></b> <br> <br>";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["first_name"];
        $field3name = $row["last_name"];
        $field4name = $row["email"];
        $field5name = $row["tell"];
	$field6name = $row["gender"];
	$field7name = $row["fuculty"];
	$field8name = $row["qualification"];
	$field9name = $row["skills_interest"];

        echo '<tr> 
              <p> Username   :  <td>'.$field1name.'</td></p>
              <p> First Name :   <td>'.$field2name.'</td></p><br> 
              <p> Last Name  :   <td>'.$field3name.'</td></p><br> 
              <p> Email      :   <td>'.$field4name.'</td></p><br> 
              <p> Contacts   :   <td>'.$field5name.'</td> </p>
	      <p> Gender     :   <td>'.$field6name.'</td> </p>
	      <p> Fuculty    :   <td>'.$field7name.'</td> </p>
              <p> Qualification :   <td>'.$field8name.'</td> </p>
	      <p> Skills/Interests :   <td>'.$field9name.'</td> </p>
                        </tr>';
                }
        $result->free();
        }
}
?>


