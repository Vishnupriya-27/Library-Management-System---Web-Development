<html>
<head>
<script>
function fun()
{
var a=/^[a-z]{1}\w+([\._]?\w+)*@\w+([\._]?\w+)*(\.\w{2,5})+$/;
if(document.getElementById("t1").value.match(a))
{
alert("Valid Mail ID...Entered mail ID is matched with the pattern!");
}
else
{
alert("Invalid Mail ID....Please enter the valid mail ID!");
}
}
</script>
</head>
<body bgcolor="lightgrey">
<h1>FEEDBACK FORM</h1>
<p>We would love to hear your thoughts,concers or problems with anything so we can improve!</p>
<hr>
<form action="fb1.php" method="post">
<p><label>Describe feedback:</label><br>
<textarea rows="25" cols="100" name="txt" required></textarea></p>
<p><label>
Name:</label><input type="text" placeholder="First name" name="fn" required>
<input type="text" placeholder="Last name" name="ln" required></p>
<p><label>
Email:</label><input type="email" placeholder="ex:accc.@gmail.com" name="mail" id="t1" required>
</p>
<p><input type="submit" value="SUBMIT FEEDBACK" onClick="fun()"></p>
</form>
</body>
</html>