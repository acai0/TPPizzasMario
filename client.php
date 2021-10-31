<?php
class Client{
    public $id;
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $idOrder;

    public function __construct($id, $firstName, $lastName, $phoneNumber, $idOrder){
        $this->id=$id;
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->phoneNumber=$phoneNumber;
        $this->idOrder=$idOrder;
    }
    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getPhoneNumber(){
        return $this->phoneNumber;
    }
    public function getIdOrder(){
        return $this->idOrder;
    }
}