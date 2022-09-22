<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="UrlParameter.php" method="get">
      Name: <input type="number" name="age"><br>
      <input type="submit">
    </form>
    <?php
    //type = "text" //words
    //name = "age"//numaric 
      echo $_GET["age"];
      ?>
  </body>
</html>
