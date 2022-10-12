<?php
if(isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    echo "Ahoj, ".$username; 
    echo "<br>";
    echo "Tvé heslo je: ".$password; 
    echo "<br>";
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