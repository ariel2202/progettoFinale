
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

        echo "registrazione avvenuta con successo!!";
        include("chiudereConnessione.php");

        
    
    }

?>