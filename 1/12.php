<?php
function gen_mat_show_trans($rows, $columns) {
    $matrix = [];

    for($i = 0; $i <= ($rows - 1); $i++) {
        for ($j = 0; $j <= ($columns - 1); $j++) {
            $matrix[$i][$j] = rand(1, 20);
        }
    }

    echo "Zwykła macierz";
    echo "<br>";

    for($i = 0; $i <= ($rows - 1); $i++) {
        for ($j = 0; $j <= ($columns - 1); $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }

    echo "Transpozycja";
    echo "<br>";

    for($i = 0; $i <= $columns; $i++) {
        for ($j = 0; $j <= $columns; $j++) {
            echo $matrix[$j][$i] . " ";
        }
        echo "<br>";
    }
}

if (isset($_POST["q"]) && isset($_POST["r"])) {
    $user_rows = $_POST["q"];
    $user_columns = $_POST["r"];

    print_r(gen_mat_show_trans($user_rows, $user_columns));
} else {
    echo "BŁĄD";}
?>
