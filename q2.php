<!DOCTYPE html>
<html>
  <head>
    <title>User Name Form</title>
  </head>
  <body> 
    <form action="q2.php" method="post">
      Enter Your Name:
      <input type="text" name="username">
      <input type="submit" value="Submit">
    </form>
  </body>
</html> 
<?php
$name = $_POST["username"]; 
echo "Your Name is: " . $name; 
?>
