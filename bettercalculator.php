<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="bettercalculator.php" method="post">
      Please Enter First Number: <input type = "number" name ="num1"><br>
      Please Enter Second Number: <input type="number" name ="num2"><br>
      Result: <input type ="text" name="result"><br>
      <input type="submit">
    </form>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $result = $_POST["result"];
    if($result=="+"){
      echo $num1+$num2;
    }elseif($result=="-"){
      echo $num1-$num2;
    }elseif($result=="*"){
      echo $num1*$num2;
    }elseif($result=="/"){
      echo $num1/$num2;
    }else{
      echo"Invalid Oparator";
    }
     ?>
  </body>
</html>
