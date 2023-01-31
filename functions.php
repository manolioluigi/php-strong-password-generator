<?php

    $passwordLength = $_GET['length'];

    function createPassword($length){
        //variabili e array
        $characters = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ0123456789!@#$%&*?';
        $maxCharacters = strlen($characters);
        $password = array();
        //ciclo creazione caratteri
        for($i = 0; $i < $length; $i++){
            $passwordCharacter = rand(0,$maxCharacters);
            $password[] = $characters[$passwordCharacter];
        }
        return implode($password);
    }

    //lancio funzione
    $userPassword = createPassword($passwordLength);

?>