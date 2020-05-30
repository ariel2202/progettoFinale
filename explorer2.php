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


        session_start();

        if(!isset($_SESSION["email"])){
            header("Location:login.html");
        }
        if(isset($_POST["btn1"])){   

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
            
                $cod = "BBBB";
                
                

                $sql = "INSERT INTO acquisti (codChitarra, mailUtente, data, prezzo) VALUES (?, ?, ?, ?)";
                
                $quantita = 1;
                $data = date ("Y/m/d");
                $as = $_SESSION["email"];
                if($result = $connessione->prepare($sql)){
                    $result->bind_param("ssss",$cod,$as,$data,$quantita);
                    $result->execute();

                    echo"ciao ". $_SESSION['email'];
                    if($result){

                        $a = "DELETE FROM chitarre where codChitarre ='$cod' ";
                        $result = $connessione->query($a);
                        
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

    <header>
        <nav>
            <a href="index.html">Home</a>
            <a href="profilo.php">Profilo</a>
      <!--      <a href="#guitar">Chitarre</a>
            <a href="#servizi">Servizi</a>  -->
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
        

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
            <div class="form">

            <section class="contenitore su-di-noi" id="explorer">
                <h2 class="titolo1">Epihone Explorer 1984</h2>
                <div class="contenitore-su-di-noi">
                    <img src="img/explorer.jpg" alt="" class="imagen-about-us">
                    <div class="contenuto-testo">
                        <h3><span>1</span>Descrizione</h3>
                        <p>La 1984 Explorer EX è il ritorno della "1984" con una forma classica che si distingue sul palco. Originariamente introdotta nel 1958, il body dalla forma radicale e futuristica della Explorer è stato adottato da allora come lo strumento preferito dai chitarristi hard rock e metal. Con un nuovo ed elegante aggiornamento del design classico abbinato a pickup EMG ad elevato guadagno, la "1984" è una Explorer completamente nuova.</p>
                        <h3><span>2</span>Caratteristiche principali</h3>
                        <p>Body: Mogano
                            Manico: Mogano
                            Manico: SlimTaper "D" Profile
                            Scala: 24.75"
                            Tastiera: Palissandro
                            Raggio: 12"
                            Capotasto: 1.68"
                            Pickup: EMG-85 attivo (manico), EMG-81 attivo (ponte)
                            Controlli: Master Volume, Master Tone, Volume
                            Vano batteria da 9 volt posteriore
                            Selettore Pickup interamente in metallo a levetta a 3 vie
                            Ponte: LockTone Tune-O-Matic
                            Cordiera stopbar
                            Hardware: Nero
                            Meccaniche: Grover con manopole piccole in metallo
                            Finitura: Alpine White (AW)</p>
                            <p>
                                <a href="explorer.php" class="acquista">Acquista</a>
                            </p>
                            <p>
                                <!--
                                <button class="acquista" onclick="explorer.php">qui</button>
                            -->
                            <button type="submit" name="btn1" class="acquista">Acquista qui</button>
                            </p>
                        
                    </div>
                </div>
            </section>
        

        </form>


    </main>
    <footer>
        <div class="contenitore-footer">
            <div class="content-foo">
                <h4>Telefono</h4>
                <p>3465087794</p>
            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>arielpapy@hotmail.com</p>
            </div>
            <div class="content-foo">
                <h4>Indirizzo</h4>
                <p>Via Corridoni 44,24124 (BG)</p>
            </div>
        </div>
        <h2 class="titolo-final">&copy; Ariel music | Huaycho Ariel</h2>
    </footer>
</body>


</html>