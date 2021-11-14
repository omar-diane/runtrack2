<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>PHP</title>
</head>
<body>

<?php 

$str = "I'm sorry Dave I'm afraid I can't do that";
$voyelles = ['a','e','i','o','u','A','E','I','O','U'] ;
$i = 0;
$u = 0;

while(isset($str[$i])){ //go through $str
    while(isset($voyelles[$u])){
        if($str[$i] == $voyelles[$u]){
            echo $str[$i];
        }
    $u++;
    }
$i++;
$u = 0;
}

?>
 </body>
</html>