<?php
class Frog extends Animal{
    public function __construct($name="Nama")
    {
        parent::__construct($name);
        $this->legs=4;
        
    }
    public function jump(){
        return "Hop Hop";
    }
}