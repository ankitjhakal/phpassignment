<?php
session_start();
error_reporting( E_WARNING );
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header("location: $a.php");
}
if(!isset($_SESSION['user1']))
{
  session_start();
}
if(!isset($_SESSION['user1']))
{
  header('location: 4.php');
}
$pno=$_POST['pno'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
if(!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname)||!preg_match("/^[0-9]{10}$/",$pno))
{
  if(!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname))
  {
    echo "<br> only alphabates are allowed";
  }
  if(!preg_match("/^[0-9]{10}$/",$pno))
  {
    echo "<br> only no is allowed";
  }

  include('4.php');
}
else {
  echo "Hello " .$fname. " " .$lname."<br>";
  //image upload
  $filename=$_FILES['image']['name'];
  $tempname=$_FILES['image']['tmp_name'];
  $folder="ankit/".$filename;
  move_uploaded_file($tempname,$folder);
  echo"<br><img src='$folder' height='100' width='100'/><br>";


  //string explode
  $data=$_POST['comment'];
  $data1= explode("\n", $data);

  echo "<table border='1px solid black' style='width:25%;'><tr><th>subject</th><th>marks</th></tr>";
  foreach($data1 as $key)
  {
    echo "<tr>";
  $data2= explode("|", $key);
  foreach($data2 as $key)
  {
  echo"<td  style=width:25%;border:'1px solid black'>$key</td>";
  }
  echo "</tr>";
  }

  echo "<br><i>+91" .$pno.""."<br>";
}
?>
