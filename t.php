<html>
<body>
	<?php
	echo "Train Details!";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$trainname=$_REQUEST['trainname'];
	$trainnumber=$_REQUEST['trainnumber'];
	$status=$_REQUEST['status'];
	$destination=$_REQUEST['destination'];
	$compartment=$_REQUEST['compartment'];
	$seatnumber=$_REQUEST['seatnumber'];


	$query="insert into train_details values('$trainname','$trainnumber','$status','$destination','$compartment','$seatnumber')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));

	echo "TRAIN BOOKED SUCCESSFULLY!";
	
	$var=mysqli_query($dbh,"select *from train_details");

	echo"<table border size=1>";
	echo"<tr><th>Trainname</th> <th>Trainnumber</th> <th>Status</th> <th>Destination</th> <th>Compartment</th> <th>Seatnumber</th></tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr><td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
	}
	echo"</table>";

	?>

	<a href="home.html">Click here for Home Page</a>



</body>
</html>