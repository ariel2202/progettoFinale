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
            
            
            
            
                $cod = "EEEE";
                
                

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





    <header>
        <nav>
            <a href="">Home</a>
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
        

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="form">
            <div class="form">

      
        <section class="contenitore su-di-noi" id="deluxe">
            <h2 class="titolo1">Gibson Les Paul</h2>
            <a href="#guitar" class="torna">torna sopra</a>
            <div class="contenitore-su-di-noi">
                <img src="img/deluxe.jpg" alt="" class="imagen-about-us">
                <div class="contenuto-testo">
                    <h3><span>1</span>Descrizione</h3>
                    <p>LES PAUL® 57 REISSUE GOLD TOP VOS
                        LES PAUL® 57 REISSUE GOLD TOP VOS
                        
                        AS GOOD AS GOLD
                        Gibson Custom Shop is the pinnacle of craftsmanship, quality, and sound excellence. Each instrument celebrates Gibson's legacy through accuracy, authenticity and attention to detail.
                        
                        The iconic '57 Goldtop has been the tool of choice for countless guitar heroes. Its elegant gold finish, classic solid mahogany/maple construction and versatile humbucking pickups represent everything one could possibly need in a Les Paul model. This authentic recreation exemplifies Gibson Custom Shop's tireless quest for accuracy to the original year of production, from the woods to the construction to the parts and precise contours throughout. Each Custom Shop Reissue is every bit the instrument and statement piece as the priceless vintage examples, providing an ownership experience that is endlessly fun.</p>
                    <h3><span>2</span>Caratteristiche principali</h3>
                    <p>Body

                        Forma: Les Paul
                        Serie:  HISTORIC-2018
                        Top: Acero plain
                        Back: Mogano lightweight
                        Finitura:  Nitrocellulose Lacquer
                        Manico
                        
                        Materiale: Mogano long tenon
                        Tastiera: Palissandro massello
                        Profilo manico: Medium Chunky
                        Scala: 24.75"
                        Radius: 12"
                        Numero Tasti: 22
                        Tipo Tasti: Jascar FW50078
                        Capotasto: Nylon
                        Larghezza capotasto: 1.687"
                        Intarsi: Trapezoid cellulosa
                        Elettronica
                        
                        Pickup Manico: Custombucker
                        Pickup Ponte: Custombucker
                        Controlli: 2x Volume + 2x Tono
                        Condensatori Bumblebee
                        Pickup Switching: 3 posizioni
                        Meccanica
                        
                        Ponte: ABR-1
                        Meccaniche: Kluson Deluxe
                        Battipenna: Acrilico laminato</p>
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