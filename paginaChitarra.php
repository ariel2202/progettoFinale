<?php

session_start();

if(!isset($_SESSION["email"])){
    header("Location:login.php");
}


?>



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


<?php

$chiave;

//session_start();

include("aprireConnessione.php");

                        
        $sql = "SELECT * FROM chitarre ";
        $result = $connessione->query($sql);
     


        while($row = $result->fetch_assoc()){
            //echo"<br>" . $row['codiceChitarra'] . "<br>";
            if(isset($_POST[$row['codiceChitarra']])){
               
                $_SESSION['rrrr']=$_POST[$row['codiceChitarra']];
               
                $_SESSION['chiave']= $row['codiceChitarra'];
         
                echo"<form action='confermaAcquisto.php' method='post' id='form'>";

                echo"<table align='center' class='contenuto-testo'>";
                echo "<h2 class='titolo1'> ".$row['marca'] ." ". $row['modello']."</h2>";
                echo"<br><section align='center'>";
                echo"<section>";
                echo"<img src='{$row['immagine']}' width='700' height='400'";
                echo"</section>";

                echo"<div class='contenitore'>";

                echo"<section class='contenitore su-di-noi'>";
                echo"<h3><span></span>Descrizione</h3>
                <p>".$row['descrizione']."</p>";
                
                echo"</section>";

                echo"</div>";
                    

                    /*
                    echo"<p>
                    <button type='submit' name='btn1' class='acquista'>Acquista qui</button>
                    </p>";
                    */
              //      echo"<p>";
              /*      echo"<input class='acquista' type='submit' name='{$row ['codiceChitarra']}' value='ACQUISTA' id='{$row ['codiceChitarra']}'>";
                    echo"qui ". $row['codiceChitarra'];
                    */
                //    echo"</p>";

                    echo "<tr>";
                    echo "<th>Prodotto</th><th>codice prodotto</th><th>utente</th><th>prezzo</th><th>acquista</th>";
                echo "</tr>";

                echo"<tr>";
                echo "<tr align='center'><td><img src='{$row['immagine']}' width='200' height='150'></td>";
                echo "<td>". $row["codiceChitarra"] . "</td>";
                //echo "<td>". $row["modello"] . "</td>";
                echo "<td>". $_SESSION['email'] . "</td>";
                
                echo "<td>". $row["prezzo"] . "$</td>";
                echo "<td><input class='acquista' type='submit' name='{$row ['codiceChitarra']}' value='ACQUISTA' id='{$row ['codiceChitarra']}'>";

                echo"</tr>";
                   

                echo"</table>";
                echo"</form>";
            }
        }
        
    

 include("chiudereConnessione.php");    

  

?>


</main>


</body>

</html>