<?php

function calcule($a , $operation , $b){
	if ( $operation == '+'){
		return $a + $b;
	}
		if ( $operation == '-'){
		$a - $b;
		return $a - $b;
	}
	if ( $operation == '*'){
		$a * $b;
		return $a * $b;
	}
	if ( $operation == '/'){
		$a / $b;
		return $a / $b;
	}
	if ( $operation == '%'){
		$a % $b;
		return $a % $b;
	}
}

$a=3.8;
$b=9.0;
$operation= '/';

echo calcule($a, $operation , $b);	

?>