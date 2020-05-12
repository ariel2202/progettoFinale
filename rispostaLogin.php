<?php
    
    include("aprireConnessione.php");

        


     //   $query = "SELECT nome FROM  $tabella WHERE email = $email";

        $risultato = mysqli_query($connessione,"SELECT * FROM  $tabella");
        //$risultato = mysqli_query($connessione,"SELECT * FROM  $tabella WHERE email = '$email'");

        //EVITIAMO LE  SQL injection, OVVERO CHE NESSUNO POSSA INSERIRE CODICE SQL NEL NOSTRO PROGRAMMA
        $email = mysqli_real_escape_string($connessione,$_POST["email"]);
        $pass = mysqli_real_escape_string($connessione,$_POST['pass']);
        $nome = mysqli_real_escape_string($connessione,$_POST['nome']);

        

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