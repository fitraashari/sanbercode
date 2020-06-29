<?php 
class Animal{
    protected $name;
    protected $legs=2;
    protected $cold_blooded="false";
    public function __construct($name="Nama")
    {
        $this->name=$name;
        
    }
    public function get_name(){
        return $this->name;
    }
    public function get_legs(){
        return $this->legs;
    }
    public function get_cold_blooded(){
        return $this->cold_blooded;
    }
}
//