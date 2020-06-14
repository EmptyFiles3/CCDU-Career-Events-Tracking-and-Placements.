<?php
$mysqli =new mysqli("127.0.0.1","s1832667","boyka","d1832667");

 if (isset($_SESSION['username'])) {
        $username= $_SESSION['username']; 

$query = "SELECT * FROM Employer_Reg WHERE username='$username'";
//echo "<b><center>New Notification</center></b> <br> <br>";

if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["username"];
        $field2name = $row["name_one"];
        $field3name = $row["email_one"];
        $field4name = $row["pos_one"];
        $field5name = $row["tell_one"]; 
 
        echo '<tr> 
              <p> Company Name  :  <td>'.$field1name.'</td></p>
              <p> Reference Name :   <td>'.$field2name.'</td></p><br> 
              <p> Reference Email :   <td>'.$field3name.'</td></p><br> 
              <p> SpokePerson Position :   <td>'.$field4name.'</td></p><br> 
              <p> Contact details :   <td>'.$field5name.'</td> </p>
                        </tr>';
                }
        $result->free();
	}
}
?>

