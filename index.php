<!DOCTYPE html>
<html lang="en">

<head id="head">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>chitarre uniche</title>
    <link rel="shortcut icon" href="img/ff.png" type="image/x-icon">
    <link rel="stylesheet" href="css/cssIndex.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet">




    <style>
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
  width:100px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: #642a73;
  color: white;
}
</style>


</head>

<body>
    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="profilo.php">Profilo</a>
         <!--   <a href="#guitar">Chitarre</a>
            <a href="#servizi">Servizi</a> -->
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


        <!--
        <section class="contenitore su-di-noi">
            <h2 class="titolo">I nostri prodotti</h2>
            <div class="contenitore-su-di-noi">
                <img src="img/xx.jpg" alt="" class="imagen-about-us">
                <div class="contenuto-testo">
                    <h3><span>1</span>Materiali di ottima qualità</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>2</span>Maestri liutai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                    <h3><span>3</span>Maestri liutai</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt veniam eius aspernatur ad
                        consequuntur aperiam minima sed dicta odit numquam sapiente quam eum, architecto animi pariatur,
                        velit doloribus laboriosam ut.</p>
                </div>
            </div>
            
        </section>
        <h1>#head</h1>
        -->


        <form class='contenitore' action="paginaChitarra.php" method="POST">
    
            <?php
        
        echo "ciao";
                include("aprireConnessione.php");
        
                                
                $sql = "SELECT * FROM chitarre ";
                $result = $connessione->query($sql);
        
           //     print_r ($result);
        
                echo "<table class='contenuto-testo'>";
                echo "<tr>";
                    echo "<th>Prodotto</th><th>Marca</th><th>modello</th><th>anno</th><th>prezzo</th><th>Info</th>";
                echo "</tr>";
        
                
        
        
                echo "<tr>";
                if($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                      /*  $cont++;
                        echo "$cont";
                        */
                      
                        echo "<tr align='center'><td><img src='{$row['immagine']}' width='200' height='150'></td>";
                        echo "<td>". $row["marca"] . "</td>";
                        echo "<td>". $row["modello"] . "</td>";
                        echo "<td>". $row["anno"] . "</td>";
                        echo "<td>". $row["prezzo"] . "</td>";
                      /*  echo "<td><input class='acquista' type='submit' name='$cont' value='info'>";*/


                        echo "<td><input class='acquista' type='submit' name='{$row ['codiceChitarra']}' value='visualizza informazione' id='{$row ['codiceChitarra']}'>";
                        
                        echo "</tr>";
                        
        
                
                    }
        
                    echo "</tr>";
         


                    echo"</table>";

                    
                    
                }
                else{
                    echo "nessun risultato";
                }
        
                    include("chiudereConnessione.php");
        
        
        
            ?>
            
       
            </form>



            <!--
                
                <section class="chitarre">
                    <div class="contenitore">
                        <h2 class="titolo" id="guitar">Le nostre chitarre</h2>
                        <div class="galeria-port">
                            <div class="imagen-port">
                                <img src="img/sg.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="sg1.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/explorer.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="explorer2.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/fender.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="stratocaster3.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/esp.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="esp4.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/deluxe.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="lespaul5.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/prs.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="prs6.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/ibanez.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="ibanez7.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                            <div class="imagen-port">
                                <img src="img/ltd.jpg" alt="">
                                <div class="hover-galeria">
                                    <a href="ltd8.php">
                                        <img src="img/icono1.png" alt="">
                                    </a>
                                    <p>Specifiche tecniche</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            

                <section class="clienti contenitore">
                    <h2 class="titolo">Cosa dicono i nostri clienti</h2>
                    <div class="cards">
                        <div class="card">
                            <img src="img/james.jpg" alt="">
                            <div class="contenuto-testo-card">
                                <h4>James hetfield</h4>
                                <p>Non so come facevo prima senza la mia explorer ESP, grazie Ariel per questa magnifica chitarra!!</p>
                            </div>
                        </div>
                        <div class="card">
                            <img src="img/jhon.jpg" alt="">
                            <div class="contenuto-testo-card">
                                <h4>Jhon Frusciante</h4>
                                <p>Dopo aver person la mia Fender volevo smettere con la musica, ma grazie a questo sito sono riuscito a trovare una strato ancora migliore di quello che avevo prima. Grazie mille!!</p>
                            </div>
                        </div>
                    </div>
                </section>
                
                <section class="about-services">
                    <div class="contenitore">
                        <h2 class="titolo" id="servizi">I nostri servizi</h2>
                        <div class="servicio-cont">
                            <div class="servicio-ind">
                                <img src="img/servizio.jpg" alt="">
                                <h3>servizio clienti</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                            </div>
                            <div class="servicio-ind">
                                <img src="img/corriere.jpg" alt="">
                                <h3>spedizioni gratuite</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                            </div>
                            <div class="servicio-ind">
                                <img src="img/certificato.jpg" alt="">
                                <h3>prodotti certificati</h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore, qui?</p>
                            </div>
                        </div>
                    </div>
                </section>
            -->

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