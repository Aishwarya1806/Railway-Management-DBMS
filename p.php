<html>
<body>
	<?php
	echo "Traveller Details!";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$name=$_REQUEST['name'];
	$age=$_REQUEST['age'];
	$gender=$_REQUEST['gender'];
	$phoneno=$_REQUEST['phoneno'];
	$authenticationproof=$_REQUEST['authenticationproof'];


	$query="insert into passenger values('$name','$age','$gender','$phoneno','$authenticationproof')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	echo "RESERVATION DONE SUCCESSFULLY!";


	$var=mysqli_query($dbh,"select *from passenger");

	echo"<table border size=1>";
	echo"<tr><th>Name</th> <th>Age</th> <th>Gender</th> <th>Phoneno</th> <th>authenticationproof</th></tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td></tr>";
	}
	echo"</table>";

	?>

	<a href="home.html">Click here for Home Page</a>

<body>
</html>
