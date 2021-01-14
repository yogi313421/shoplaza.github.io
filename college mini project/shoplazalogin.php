<!DOCTYPE html>
<html lang="en">
    <head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>loginform design</title>
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <body>
            <div class="loginbox">
                <img src="images/icon.jpg" class="avatar">
                <h1> Log in </h1>
                <form action="logincheck.php" method="post">
                    <p>Username</p>
                    <input type="email" name="username" placeholder="enter email"required>
                    <p>Password</p>
                    <input type="password" name="password" placeholder="enter password"required>
                    <input type="submit" value="Log in">
<div>
<?php
if(isset($_GET["error"]))
echo "<font color='red'>username or password is incorrect</font>";
?>
</div>
                </form>

            </div>
        </body>
    </head>
</html>