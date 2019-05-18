<?php 
require_once "BaseModel.php";
class User extends BaseModel {
    protected $table = 'users';
    public $columns = [
        'username', 
        'email', 
        'password', 
        'avatar', 
        'status'
    ];
}