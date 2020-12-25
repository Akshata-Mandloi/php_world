<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>
<html>
<head>
  <title>
    Regiter User
  </title>
</head>
<body>
        <h3>REGISTRATION DETAILS</h3>

<table border="1px" cellpadding="5px"> 
<thead>
                   <th class="numeric">Edit</th>
                      <th class="numeric">Delete</th>
                      <th class="numeric">NAME</th>
                      <th class="numeric">EMAIL ID</th>
                      <th class="numeric">PASSWORD</th>
                      <th class="numeric">GENDER</th>
                      <th class="numeric">ADDRESS</th>
                      </tr>
                  </thead>
                  <tbody>
                  	<?php
                    
                    $query="select * from detail";
                    $res=mysqli_query($con,$query);

                    while($row=mysqli_fetch_array($res)):
                       echo "<td><a href='edit_register.php?rid=$row[0]'>Edit</a></td>";
                       echo "<td><a href='delete_register.php?rid=$row[0]'>Delete</a></td>";
                       echo "<td>$row[1]</td>";
                       echo "<td>$row[2]</td>";
                       echo "<td>$row[3]</td>";
                       echo "<td>$row[4]</td>";
                       echo "<td>$row[5]</td>";
                      
                       
                       
                       echo "</tr>";
                    endwhile;

                  ?>
                  
                  </tbody>
                </table>
           