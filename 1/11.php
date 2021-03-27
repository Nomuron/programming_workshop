<?php
$letters = array('a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z');
$text = str_split(strtolower($_POST["p"]));
foreach($text as $char) {
    $letter = array_search($char, $letters);
    if(isset($letter)) {
        unset($letters[$letter]);
    }
}
if(!$letters) {
    echo "true";
} else {
    echo "false";
}
?>
