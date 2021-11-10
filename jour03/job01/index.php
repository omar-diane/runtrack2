<?php
$valeurs = [200, 204, 173, 98, 171, 404, 459];
foreach ($valeurs as $value){
    if ($value % 2 ==0){
        echo "<br />";
        echo "$value est pair";
    } else {
        echo "<br />";
        echo "$value est impair";
    }
}
?>