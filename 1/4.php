<?php
echo $_POST["d"] + $_POST["e"];
echo "<br>";
echo $_POST["d"] - $_POST["e"];
echo "<br>";
echo $_POST["d"] * $_POST["e"];
echo "<br>";

if ($_POST["e"] == 0) {
	echo "Nie można dzielić przez zero!";
} else {
	echo $_POST["d"] / $_POST["e"];
	echo "<br>";
	echo $_POST["d"] % $_POST["e"]; }
?>
