<?
class Stock{
    public $id;
    public $inStock;
    public function __construct($id, $inStock){
        $this->stock=$inStock;
        $this->id=$id;
    }
    public function getStock(){
        return $this->inStock;
    }
    public function getId(){
        return $this->id;
    }
}