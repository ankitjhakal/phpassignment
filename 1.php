<?php
session_start();
include('redir.php');
// session session
// pagination
/*
if( time()-$_SESSION['last_activity']>10)  { //have we expired?
    //redirect to logout.php
    header('Location:logout.php');
}
else {
  $_SESSION['last_activity']=time();
}
*/
//router var q
if(isset($_GET['q'])){
  $pageno=$_GET['q'];
  header("location: $pageno.php");
}
//if session var is not set then redirect it to seventask()
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta charset="utf-8">
  <head>

    <title></title>
  </head>
  <body>
    <!-- <meta http-equiv="refresh" content="10;url=logout.php" /> -->
    <form action="fullnametask.php" method="post" enctype="multipart/form-data">
  	first name:<input type="text" id="fname" name="fname" placeholder="Enter your first name"><br><br>
    last name:<input type="text" id="lname" name="lname" placeholder="Enter your Last name"><br>
  	full name:<input type="text" id="fullName" name="fullName" value="">
    <br>
    <input type="submit">
    <br>
    <a href="/logout.php">logout</a>
  </form>
  <!-- query for add first name and last name -->
    <script
          src="https://code.jquery.com/jquery-3.4.1.min.js"
          integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
          crossorigin="anonymous">
      </script>
    <script>

    $(document).ready(()=>{
    document.getElementById('lname').value="";
    });
     $('input').keyup(function(){
          document.getElementById('fullName').value=$('#fname').val()+" "+$('#lname').val();


       });


       </script>
       <script type="text/javascript">
             var IDLE_TIMEOUT = 10; //seconds
                var _idleSecondsCounter = 0;
                document.onclick = function() {
                _idleSecondsCounter = 0;
                };
                document.onmousemove = function() {
                _idleSecondsCounter = 0;
                };
                document.onkeypress = function() {
                _idleSecondsCounter = 0;
                };
                window.setInterval(CheckIdleTime, 1000);
                function CheckIdleTime() {
                _idleSecondsCounter++;
                if (_idleSecondsCounter >= IDLE_TIMEOUT) {
                document.location.href = "logout.php";
                }
                }
        </script>
  </body>
</html>
