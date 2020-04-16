<?php
    
    include("aprireConnessione.php");

        $email = $_POST["email"];
        $pass = $_POST['pass'];
        $nome = $_POST['nome'];


     //   $query = "SELECT nome FROM  $tabella WHERE email = $email";

        $risultato = mysqli_query($connessione,"SELECT * FROM  $tabella");
        //$risultato = mysqli_query($connessione,"SELECT * FROM  $tabella WHERE email = '$email'");

        

   /*     while($consulta = mysqli_fetch_array($risultato))
        {
             echo $consulta['nome'];
           
        }*/
        $risp=false;
        while($consulta = mysqli_fetch_array($risultato))
        {
           if($consulta['email']== $email && $consulta['pass']== $pass){
                session_start();
                $SESSION["nome"]=$consulta['nome'];

               $risp = true;
           break;
           }
           
           
           
        }
        if($risp){
            echo "sei registrato<br>";
            echo "benvenuto ". $SESSION['nome'];
       }
       else{
           echo "non sei registrato";
       }

        include("chiudereConnessione.php");




?>