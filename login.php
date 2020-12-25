<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign IN Form</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="">
</head>
<body>

  <form action="login.php" method="POST" name="frmregis">
  
    <h1>Sign IN</h1>
    
    <fieldset>
      <legend><span class="number">1</span> SIGN IN HERE</legend>
      <label for="email">email</label>
      <input type="email" id="email" name="email">
      
      <label for="password">Password:</label>
      <input type="password" id="password" name="password">
      
     
    <button type="submit" name="submit" value="submit" id="submit">Login</button>
  </form>
  
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
 extract($_REQUEST);
$query="select * from detail where email='$email' and password='$password'";
    $res=mysqli_query($con,$query);
    
    $row=mysqli_fetch_array($res);
    
       
    if($res)
    {
        echo "<script>alert('Login successfull')</script>";
        if($row['email']=='admin@gmail.com')
          echo "<script>window.location='admin_index.php'</script>";

                 
             }
    else
    {
        echo "<script>alert('Login failed')</script>";
        echo "<script>window.location='index.php'</script>";    
    }
}
$con->close();

?>