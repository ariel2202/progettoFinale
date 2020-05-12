<?php
    
    $pa = $_POST["pass"];
    $e = $_POST["email"];
    include("aprireConnessione.php");

        
    $sql = "SELECT nome ,cognome, email FROM $tabella WHERE pass = ? AND email = ?";
    //$sql = "SELECT nome ,cognome, email FROM $tabella WHERE pass = :pppp AND email = :qqqq";

    if($result = $connessione->prepare($sql)){
        $result->bind_param("ss",$pa,$e);
        $result->execute();
        $result->store_result();

        if($result->num_rows()>0){
           session_start();
           $_SESSION["email"]=$_POST["email"];
           //$_SESSION["yyy"];
           //$_SESSION["zzz"];
            $result->bind_result($n,$co,$em);
            while($result->fetch()){
                //echo $n. " " . $co . " " .$em ."<br>";
                $_SESSION["nome"] = $n;
                $_SESSION["cognome"] = $co;
            }
            
            
            
            header("Location:index.html");
        }
        else{
            echo "utente non registrato";
            header("Location:login.html");
        }
        
        $result->close();
    }
    else{
        echo "errore di elaborazione";
    }


        include("chiudereConnessione.php");




?>