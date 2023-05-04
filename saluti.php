<?php
	$par = $_POST['paragraph'];
	$censor = $_POST['censor'];
	if(isset($par)){
		// Modify $par in the position of the word to censor
		echo $par . "<br />";
		echo "Lenght: " . strlen($par) . "<br />";

		$newPar =  str_replace($censor, "***", $par);

		echo $newPar . "<br />";
		echo "Lenght: " . strlen($newPar);
	}
?>