<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="checkbox.php" method="post" >
      Apples: <input type="checkbox" name="fruits[]"value="apples"><br>
      Oragne: <input type="checkbox" name="fruits[]"value="orange"><br>
      Banana: <input type="checkbox" name="fruits[]"value="banana"><br>
      <input type="submit">
      <?php
         $fruits = $_POST["fruits"];
         echo $fruits[0];
       ?>
  </form>
  </body>
</html>
