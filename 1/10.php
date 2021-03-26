<?php
for ($i = 0; $i<$_POST["o"]; $i++) {
    for($j = 0; $j<=$i; $j++){
        echo '*';
    }
    echo '<br>';
}
for($i=0; $i<$_POST["o"]; $i++){
    for($j=$_POST["o"]; $j>$i; $j--){
        echo '*';
    }
    echo '<br>';
}
for ($i = 0; $i<$_POST["o"]; $i++) {
    for($j=0; $j<$_POST["o"]; $j++){
        if($j<$i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
}
for ($i = 0; $i<$_POST["o"];) {
    $i++;
    for($j= $_POST["o"]; $j>0; $j--){
        if($j>$i) echo '&nbsp;';
        else echo '*';
    }
    echo '<br>';
}
?>
