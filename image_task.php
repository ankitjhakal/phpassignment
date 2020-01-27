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
    header('location: 2.php');
  }
  
  $fname=$_POST['fname'];
  $lname=$_POST['lname'];

  if(!preg_match("/^[a-zA-Z ]+$/i",$fname) || !preg_match("/^[a-zA-Z ]+$/i",$lname))
    {
      echo "<br> only alphabates are allowed";
      include('2.php');
    }
  else {
    echo "Hello " .$fname. " " .$lname."<br>";
    //image upload
    $filename=$_FILES['image']['name'];
    $tempname=$_FILES['image']['tmp_name'];
    $folder="ankit/".$filename;
    move_uploaded_file($tempname,$folder);
    echo"<br><img src='$folder' height='100' width='100'/><br>";

  }
  ?>
