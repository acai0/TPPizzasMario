<?php 
class Pizza{
    public $id;
    public $name;
    public $price;
    public $recipe;
    public $qty;
    public function __construct($id, $name, $price, $recipe,$qty){
        $this->id=$id;
        $this->name=$name;
        $this->price=$price;
        $this->recipe=$recipe;
        $this->qty=$qty;
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
    public function getRecipe(){
        return $this->recipe;
    }
    public function getQty(){
        return $this->qty;
    }
}