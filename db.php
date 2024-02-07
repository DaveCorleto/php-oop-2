<?php

    $gatto = new Categories ("gatto", 'img/cat.png');
    $coniglio = new Categories ("coniglio", 'img/rabbit.png');
    $cane = new Categories ("cane", 'img/dog.png');

    $cuccia = new Product ("Cuccia Modulare per Border Collie", "179 euro", "accessorio per cani", "Color Legno", 'img/cuccia-image.jpg', $cane);
    $scatoletta = new Product ("Friskies al Tonno", "4 euro", "cibo per gatti", null, 'img/scatoletta-image.jpg', $gatto );
    $fieno = new Product ("Fieno per conigli", "99 cent", "cibo per conigli", null, 'img/fieno-immagine.jpg', $coniglio);
    $tiragraffi = new Product ("Tiragraffi per gatto", "14 euro", "accessorio, gioco per gatto", "blu", 'img/tiragraffi-image.jpg', $gatto);

    $articoli = [$cuccia, $scatoletta, $fieno, $tiragraffi];

?>