<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chitarre uniche</title>
    <link rel="shortcut icon" href="img/ff.png" type="image/x-icon">
    <link rel="stylesheet" href="css/cssIndex.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">
</head>
<body>



<?php

$chiave;
session_start();

include("aprireConnessione.php");


               
        $sql = "SELECT * FROM chitarre ";
        $result = $connessione->query($sql);
     


        while($row = $result->fetch_assoc()){

            if(isset($_POST[$row['codiceChitarra']])){
            
                
                    $cod = $row['codiceChitarra'];
                    
                    
                
                    $sql = "INSERT INTO acquisti (codChitarra, mailUtente, data, prezzo) VALUES (?, ?, ?, ?)";

                    $prezzoo = $row['prezzo'];
                   
                    $data = date ("Y/m/d");
                    $as = $_SESSION["email"];
                    if($result = $connessione->prepare($sql)){
                        $result->bind_param("ssss",$cod,$as,$data,$prezzoo);
                        $result->execute();
                        
                        if($result){
                            echo "<br>grazie ". $_SESSION['email'] . "<br>";

                            $a = "DELETE FROM chitarre WHERE codiceChitarra ='$cod' ";
                            $result = $connessione->query($a);
                            echo "acquisto effettuato con successo!!<br>";
                            echo "<a href='index.php'>torna all'home</a>";
                            
                        }
                        
                        else{
                            echo "errore";
                        }
                        $result->close();
                    }
                    
   
            }
        }
        
    

 include("chiudereConnessione.php");    

  
?>


<header>
        <nav>
            <a href="index.php">Home</a>
            <a href="profilo.php">Profilo</a>
            <a href="#guitar">Chitarre</a>
            <a href="#servizi">Servizi</a>
            <a href="chiudereSessione.php">logout</a>
        </nav>
        <section class="testo-header">
            <h1>Se sei alla ricerca di uno strumento unico</h1>
            <h2>qui troverai ciò che fa per te</h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.98 C150.00,150.00 349.20,-50.00 500.00,49.98 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: #fff;"></path>
            </svg></div>
    </header>
    <main>





</main>







</body>



</html>