<?php 

    if(isset($_GET['psw_length']) && $_GET['psw_length'] != ''){
        
        function generateRandomString($length) {
            // variabile dei characters
            $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-+.,';
            $charactersLength = strlen($characters);
            $randomString = '';
    
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
            return $randomString;
        }; 
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
    <?php if(isset($_GET['psw_length']) && $_GET['psw_length'] != ''){ ?>
        <div><?php echo generateRandomString($_GET['psw_length'])?></div>
    <?php } ?>
</body>
</html>