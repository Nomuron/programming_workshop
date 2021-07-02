<?php 
session_start(); 
$fighters_id = $_SESSION['fighters_id'];

include ('../db/db_interactions.php');
$db_pointer = db_connection();
$rows = fighter_selector($db_pointer);

if (isset($_POST['delete_data'])) {
    $fighter_number = $rows['id'];
    
    fighter_deleter($db_pointer, $fighter_number);

    header('Location: ../index.php');
}

if (isset($_POST['change_data'])) {
    header('Location: /subpages/change_data_form.php');
}

include ('../csv/csv_interactions.php');
if (isset($_POST['save_to_csv'])) {
    $id = $rows['id'];
    $first_name = $rows['first_name'];
    $last_name = $rows['last_name'];
    $email = $rows['email'];
    $weight = $rows['weight'];
    $formule = $rows['formule'];

    save_to_csv($id, $first_name, $last_name, $email, $weight, $formule);
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../style/style.css">
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php echo("<h1>Elo {$_COOKIE['fighters_name']}</h1>");?>
        <h3>Witaj na swoim koncie</h3>
        <?php echo("<h4>Jesteś $fighters_id fighterem, który się zapisał na turniej.</h4>") ?>
        <div class="container">
            <form class="register_fighter_form" action="fighter_page.php" method="POST">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <p>Imię: <?php echo $rows['first_name']; ?></p>
                        <p>Email: <?php echo $rows['email']; ?></p>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Nazwisko: <?php echo $rows['last_name']; ?></p>
                        <p>Kategoria wagowa: <?php echo $rows['weight']; ?></p>
                        <p>Formuła: <?php echo $rows['formule']; ?></p>
                    </div>
                    <div class="col-12">
                        <input class="fighter_button" type="submit" name="delete_data" value="Usuń dane">
                        <input class="fighter_button" type="submit" name="change_data" value="Zmień dane">
                    </div>
                    <div class="col-12">
                        <input class="fighter_button_2" type="submit" name="save_to_csv" value="Zapisz dane do pliku">
                        <input class="fighter_button_2" type="submit" name="load_from_csv" value="Odczytaj dane z pliku">
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>