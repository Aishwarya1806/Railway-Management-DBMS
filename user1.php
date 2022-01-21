<!doctype html>
<html>
<head>
<title>Login</title>

    <style> 
       body {
  background-image:url('railway.jpg');
  background-repeat:no-repeat;
  background-attachment:fixed;
  background-size: cover;
}
    </style>
</head>
<body>
<h1>Enter the username,id and password </h1>
     
  
<form action="" method="POST">
Username: <input type="text" name="username"><br><br>
Id:<input type="number" name="id"><br><br>
Password: <input type="password" name="password"><br><br>	
<input type="submit" value="Login" name="submit" >
</form>
<?php
if(isset($_POST["submit"])){

if(!empty($_POST['username'])  && !empty($_POST['id']) && !empty($_POST['password'])) {
	$username=$_POST['username'];
	$id=$_POST['id'];
	$password=$_POST['password'];
	

	$con=mysqli_connect('localhost','root','') or die(mysqli_error());
	mysqli_select_db($con,'railway') or die("cannot select DB");

	$query=mysqli_query($con,"SELECT * FROM user1 WHERE username='".$username."'  AND id='".$id."' AND password='".$password."'");
	$numrows=mysqli_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysqli_fetch_assoc($query))
	{
	$dbusername=$row['username'];
	$dbid=$row['id'];
	$dbpassword=$row['password'];
	
	}

	if($username== $dbusername  && $id == $dbid && $password == $dbpassword)
	{
	session_start();
	$_SESSION['sess_username']=$username;

	/* Redirect browser */
	header("Location: home.html");
	}
	} else {
	echo "Invalid username or password!";
	}

} else {
	echo "All fields are required!";
}
}
?>
<br><br><br>
<a href="home.html" >click here for home page</a> 
</body>
</html>