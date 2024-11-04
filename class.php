<?php 

class Car{
    public $color;
    public $model;
    public $make;
    public $year;

    public function __construct($color, $model, $make, $year){
        $this->color = $color;
        $this->model = $model;
        $this->make = $make;
        $this->year = $year;
    }
    public function message(){
        return 'My car is a ' . $this->year . '' . $this->color . ' ' . $this->model . ' '. $this->make . '!';
    }
}

$myCar = new Car('white', 'GLC', 'Mercedez Benz', '2018');
var_dump($myCar);


?>