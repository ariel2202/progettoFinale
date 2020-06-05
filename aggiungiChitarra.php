
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




<style>
input[type=text], select {
  width: 40%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 20%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>




</head>
<body>



    <header>
        <nav>
            <a href="index.php">Home</a>
            <a href="profilo.php">Profilo</a>
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
  




    <?php

include("aprireConnessione.php");

    if(isset($_POST['btn1'])){
       
        $codice = $_POST['codice'];
        $modello = $_POST['modello'];
        $marca = $_POST['marca'];
        $anno = $_POST['anno'];
        $prezzo = $_POST['prezzo'];
        $immagine = $_POST['immagine'];

        $tabella = "chitarre";


        $connessione->query("INSERT INTO $tabella(codiceChitarra,modello,marca,anno,prezzo,immagine) values ('$codice','$modello','$marca','$anno','$prezzo','$immagine')");


        echo"<table align='center'>";
               
               

                echo"<div>";

    

                    echo "<tr>";
                    echo "<th>Prodotto</th><th>codice prodotto</th><th>modello</th><th>marca</th><th>anno</th><th>prezzo</th>";
                echo "</tr>";

                echo"<tr>";
                echo "<tr align='center'><td><img src='$immagine' width='200' height='150'></td>";
                echo "<td>". $codice . "</td>";
                echo "<td>". $modello . "</td>";
                
                echo "<td>". $marca . "</td>";
                echo "<td>". $anno . "</td>";
                echo "<td>". $prezzo . "$</td>";
                

                echo"</tr>";
                   

                echo"</table>";


  echo "dati inseriti correttamente!!";
        echo"<br>";
        echo"continua a inserire chitarre cliccando <a href='aggiungiChitarra.php'>qui</a> ";
        echo"<br>";
        echo"<br>";


        include("chiudereConnessione.php");

        
    
    }

?>


    <h3>Inserisci i dati della nuova chitarra</h3>

<div>
  <form action="" method="post">


  <label for="lname">codice   </label>
    <input type="text" id="codice" name="codice" placeholder="codice..">

    <br>
    <label for="fname">modello</label>
    <input type="text" id="modello" name="modello" placeholder="modello..">

    <br>
    <label for="lname">marca  </label>
    <input type="text" id="marca" name="marca" placeholder="marca..">


    <br>
    <label for="lname">anno   </label>
    <input type="text" id="anno" name="anno" placeholder="1960..">

    

    <br>
    <label for="lname">prezzo</label>
    <input type="text" id="prezzo" name="prezzo" placeholder="2000..">

    <br>
    <label for="lname">immagine</label>
    <input type="text" id="immagine" name="immagine" placeholder="url..">

    
  
    <br>
    <input type="submit" value="Submit" name="btn1">
  </form>
</div>




</body>

</html>