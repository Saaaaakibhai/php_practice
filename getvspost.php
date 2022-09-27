<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="getvspost.php" method="post">
      Password: <input type="password" name="password">
      <br>
    </form>
    <br><br>
    <<?php echo $_POST['password']; ?>
  </body>
</html>
