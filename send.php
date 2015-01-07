<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
//establishing connection
$con=mysqli_connect("localhost","root","","jiten");
//checking connection
if(mysqli_connect_errno())
	{
	echo "Error in Logging in!!!" . mysqli_connect_error();
	}
//defining variable check
$Name=$Chkevent="";

function test_input($data)
{
	$data=trim($data);
	$data=stripcslashes($data);
	$data=htmlspecialchars($data);
}
	$name=test_input($_POST["name"]);
	$college=test_input($_POST["college"]);
	$email=test_input($_POST["email"]);
	$contact=test_input($_POST["contact"]);

$sql="INSERT INTO Database2015(Sr, Name, College, EmailID, Contact)
		VALUES
		('$_POST[]','$_POST[Event]')";	

if(!mysqli_query($con,$sql));
	{
	echo "Submission Successful ";
	}
?>
<p id="text">
To view responses
<form action="Allevents.php" method="post">
<input type="submit" value="Click here" formaction="Allevents.php">
</form>
</body>
</html>