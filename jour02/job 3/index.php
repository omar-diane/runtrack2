<?php

$num = 0;
$ni = 42;
$no = null;
$ni = $no;



for ( $num = 0 ; $num <= 100 ; $num++ ){

	if($num <= 20){

		 	echo "<i>";
		 	}
	if($num >= 25 and $num <= 50 ){

		 	echo "<u>";
		 	}
	if($num == 42 ){
		 echo "</u></i>";
		 echo "LaPlateforme_";
		 	}

	echo $num;
	echo "<br/>";
	echo "</i>";
	echo "</u>";
	echo $no;
}

?>