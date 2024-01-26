<?php 

    if(isset($_GET['psw_length']) && $_GET['psw_length'] != ''){
        
        session_start();
        $_SESSION['psw_length'] = $_GET['psw_length'];

        header('Location: ./password.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- creo la form -->
    <form action="./index.php" method="GET">
        <input type="number" id="tentacles" name="psw_length" min="1" max="25" />
    </form>
</body>
</html>