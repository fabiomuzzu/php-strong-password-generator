<?php 

    if(isset($_GET['psw_length']) && $_GET['psw_length'] != ''){
        
        // Start della sessione
        session_start();
        // Creo la variabile session psw_length e le assegno il valore recuperato dall'input tramite GET
        $_SESSION['psw_length'] = $_GET['psw_length'];
        // Inoltro il dato tramite header al file password.php
        header('Location: ./password.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Random PW Generator</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">Random password generator</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <!-- Creo la form -->
                    <form action="./index.php" method="GET">
                        <label for="basic-url" class="form-label">Inserisci la lunghezza della password:</label>
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">Quanti caratteri vuoi utilizzare?</span>
                            <input class="form-control" type="number" id="character_length" name="psw_length" min="7" max="30" aria-describedby="basic-addon3 basic-addon4" />
                        </div>
                        <div class="form-text" id="basic-addon4">La lunghezza della password può avere un minimo di 7 caratteri e un massimo di 30.</div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>