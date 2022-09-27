<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>

    </title>
  </head>
  <body>
    <?php

       
       echo "<h1>Hello Site<h1>";
       echo "<p>BROTHER</p>";
//data type
       $ChN ="Sakib";
       $ChA ="22";
//common stuff
       echo"Hi Brother I'm $ChN I'm a Good Guy.\n";
       echo"Currrently I'm $ChA Year Old\n";
       echo "<hr>";
//using string
       $phrase = "We Are king.";
       echo "$phrase\n";
       echo strtolower("$phrase");
       echo strtoupper("$phrase");
       echo strlen("$phrase");
//using string
       $phrase="we are the king brother.\n";
       $phrase[0]="F";
       echo"<h1> $phrase[0] <h1>";
       echo $phrase;
       echo str_replace ("brother","bruh",$phrase);
       echo substr("$phrase",7,4); //7 erase the first 7 letter & 4 shows the first 4 letter


    ?>

  </body>
</html>
