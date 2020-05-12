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
            
            
            
            
                $cod = "HHHH";
                
                

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
            <a href="index.html">Home</a>
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

        <section class="contenitore su-di-noi" id="ltd">
            <h2 class="titolo1">ESP LTD</h2>
            <a href="#guitar" class="torna">torna sopra</a>
            <div class="contenitore-su-di-noi">
                <img src="img/ltd.jpg" alt="" class="imagen-about-us">
                <div class="contenuto-testo">
                    <h3><span>1</span>Materiali di ottima qualità</h3>
                    <p>Few guitar players of the world merit as much respect as Alex Skolnick. Originally gaining fame as the teenage phenomenon holding down guitar duties for Bay Area thrashers Testament, Alex has gone on to tackle multiple musical genres, including sophisticated jazz playing in his Alex Skolnick Trio. With the LTD AS-1, guitarists of all styles will appreciate this amazing single-cutaway design that's surprisingly affordable considering its feature set that was created for professional players. Its contemporary set of tools include a set-neck, U-shaped three-piece mahogany neck for smooth access all the way up and down the fingerboard to the full thickness Eclipse body made of mahogany with maple cap. It comes with an excellent set of Seymour Duncan '59 (neck) and JB (bridge) pickups. Its flexible controls include individual volume knobs for each pickup, a tone control with push-pull access to split the neck pickup coil, and a pickup selector toggle. Its high-end components include a bone nut, TonePros locking TOM bridge and tailpiece, Dunlop straplok, and Grover tuners. The LTD AS-1 comes in an amazing-looking Lemon Burst translucent finish over its figured flamed maple top.</p>
                    <h3><span>2</span>Caratteristiche principali</h3>
                    <p>CONSTRUCTION
                        Set-Neck
                        SCALE
                        24.75"
                        BODY
                        Mahogany
                        TOP
                        Flamed Maple
                        NECK
                        3Pc Mahogany
                        FINGERBOARD
                        Pau Ferro
                        FINGERBOARD RADIUS
                        305mm
                        FINISH
                        LEMON BURST
                        NUT WIDTH
                        43mm
                        NUT TYPE
                        Bone
                        NECK CONTOUR
                        U
                        FRETS/TYPE
                        22 XJ
                        HARDWARE COLOR
                        Chrome
                        STRAP BUTTON
                        Dunlop Straplok
                        TUNERS
                        Grover
                        BRIDGE
                        Tonepros Locking TOM & Tailpiece
                        NECK PU
                        Seymour Duncan '59*
                        BRIDGE PU
                        Seymour Duncan JB
                        ELECTRONICS
                        Passive
                        ELECTRONICS LAYOUT
                        Volume/Volume/Tone(Push/Pull*)/Toggle Switch
                        STRINGS
                        D'Addario XL110 (.010/.013/.017/.026/.036/.046)
                        CASE
                        EC GUITAR FORM FIT CASE
                        CASE INCLUDED
                        Y</p>
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