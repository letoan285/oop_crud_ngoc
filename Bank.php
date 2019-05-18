<?php 
class Bank {
    
    public $account = 1000;
    public function withdraw($num) {
        if($num > $this->account) {
            return $this->account - 100;
        } else {
            return $num;
        }
    }
}