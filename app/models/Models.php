<?php

namespace app\models;

abstract class Models
{   
    protected $Connection;

    public function __construct(){
        $this->Connection = Connection::connect();
    }

    public function find(){}

    public function all(){}
}