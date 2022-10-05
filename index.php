<!DOCTYPE html>
<html lang="en">
<?php
include "head.php"
?>
<body>
   <?php

   $name = "Radka";
   $birthYear = 1989;
   
   echo $name;
   echo $birthYear;

   $job = "Web Developer";   //string
   $salary = 5000;           //number
   $hight = 180.5;           //float   

   //Concatenation (spojení)
   echo $name . $birthYear;
   echo $name." ".$birthYear;

   //Saving HTML tags
   $heading = "<h1>This  is heading</h1>";
   echo $heading;


   echo 20 + 15; 
   echo "<br>";
   echo 20 - 15;
   echo "<br>";
   echo 20 * 10;
   echo "<br>";
   echo 10 / 3;
   echo "<br>";

   echo 3 + 5 * 10;
   echo "<br>";
   echo (3 + 5) * 10;
   echo "<br>";

   $nummer1 = 10;
   $nummer2 = 16;
   echo $nummer1 * $nummer2;

   ?>





</body>
</html> 