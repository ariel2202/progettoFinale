<?php
    
       
        $nome = $_POST['nome'];
        $cognome = $_POST['cognome'];
        $cf = $_POST['codice'];
        $email = $_POST['email'];
        $Pass = $_POST['pass'];

        include("aprireConnessione.php");

 

$sql = "INSERT INTO utentiregistrati (email, nome, cognome, pass) VALUES (?, ?, ?, ?)";

        if($result = $connessione->prepare($sql)){
            $result->bind_param("ssss",$email,$nome,$cognome,$Pass);
            $result->execute();
            if($result){

                session_start();
                $_SESSION["email"]=$_POST["email"];
                echo "dati inseriti correttamente!!";
                header("Location:index.php");
            }
            else{
                echo "errore";
            }
            $result->close();
        }
        
            include("chiudereConnessione.php");



?>