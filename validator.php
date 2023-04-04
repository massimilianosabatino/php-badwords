<?php

$text=$_GET["textToValidate"];
$textPart=explode(' ', $text);
$textValid=str_replace("banda", "***", $text);
var_dump($textPart);

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result validator</title>
</head>
<body>
    <main>
        <h2>Il testo da te inserito è:</h2>
        <p><?php echo $text; ?></p>
        <h3>Il testo è lungo:</h3>
        <p><?php echo strlen($text); ?> caratteri (compresi gli spazi)</p>


        <h2>Il testo opportunamente modificato è:</h2>
        <p><?php echo $textValid; ?></p>
        <h3>Il testo è lungo:</h3>
        <p><?php echo strlen($textValid); ?> caratteri (compresi gli spazi)</p>

    </main>
</body>
</html>