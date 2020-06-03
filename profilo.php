<?php

session_start();

if(!isset($_SESSION["email"])){
    header("Location:login.php");
}


?>


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
            <a href="#servizi">Servizi</a>-->
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



        <form class='contenitore' action="paginaChitarra.php" method="POST">
    
            <?php



        
       // session_start();


       
       if($_SESSION['email'] == 'arielpapy@hotmail.com'){
        header("Location:aggiungiChitarra.php");

    }

        if(isset($_SESSION['email'])){

        


                include("aprireConnessione.php");
        
                                
$sql = "SELECT * FROM acquisti WHERE mailUtente = '{$_SESSION['email']}'";
                $result = $connessione->query($sql);
        
        
                echo "<table class='contenuto-testo'>";
                echo "<tr>";
                    echo "<th>numero ordine</th><th>codice chitarra</th><th>mail utente</th><th>data</th><th>prezzo</th>";
                echo "</tr>";
        
                
        
        
                echo "<tr>";
                if($result->num_rows > 0) {
                    
                    while($row = $result->fetch_assoc()) {
                   
                      
                        echo "<tr align='center'>";
                        echo "<td>". $row["numeroOrdine"] . "</td>";
                        echo "<td>". $row["codChitarra"] . "</td>";
                        echo "<td>". $row["mailUtente"] . "</td>";
                        echo "<td>". $row["data"] . "</td>";
                        echo "<td>". $row["prezzo"] . "</td>";
                     
                        
                        echo "</tr>";
                        
        
                
                    }
        
                    echo "</tr>";
         


                    echo"</table>";

                    
                    
                }
                else{
                    echo "nessun risultato";
                }
        
                    include("chiudereConnessione.php");


            }
        
        
        
            ?>
            
       
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