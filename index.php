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


   //Array (Pole) - holds multiple values in one variable
   $employees = ["David","Anna","Marek","Jana"];
   $salaries = [20000,30000,15000,30000];
   $mix = [20,"David","<h1>Heading</h1>"];
   echo "<br>";

   //1.Way
   echo $employees[0];
   echo "<br>";
   echo $employees[1];
   echo "<br>";
   echo $employees[2];
   echo "<br>";
   echo $employees[3];
   echo "<br>";

   //2.Way
   print_r($employees);
   echo "<br>";


   //Běžné pole - jsou indexy, závisí na pořadí
   $names = ["David","Anna","Markus"];
   echo $names[0];
   echo "<br>";
   echo $names[1];
   echo "<br>";
   echo $names[2];
   echo "<br>";

   //Asociativní pole - nejsou indexy, nezávisí na pořadí
   $simpsonovi = ["Bart" => "rostak", "Marge" => "modrá", "Homer" => "kobliha"];
   echo $simpsonovi["Bart"];
   echo "<br>";
   echo $simpsonovi["Marge"];
   echo "<br>";
   echo $simpsonovi["Homer"];
   echo "<br>";

   print_r($names);
   echo "<br>";
   print_r($simpsonovi);
   echo "<br>";



   ?>





</body>
</html> 