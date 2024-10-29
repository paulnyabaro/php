<?php 

class Car{
    public $color;
    public $model;
    public $make;

    public function __construct($color, $model, $make){
        $this->color = $color;
        $this->model = $model;
        $this->make = $make;
    }
    public function message(){
        return 'My car is ' . $this->color . ' ' . $this->model . ' '. $this->make . '!';
    }
}

$myCar = new Car('white', 'GLE', 'Mercedez Benz');
var_dump($myCar)

?>