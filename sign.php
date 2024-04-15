<?php
session_start();

include ("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{
	$username = $_POST['txtname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$Mobile = $_POST['number'];

	if(!empty($Email) && !empty($Password) && !is_numeric($Email))

	{
		$query = "insert into userdata (txtname, Email, password , Mobile ) values('$username', '$Email', '$Password', '$Mobile')";

		mysqli_query($conn , $query);

		echo "<script type='text/javascript'> alert('Successfully Register')</script>";
	}
	else
	{
		echo "<script type='text/javascript'> alert('Please Enter Some Valid Information')</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    <link rel="stylesheet" href="sign.css">
</head>
<body>
    <div class="main"> 

			<div class="signup">
				<form method="POST">
					<label for="chk" >Sign up</label>
					<input type="text" name="txtname" placeholder="User name" >
					<input type="email" name="email" placeholder="Email" >
					<input type="password" name="password" placeholder="Password">
                    <input type="mobile" name="number" placeholder="Mobile">
					<input class="sign1" type="submit" value="Submit" name="">
				</form>
				<p> Already have an account?<a href="login.php">Login Here</a><p>
				
			</div>
	</div>
    
</body>
</html>