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

        echo "<table align='center'>";
        echo "<tr>";
            echo "<th>dfgdfgdfg</th><th>ciao</th><th>amico</th><th>info</th>";
        echo "</tr>";

        


        echo "<tr>";
        if($result->num_rows > 0) {
            
            while($row = $result->fetch_assoc()) {
              /*  echo "<tr><td><img src='{$row['immagine']}' width='100' height='100'></td>";
                echo "<td>". $row["marca"] . "</td>";
                echo "<td>". $row["modello"] . "</td>";
                
                echo "</tr>";
                */

                echo "<td><img src='{$row['immagine']}' width='140' height='110'></td>";
             
                

                
            }

            echo "</tr>";
            echo "<tr>";
            
            
            echo "<td><input type='submit' name='btn1'></td><td><input type='submit' name='btn1'></td><td><input type='submit' name='btn2'></td><td><input type='submit' name='btn3'></td><td><input type='submit' name='btn4'></td><td><input type='submit' name='btn5'></td><td><input type='submit' name='btn6'></td><td><input type='submit' name='btn7'></td>";



        echo "</tr>";
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