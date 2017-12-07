<?php

namespace App;

class Person
{
    public $name;
    public $email;
    public $selected;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
        $this->selected = false;
    }
}