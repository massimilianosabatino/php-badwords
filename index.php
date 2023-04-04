<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validator</title>
</head>
<body>
    <header>
        <h1>Validatore per testo da censurare</h1>
    </header>
    <main>
        <h2>Utilizzando il metodo GET</h2>
        <p>Inserisci qui il testo</p>
        <form action="validator.php" method="get">
            <label for="validator">Testo da controllare</label><br>
            <textarea name="textToValidate" id="validator" cols="80" rows="10"></textarea>
            <br><br>
            <label for="censor">Parola da censurare</label>
            <input type="text" name="censor" id="censor">
            <button>Invia</button>
        </form>
        <br>
        <h2>Utilizzando il metodo POST</h2>
        <p>Inserisci qui il testo</p>
        <form action="validator-post.php" method="post">
            <label for="validator">Testo da controllare</label><br>
            <textarea name="textToValidate" id="validator" cols="80" rows="10"></textarea>
            <br><br>
            <label for="censor">Parola da censurare</label>
            <input type="text" name="censor" id="censor">
            <button>Invia</button>
    </main>
</body>
</html>