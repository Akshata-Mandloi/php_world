<?php
$con=mysqli_connect("localhost","root","","stu") or die("<h1>Problem in database connection</h1>");
?>
<html>
<head>
  <title>
    Feedback
  </title>
</head>
<body>
        <h3>FEEDBACK DETAILS</h3>

<table border="1px" cellpadding="5px"> 
<thead>
                      <th class="numeric">Delete</th>
                      <th class="numeric">NAME</th>
                      <th class="numeric">EMAIL ID</th>
                      <th class="numeric">MESSAGE</th>
                      </tr>
                  </thead>
                  <tbody>
                  	<?php
                    
                    $query="select * from feedback";
                    $res=mysqli_query($con,$query);

                    while($row=mysqli_fetch_array($res)):
                       echo "<td><a href='delete_feedback.php?fid=$row[0]'>Delete</a></td>";
                       echo "<td>$row[1]</td>";
                       echo "<td>$row[2]</td>";
                       echo "<td>$row[3]</td>";
                       
                       
                       
                       echo "</tr>";
                    endwhile;

                  ?>
                  
                  </tbody>
                </table>
           