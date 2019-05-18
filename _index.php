<?php 
// $name = 'apple';
// scope 1 global


// class Apple {

//     // scope 2
//     public $name = 'apple';


//     public $price = 9000;

//     const NAME = 'ngoc';

//     public function getPrice() {
//         $name = 'apple trong function';
//         return $this->name;
//     }

// }

// instance
// $a = new Apple();
// echo $a->getPrice();
// var_dump($a);
// scope 3;

// 1. tinh da hinh (polymophism)
// 2. key thua (inheritance)
// 3. dong goi (encapsulation)
// 4. abstraction (truu tuong)
// $dog->eat(5);
// $cat->eat(5);
require_once "Animal.php";
require_once "Bank.php";

class Dog extends Animal {
    public static $name = 'dog 2';
    public $height =  999;

    const NAME = 'CON CHo';
    // scope 5: pham vi truy cap lop ke thua
    function __construct(){
        $this->height = $this;
    }

    public function getColor() {
        return new static;
    }


    public static function getName(){
        return static::$name;
    }
    public static function getHeight() 
    {
        // $n = new Dog();
        // $n = new static;
        // $n = new self;
        // $m = static::$aaa;
        return 9000;
        //return $this->height;
    }
    public function getDogName()
    {
        return 1;
    }
}
$dog = new Dog();
var_dump($dog->height->getDogName());
// echo Dog::getHeight();
// // $d = new Dog();
// $dog->getName()->name;
// $dog->name->getName();

// echo $d->getDogName();
// $milu = new Dog();

//var_dump($milu->choChungNoTruyCap());

// class MyAccount extends Bank {
//     public function getAccount(){
//         return $this->account;
//     }
// }


// $thief = new MyAccount();

// echo $thief->getAccount(); resolution oporator