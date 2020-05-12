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
            
            
            
            
                $cod = "AAAA";
                
                

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

            <section class="contenitore su-di-noi" id="sg">
                <h2 class="titolo1">Gibson SG</h2>
                <a href="#guitar" class="torna">torna sopra</a>
                <div class="contenitore-su-di-noi">
                    <img src="img/sg.jpg" alt="" class="imagen-about-us">
                    <div class="contenuto-testo">
                        <h3><span>1</span>Descrizione</h3>
                        <p>Gibson 1964 SG Std.Rissue Maestro VOS - Cherry Red - con custodia rigida Gibson Custom Shop
                            Il Gibson Custom Shop è sinonimo di artigianato, qualità e qualità del suono. Ogni strumento celebra l'eredità di Gibson attraverso accuratezza, autenticità e attenzione ai dettagli.
                            
                            Nonostante il fatto che George Harrison ed Eric Clapton abbiano superato uno standard da 64 SG, questo anno modello è stato chiaramente un anno eccezionale per gli SG in generale. Il grosso vibrato laterale è stato sostituito dall'affidabile Maestro Vibrola. I profili del collo erano aumentati di dimensioni e assomigliavano al profilo di Les Pauls dal 1959. E l'equilibrio, la giocabilità e l'aspetto del SG sembravano unire. Per tutti questi motivi, il Gibson Custom Shop è orgoglioso di presentare il nuovo membro della famiglia Historic Reissue: la SG Standard Reissue del 1964. Insieme al Maestro Vibrola e al profilo del collo grosso, offre tutte le specifiche vintage estremamente precise che potresti desiderare: metodi di costruzione originali, una vera finitura in anilina rossa, plastica simulata chimicamente, elettronica simulata e molto altro. Il risultato è lo SG più bello e melodioso che la serie SG Reissue ha prodotto.</p>
                        <h3><span>2</span>Caratteristiche principali</h3>
                        <p>lineamenti
                            generalmente
                            Modello: Gibson 1964 SG Std.Rissue Maestro VOS CH
                            Serie: Collezione SG personalizzata
                            Prodotto negli Stati Uniti
                            Numero di serie: 09 15 42
                            Peso: circa 3,2 kg
                            Numero di stringhe: 6
                            Orientamento: destrorso
                            Include custodia rigida Gibson Custom Shop
                            corpo
                            Forma del corpo: SG
                            Corpo: mogano (leggero in 1 parte)
                            collo
                            Collo: mogano
                            Profilo del manico: autentico '64 medio a forma di C.
                            Tastiera: palissandro indiano
                            Raggio della tastiera: 12 "
                            Intarsi tastiera: trapezio di nitrato di cellulosa
                            Scala: 2428 cm (628 mm)
                            Tasti: 22, Authentic Medium-Jumbo
                            Sella: nylon
                            Larghezza al capotasto: 43 mm
                            elettronica
                            Pickup al ponte: Custombucker Alnico III (non macchiato)
                            Pickup al manico: Custombucker Alnico III (non macchiato)
                            Interruttore pickup: switchcraft a 3 vie
                            Controlli: 2x Volume, 2x tono (CTS 500K Audio Taper Potis, Black Beauty Condenser)
                            hardware
                            Finitura: nichel
                            Ponte / cordiera: ottone nichelato
                            Testate: Kluson Single Line, Double Ring
                            Battipenna: multistrato nero
                            Calotte del regolatore: nere
                            Corde: .010, .013, .017, .026, .036, .046
                            Colore e finitura
                            Colore: rosso ciliegia
                            Finitura del corpo: nitrocellulosa VOS (patina vintage)
                            Fornitura
                            1 x Gibson 1964 SG hour Reissue Maestro VOS CH
                            1 custodia rigida Gibson Custom Shop
                            1 x Libretto certificato di autenticità
                            1 x Tag Hang Ristampa Storici</p>
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