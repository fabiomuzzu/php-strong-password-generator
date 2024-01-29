<?php 

// Funzione che mi genera una stringa di caratteri casuali tramite una variabile
    function generateRandomString($length) {
        
        // Variabile dei characters
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!?~@#-+.,';

        $charactersLength = strlen($characters);
        $randomString = '';

        if ($length < 7 || $length > 30) {
            $randomString = 'La lunghezza della password deve essere tra i 7 ed i 30 caratteri';
        }
        else{
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[random_int(0, $charactersLength - 1)];
            }
        }
            
        return $randomString;
    }; 

?>