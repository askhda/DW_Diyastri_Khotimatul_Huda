<?php

function transpose ($matriks){
	for ($r=0; $r < 3 ; $r++) { 
		for ($c=0; $c < 3 ; $c++) { 
			echo $matriks[$c][$r]." ";
		}
		echo "<br>";
	}
}

$matriks_input = array (
	array(1, 2, 3),
	array(1, 2, 3),
	array(1, 2, 3),
	array(1, 2, 3));

transpose($matriks_input);

?>