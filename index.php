<?php
session_start();
$username ='';//user name
$password ='';//password here we have use session because session is server side.
$Loginfailed =true;

if(isset($_POST["username"]) && isset($_POST["password"]))
{
  if($_POST['username']==$username && $_POST['password']==$password)
  {
    header("Location:welcome.html");
    exit();
  }
  $Loginfailed =false;
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>New Tab</title>
  </head>
  <body>
    <div class="container">
      <form method="post">
        <h3>Login</h3>
        <input type="text" name="username" placeholder="username" required> 
        <input type="password" name="password" placeholder="password" required>
        <button type="submit">Login</button>
      </form>
    </div>
  </body>
</html>
