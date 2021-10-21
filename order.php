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
public function FullPrice(){
    $totalPrice=0;
    foreach ($this->thePizzas as $eachPizza){
        foreach($this->theExtras as $eachExtra){
              $totalPrice+=($eachPizza[3]->getPrice()*$eachPizza[5]->getQty())+ $eachExtra[3]->getPrice();
        }
    }
    return $totalPrice;
}
}
?>