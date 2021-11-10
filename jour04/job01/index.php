<?php
$_GET = ['user_name' => 100, 'user_mail' => 200, 'user_age' => 300]; 
    var_dump($_GET);   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
    <form action="#" method="get">
        <label for="name">Nom d'utilisateur :</label>
        <input type="text" id='name' name="user_name">
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail">
        <label for="age">Age :</label>
        <input type="number" id="age" name="user_age" >
        <button>Submit</button>
    </form>   
</body>
</html>