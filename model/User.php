<?php
Class User{
    private $userId;
    private $userName;
    private $password;

    function __get($name){
        return $this->$name;
    }

    function __set($name, $value){
        $this->$name = $value;
    }
}
?>