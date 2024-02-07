<!-- Immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche:

- L'e-commerce vende **prodotti** per animali
- I prodotti sono categorizzati, le **categorie** sono `Cani` o `Gatti`
- I prodotti saranno oltre al **cibo**, anche **giochi**, **cucce**, etc

Stampiamo delle card contenenti i dettagli dei **prodotti**, come `immagine`, `titolo`, `prezzo`, `icona della categoria` ed il `tipo di articolo` che si sta visualizzando (prodotto, cibo, gioco, cuccia, ecc).

### [OPTIONAL] BONUS
Il **cliente** potrà sia comprare i prodotti come ospite, senza doversi registrarsi nello store, oppure può iscriversi e creare un **account** per ricevere cosi il 20% di sconto.

Il cliente effettua il pagamento dei prodotti nel **carrello** con la **carta di credito**, che non deve essere scaduta. -->

<!-- classe prodotti -->

<!-- sottoclasse cani gatti  -->




<?php
require_once (__DIR__ . "/categories.php");
require_once (__DIR__ . "/product.php");
require_once (__DIR__ . "/db.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Importo il CSS  -->

    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il mio E-Commerce</title>
</head>
<body>
    <?php
        try {
            // Chiamata al metodo setPrice() dell'oggetto $product
            $scatoletta->setPrice(0);
        } catch (Exception $e) {
            // Gestione dell'eccezione se viene lanciata
            echo 'Eccezione: ' . $e->getMessage();
        }
    ?>
    <ul>
        <?php foreach ($articoli as $articolo) { ?>
        <li>
            <?php echo $articolo->getTitle(); ?>
        </li>
        <li>
            <?php echo $articolo->getPrice(); ?>
        </li>
        <li>
            <?php echo $articolo->getColor(); ?>
        </li>
        <li>
            <img src="<?php echo $articolo -> getImage() ?>"  width="300" />
        </li>
        <li>
        <img src="<?php echo $articolo -> getCategories() -> getIcon() ?>"  width="30" />
        <?php
            echo $articolo -> getCategories() -> getName();
        ?>
        </li>
        <br><br>
        <?php } ?>
    </ul>

</body>
</html>