<?php

namespace models;

use core\Model;

class AdminModel extends Model{
    public $id, $login, $password;
    protected $tableName = 'admins';
    protected $columns = ['id', 'login', 'password'];

    public function setPassword($password){
        $this->password = md5($password);
    }
}