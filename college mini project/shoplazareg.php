<!DOCTYPE html>
<html lang="en">
<head>
    	  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/shoplaza.css">
    <title>mainreg</title>
</head>
<body>
<div class="container-fluid">
<form action="data.php" method="post">
    <div class="wrapper">
        <div class="header-area">
            <h2>shoplaza</h2>
        </div>
    <div class="form-area">
        <i class="fa fa-user"></i>
        <input type="text" placeholder="enter name" name="Name"required>

        <i class="fa fa-envelope"></i>
        <input type="email" placeholder="enter email address" name="mail"required>

        <i class="fa fa-key"></i>
        <input type="password" placeholder="password"name="password"required>

        <i class="fa fa-phone"></i>
        <input type="text" placeholder="enter phone number"name="mobile"required>

        

        <input type="checkbox">
        <p class="terms">I will obey all terms and condition</p>

        <input type="submit" value="sign up" onclick="show();">
    </div>
    </div>
</form>
</div>
</body>
</html>