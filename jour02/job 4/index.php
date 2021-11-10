<?php

$num = 0;


for ( $num = 0 ; $num <= 100 ; $num++ ){

	if ($num % 3 == 0 ){ 
	echo "<br/>";		
	echo "Fizz";
	} elseif ($num % 5 == 0 ){
	echo "<br/>";
	echo "Buzz";		
	} else { 
	echo "<br/>";
	echo $num;
	}
	if ($num % 3 == 0 && $num % 5 == 0 ){
	echo "<br/>";
	echo "FizzBuzz";
	}

}
?>