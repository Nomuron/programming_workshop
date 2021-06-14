<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    </head>
    <body>
        <h1>Witamy na turnieju o puchar dzikej kuny!</h1>
        <h3>Proszę podaj swoje dane oraz formułę w jakiej chcesz walczyć</h3>
        <div class="container">
            <form class="register_fighter_form" action="index.php" method="POST">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <label>Imię:</label>
                        <input type="text" name="first_name" required>
                        </br>
                        <label>Nazwisko:</label>
                        <input type="text" name="last_name" required>
                        </br>
                        <label>Email:</label>
                        <input type="email" name="email" required>
                        </br>
                        </br>
                        <p>Kategoria wagowa</p>
                        <input type="radio" name="weight" value="heavy" required>
                        <label>Waga ciężka</label>
                        </br>
                        <input type="radio" name="weight" value="middle" required>
                        <label>Waga średnia</label>
                        </br>
                        <input type="radio" name="weight" value="welter" required>
                        <label>Waga półśrednia</label>
                        </br>
                        <input type="radio" name="weight" value="light" required>
                        <label>Waga lekka</label>
                    </div>
                    <div class="col-12 col-md-6">
                        <p>Dyscyplina i formuła:</p>
                        <input type="radio" name="formule" value="wrestling_free" required>
                        <label>Zapasy w stylu wolnym</label>
                        </br>
                        <input type="radio" name="formule" value="wrestling_greco_roman" required>
                        <label>Zapasy w stylu klasycznym</label>
                        </br>
                        <input type="radio" name="formule" value="kickboxing_k1" required>
                        <label>Kickboxing w formule K1</label>
                        </br>
                        <input type="radio" name="formule" value="kickboxing_full" required>
                        <label>Kickboxing w formule full-contact</label>
                        </br>
                        <input type="radio" name="formule" value="bjj_gi" required>
                        <label>BJJ w formule GI</label>
                        </br>
                        <input type="radio" name="formule" value="bjj_no_gi" required>
                        <label>BJJ w formule no-gi</label>
                        </br>
                        <input type="radio" name="formule" value="mma_ama" required>
                        <label>MMA w formule amatorskiej</label>
                        </br>
                        <input type="radio" name="formule" value="mma_pro" required>
                        <label>MMA w formule zawodowej</label>
                        </br>
                    </div>
                </div>
                <input type="submit" name="register_fighter" value="Wyślij">
                <?php
                if (isset($_POST["register_fighter"]) && isset($_POST["first_name"]) 
                && isset($_POST["last_name"]) && isset($_POST["email"]) 
                && isset($_POST["weight"]) && isset($_POST["formule"])) {
                    $first_name = $_POST["first_name"];
                    $last_name = $_POST["last_name"];
                    $email = $_POST["email"];
                    $weight = $_POST["weight"];
                    $formule = $_POST["formule"];
                }

                if (!$db = mysqli_connect("localhost", "root", "", "fight_club")) {
                    exit("Nie udało się połączyć z bazą");
                } else {
                    echo "Udało się połączyć z bazą";
                }
                ?>
            </form>
        </div>
    </body>
</html>