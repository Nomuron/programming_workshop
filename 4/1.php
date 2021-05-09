<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<header>
    <h2>Zarezerwuj miejsce w hotelu</h2>
</header>

<?php
session_start();
echo('	
		<article>
			<form action="23.php" method="POST">
				<label>Ile osób zostaje w hotelu?</label>
				<select name="NumberOfPeople">
				  <option value=1>1</option>
				  <option value=2>2</option>
				  <option value=3>3</option>
				  <option value=4>4</option>
				</select>
				<input type="submit" name="SendNumberOfPeople" value="Wyślij">
				<br>
			</form>
		</article>
	');
if(isset($_POST['NumberOfPeople'])) {
    $peopleNumber = $_POST['NumberOfPeople'];
    setcookie("Number_of_people", $peopleNumber, time()+60+60+24+28);
    function numberOfForms($peopleNumber) {
        echo ('
			<form action="23.php" method="POST">
				<input type="hidden" value="'.$peopleNumber. '" name="peopleNumber" />
				<br>
				<label>Imie:</label>
				<input type="text" name="firstName0" placeholder="Imie" required>
				<br>
				<label>Nazwisko:</label>
				<input type="text" name="lastName0" placeholder="Nazwisko" required>
				<br>
				<label>Adres email:</label>
				<input type="email" name="email0" placeholder="Email" required>
				<br>
				<label>Adres:</label> 
				<input type="text" name="adress0" placeholder="Adres">
				<br>
				<label>Numer karty kredytowej</label> 
				<input type="tel" inputmode="numeric" name="CardNumber" pattern="[0-9\s]{13,19}" autocomplete="CreditCard-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
				<br>
				<label>Data przyjazdu</label>
				<input type="datetime-local" min="2021-04-19T00:00" value="2021-04-19T12:30" name="CheckInDateTime" required>
				<br>
				<label>Ilość dni pobytu</label>
				<input type="int" name="numberOfDays" required>
				<br>
				<br>
				<label> Dodatki: </label>
				<br>
				<br>
				<input type="checkbox" id="ashpit" name="ashpit" value="ashpit">
				<label for="ashpit">Popielniczka?</label><br>
				
				<input type="checkbox" id="champagne" name="champagne" value="champagne">
				<label for="champagne">Szampan?</label><br>
								
				<input type="checkbox" id="infantBed" name="infantBed" value="infantBed">
				<label for="infantBed">Łóżeczko dla dziecka?</label><br>
				');
        if($peopleNumber>1) {
            echo ('<form>');
            for($i = 1; $i<$peopleNumber; $i++) {
                echo('
					<br>
					<h3>'.($i+1).' Informacje osobowe </h2>
					<label>Wpisz imię: <input type="text" name="firstName'.$i.'"></label>
					<br>
					<label>WPisz nazwisko: <input type="text" name="lastName'.$i.'"></label>
					<br>
			    	<label>Wpisz email: <input type="email" name="email'.$i.'"></label>
					<br>
					');
            }
        }
        echo ('
				<br>
				<input type="submit" name="SubmitData" value="Wyślij">
				</form>'
        );
    }
    numberOfForms($peopleNumber);

} else {
    if(isset($_POST['SubmitData'])){
        $peopleNumber = $_POST['peopleNumber'];

        echo('<h2> Informacje rezerwacyjne </h2><br>');
        for($i = 0; $i < $peopleNumber; $i++) {
            echo ('<h3> Osoba: '. $_POST['firstName'.$i].' '.$_POST['lastName'.$i]. '</h3>');

            if($i==0) {
                echo 'Adres: ' . $_POST['adress'.$i] . '<br>';
                echo 'Numer karty: ' . $_POST['CardNumber'] . '<br>';
                echo 'Email: ' . $_POST['email'.$i] . '<br>';
                echo 'Data przyjazdu: ' . $_POST['CheckInDateTime'] . '<br>';

                if (isset($_POST['ashpit'])) {
                    echo 'Popielniczka: Tak<br>';
                } else {
                    echo 'Popielniczka: Nie<br>';
                }
                if (isset($_POST['champagne'])) {
                    echo 'Szampan: Tak<br>';
                } else {
                    echo 'Szampan: Nie<br>';
                }
                if (isset($_POST['infantBed'])) {
                    echo 'Łóżeczko dla dziecka: Tak<br>';
                } else {
                    echo 'Łóżeczko dla dziecka: Nie<br>';
                }
            } else {
                echo 'Email: ' . $_POST['email'.$i] . '<br>';
            }
        }
    }
}
session_destroy();
?>
</body>
</html>
