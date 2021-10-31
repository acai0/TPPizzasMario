<?php 

class Ingredient{
    public $id;
    public $name;
    public $price;
    public $inStock;
    public $idPizza;
    
    public function __construct($id, $name, $price, $inStock, $idPizza){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->inStock=$inStock;
        $this->idPizza=$idPizza;
    }

    public function getId(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getPrice(){
        return $this->price;
    }
    public function inStock(){
        return $this->inStock;
    }
    public function getIdPizza(){
        return $this->idPizza;
    }
}

