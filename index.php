<?php
    $paragrafo = 'A te che non hai un posto dove andare nè un luogo al quale tornare, ti concedo un posto a cui appartenere. Il mio nome è Yato! Che tu rimanga legato qui, con questo nome  postumo io ti rendo mio servitore. Con questo nome e la sua forma alternativa io utilizzo la mia vita per fare di te una sacra reliquia. Tu sei Yuki. Come sacra reliquia Setsu. Vieni, Sekki!';
    $censura = $argv[1];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <h3>Testo:</h3>
        <p> <?php echo $paragrafo; ?></p>
        <p> Numero caratteri: <?php echo strlen($paragrafo); ?></p>

        <p> <?php echo str_replace($_GET[ "censura" ], "***", $paragrafo);  ?> </p>
        <p> <?php echo strlen(str_replace($_GET[ "censura" ], "***", $paragrafo)); ?></p>

    </body>
</html>