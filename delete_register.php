<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");

$rid=$_REQUEST['rid'];
$query="delete from detail where rid='$rid'";
$res=mysqli_query($con,$query);
if($res)
{
	echo "<script>alert('Record Deleted')</script>";
	echo "<script>window.location='register_user.php'</script>";
}
else
{
	echo "<script>alert('Record NotS Deleted')</script>";
	echo "<script>window.location='register_user.php'</script>";
}
?>