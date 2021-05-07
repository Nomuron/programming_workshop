<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <p>
            <text>Zadanie 3.1</text>
            <form action="1.php" method="post">
                a: <input type="number" name="a" required>
                b: <input type="number" name="b" required>
                <br>
                dodawanie: <input type="radio" name="calculation" value="adding" required>
                odejmowanie: <input type="radio" name="calculation" value="substracting" required>
                mnożenie: <input type="radio" name="calculation" value="multiplying" required>
                dzielenie: <input type="radio" name="calculation" value="dividing" required>
                <br>
                <input type="submit" value="Wykonaj kalkulacje">
            </form>
            <?php
                if (isset($_POST["a"]) && isset($_POST["b"]) && isset($_POST["calculation"])) {
                    $num1 = $_POST["a"];
                    $num2 = $_POST["b"];
                    $calc = $_POST["calculation"];

                    include "1_calculations.php";

                    switch ($calc) {
                        case "adding":
                            adding($num1, $num2);
                            break;
                        case "substracting":
                            substracting($num1, $num2);
                            break;
                        case "multiplying":
                            multiplying($num1, $num2);
                            break;
                        case "dividing":
                            dividing($num1, $num2);
                            break;
                    }
                }
            ?>
        </p>
    </body>
</html>
