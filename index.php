<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

    $frase = 'Ugo è arrabbiato';

    $strlength = strlen($frase);

    echo "<h1>$frase</h1> <p>$strlength</p>";

    $parolaCensurata = $_GET['parolaCensurata'];

    $strlength2 = strlen($parolaCensurata);

?>

    <h1> Stringa originale: <?php echo $frase ?> </h1>
    <h1>Lunghezza stringa originale: <?php echo $strlength ?></h1>

    <h2>Parola censurata<?php echo $parolaCensurata ?></h2>
    <h2>Lunghezza parola censurata<?php echo $strlength2 ?></h2>

    <h3>Stringa modificata<?php echo str_replace($parolaCensurata, '***', $frase) ?></h3>
    <h3>Lunghezza stringa modificata<?php echo strlen(str_replace($parolaCensurata, '***', $frase)) ?></h3>
    
</body>
</html>

