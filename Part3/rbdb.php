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

 // if (isset($_POST['Return'])) {
    $reg=$_POST['rn'];
    $bkno=$_POST['bn'];
    $isdate=$_POST['id'];
     $dudate=$_POST['dd'];
       $retdate=$_POST['rd'];
   

$sql = "INSERT INTO returnbooks (regno,bookno,issuedate,duedate,returndate)
VALUES ('$reg','$bkno','$isdate','$dudate','$retdate')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><font color='green'>Your returned these Books!!!</h1></font>";
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