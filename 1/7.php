<?php
if ($_POST["k"] < 1 && $_POST["k"] > 12) {
	echo "BŁĄD";
} else {
	switch ($_POST["k"])
		{
		case 1:
			echo 'styczeń ';
			break;
		case 2:
			echo 'luty ';
			break;
		case 3:
			echo 'marzec ';
			break;
		case 4:
			echo 'kwiecień ';
			break;
		case 5:
			echo 'maj ';
			break;
		case 6:
			echo 'czerwiec ';
			break;
		case 7:
			echo 'lipiec ';
			break;
		case 8:
			echo 'sierpień ';
			break;
		case 9:
			echo 'wrzesień ';
			break;
		case 10:
			echo 'październik ';
			break;
		case 11:
			echo 'listopad ';
			break;
		case 12:
			echo 'grudzień ';
			break;
		}

	switch ($_POST["k"])
		{
		case 1:
			echo '31 dni';
			break;
		case 2:
			echo '28 dni';
			break;
		case 3:
			echo '31 dni';
			break;
		case 4:
			echo '30 dni';
			break;
		case 5:
			echo '31 dni';
			break;
		case 6:
			echo '30 dni';
			break;
		case 7:
			echo '31 dni';
			break;
		case 8:
			echo '31 dni';
			break;
		case 9:
			echo '30 dni';
			break;
		case 10:
			echo '31 dni';
			break;
		case 11:
			echo '30 dni';
			break;
		case 12:
			echo '31 dni';
			break;
		}
}
?>
