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
   $heading = "<h1>This is heading</h1>";
   echo $heading;

   ?>





</body>
</html>