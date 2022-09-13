<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

        <form action="GettingUserInput.php" method="get">
        Name: <input type="text" name="username">
        <br>
        <br>
        Age: <input type="number" name="age">
        <br>
        <br>
        <input type ="submit">
        </form>
        <br>

         Your name is <?php echo $_GET["username"] ?>


        <br>

         Your age is <?php
         //echo print something
         //here get name by text after that they print it as echo name
         echo $_GET["age"] ?>


  </body>
</html>
