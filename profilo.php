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
      

        echo"ciao " . $_SESSION['cognome'] . " " . $_SESSION['nome'] . " ecco i tuoi acquisti :<br>";


            
            include("aprireConnessione.php");

                
            $sql = "SELECT * FROM acquisti WHERE mailUtente = ?";
           

            if($result = $connessione->prepare($sql)){
                $result->bind_param("s",$_SESSION['email']);
                $result->execute();
                $result->store_result();

                if($result->num_rows()>0){

                    $result->bind_result($n,$co,$em,$pq);
                    while($result->fetch()){
                        echo $n. " " . $co . " " .$em . " " . $pq . "<br>";
                    }
                    
                    echo "per tornare all'home, clicca <a href='index.html'> QUI</a>";
                    
                    
                    
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
   
</body>
</html>