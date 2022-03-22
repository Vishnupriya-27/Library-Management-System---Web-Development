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

 // if (isset($_POST['ADD'])) {
    $bksub=$_POST['sub'];
    $bktit=$_POST['title'];
    $bkauth=$_POST['author'];
    $bkpub=$_POST['publish'];
     $cpbk=$_POST['copy'];
$editionno=$_POST['edition'];
$isbn=$_POST['isbn'];
$cop=$_POST['copy'];
   

$sql = "INSERT INTO addbooks (booksub,booktitle,bookauthor,bookpublisher,copywritebook,editionno,isbn,noofcopies)
VALUES ('$bksub','$bktit','$bkauth','$bkpub','$cpbk','$editionno','$isbn','$cop')";

if ($conn->query($sql) === TRUE) {
    echo "<h1><font color='green'>Your Books Are Stored Successfully!!!</h1></font>";
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