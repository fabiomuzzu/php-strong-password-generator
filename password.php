<?php 
    include __DIR__. '/functions.php';

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Inserisco la funzione nell'html di password.php -->
    <div>
        <?php echo generateRandomString($_SESSION['psw_length'])?>
    </div>
</body>
</html>