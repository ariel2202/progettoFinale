<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Document</title>
</head>
<body>
    <?php


        session_start();

        if(!isset($_SESSION["email"])){
            header("Location:login.html");
        }



        if(isset($_POST["btn1"])){


            /*
                session_start();
                if(!isset($_SESSION["xxx"])){
                    header("Location:login.html");
                }
            */    



    

            function acquista(){


                $host = "localhost";
                $usuario = "ariel";
                $pass = "12345";
                $nomeDB = "strumentiMusicali";
            
                $tabella = "acquisti"; 
            
            
                error_reporting(0); //non mostra errori
            
            
                $connessione = new mysqli($host,$usuario,$pass,$nomeDB);
                if($connessione->connect_errno){
                    echo 'vi è stato un errore durante la connessione';
                    exit();
                }
            
            
            
            
                $cod = "dddd";
                
                

                $sql = "INSERT INTO acquisti (codChitarra, mailUtente, data, prezzo) VALUES (?, ?, ?, ?)";
                
                $quantita = 1;
                $data = date ("Y/m/d");
                $as = $_SESSION["email"];
                if($result = $connessione->prepare($sql)){
                    $result->bind_param("ssss",$cod,$as,$data,$quantita);
                    $result->execute();
                    if($result){
                        echo "acquisto effettuato con successo!!<br>";
                        echo "<a href='index.html'>torna all'home</a>";
                    }
                    else{
                        echo "errore";
                    }
                    $result->close();
                }
                
                
                mysql_close($connessione);






                
                }
                acquista();


            }

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
        <div class="form">
        stai per acquistare la explorer 1984<br>
    per confermare clicca
            <button type="submit" name="btn1">QUI</button>
            <p class="warnings" id="warnings"></p>
        </div>
    </form>
   
   
   <?php
   /*
        echo"ciao " . $_SESSION["yyy"] . " " . $_SESSION["zzz"];


*/
    ?>
    <br>
    torna all'home :<br>
    <a href="index.html">torna all'home</a>
    <br>
    <br>



</body>
</html>