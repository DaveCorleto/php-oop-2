<?php

require_once (__DIR__ . "/categories.php");
require_once (__DIR__ . "/db.php");

class Product {
    public $title;
    public $price;
    public $type;
    public $color;
    public $image;
    public $categories;


    function __construct ($title, $price, $type, $color, $image, $categories) {
        $this->setTitle($title);
        $this->setPrice($price);
        $this->setType($type);
        $this->setColor($color);
        $this->setImage($image);
        $this->setCategories($categories);
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
    public function getCategories(){
        return $this -> categories;
    }
    public function setCategories($categories){
         $this -> categories = $categories;
    }
    public function getImage(){
        return $this -> image;
    }
    public function setImage($image){
         $this -> image = $image;
    }
 
}

?>