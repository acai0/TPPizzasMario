<?php 
class Order{
    public $id;
    public $theExtras=array(); //corresponds aux ingredients
    public $thePizzas=array();

public function __construct($id){
    $this->id=$id;

}
public function getId(){
    return $this->id;
}
public function getThePizzas(){
    return $this->thePizzas;
}
public function getTheExtras(){
    return $this->theExtras;
}
public function FullPrice(){
    $totalPrice=0;
    foreach ($this->thePizzas as $eachPizza){
        foreach($this->theExtras as $eachExtra){
              $totalPrice+=$eachPizza->getPrice() * $eachPizza->getQty() + $eachExtra->getPrice();
        }
    }
    return $totalPrice;
}
public function removeExtra(){
    $totalPrice=0;
    foreach ($this->thePizzas as $eachPizza){
        foreach($this->theExtras as $eachExtra){
              $totalPrice+=$eachPizza->getPrice() - $eachExtra->getPrice();
        }
    }
    return $totalPrice;
}
}
?>