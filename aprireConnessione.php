<?php
    $host = "localhost";
    $usuario = "ariel";
    $pass = "12345";
    $nomeDB = "strumentiMusicali";

    $tabella = "utentiRegistrati"; 


    error_reporting(0); //No me muestra errores


    $connessione = new mysqli($host,$usuario,$pass,$nomeDB);
    if($connessione->connect_errno){
        echo 'vi è stato un errore durante la connessione';
        exit();
    }
    /*$bello = "bello";
    $as = $connessione -> query (" SELECT pChiave , sinonimo FROM pdb
        WHERE pChiave = $bello");
        $as -> execute();
    */

?>