<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <p>
            <text>Zadanie łączone 2.2 i 2.3</text>
            <form action="23.php" method="post">
                <select name="customers" required>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
                <br>
                <input type="submit" value="Wyślij informacje rezerwacyjne">
            </form>
            <?php
            $num_of_guests = 0;

            if (isset($_POST["customers"])) {
                function formses($guests) {
                    echo ('
                    <form action="23.php" method="post">
                    <input type="text" name="name0" value="Imię" required>
                    <br>
                    <input type="text" name="lastname0" value="Nazwisko" required>
                    <br>
                    <input type="text" name="address" value="Adres" required>
                    <br>
                    <input type="number" name="credit_card" value="Dane karty kredytowej" required>
                    <br>
                    <input type="email" name="email" value="Email" required>
                    <br>
                    <input type="date" name="arrival_date" value="Data przyjazdu" required>
                    <br>
                    Czy wprowadzić łóżeczko dla dziecka?<input type="checkbox" name="childs_bed" value="Child\'s bed">
                    <br>
                    Czy pokój ma być klimatyzowany?<input type="checkbox" name="air_con" value="Air conditioning">
                    <br>
                    Czy jest potrzebna popielniczka?<input type="checkbox" name="ash_pit" value="Ashpit">
                    <br>
                    ');

                        for ($i = 1; $i < $guests; $i++) {
                            echo ('<br>
                            <input type="text" name="name'.$i.'" value="Imię">
                            <br>
                            <input type="text" name="lastname'.$i.'" value="Nazwisko">
                            <br>
                            <br>
                            ');
                        }

                        echo ('
                    <input type="submit" name="send_data" value="Wyślij">
                    </form>
                    ');
                }

                $GLOBALS['num_of_guests'] = $_POST["customers"];

                formses($num_of_guests);
            } else {
                if (isset($_POST["send_data"])) {

                    function printGuests($guests) {
                        echo '<h2>Dane pobytu';

                        for ($i = 0; $i < $guests; $i++) {
                            echo('<h3> Osoba: </h3>');
                        }
                    }

                    printGuests($num_of_guests);

//                        if($i==0) {
//                            echo 'Adres: ' . $_POST['address'] . '<br>';
//                            echo 'Dane karty: ' . $_POST['credit_card'] . '<br>';
//                            echo 'Email: ' . $_POST['email'] . '<br>';
//                            echo 'Data przyjazdu: ' . $_POST['arrival_date'] . '<br>';
//
//                            if (isset($_POST['childs_bed'])) {
//                                echo 'Łóżeczko dla dziecka?: Tak<br>';
//                            } else {
//                                echo 'Łóżeczko dla dziecka?: Nie<br>';
//                            }
//                            if (isset($_POST['air_con'])) {
//                                echo 'Klimatyzacja?: Tak<br>';
//                            } else {
//                                echo 'Klimatyzacja?: Nie<br>';
//                            }
//                            if (isset($_POST['ash_pit'])) {
//                                echo 'Popielniczka?: Tak<br>';
//                            } else {
//                                echo 'Popielniczka?: Nie<br>';
//                            }
//                        }


                }
            }
            ?>
        </p>
    </body>
</html>
