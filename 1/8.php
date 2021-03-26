<?php
$tab[] = $_POST["l"];
$tab[] = $_POST["m"];
$tab[] = $_POST["n"];

function bub_sort($my_array) {
    do {
        $swapped = false;
        for($i = 0; $i < (count($my_array) - 1); $i++) {
            if($my_array[$i] > $my_array[$i + 1]) {
                list($my_array[$i + 1], $my_array[$i]) =
                    array($my_array[$i], $my_array[$i + 1]);
                $swapped = true;
            }
        }
    }
    while($swapped);
    return $my_array;
}

function bub_sort_rev($my_array) {
    do {
        $swapped = false;
        for($i = (count($my_array) - 1); $i > 0; $i--) {
            if($my_array[$i] > $my_array[$i - 1]) {
                list($my_array[$i - 1], $my_array[$i]) =
                    array($my_array[$i], $my_array[$i - 1]);
                $swapped = true;
            }
        }
    }
    while($swapped);
    return $my_array;
}

print_r(bub_sort($tab));
echo "<br>";
print_r(bub_sort_rev($tab));
?>
