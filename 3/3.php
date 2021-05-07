<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
            <form action="3.php" method="POST">
                <label>Ile osób zostaje w hotelu?</label>
                <select name="number_of_people">
                    <option value=1>1</option>
                    <option value=2>2</option>
                    <option value=3>3</option>
                    <option value=4>4</option>
                </select>
                <br>
                <label>Imie:</label>
                <input type="text" name="first_name" placeholder="Imie" required>
                <br>
                <label>Nazwisko:</label>
                <input type="text" name="last_name" placeholder="Nazwisko" required>
                <br>
                <label>Adres email:</label>
                <input type="email" name="email" placeholder="Email" required>
                <br>
                <label>Adres:</label>
                <input type="text" name="address" placeholder="Adres">
                <br>
                <label>Numer karty kredytowej</label>
                <input type="tel" inputmode="numeric" name="card_number" pattern="[0-9\s]{13,19}" autocomplete="CreditCard-number" maxlength="19" placeholder="xxxx xxxx xxxx xxxx" required>
                <br>
                <label>Data przyjazdu</label>
                <input type="datetime-local" min="2021-04-19T00:00" value="2021-04-19T12:30" name="check_in_date_time" required>
                <br>
                <label>Ilość dni pobytu</label>
                <input type="int" name="number_of_days" required>
                <br>
                <input type="submit" name="submit_data" value="Wyślij">
                <?php
                if (isset($_POST["number_of_people"]) && isset($_POST["last_name"]) && isset($_POST["first_name"])
                    && isset($_POST["email"]) && isset($_POST["address"]) && isset($_POST["card_number"])
                    && isset($_POST["check_in_date_time"]) && isset($_POST["number_of_days"])) {

                    $number_of_people = $_POST["number_of_people"];
                    $first_name = $_POST["first_name"];
                    $last_name = $_POST["last_name"];
                    $email = $_POST["email"];
                    $address = $_POST["address"];
                    $card_number = $_POST["card_number"];
                    $check_in_date_time = $_POST["check_in_date_time"];
                    $number_of_days = $_POST["number_of_days"];

                    $information = array(
                            'number of people' => $number_of_people,
                            'first name' => $first_name, $last_name,
                            'email' => $email,
                            'address' => $address,
                            'card number' => $card_number,
                            'check-in date time' => $check_in_date_time,
                            'number of days' => $number_of_days);

                    if (!$fp = fopen('3.csv', 'a')) {
                        echo "Can't open CSV file.";
                    } else {
                        fputcsv($fp, $information, ";");
                        fclose($fp);
                    }
                }
                ?>
            </form>
            <form action="3.php" method="post">
                <br>
                <br>
                <label>Pokaż dane</label>
                <input type="checkbox" name="show_data">
                <br>
                <input type="submit" name="show_data_button" value="Pokaż">
                <br>
                <br>
                <?php
                if (isset($_POST["show_data"])) {
                    if (($handle = fopen("3.csv", "r")) !== FALSE) {
                        while (($information = fgetcsv($handle, 1000, ",")) !== FALSE) {
                            $num = count($information);
                            echo "<br />";
                            for ($i = 0; $i < $num; $i++) {
                                echo $information[$i] . "<br />\n";
                            }
                        }
                        fclose($handle);
                    }
                }
                ?>
            </form>
        </p>
    </body>
</html>
