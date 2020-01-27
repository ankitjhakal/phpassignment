
<!-- task 1 to 6 validation -->
<?php
$pno=$_POST['pno'];
$email=$_POST['email'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
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
  include('task_1-6.php');
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
  echo "<br>" .$email.""."<br>";
  $myfile =fopen("ankit/testfile.doc", "w");
  $data3= $fname." ".$lname."\n".$pno."\n".$email;
  fwrite($myfile,$data3);
  fclose($myfile);
  //header('location:optask_1_6.php');
}
 ?>
