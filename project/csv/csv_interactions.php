
<?php
function save_to_csv($id, $first_name, $last_name, $email, $weight, $formule) {
    
    $information = array(
        'id of fighter' => $id,
        'first name' => $first_name,
        'last name' => $last_name,
        'email' => $email,
        'weight category' => $weight,
        'formule' => $formule);

    if (!file_exists("../data/fighter_data.csv")) {
        $fp_title = fopen('../data/fighter_data.csv', 'a');
        fputcsv($fp_title, array("id of fighter", "first name", "last name", "email", "weight category",
            "formule"), ";");
        fclose($fp_title);
    }

    if (!$fp = fopen('../data/fighter_data.csv', 'a')) {
        echo "Can't open CSV file.";
    } else {
        fputcsv($fp, $information, ";");
        fclose($fp);
    }
}
?>