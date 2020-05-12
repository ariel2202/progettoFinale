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
            
            
            
            
                $cod = "FFFF";
                
                

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

        <section class="contenitore su-di-noi" id="prs">
            <h2 class="titolo1">PRS</h2>
            <a href="#guitar" class="torna">torna sopra</a>
            <div class="contenitore-su-di-noi">
                <img src="img/prs.jpg" alt="" class="imagen-about-us">
                <div class="contenuto-testo">
                    <h3><span>1</span>Descrizione</h3>
                    <p>Lovies Guitars has this beautiful and mean PRS Custom 24 in a Rare Trans Amber 10 Top. This guitar is awesome. Sounds incredible with its desirable PRS high quality and the early 57/08 TM humbuckers! All ready to bring your best moves to life! All original except two tasteful upgrades. The 57/08s and the 3-way. Just a few tiny indentations on the top and back and one tiny dint on the tip of the headstock. Really great shape. Includes hard case in pics. See images below for condition detail. No breaks Cracks or repairs. Nice straight neck. Great action, set up and ready to play.</p>
                    <h3><span>2</span>Caratteristiche principali</h3>
                    <p>CORPO



                        Legno Top: Acero Figurato
                        
                        Fondo: Mogano
                        
                        
                        MANICO
                        
                        
                        
                        Numero di tasti: 24
                        
                        Lunghezza della scala: 25 "
                        
                        Legno Manico: mogano
                        
                        Tastiera: Palissandro
                        
                        Forma Manico: sottile modello o schema regolare
                        
                        Intarsi Tastiera: Uccelli
                        
                        
                        HARDWARE / ELETTRONICA
                        
                        
                        
                        Ponte: Tremolo PRS
                        
                        Meccaniche: PRS fase III meccaniche autobloccanti
                        
                        Copertura Truss Rod: "Custom"
                        
                        Tipo di hardware: Nichel
                        
                        Pickup al manico: 57/08 Treble
                        
                        Pickup al ponte: 57/08 Bass
                        
                        
                        OPZIONE
                        
                        
                        
                        Opzione Top: Flame o Quilted Maple 10-Top Flame o 10-Top Quilted Maple
                        
                        Opzione Manico: Palissandro indiano
                        
                        Opzione Hardware: Gold o ibrida
                        
                        Finitura Opzione: ordine Speciale finitura
                        
                        Altra opzione: HFS e Vintage Pickups Bassi</p>
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