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
    <!-- condizione if per determinare: se il campo input è vuoto fare il display di riga vuota altrimenti lancio e mostro la funzione-->
    <?php if(isset($_GET['psw_length']) && $_GET['psw_length'] != ''){ ?>
        <!-- richiamo e mostro la funzione generateRandomString passandole i parametri dell'input con $_GET -->
        <div><?php echo generateRandomString($_GET['psw_length'])?></div>
    <?php } ?>
</body>
</html>