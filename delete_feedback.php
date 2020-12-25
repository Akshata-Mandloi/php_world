<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");

$fid=$_REQUEST['fid'];
$query="delete from feedback where fid='$fid'";
$res=mysqli_query($con,$query);
if($res)
{
  echo "<script>alert('Record Deleted')</script>";
  echo "<script>window.location='adminfeedback.php'</script>";
}
else
{
  echo "<script>alert('Record NotS Deleted')</script>";
  echo "<script>window.location='adminfeedback.php'</script>";
}
?>