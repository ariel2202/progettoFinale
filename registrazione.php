<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/cssLoginRegistrazione.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
</head>

<body>
    <form action="rispostaRegistrazionePronta.php" method="post" id="form">
        <div class="form">
            <h1>registrazione</h1>
            <div class="gruppo">
                <input type="text" name="nome" id="nome"><span class="barra"></span>
                <label for="">Nome</label>
            </div>
            <div class="gruppo">
                <input type="text" name="cognome" id="cognome"><span class="barra"></span>
                <label for="">Cognome</label>
            </div>
            <div class="gruppo">
                <input type="text" name="codice" id="codice"><span class="barra"></span>
                <label for="">Codice Fiscale</label>
            </div>
            <div class="gruppo">
                <input type="email" name="email" id="email" ><span class="barra"></span>
                <label for="">email</label>
            </div>
            <div class="gruppo">
                <input type="password" name="pass" id="pass" ><span class="barra"></span>
                <label for="">password</label>
            </div>
            
            <button type="submit" name="btn1">iscriviti</button>
            <p class="warnings" id="warnings"></p>
        </div>
        <div ALIGN="CENTER">

            torna all'<a href="index.php">home</a>
        </div>
    </form>

    <script src="app.js"></script>
</body>

</html>