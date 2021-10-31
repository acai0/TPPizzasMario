<?php
class Payment{
    public $id;
    public $type;
    public $idOrder;
    public function __construct($id, $type, $idOrder){
        $this->id=$id;
        $this->type=$type;
        $this->idOrder=$idOrder;
    }
    public function getId(){
        return $this->id;
    }
    public function getType(){
        return $this->type;
    }
    public function getIdOrder(){
        return $this->idOrder;
    }


}