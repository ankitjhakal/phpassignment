<?php
session_start();
include('connection.php');
$query="SELECT * FROM users";
$res=mysqli_query($conn,$query);

while($row=mysqli_fetch_array($res))
{
  echo "<img src=data:image/jpeg;base64,".$row['img'].">";
}

?>
