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
    $regno=$_POST['reg'];
    $name=$_POST['user'];
    $password=$_POST['pass'];
    $department=$_POST['dept'];
     $mobileno=$_POST['mob'];
$semester=$_POST['sem'];
$batch=$_POST['bat'];
   



   


$sql_n = "SELECT * FROM stusignup WHERE name='$name'";
  	$res_n = mysqli_query($db, $sql_n);
  	

  	if (mysqli_num_rows($res_n) >0) {
  	 $name_error = "Oops...Username already taken"; 	
echo "<h1>Username already taken...Try with different username.....</h1>";
  	}	
  	else
{
           $sql = "INSERT INTO stusignup (regno,name,password,department,mobile,semester,batch) 
      	    	  VALUES ('$regno','$name','$password','$department','$mobileno','$semester','$batch')";
           $results = mysqli_query($db, $sql);
           echo "<h1>Your information Saved!Login into our page..</h1>";
}        
















 $from="vishnupriya27062001@gmail.com";
    $to="ts27062001@gmail.com";
    $subject="library management system";
    $message="New STUDENT signed up for our page";
    if(mail($to,$subject,$message,$from)){
      echo "<h1>Thanks for signing in into our page!!!</h1>";
    }
    else{
      echo "mail not sent";
    }







$conn->close();
?>