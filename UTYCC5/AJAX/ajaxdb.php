<html>
 <head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
 $q=$_GET["q"];

 $con = mysqli_connect('localhost','root','','api');
 if (!$con)  {
   die('Could not connect: ' . mysqli_error($con));
 }


 $sql = "SELECT * FROM persons WHERE user_name = '".$q."'";
 $result = mysqli_query($con,$sql);

 echo "<table border='1'>
 <tr>
 <th>username</th>
 <th>Age</th>
 <th>Home</th>
 <th>Job</th>
 </tr>";

 while($row = mysqli_fetch_array($result))
   {
   echo "<tr>";
   echo "<td>" . $row['user_name'] . "</td>";
   echo "<td>" . $row['age'] . "</td>";
   echo "<td>" . $row['home'] . "</td>";
   echo "<td>" . $row['job'] . "</td>";
   echo "</tr>";
   }
 echo "</table>";

 mysqli_close($con);
 ?> 