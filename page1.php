<?php
include('connection.php');
include('page.php');
$query="SELECT * FROM signup WHERE fname='ankit'";
if($res=mysqli_query($conn,$query))
{ echo "<div><h1 style= color:red;>ankit's info</h1></div>";
  echo "<table width=100% border=1><tr><th>fname</th><th>lname</th><th>email</th><th>phoneno</th><th>imglink</th></tr>";
  while($row=mysqli_fetch_array($res))
  {
  echo "<tr><td>".$row['fname']."</td><td>".$row['lname']."</td><td>".$row['email']."</td><td>".$row['phoneno']."</td><td><a href=".$row['imglink'].">".$row['imglink']."</a></td></tr>";
  }
  echo "</table><br>";

}
?>
