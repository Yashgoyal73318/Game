<?php
session_start();

include ("db.php");

if($_SERVER['REQUEST_METHOD'] == "POST")
{

  $Email = $_POST['email'];
	$Password = $_POST['password'];

  if(!empty($Email) && !empty($Password) && !is_numeric($Email))
  {
    $query = "select * from userdata where Email = '$Email' limit 1";
    $result = mysqli_query($conn, $query);

   if($result)
   {
    if($result && mysqli_num_rows($result) > 0)
    {
      $user_data = mysqli_fetch_assoc($result);

      if($user_data['Password'] == $Password)
      {
        header("location: index.php" );
        die;

      }
    }
   }
   echo "<script type='text/javascript'> alert('wrong login details')</script>";
  }
  else{
    echo "<script type='text/javascript'> alert('wrong login details')</script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Log in</title>
    <link rel="stylesheet" href="style2.css" />
  </head>
  <body>
    <div class="main">
      <div class="login">
        <form method="POST" >
          <label for="chk">Login</label>
          <input type="email" name="email" placeholder="Email" required/>
          <input type="password" name="password" placeholder="Password" required/>
          <button> Log In </button>
          <p>if u don't have account
          <p class="click"><a href="sign.php">Sign up</a>Click here</p>
        </form>
      </div>
    </div>
  </body>
</html>
