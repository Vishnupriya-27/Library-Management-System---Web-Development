




<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "librarymanagesystem";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

 // if (isset($_POST['SUBMIT FEEDBACK'])) {
    $feedback=$_POST['txt'];
    $frstname=$_POST['fn'];
    $lastname=$_POST['ln'];
    $email=$_POST['mail'];
   

$sql = "INSERT INTO feedback (feedback,fn,ln,email)
VALUES ('$feedback','$frstname','$lastname','$email')";



           
   $from="vishnupriya27062001@gmail.com";
    $to=$_POST['mail'];
    $subject="library management system";
    $message="Thank you for giving feedback";
    if(mail($to,$subject,$message,$from)){
      echo "<h1>We received your Feedback...Thank you for giving Feedback!!</h1>";
    }
    else{
      echo "not sent";
    }
          


if ($conn->query($sql) === TRUE) {
    echo "<h1><font color='red'>Your Feedback is Stored!!!</h1></font>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//}






$conn->close();
?>

<html>
<body>
<input type="submit" value="LOG OUT" onClick="parent.location='library.php'">
</body>
</html>