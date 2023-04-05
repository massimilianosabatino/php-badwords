<?php

//Get badwords
$censor=$_GET["censor"];

//Get text to check
$text=$_GET["textToValidate"];

//Substitute badwords
//$textValid=str_replace($censor, "***", $text);
//Substitute badwords but case insensitive
$textValid=str_ireplace($censor, "***", $text);

//Remove space from text
$textNoSpace=str_replace(" ", "", $text);

//Test var_Dump
$textPart=explode(' ', $text);
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
    <header><p>quello sopra è la visualizzazione in forma strutturata di una espressione</p>
    </header>
    <main>
        <h2>Il testo da te inserito è:</h2>
        <p><?php echo $text; ?></p>
        <h3>Il testo è lungo:</h3>
        <p><?php echo strlen($text); ?> caratteri (compresi gli spazi)</p>
        <p><?php echo strlen($textNoSpace); ?> caratteri (senza spazi)</p>
        <p>Nel testo ci sono <?php echo str_word_count($text, 0) ?> parole</p>

        <br>

        <h2>Il testo opportunamente modificato è:</h2>
        <p><?php echo $textValid; ?></p>
        <h3>Il testo è lungo:</h3>
        <p><?php echo strlen($textValid); ?> caratteri (compresi gli spazi)</p>
        <p>La parola censurata è presente: <?php echo substr_count($textValid, '***'); ?> volte</p>
        <p>Nel testo ci sono <?php echo str_word_count($textValid, 0) ?> parole valide</p>
    </main>
</body>
</html>