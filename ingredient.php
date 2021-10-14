<?php 

class ingredient{
    public $id;
    public $name;
    public $price;
    public $stock;
    public $idPizza;

    public function __construct($id, $name, $price, $stock, $idPizza){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->stock=$stock;
        $this->idPizza=$idPizza;
    }
    public function FullPrice($fullPrice){
        $nb=0;
        foreach ($fullPrice as $eachPrice){
            $nb+=$eachPrice;
        }
        return nb;
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
    public function getStock(){
        return $this->stock;
    }
    public function getidPizza(){
        return $this->idPizza;
    }
}

