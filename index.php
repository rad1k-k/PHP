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



   $numberA = 5;
   $numberB = 10;
   $result = $numberA * $numberB;
   echo $result;
   echo "<br>";

   $fee = [10000, 15000, 7500, 20000];
   $buy = ["1item" => "milk", "2item" => "eggs", "3item" => "bananas",];

   echo $fee[0];
   echo "<br>";
   echo $buy["1item"];
   echo "<br>";


   //Data types
   $job = "hacker";  //string
   $pay = 100000;  //number
   $hight = 185.5;  //float
   $adult = true;  //boolean - true, false

   //Conditions (if-else), boolean - true X false

   if(5 <= 0) {
      echo "Yes, it´s true";
   } else {
      echo "No, it´s not true";
   }

   echo "<br>";


   $password = "123a";     //zadal uživatel

   if($password == "123a") {
      echo "Welcome, you have successfully logged in";
   } else {
      echo "You entered the wrong password";
   }

   echo "<br>";


   //if - elseif - else
   $work = "developer";

   if($work == "programmer") {
      echo "What programming languages do you know?";
   } elseif ($work == "designer") {
      echo "What design tools do you know?";
   } elseif ($work == "hacker"){
      echo "What types of attacks do you know?";
   } else {
      echo "Error, I don't know this position!";
   }

   echo "<br>";

   /* Operators */

   // rovná se ==
   // identická shoda (hlídá datový typ) === 
   // porovnání <, >, <=, >=, <>
   // nerovná se !=  <>
   // nejsou identické datové typy !==

   if(5 === "5") {
      echo "It´s true";
   } else {
      echo "It´s false";
   }

   echo "<br>";


   /* Logical operators */

   // And (&&)  a zároveň - true, když obě podmínky jsou true
   // Or /||) nebo - true, když alespoň jedna podmínka pravdivá

   //Je mi více jak 20 a zároveň méně než 35
   if(age > 18 && age < 35) {
      //když jsou obě dvě podmínky pravdivé
   } else {
     //když je jedna podmínka nepravdivá
     //když jsou obě nepravdivé
   }

   echo "<br>";

   //Jmenuji se Radka nebo jsem starší 30 let
   if(name == "Radka" || age > 30) {
      //Když jsou obě pravda
      //Když je alespoň jedna pravda
   } else {
      //Když jsou obě nepravda
   }
   echo "<br>";



   // And && - a zároveň

   //true = true true
   //false = true false
   //false = false true
   //false = false false

   $ageRadka = 33;

   if($ageRadka > 18 && $ageRadka < 40) {
      echo "It´s true";
   } else {
      echo "It´s false";
   }

   echo "<br>";


   // Or || - nebo
   //true = true true
   //true = true false
   //true = false true
   //false = false false

   $name = "Radka";
   $age = 33;

   if($name === "Radka" || $age < 30) {
      echo "It´s true";
   } else {
      echo "It´s false";
   }

   echo "<br>";



   //Switch - každý case musí končit break, na konci default - jako else

   $job = "hackhger";

   switch($job) {
      case "hacker";
         echo "Jaké znáte typy útoků?";
         break;
      case "programator";
         echo "Jaké znáte programovací jazyky?";
         break;
      case "sekretarka";
         echo "Jaké funkce v excelu znáte?";
         break;
      default:
         echo "Pro tuto pozici nemám žádnou otázku";
   }

   //Cyklus WHILE - něco se opakuje, dokud se něco nestane, tak něco dělej
   
   $pocitadlo = 0;

   while ($pocitadlo < 10) {
      echo "Ahoj";
      echo "<br>";
      $pocitadlo = $pocitadlo + 1;
   }


   //Cyklus FOR - říkám, kolikrát to má proběhnout a definuju to

   for($i = 0; $i <= 10; $i++) {
      echo $i;
      echo "<br>";
   }

   $i = $i + 1;
   $i++; //inkrementace


   for($j = 10; $j > 0; $j--) {
      echo $j;
      echo "<br>";
   }


   //Cyklus FOREACH - používá se pro práci s polem, na procházení polí

   $jmena = ["David", "Jane", "Markus", "Anna"];
   foreach($jmena as $zamestnanec) {
      echo $zamestnanec;
      echo "<br>";
   }



   $mujJazyk = "PHP";

   if($mujJazyk === "PHP") {
      echo "Ucim se ".$mujJazyk;
   } elseif ($mujJazyk === "JS") {
      echo "Ucim se ".$mujJazyk;
   } else {
      echo "Ucim se jazyk, ale nevim, jak se jmenuje.";
   }

   echo "<br>";


   for($i = 0; $i <= 10; $i++) {
      echo $i;
      echo "<br>";
   }


   $jazyk = "PHP";
   switch($jazyk) {
      case "PHP":
         echo "Máme rádi " .$jazyk;
         break;
      case "JS":
         echo "Máme rádi " .$jazyk;
         break;
      case "HTML":
         echo "Máme rádi " .$jazyk;
         break;
      default:
         echo "Nevím, jaký jazyk mám ráda";
   }

   echo "<br>";



   for($i = 0; $i < 5; $i++) {
      echo "Hello, how are you?";
      echo "<br>";
   }


   //Funkction - umožňují něco v kodu zopakovat, funkci mohu zavolat kulatými závorkami

   function pozdrav() {
      echo"Ahoj, Hráči!";
      echo "<br>";
   };

   pozdrav();

   funkction score() {
      echo "Tvoje skore je: " .(20 + 30);
   }


   //Inicializační funkce - má v sobe více funkcí, mohu všechny fce zavolat inicializační fcí najednou
   
   function init() {
      pozdrav();
      score();
   }
   
   init();









   ?>





</body>
</html> 