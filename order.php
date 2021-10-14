<?php 
class Order{
    public $id;
    public $fullPrice;
    public $extraQty;
    public $idClient;

public function __construct($id, $fullPrice, $extraQty, $idClient){
    $this->id=$id;
    $this->fullPrice=$fullPrice;
    $this->extraQty=$extraQty;
    $this->idClient=$idClient;
}
public function getId(){
    return $this->id;
}
public function getFullPrice(){
    return $this->fullPrice;
}
public function getExtraQty(){
    return $this->extraQty;
}
public function getidClient(){
    return $this->idClient;
}
}
//retirer loadoff
?>