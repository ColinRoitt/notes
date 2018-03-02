<?php
Class Card{
    private $cardId;
    private $user;
    private $title;
    private $content;
    private $dueDate;
    private $color;

    function __get($name){
        return $this->$name;
    }

    function __set($name, $value){
        $this->$name = $value;
    }

    function setAttributes($title, $content, $dueDate, $color){
        $this->title = $title;
        $this->content = $content;
        $this->dueDate = $dueDate;
        $this->color = $color;
    }

}


?>