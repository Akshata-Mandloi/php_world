<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>

<!Doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEEDBACK Form</title>
    <link rel="stylesheet" href="css/register.css">
    <link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="">
</head>
<body>

  <form action="feedback.php" method="POST" name="frmregis">
  
    <h1>FEEDBACK FORM</h1>
    
    <fieldset>
      <legend><span class="number">1</span>FEEDBACK FORM</legend>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name">
      
      <label for="email">email</label>
      <input type="email" id="email" name="email">
      
      
    <fieldset>
      <legend><span class="number"></span>Message</legend>
      <label for="address">Message</label>
      <textarea id="address" name="message" value="message"></textarea>
    </fieldset>

    <button type="submit" name="submit" value="submit" id="submit">Submit</button>
  </form>
  
</body>
</html>
<?php
if(isset($_REQUEST['submit']))
{
 extract($_REQUEST);

$sql = "INSERT INTO feedback (name, email,message) VALUES ('$name', '$email', '$message')";
echo $sql;      
$rs = mysqli_query($con,$sql);
        
             
    if($rs){
echo "<script>alert('Feedback Submitted')</script>";
        echo "<script>window.location='feedback.php'</script>"; 
    }
    else{
        echo "Try Again...";
    }
$con->close();
}
?>