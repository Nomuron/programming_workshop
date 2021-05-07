<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    </head>
    <body>
        <p>
            <text>Zadanie 3.2</text>
            <form action="2.php" method="post">
                <textarea name="text1">Tekst1</textarea>
                <br>
                <textarea name="text2">Tekst2</textarea>
                <br>
                <input type="submit" value="Wyślij dane">
            </form>
            <?php
            if (isset($_POST["text1"]) && isset($_POST["text2"])) {
                $first_text = $_POST["text1"];
                $second_text = $_POST["text2"];

                if (file_put_contents("./2.txt", $first_text."\r\n".$second_text."\r\n", FILE_APPEND) === false) {
                    echo "Nie udało się zapisać danych.";
                } else {
                    echo "Udało się zapisać dane.";
                }
            }
            ?>
        </p>
    </body>
</html>
