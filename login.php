<!-- login form -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form  action="login.php" method="post">
      Username: <input type="text" name="username"><br><br>
      Password: <input type="text" name="password"><br><br>


      <input type="submit" name="submit" value="login">

    </form>

  </body>
</html>
<!-- database connectivity -->
<?php
session_start();
$servername="localhost";
$username="root";
$password="";
$dbname="aj26";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
echo "connection error";
exit();
}
// if username and password are correct then redirect to 1.php
if(isset($_POST['username'])){
  $user=$_POST['username'];
  $pwd=$_POST['password'];
  $q="SELECT * FROM student WHERE username ='" .$user. "'";
  $res=mysqli_query($conn,$q);
  $user_data=mysqli_fetch_array($res);
  echo $pwd;
  echo $user_data['password'];
  if($user_data['password']==$pwd){
    $_SESSION['user1']="ankit";

  }
  if(isset($_SESSION['user1']))
  {
   header('location: 1.php');
  }
  // if username or password is incorrect redirect to login form again
    else {
      echo "<h2>Incorrect details</h2>";
       header('location:login.php');

  }

}

?>
