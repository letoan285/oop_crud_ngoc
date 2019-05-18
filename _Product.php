<?php 

// class Apple extends Product {

// }
// 1. abstract class khong duoc khoi tao doi tuong
// 2. chir co abstract class moi chua abstract method
// 3. abstract la co the co hoac hongn co abstract method
// 4. class bt khi extnd abstract class phai khai bao lai toan bo abstract method
// abstract class Product {
//     private $name = 'apple';
//     public function getName()
//     {
//         return $this->name;
//     }
//     abstract function getPrice();

// }
//abstract class Apple extends Product {}
// class Dog extends Product {
//    public function getPrice(){}
// }

// $app = new Dog();
// echo $app->getName();
// interface Dog {
//     name: string;
//     age: number;
// }

// $dog: Dog = {

// }

// interface 
// 1. chi chua hang, khong chua bien chi chua hang
// 2. khong chua method binh thuong, chi chua abstract method
// 3. class bt implement interface phai khai bao lai toan bo method
// 4. interface co the extends 1 hoac nhieu intereface khac
// 5. class co the implements 1 hoac nhieu interface

// interface Wheel1 {
//     public function getWheel1();
// }
// interface Wheels {
//     public function getWheels();
// }
// interface Wheel {
//     public function getWheel();
// }
// interface Machine extends Wheel, Wheels {
//     public function run();
//     public function fly();
//     public function fillGaz();
//     const name = 'could be constant';
// }

// abstract class Car implements Machine, Wheel1 {
//     // public function run(){}
//     // public function fly(){}
//     // public function fillGaz(){}
// }

// class Motobike extends Car {
//     public function run(){}
//     public function fly(){}
//     public function fillGaz(){}
//     public function getWheel(){}
//     public function getWheels(){}
//     public function getWheel1(){
//         return 'agaegae';
//     }
// }

// $xe = new Motobike();

//  interface AppleInterface {
//     const NAME = 'Apple';
//     public function getName();
//  }

//  class Apple implements AppleInterface {
//     public function getName(){}
//  }
 // DI Dependency Injection 
//  class Animal {
//     public $model;     
//     public function __construct(Apple $n){
//         $this->model = $n;
//      }

//      public function getName(){
//          return $this->model->getName();
//      }
    
//  }

// trait Apple {
//     public $name = 'apple';
// }
// trait Grape {
//     use Apple;
//     public $color = 'green';
// }
// class Banana {
//     use Grape;
//     public $price = 400;
// }
// $b = new Banana();

// echo $b->price;
// echo $b->color;
// echo $b->name;
// $c = new Apple();
// chain 
// Apple(3)->Banana(2)->Grape(5)->Mango(5);->bill;
// function getStr(){
//     return 'gaegae';
// }

// 3khg, Apple, gia 50000dd/kng 
// 2kg Banana, 25000/kg 
// 5 Grape, 55000/kg
// 4 Mango 25000/kg 
// class Bill {
//     public $applePrice = 50000;
//     public $bananaPrice = 25000;
//     public $grapePrice = 55000;
//     public $mangoPrice = 25000;
//     public $bill = 0;

//     public function getApplePrice($kg){
//         $this->bill += 900;
//         // return $this->;
//     }
//     public function getBananaPrice($kg){
//         $this->bill += 8000;
//         return $this;
//     }
//     public function getGrapePrice($kg){
//         $this->bill += $this->grapePrice*$kg;
//         return $this;
//     }
//     public function getMangoPrice($kg){
//         $this->bill += $this->mangoPrice*$kg;
//         return $this;
//     }
// }

// $myBill = ( new Bill() )->getApplePrice(3)->getBananaPrice(2)->getGrapePrice(5)->getMangoPrice(4)->getMangoPrice(9)->getMangoPrice(9)->bill;
// var_dump($myBill);

// type hinting \

// class People {
//     public function __construct($n){
//         $this->name = $n;
//     }
// }
// class Book {
//     public function getPrice(int $price){
//         return $price;
//     }
//     public function getAuthors(People $people){
//         return $people;
// service provider
//     }
// }
// // inflection in php 
// $book = new Book();
// echo $book->getAuthors(4);
// $ngoc = new People('Ngoc');
// echo $ngoc->name;

class Product {
    private $conn;
    private $host = 'localhost';
    private $pass = '';
    private $user = 'root';
    private $dbName = 'db_vu_ngoc';
    private $charset = 'utf8';

    public function __construct(){
        $this->connect();
    }
    public function connect(){
        try {
            $this->conn = new PDO("mysql:host=$this->host; dbname=$this->dbName; charset=$this->charset", $this->user, $this->pass);
            return true;
        } catch(PDOException $e){
            var_dump($e->getMessages());die;
        }
    }
    public function all()
    {
        $this->sql = "SELECT * FROM products";
        $stmt=$this->conn->prepare($this->sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}

$model = new Product();
$products = $model->all();
?>