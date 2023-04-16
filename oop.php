<?php
 class Product{
    public $name;
    public $desc;
    public $price;
    function setdetails($n,$d,$p){
        $this->name=$n;
        $this->desc=$d;
        $this->price=$p;

    }
    function getdetails(){
        return $this->name." ".$this->desc." ".$this->price." ";
    }
    function getPrice() {
        return $this->price;
    }
         } 
class Employee{
    public $name;
    public $phone;
    public $adress;
    public $salary;
     function setdetails($a,$b,$c,$d){
        $this->name=$a;
        $this->phone=$b;
        $this->adress=$c;
        $this->salary=$d;
    
     }
     function getdetails(){
        return $this->name." ".$this->phone." ".$this->adress." ".$this->salary." ";
     }
}

     $prod= new Product();
    $prod->setdetails("phone","iphone",10000);
    echo ($prod->getdetails()."<br>");
    $emp= new Employee();
    $emp->setdetails("Elsa",9845127656,"ktm",10000);
    echo ( $emp->getdetails());

?>
