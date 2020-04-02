<?php
    
    include("aprireConnessione.php");

        $email = $_POST["email"];
        $pass = $_POST['pass'];


     //   $query = "SELECT nome FROM  $tabella WHERE email = $email";

        $risultato = mysqli_query($connessione,"SELECT * FROM  $tabella WHERE email = '$email'");

        while($consulta = mysqli_fetch_array($risultato))
        {
             echo $consulta['nome'];
            
            
           
        }

        include("chiudereConnessione.php");




?>