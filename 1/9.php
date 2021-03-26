<?php
$tab1 = array(1, 2, 3);
$tab2 = array(4, 5, 6);
$dot_product = 0;
echo "<br>";

if (count($tab1) == count($tab2)) {
	for ($i = 0; $i <= (count($tab1) - 1); $i++) {
		$dot_product += ($tab1[$i] * $tab2[$i]);
	}
	echo $dot_product;
} else {
	echo "BŁĄD";}
?>
