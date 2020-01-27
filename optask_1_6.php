
<!-- task 1 to 6 validation -->
<?php
echo $_SERVER['PHP_SELF'];
session_start();
// session session
// pagination
if(isset($_GET['q'])){
  $a=$_GET['q'];
  header("location: $a.php");
}
//if session var is not set then redirect it to seventask()
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }

$pno=$_POST['pno'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
//full name validation
if (!preg_match("/^
  echo "Hello " .$fname. " " .$lname."<br>";
}

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


//phoneno validation
if(!preg_match("/^[0-9]{10}$/",$pno)){
echo "<br>only numbers r allow<br>" ;
if($count==0){
  $count+=1;
  include('task_1_6.php');
 }
}
else {
echo "<br><i>+91" .$pno.""."<br>";
}


//email validation
if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
 echo "<br>email is not valid<br>" ;
 if($count==0){
   include('task_1_6.php');
  }
}
else {
 echo "<br>" .$email.""."<br>";
}
// file upload
$myfile =fopen("ankit/testfile.doc", "w");
$data3= $fname." ".$lname."\n".$pno."\n".$email;
fwrite($myfile,$data3);
fclose($myfile);
 ?>
