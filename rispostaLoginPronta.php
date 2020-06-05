<?php
    
    $pa = $_POST["pass"];
    $e = $_POST["email"];
    include("aprireConnessione.php");

    $tabella = "utentiRegistrati";
        
    $sql = "SELECT nome ,cognome, email FROM $tabella WHERE pass = ? AND email = ?";
    

    if($result = $connessione->prepare($sql)){
        $result->bind_param("ss",$pa,$e);
        $result->execute();
        $result->store_result();

        if($result->num_rows()>0){
           session_start();
           $_SESSION["email"]=$_POST["email"];
            $result->bind_result($n,$co,$em);
            while($result->fetch()){
                $_SESSION["nome"] = $n;
                $_SESSION["cognome"] = $co;
            }
            
            
            
            header("Location:index.php");
        }
        else{
            echo "utente non registrato";
            header("Location:login.php");
        }
        
        $result->close();
    }
    else{
        echo"<script>alert('accesso effettuato con successo')</script>";
        echo "errore di elaborazione";
    }


        include("chiudereConnessione.php");




?>