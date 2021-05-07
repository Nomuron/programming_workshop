<?php
function adding($a, $b) {
    echo $a + $b;
}

function substracting($a, $b) {
    echo $a - $b;
}

function multiplying($a, $b) {
    echo $a * $b;
}

function dividing($a, $b) {
    if ($b != 0) {
        echo $a / $b;
    } else {
        echo "Nie można dzielić przez 0!";
    }
}
?>
