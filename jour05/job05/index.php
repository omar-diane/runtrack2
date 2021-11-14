<?php

function occurrence($str,$char){
$x=0;
	for($c=0; $c<=isset($str[$c]);$c++){
		if(($str[$c]==$char)==true){
			$x++;
		}
	}
return $x;
}

$str= 'Créez une fonction nommée';
$char='o';

echo occurrence($str,$char);

?>