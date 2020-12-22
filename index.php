<!-- repo: php-badwords
Creare una variabile con un paragrafo di testo.
Recuperare dalla query string un parametro badword che contiene una parola definita dall'utente
Visualizzare a schermo il paragrafo con la relative lunghezza e sostituire la badword passata in GET con tre *. -->

<?php

$paragrafo = 'Un mese e non sentirlo. Lo scorso 9 luglio l\'Italia tagliava un inatteso quanto meritato traguardo, andando a vincere il titolo mondiale in Germania, dopo una finale strappata ai rigori alla Francia .';
$lunghezza_testo = strlen($paragrafo); 
$badword = $_GET['badword']; //paramentro get badword

$censura = str_replace($badword, '***', $paragrafo); 


?>




<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Bad Words</title>
    </head>
    <body>
        <p>
            <?php
            echo $censura;
            ?>
        </p>
        <p>Numero caratteri:
            
            <?php
            echo $lunghezza_testo;
            ?>
        </p>


    </body>
</html>



