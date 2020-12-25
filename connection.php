<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="">
</head>
<body>

  <form action="connection.php" method="POST" name="frmregis">
  
    <h1>Sign Up</h1>
    
    <fieldset>
      <legend><span class="number">1</span>Your basic info</legend>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      
      <label for="email">email</label>
      <input type="email" id="email" name="email">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      
      <label>Gender</label>
      <input type="radio" id="Female" value="Female" name="gender"><label for="Female" class="light">Female</label><br>
      <input type="radio" id="Male" value="Male" name="gender"><label for="Male" class="light">Male</label><br>
      <input type="radio" id="other" value="other" name="gender"><label for="other" class="light">Other</label>
    </fieldset>
    
    <fieldset>
      <legend><span class="number">2</span>Your Personal Detail:-</legend>
      <label for="address">Addrress:-</label>
      <textarea id="address" name="address" value="address"></textarea>
    </fieldset>

    <button type="submit" name="submit" value="submit" id="submit">Register</button>
  </form>
  
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
 extract($_REQUEST);

$sql = "INSERT INTO detail (name, email, password, gender, address) VALUES ('$name', '$email', '$password', '$gender','$address')";
echo $sql;      
$rs = mysqli_query($con,$sql);
        
             
    if($rs){

        echo "successfully uploaded!..";
    }
    else{
        echo "Try Again...";
    }
$con->close();
}
?>