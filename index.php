<?php

  $obj = new main();
  $car = $obj->createCar();
  $car->make = 'ford';
  $car->model = 'Mustang';
  $car->year = '2017';

  print_r($car);

 
  class main {

    public function __construct() {
//      echo 'hello world';
    }

    public function createCar() {
       $car = new car;
       return $car;
    }

    public function __destruct() {
  //    echo 'goodbye world';
    }
  }
  
  class car {
    public $make;
    public $model;
    public $year;
  }

?>
