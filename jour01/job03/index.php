<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php job03</title>
</head>
<body>
<?php
$boolean = true;
$integer = 0x1A;
$string = "Chaîne de caractère"
$float = 1.654; //Contient les nombres décimaux à virgule
?>
 </head>
    <header>
    </header>
    <body>
        <table>
            <thead>
                <th>Type</th>
                <th>Nom</th>
                <th>Valeur</th>
            </thead>
            <tr>
                <td><?php echo $string ?> </td>
                <td><?php echo gettype($string) ?> </td>
                <td><?php$string = "Chaîne de caractère</td>
            </tr>            
            <tr>
                <td><?php echo $integer ?></td>
                <td><?php echo gettype($integer) ?></td>
               	<td>$integer = 0x1A</td>
            </tr>
            <tr>
                <td><?php echo $float ?></td>
                <td><?php echo gettype($float) ?></td>
               	<td>$floaty = 1.654</td>
            </tr>
            <tr>
                <td><?php echo $boolean ?></td>
                <td><?php echo gettype($boolean) ?></td>
               	<td>$boolean = true</td>
            </tr>
        </table>
</body>
</html>