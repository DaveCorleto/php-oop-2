<?php

class Categories {
    public $name;
    public $icon; 

    
    public function __construct($name, $icon){
        $this->setName($name);
        $this->setIcon($icon);
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
         $this->name = $name;
    }

    public function getIcon(){
        return $this->icon;
    }

    public function setIcon($icon){
         $this->icon = $icon;
    }
}

// Categories 

$gatto = new Categories ("gatto", "icona-gatto");
$coniglio = new Categories ("coniglio", "icona-coniglio");
$cane = new Categories ("cane", "icona-cane");

?>