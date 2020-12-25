
<?php

$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
$rid =$_REQUEST['rid'];

$query="select * from detail where rid='$rid'";

$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);


?>
    <section id="main-content">
      <section class="wrapper">

<form method=post action="edit_register.php" >
  <table border="1px" cellpadding="5px"> 
<tr>
          <td>REGISTER ID</td>
          <td><input  type="text" name="rid" value="<?php echo $row[0];?>"/></td>
        </tr>
        <tr>
          <td>NAME</td>
          <td><input  type="text" name="name" value="<?php echo $row[1];?>"/></td>
        </tr>
        <tr>
          <td>EMAIL</td>
          <td><input type="text" name="email" value="<?php echo $row[2];?>"/></td>
        </tr>
        <tr>
          <td>PASSWORD</td>
          <td><input type="password" name=password value="<?php echo $row[3];?>"/></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
      <input type="radio" id="Female" value="female" name="gender"><label for="Female" class="light">Female</label>&nbsp;&nbsp;
      <input type="radio" id="Male" value="Male "name="gender"><label for="Male" class="light">Male</label>&nbsp;&nbsp;
      <input type="radio" id="other" value="other" name="gender"><label for="other" class="light">Other</label>
    </td>
    </tr>
        <tr>
          <td>ADDRESS</td>
          <td><input type="text" name="address" value="<?php echo $row[5];?>"/></td>
        </tr>
        <tr>
          <td colspan="2" align="center"><input type="submit" name="submit" value="Done"/>
           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
           <input type="reset" name="reset" value="reset"/>
          </td>
        </tr>
        
      </table>
    <?php
 if(isset($_REQUEST['submit']))
        {
          extract($_REQUEST);
           $query1="update detail set rid='$rid', name='$name',email='$email',password='$password',gender='$gender',address='$address' where rid=$rid";
           // echo"$query";
          $res1=mysqli_query($con,$query1);
          $a = $res && $res1;
          if($a)
          {
            echo "<script>alert('Record Edited Successfully')</script>";
            echo "<script>window.location='register_user.php'</script>";
          }
          else
          {
            echo "<script>alert('Record Not Edited')</script>";
        echo "<script>window.location='edit_register.php'</script>";
         }
        }
  
  
       ?>

  
  </form>
  
</body>

</html>

