<?php
class Product{
    public $name;
    public $price;

    public function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }
}

$product1 = new Product('Airpods' , 180);

var_dump($product1) ;

class Client{
    public $name;
    public $age;
    public $clientnumber;

    public function __construct($name, $age, $clientnumber)
    {
        $this->name = $name;
        $this->age = $age;
        $this->clientnumber = $clientnumber;
    }
}

$client1 = new Client('Henk' , 22 , 001);

var_dump($client1);
