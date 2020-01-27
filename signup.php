<!DOCTYPE html>
<html>
  <body>
      <form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
      first name:<input type="text" id="fname" name="fname" placeholder="Enter your first name"><br><br>
      last name:<input type="text" id="lname" name="lname" placeholder="Enter your Last name"><br>
      image upload:<input type="file" name="image"><br>
      <br>
      <i>+91
      <input type="text" name="pno" minlength="10" maxlength="10">
      <br>
      email:<textarea name="email"></textarea>
      <br>
      <input type="submit" name="submit" value="Insert">
    </form>
    <?php
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
        $img=file_get_contents($folder);
        $eimg=base64_encode($img);
        $q = "INSERT INTO signup VALUES('$fname','$lname','$email','$pno','$eimg')";
        if ($result = mysqli_query($conn, $q)) {
          echo "<br><br>==>inserted row";
        }
      }
    ?>
</body>
</html>
