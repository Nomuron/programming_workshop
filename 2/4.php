<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <p>
            <text>Zadanie 2.4</text>
            <form action="4.php" method="post">
                z: <input type="number" min="1" name="c" required>
                <br>
                <input type="submit" value="Sprawdź czy liczba jest pierwsza">
            </form>
            <?php
            $number = $_POST["c"];
            function check_prime($num)
            {
                $counter = 0;
                if ($num == 1)
                    return 0;
                for ($i = 2; $i <= $num/2; $i++) {
                    $counter += 1;
                    if ($num % $i == 0)
                        return 0;
                }
                echo "Pętla wykonała się $counter razy";
                return 1;
            }

            $is_prime = check_prime($number);

            if ($is_prime == 1) {
                echo "<br>";
                echo "To jest liczba pierwsza";
            } else {
                echo "<br>";
                echo "To nie jest liczba pierwsza";
            }
            ?>
        </p>
    </body>
</html>
