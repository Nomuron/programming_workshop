<?php
session_start(); 

if (isset($_POST["first_name"]) && isset($_POST["last_name"]) 
    && isset($_POST["email"]) && isset($_POST["weight"]) 
    && isset($_POST["formule"]) && isset($_POST["register_fighter"])) {
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $email = $_POST["email"];
        $weight = $_POST["weight"];
        $formule = $_POST["formule"];

        include 'db/db_interactions.php';
        $db_pointer = db_connection();
    
        fighter_inserter($db_pointer, $first_name, $last_name, $email, $weight, $formule);

        setcookie("fighters_name", $first_name, time() + 60 * 60 * 24 * 60);

        if(!isset($_SESSION['fighters_id'])) {
            $_SESSION['fighters_id'] = 1;
        } else {
            $_SESSION['fighters_id']++;
        }

        header('Location: /subpages/fighter_page.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style/style.css">
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Witamy na turnieju o puchar dzikej kuny!</h1>
        <!-- <?php echo $_SESSION['fighter'] ?> -->
        <h3>Proszę podaj swoje dane oraz formułę w jakiej chcesz walczyć</h3>
        <div class="container">
            <form class="register_fighter_form" action="index.php" method="POST">
                <?php include 'layouts/data_form.html'; ?>
                <input type="submit" name="register_fighter" value="Wyślij">
            </form>
        </div>
    </body>
</html>