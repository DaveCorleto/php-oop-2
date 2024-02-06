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


class Product {
    public $title;
    public $price;
    public $type;
    public $color;


    function __construct ($title, $price, $type, $color) {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setType($type);
        $this->setColor($color);
    }
    
    public function getTitle(){
        return $this -> title;
    }
    public function setTitle($title){
         $this -> title = $title;
    }
    public function getPrice(){
        return $this -> price;
    }
    public function setPrice($price){
         $this -> price = $price;
    }
    public function getType(){
        return $this -> type;
    }
    public function setType($type){
         $this -> type = $type;
    }
    public function getColor(){
        return $this -> color;
    }
    public function setColor($color){
         $this -> color = $color;
    }
 
}

class Categories extends Products {
    public $prodottoper;
}
$cuccia = new Product ("Cuccia Modulare per Border Collie", "179 euro", "accessorio per cani", "Color Legno");


// Prova della funzione Set title 
$cuccia -> setTitle ("Cuccia Modulare per Border Collie");

echo "Prodotto: " . $cuccia->getTitle();
echo "<br>------------------------------<br>";
echo "Prezzo: " . $cuccia->getPrice();
echo "<br>------------------------------<br>";
echo "Tipologia: " . $cuccia->getType();
echo "<br>------------------------------<br>";
echo "Colore: " . $cuccia->getColor();


?>