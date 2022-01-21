<html>
<body>
	<?php
	echo "Create Account!";
	$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$userid=$_REQUEST['userid'];
	$username=$_REQUEST['username'];
	$email=$_REQUEST['email'];
	$gender=$_REQUEST['gender'];
	$password=$_REQUEST['password'];
	$mobile=$_REQUEST['mobile'];
	$address=$_REQUEST['address'];


	$query="insert into user values('$userid','$username','$email','$gender','$password','$mobile','$address')";
	$query1="insert into user1 values('$username','$userid','$password')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	$result=mysqli_query($dbh,$query1) or die(mysqli_error($dbh));
	echo "ACCOUNT CREATED SUCCESSFULLY!";



	$var=mysqli_query($dbh,"select *from user");

	echo"<table border size=1>";
	echo"<tr><th>userid</th> <th>Username</th> <th>Email</th> <th>Gender</th> <th>Password</th> <th>mobile</th> <th>address</th></tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td> <td>$arr[6]</td> </tr>";
	}
	echo"</table>";

	?>

	<a href="index.html">Click here for Home Page</a><br><br>

<body>
</html>