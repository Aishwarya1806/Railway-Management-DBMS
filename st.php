<html>
<body>
	<?php
	echo "Train Station Details!";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$stationname=$_REQUEST['stationname'];
	$stationnumber=$_REQUEST['stationnumber'];
	$numberoftrains=$_REQUEST['numberoftrains'];
	$numberofplatforms=$_REQUEST['numberofplatforms'];


	$query="insert into train_station values('$stationname','$stationnumber','$numberoftrains','$numberofplatforms')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	echo "RESERVATION DONE SUCCESSFULLY!";


	$var=mysqli_query($dbh,"select *from train_station");

	echo"<table border size=1>";
	echo"<tr><th>stationname</th> <th>stationnumber</th> <th>numberoftrains</th> <th>numberofplatforms</th></tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td></tr>";
	}
	echo"</table>";

	?>
	<br></br>
	<a href="home.html">Click here for Home Page</a>

<body>
</html>

