<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME TO MY WEBSITE</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="">
</head>
<body>
  <h1>WELCOME TO MY WEBSITE</h1>

  <center>
  <br>
    <a href="register_user.php"><h3>REGISTRATION USER </h3><br>
    <a href="adminfeedback.php"><h3>FEEDBACK FORM</h3>
  </center>
</body>
