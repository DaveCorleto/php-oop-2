<?php

    $cuccia = new Product ("Cuccia Modulare per Border Collie", "179 euro", "accessorio per cani", "Color Legno", '/cuccia-image.jpg', $cane);
    $scatoletta = new Product ("Friskies al Tonno", "4 euro", "cibo per gatti", null, '/scatoletta-image.jpg', $gatto );
    $fieno = new Product ("Fieno per conigli", "99 cent", "cibo per conigli", null, '/fieno-immagine.jpg', $coniglio);
    $tiragraffi = new Product ("Tiragraffi per gatto", "14 euro", "accessorio, gioco per gatto", "blu", '/tiragraffi-image.jpg', $gatto);

    $gatto = new Categories ("gatto", "icona-gatto");
    $coniglio = new Categories ("coniglio", "icona-coniglio");
    $cane = new Categories ("cane", "icona-cane");

    $articoli = [$cuccia, $scatoletta, $fieno, $tiragraffi];

?>