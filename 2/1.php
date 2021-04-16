<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <p>
            <text>Zadanie 2.1</text>
            <form action="1.php" method="post">
                a: <input type="number" name="a" required>
                b: <input type="number" name="b" required>
                <br>
                dodawanie: <input type="radio" name="calculation" value="adding" required>
                odejmowanie: <input type="radio" name="calculation" value="subtracting" required>
                mnożenie: <input type="radio" name="calculation" value="multiplying" required>
                dzielenie: <input type="radio" name="calculation" value="dividing" required>
                <br>
                <input type="submit" value="Wykonaj kalkulacje">
            </form>
            <?php
                $num1 = $_POST["a"];
                $num2 = $_POST["b"];
                $calc = $_POST["calculation"];
                switch ($calc) {
                    case "adding":
                        echo $num1 + $num2;
                        break;
                    case "subtracting":
                        echo $num1 - $num2;
                        break;
                    case "multiplying":
                        echo $num1 * $num2;
                        break;
                    case "dividing":
                        if ($num2 == 0) {
                            echo "Nie można dzielić przez 0.";
                        } else {
                            echo $num1 / $num2;
                        }
                        break;
                }
            ?>
        </p>
    </body>
</html>
