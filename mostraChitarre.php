<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    
    <?php

        include("aprireConnessione.php");

                        
        $sql = "SELECT * FROM chitarre ";
        $result = $connessione->query($sql);

        print_r ($result);

        if($result->num_rows > 0) {
            echo "<table>";
            echo "<ul>";
            while($row = $result->fetch_assoc()) {
                echo "<li>".$row["codiceChitarra"] . " ". $row["modello"];
                echo " <img src='{$row['immagine']}' width='150' height='150'>";
                echo "</li>";
                

                
            }
            echo "</ul>";
            echo"</table>";
        }
        else{
            echo "nessun risultato";
        }

            include("chiudereConnessione.php");



    ?>

    </form>
</body>
</html>