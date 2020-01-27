<?php
//session start
session_start();
//encrypted username and password
$check = array("Peter"=>"MTIzNA==", "Ben"=>"MTIzNA==", "Joe"=>"MTIzNA==");
$cur_user=null;
//check if user name is set or not if set then set session user1 variable
if(isset($_POST['username']))
{
  $cur_user=$_POST['username'];
  //check current user exists or not
  if(array_key_exists($cur_user,$check))
  {
    if($check[$cur_user]==base64_encode($_POST['password']))
    {
      $_SESSION['user1']=$cur_user;
    }
  }
}
//if session var is set then redirect it to task first
if(isset($_SESSION['user1']))
{
  header('location: task_1_6.php');
}
//otherwise back to the form again
else {
    echo "<h2>Incorrect details</h2>";
  include('seven.php');
}


 ?>
