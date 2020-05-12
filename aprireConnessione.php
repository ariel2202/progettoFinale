<?php
    $host = "localhost";
    $usuario = "ariel";
    $pass = "12345";
    $nomeDB = "strumentiMusicali";

    $tabella = "utentiRegistrati"; 


    error_reporting(0); //non mostra errori


    $connessione = new mysqli($host,$usuario,$pass,$nomeDB);
    if($connessione->connect_errno){
        echo 'vi è stato un errore durante la connessione';
        exit();
    }
    

?>