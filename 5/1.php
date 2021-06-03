<?php
if (!$db = mysqli_connect("localhost", "root", "", "homework5")) {
	exit("Nie udało się połączyć z bazą");
} else {
	echo "Udało się połączyć z bazą";
}

$query = 'SELECT * FROM postacie';

if (!$results = mysqli_query($db, $query)) {
	echo "Nie udało się ściągnąć danych";
} else {
	echo "Udało się ściągnąć dane";
}

$insert_query = "INSERT INTO postacie (name, surname, age) VALUES ('edzio', 'listonosz', 70)";

if (!$insert_results = mysqli_query($db, $insert_query)) {
	echo "Nie udało się wrzucić danych";
} else {
	echo "Udało się wrzucić dane";
}

while ($rows = mysqli_fetch_row($results)) {
	foreach ($rows as $row) {
		echo "<br/>";
		echo $row;
	}
}

$rows_2 = mysqli_fetch_array($results, MYSQLI_BOTH);
echo "</br>".$rows_2['id']."</br>".$rows_2['name']."</br>".$rows_2['surname']."</br>".$rows_2['age']."</br>";

$rows_3 = mysqli_num_rows($results);
echo "<br/>";
echo $rows_3;

