<?php 

class ingredient{
    public $id;
    public $name;
    public $price;
    public $idPizza;
    
    public function __construct($id, $name, $price, $idPizza){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->idPizza=$idPizza;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->Name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function getIdPizza(){
        return $this->idPizza;
    }
}

