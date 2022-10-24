<?php
if(isset($_POST["submit"])) {
    $name = ["David","Marek","Anna","Jana"];

    $minimum = 3;
    $maximum = 10;
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Ahoj, ".$username; 
    echo "<br>";
    echo "Tvé heslo je: ".$password; 
    echo "<br>";

    if(strlen($username) <= $minimum) {
        echo "Uživatelské jmeno musí být delší  než 3 znaky";
    } 

    if(strlen($username) >= $maximum) {
        echo "Uživatelské jméno musí být kratší než  10 znaků";
    }

    if(in_array($username,$name)) {
        echo "Jsi uspěšně přihlášen.";
    } else {
        echo "Zadané údaje jsou špatně, nemůžeme vás přihlásit.";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    <form action="formular.php" method="post">

        <input type="text" name="username" placeholder="User name"> <br>
        <input type="password" name="password" placeholder="Password"> <br>
        <input type="submit" name="submit" value="Send">

    </form>



    
</body>
</html>