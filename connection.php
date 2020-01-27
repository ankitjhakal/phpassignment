<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mysql1";


$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
echo "connection error";
exit();
}
 ?>
