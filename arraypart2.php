<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="arraypart2.php" method="post">
      <input type="text" name="student">
      <input type="submit">
    </form>
    <?php
    $grades=array("sakib"=>"A+","lemu"=>"B+","kabu"=>"D+");
    echo $grades[$_POST["student"]];
     ?>
  </body>
</html>
