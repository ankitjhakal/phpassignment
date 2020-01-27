<?php

$pno=$_POST['pno'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
// validations
if(!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname)||!preg_match("/^[0-9]{10}$/",$pno)||!filter_var($email,FILTER_VALIDATE_EMAIL))
{
  if(!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname))
  {
    echo "<br> only alphabates are allowed";
  }
  if(!preg_match("/^[0-9]{10}$/",$pno))
  {
    echo "<br> only no is allowed";
  }
  if(!filter_var($email,FILTER_VALIDATE_EMAIL))
  {
     echo "<br>email is not valid<br>" ;
  }
  include('signup.php');
}
//if all entries are correct insert row into database.
else
{
  if(isset($_POST['submit']))
    {
      include('connection.php');
      mysqli_select_db($conn, "mysql1");
      $fname=$_POST['fname'];
      $lname=$_POST['lname'];
      $email=$_POST['email'];
      $pno=$_POST['pno'];
      $filename=$_FILES['image']['name'];
      $tempname=$_FILES['image']['tmp_name'];
      $folder="ankit/".$filename;
      move_uploaded_file($tempname,$folder);
      $q = "INSERT INTO signup VALUES('$fname','$lname','$email','$pno','$folder')";
      if ($result = mysqli_query($conn, $q)) {
        echo "==><strong style=color:red;>inserted row</strong><br><br>";
      }
      include('signup.php');
    }

}
 ?>
