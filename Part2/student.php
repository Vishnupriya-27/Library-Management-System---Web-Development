<html>
<head>
<script>
function fun()
{
var x=/^([0-9]{5})([0-9]{5})$/;
if(document.getElementById('t1').value.match(x))
{
alert("the entered details is verified and correct and it is matched with the pattern");
}
else
{
alert("please enter the correct mobile number");
}
}
</script>
</head>
<body bgcolor="lightpink">
<center>
<h2>SIGNIN FOR NEW STUDENT</h2>
<form action="sdb.php" method="post">
<p><label>Reg No:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" placeholder="enterregno" name="reg" required></p>
<p><label>Name:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" placeholder="entername" name="user" required></p>
<p><label>Password:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" size="20" placeholder="enterpassword" name="pass" required></p>
<p><label>Department:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" name="dept"  required></p>
<p><label>Mobile no:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mob" id="t1" required></p>
<p><label>Semester:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" name="sem" required></p>
<p><label>Batch:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" size="20" name="bat" required></p>
<center><input type="submit" value="SUBMIT" onClick="fun()"></center>
</form>
</center>
</body>
</html>