<?php 
$host="localhost";
$user="root";
$pass="";
$db="librarymanagesystem";
$con=mysqli_connect($host,$user,$pass,$db);

if ($con->connect_error) {
	die("connection failed:".$con->connect_error);
	# code...
}

	$b=$_POST['nb'];
	$sql="SELECT * FROM addbooks where booktitle='$b'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1) {
	echo "<h1>$b Book available in the library...You can borrow the book..</h1>";
	# code...
}
else
{

	echo "<h1>Book not available...Try or search with another Books</h1>";
}
mysqli_close($con);


?>

<html>
<body>
<input type="submit" value="LOG OUT" onClick="parent.location='library.php'">
</body>
</html>