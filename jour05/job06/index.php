<?php

function leetspeak ($str){
	for($c=0; $c<=isset($str[$c]);$c++){
		$a='a';
		$a2='A';
		if($str[$c]==$a or $str[$c]==$a2){
			echo '4';	
		}
		$b='b';
		$b2='B';
		if($str[$c]==$b or $str[$c]==$b2){
			echo '8';	
		}
		$e='e';
		$e2='E';
		if($str[$c]==$e or $str[$c]==$e2){
			echo '3';	
		}
		$g='g';
		$g2='G';
		if($str[$c]==$g or $str[$c]==$g2){
			echo '6';	
		}
		$l='l';
		$l2='L';
		if($str[$c]==$l or $str[$c]==$l2){
			echo '1';	
		}
		$s='s';
		$s2='S';
		if($str[$c]==$s or $str[$c]==$s2){
			echo '5';	
		}
		$t='t';
		$t2='T';
		if($str[$c]==$t or $str[$c]==$t2){
			echo '7';	
		}
	}

	return $str;
}

$str="ABEGlst";

leetspeak($str);

?>