<?php
    
       
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $cf = $_POST['codice'];
        $email = $_POST['email'];
        $Pass = $_POST['pass'];

        include("aprireConnessione.php");

        $sql = "INSERT INTO utentiregistrati (codiceFiscale, nome, cognome, email, pass) VALUES (?, ?, ?, ?, ?)";

        if($result = $connessione->prepare($sql)){
            $result->bind_param("sssss",$cf,$nome,$cognome,$email,$Pass);
            $result->execute();
            if($result){
                echo "dati inseriti correttamente!!";
            }
            else{
                echo "errore";
            }
            $result->close();
        }
        
            include("chiudereConnessione.php");



?>