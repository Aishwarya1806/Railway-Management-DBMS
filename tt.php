<html>
<body>
	<?php
	echo "Ticket Details!";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$departure=$_REQUEST['departure'];
	$destination=$_REQUEST['destination'];
	$noofpassengers=$_REQUEST['noofpassengers'];
	$date=$_REQUEST['date'];
	$tickettype=$_REQUEST['tickettype'];
	$seattype=$_REQUEST['seattype'];


	$query="insert into ticket values('$departure','$destination','$noofpassengers','$date','$tickettype','$seattype')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	echo "TICKETS ISSUED SUCCESSFULLY!";


	$var=mysqli_query($dbh,"select *from ticket");

	echo"<table border size=1>";
	echo"<tr><th>departure</th> <th>Destination</th> <th>noofpassengers</th> <th>date</th> <th>tickettype</th> <th>seattype></th</tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> <td>$arr[5]</td></tr>";
	}
	echo"</table>";

	?>

	<a href="home.html">Click here for Home Page</a>

<body>
</html>

	