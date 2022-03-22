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

	$u=$_POST['user'];
	$p=$_POST['pass'];
	$sql="SELECT * FROM libsignup where name='$u' and password='$p'";

$result=mysqli_query($con,$sql);

if(mysqli_num_rows($result)==1) {
	//echo "<h1>hello $u</h1> ";
header("Location: framee.php");
                	
}
else
{
	echo "<h1>Invalid credentials.....Incorrect Username or Password..Try with correct username and password...</h1>";
}


mysqli_close($con);
?>
