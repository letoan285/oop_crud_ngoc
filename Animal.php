<?php 

class Animal {

    // public $name = 'Noname';

    protected $age = 100;
    public static $aaa = 2222;
    public static $name = 'dog 1';

    Private $color = 'Yellow';

    public function getNames() {
        echo 'Noname';
    }

    // private function getParentColor() {
    //     return $this->color;
    // }
    // public function choChungNoTruyCap() {
    //     return $this->getParentColor();
    // }

}