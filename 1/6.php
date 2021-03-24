<?php
$h = $_POST["h"];
$i = $_POST["i"];
$j = $_POST["j"];

if ($h > 0 &&
	$i > 0 &&
	$j > 0){
	if ($h + $i > $j &&
		$i + $j > $h &&
		$j + $h > $i) {
		echo "Da się zrobić trójkąt";
	} else { echo "BŁĄD"; }
} else {
		echo "BŁĄD"; }
?>
