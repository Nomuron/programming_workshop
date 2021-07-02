<?php
function db_connection() {
    if (!$db = mysqli_connect("localhost", "root", "", "fight_club")) {
        exit("Nie udało się połączyć z bazą");
    } 

    return $db;
}

function fighter_inserter($db, $name, $last_name, $email, $weight_class, $formule) {
    $insert_query = "INSERT INTO fighter(first_name, last_name, email, weight, formule) VALUES ('$name', '$last_name', '$email', '$weight_class', '$formule')";

    if (!$insert_results = mysqli_query($db, $insert_query)) {
        echo "Nie udało się wrzucić danych";
    } 
}

function fighter_selector($db) {
    $select_query = 'SELECT * FROM fighter ORDER BY id DESC LIMIT 1';
    
    if (!$results = mysqli_query($db, $select_query)) {
        echo "Nie udało się ściągnąć danych";
    } 
    
    $rows = mysqli_fetch_array($results, MYSQLI_BOTH);

    return $rows;
}

function fighter_selector_id($db) {
    $select_query = 'SELECT id FROM fighter ORDER BY id DESC LIMIT 1';
    
    if (!$results = mysqli_query($db, $select_query)) {
        echo "Nie udało się ściągnąć danych";
    } 
    
    $rows = mysqli_fetch_array($results, MYSQLI_BOTH);

    return $rows;
}

function fighter_deleter($db, $fighter_number) {
    $delete_query = "DELETE FROM fighter WHERE id='$fighter_number'";

    if (!$delete_results = mysqli_query($db, $delete_query)) {
        echo "Nie udało się usunąć danych";
    } 
}

function fighter_update($db, $fighter_number, $first_name, $last_name, $email, $weight, $formule) {
    $update_query = "UPDATE fighter SET first_name='$first_name', last_name='$last_name', email='$email', weight='$weight', formule='$formule' WHERE id='$fighter_number'";
        
    if (!$update_results = mysqli_query($db, $update_query)) {
        echo "Nie udało się wrzucić danych";
    } 
}
?>