<?php
session_start();
include('redir.php');
if(isset($_GET['q'])){
  $pageno=$_GET['q'];
  header("location: $pageno.php");
}
 if(!isset($_SESSION['user1']))
 {
   header('location: seventask.php');
 }
 ?>
<!-- task3 form -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="marks.php" method="post" enctype="multipart/form-data">
    first name:<input type="text" id="fname" name="fname" placeholder="Enter your first name"><br><br>
    last name:<input type="text" id="lname" name="lname" placeholder="Enter your Last name"><br>
    full name:<input type="text" id="fullName" name="fullName" value="">
    <br>
    <br>
    upload image:<input type="file" name="image" ><br>
    <br>
    split marks:<textarea name="comment"></textarea><br>
    <input type="submit">
    <br>
    <a href="/logout.php">logout</a>
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
                window.setInterval(CheckIdleTime, 1000);                function CheckIdleTime() {
                _idleSecondsCounter++;
                if (_idleSecondsCounter >= IDLE_TIMEOUT) {
                document.location.href = "logout.php";
                }
                }
        </script>
</body>
</html>
