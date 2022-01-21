<html>
<body>
	<?php
	echo "Payment Details!";
$dbh=mysqli_connect('localhost','root','') or die(mysqli_error());

	mysqli_select_db($dbh,'railway') or die(mysqli_error($dbh));

	$totalamount=$_REQUEST['totalamount'];
	$modeofpayment=$_REQUEST['modeofpayment'];
	$gst=$_REQUEST['gst'];
	$gst_calc=$_REQUEST['gst_calc'];
	$final_amount=$_REQUEST['final_amount'];


	$query="insert into payment values('$totalamount','$modeofpayment','$gst','$gst_calc','$final_amount')";
	$result=mysqli_query($dbh,$query) or die(mysqli_error($dbh));
	echo "PAYMENT DONE SUCCESSFULLY!";


	$var=mysqli_query($dbh,"select *from payment");

	echo"<table border size=1>";
	echo"<tr><th>totalamount</th> <th>modeofpayment</th> <th>gst</th> <th>gst_calc</th> <th>final_amount</th> </tr>";

 	while($arr=mysqli_fetch_row($var))
	{
	echo"<tr> <td>$arr[0]</td> <td>$arr[1]</td> <td>$arr[2]</td> <td>$arr[3]</td> <td>$arr[4]</td> </tr>";
	}
	echo"</table>";

	?>

	<a href="home.html">Click here for Home Page</a>

<body>
</html>