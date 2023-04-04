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
        <p>Inserisci qui il testo</p>
        <form action="validator.php" method="get">
            <label for="censor">Parola da censurare</label>
            <input type="text" name="censor" id="censor">
            <label for="validator">Testo da controllare</label>
            <textarea name="textToValidate" id="validator" cols="80" rows="10"></textarea>
            <button>Invia</button>
        </form>
    </main>
</body>
</html>