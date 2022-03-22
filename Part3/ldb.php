<?php

$db = mysqli_connect('localhost', 'root', '', 'librarymanagesystem');



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

 // if (isset($_POST['SUBMIT'])) {
    $libid=$_POST['a'];
    $name=$_POST['b'];
    $password=$_POST['c'];
    $department=$_POST['d'];




$sql_n = "SELECT * FROM libsignup WHERE name='$name'";
  	$res_n = mysqli_query($db, $sql_n);
  	

  	if (mysqli_num_rows($res_n) >0) {
  	 $name_error = "Oops...Username already taken"; 	
echo "<h1>Username already taken...Try with different username.....</h1>";
  	}	
  	else
{
           $sql = "INSERT INTO libsignup (libid,name,password,department) 
      	   VALUES ('$libid','$name','$password','$department')";
           $results = mysqli_query($db, $sql);
           echo "<h1>Your information Saved!Login into our page..</h1>";
}        




   





           
    $from="vishnupriya27062001@gmail.com";
    $to="ts27062001@gmail.com";
    $subject="library management system";
    $message="New Librarian signed up for our page";
    if(mail($to,$subject,$message,$from)){
      echo "<h1>Thanks for signing in to our page!!!</h1>";
    }
    else{
      echo "mail not sent";
    }
          








$conn->close();
?>