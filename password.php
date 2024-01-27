<?php 
    // Uso include dir per includere il contenuto di functions.php
    include __DIR__. '/functions.php';

    // Faccio partire la sessione
    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Password Display</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="content d-flex justify-content-center my-5">
                    <div class="mb-3">
                        <div class="input-group">
                            <span class="input-group-text" id="basic-addon3">La tua password è:</span>
                            <!-- Inserisco la funzione nell'html di password.php utilizzando session per poterla estrapolare dal file index.php-->
                            <div>
                                <span class="form-control" id="basic-addon3"><?php echo generateRandomString($_SESSION['psw_length'])?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>