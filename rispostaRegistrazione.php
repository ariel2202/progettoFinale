<?php
    
    include("aprireConnessione.php");

    if(isset($_POST['btn1'])){
       
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        $connessione->query("INSERT INTO $tabella (codiceFiscale,nome,cognome,email,pass,indirizzo,numeroCarta) values ('','$nome','$cognome','$email','$pass','','')");

        echo "registrazione avvenuta con successo!!";
        include("chiudereConnessione.php");

        
    
    }


?>