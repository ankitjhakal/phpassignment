<!-- signup form -->
<!DOCTYPE html>
<html>
  <body>
      <form action="signupvalidation.php" method="post" enctype="multipart/form-data"  >
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

</body>
</html>
